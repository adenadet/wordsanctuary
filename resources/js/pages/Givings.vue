<template>
<section>
    <div id="details" class="basic-1 mt-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <form @submit.prevent="makePayment">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Givings</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giving Type *</label>
                                <select class="form-control" name="giving_type_id" id="giving_type_id" v-model="givingForm.giving_type_id" required>
                                    <option value=0>--Select Type of Giving--</option>
                                    <option v-for="giving in giving_types" :key="giving.id" :value="giving.id">{{giving.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Installation </label>
                                <select class="form-control" name="branch_id" id="branch_id" v-model="givingForm.branch_id">
                                    <option value=0>--Select Installation--</option>
                                    <option v-for="branch in branches" :key="branch.id" :value="branch.id">{{branch.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Member ID/ Email</label>
                                <input type="text" class="form-control" placeholder="Member ID"  name="member_id" id="member_id" v-model="givingForm.member_id">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Amount</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&#x20A6;</span>
                                    </div>
                                    <input type="text" class="form-control"  name="amount" id="amount" v-model="givingForm.amount" min=100 required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" v-model="givingForm.terms">
                                <label class="form-check-label" for="exampleCheck1">I know that Flutterwave would make other charges for the transfer</label>
                            </div>    
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" :class="givingForm.terms == true ? '' : 'disabled'" >Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
</template>
<script>
export default {
    data(){
        return {
            bracnhes: {},
            giving_types: {},  
            givingForm: new Form({
                'giving_type_id': 0,
                'amount' : 0,
                'member_id': '',
                'branch_id': 0,
                'terms': true,
            }),
        }
    },
    methods:{
        getAllInitials(){
            this.$Progress.start();
            axios.get('/api/church/givings')
            .then(response =>{
                this.branches = response.data.branches;
                this.giving_types = response.data.giving_types;
                this.$Progress.finish(); 
                
            })
            .catch(()=>{ this.$Progress.fail();});
        },
        makePayment() {
            
            this.$launchFlutterwave({
                tx_ref: Date.now(),
                amount: this.givingForm.amount,
                currency: 'NGN',
                payment_options: 'card,mobilemoney,ussd',
                customer: {
                    email: 'user@gmail.com',
                    phonenumber: '08102909304',
                    name: 'yemi desola'
                },
                callback: function(data) {
                // specified callback function
                    console.log(data)
                },
                customizations: {
                    title: 'Word Sanctuary Global Church',
                    description: 'Donations to the Church',
                    logo: 'https://assets.piedpiper.com/logo.png'
                }
            })
        }
    },
    mounted() {
        this.getAllInitials();
    }
}
</script>

