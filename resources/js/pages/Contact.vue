<template>
<section>
    <div id="details" class="basic-1" style="margin-top: 10px;">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1>Speak With Us</h1>
                            <p>Do you have some Questions, prayer points or you simply need counselling. At Word Sanctuary Global, we have various groups aimed at helping you resolve your doubts.</p>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <div class="text-container">
                                <div class="section-title" style="text-align:center; margin-top:0px; padding:0px;"><h2>Message Us</h2></div>
                                <FormContact />
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5">
                            <div class="image-container" style="padding-top:130px;">
                                <img class="img-fluid" src="/nubis/images/img-30.jpg" alt="Minister in Charge">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <h1>Our Installations</h1>
                    <p>Find an installlation close to you</p>
                </div>
                 <div class="col-md-12 mt-3">
                    <div class="card" style="backgroud: #EEF;">
                        <div class="card-header text-muted border-bottom-0"><h3 class="card-title">Head Quarters, Ilorin, Kwara State.</h3></div>
                        <div class="card-body pb-0 bg-light">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Word Sanctuary HQ</b></h2>
                                    <p class="text-muted text-sm"><b>Address: </b> Royal Shekinah Hotel and Grand Suites, Ajase-Ipo road, Offa Garage, Ilorin, Kwara</p>
                                </div>
                                <div class="col-5 text-center">
                                </div>
                                <div class="col-12">
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <button class="btn btn-sm bg-success"><i class="fas fa-comments"></i></button>
                                <button class="btn btn-sm bg-primary" title="See Location"><i class="fas fa-map-marker"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3" v-for="branch in branches" :key="branch.id">
                    <div class="card" style="backgroud: #EEF;">
                        <div class="card-header text-muted border-bottom-0"><h3 class="card-title">{{branch.state.name}}</h3></div>
                        <div class="card-body pb-0 bg-light">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>{{branch.name}}</b></h2>
                                    <p class="text-muted text-sm"><b>Address: </b> {{branch.location}}</p>
                                </div>
                                <div class="col-5 text-center">
                                    <img :src="(branch.minister != null && branch.minister.image != null && typeof (branch.minister.image) != 'undefined') ? '/img/profile/'+branch.minister.image : '/img/profile/default.png'" alt="" class="img-circle img-fluid">
                                </div>
                                <div class="col-12">
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: {{branch.phone}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <button class="btn btn-sm bg-success"><i class="fas fa-comments"></i></button>
                                <button class="btn btn-sm bg-primary" title="See Location"><i class="fas fa-map-marker"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="details" class="basic-1" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
</section>
</template>
<script>
export default {
    data(){
        return {
            branches: {},   
        }
    },
    methods:{
        getAllInitials(){
            this.$Progress.start();
            axios.get('/api/church/branches')
            .then(response =>{
                this.branches = response.data.branches;
                this.$Progress.finish();
            })
            .catch(()=>{this.$Progress.fail();});
        },
    },
    mounted() {
        this.getAllInitials();
    }
}
</script>