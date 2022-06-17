<template>
<div>
    <form @submit.prevent="editMode ? updateCategory() : createCategory() "> 
    <alert-error :form="ContactData"></alert-error> 
        <div class="row">
            <!-- Get Address -->
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Message Type</label>
                    <select class="form-control" id="message_type" name="message_type" v-model="ContactData.message_type" :class="{'is-invalid' : ContactData.errors.has('message_type') }" required>
                        <option value="">---Select Category---</option>
                        <option value="1">Prayer Request</option>
                        <option value="2">Counselling Request</option>
                        <option value="3">Enquiries</option>
                        <option value="4">Others</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name *" v-model="ContactData.first_name" :class="{'is-invalid' : ContactData.errors.has('first_name') }" required />
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name *" v-model="ContactData.last_name" :class="{'is-invalid' : ContactData.errors.has('last_name') }" required />
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number *" v-model="ContactData.phone" :class="{'is-invalid' : ContactData.errors.has('phone') }" required />
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address *" v-model="ContactData.email" :class="{'is-invalid' : ContactData.errors.has('email') }" required />
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Message</label>
                    <textarea rows="5" class="form-control" id="description" name="description" placeholder="Enter Message " v-model="ContactData.description" :class="{'is-invalid' : ContactData.errors.has('description') }"></textarea>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <input v-show="!editMode" type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                <input v-show="editMode" type="submit" name="submit" class="submit btn btn-success" value="Update" />
            </div>
        </div>
    </form>
</div>
</template>
<script>
export default {
    data(){
            return {
                ContactData: new Form({
                    id:'',
                    message_type: '',
                    first_name: '', 
                    last_name: '', 
                    email:'', 
                    phone:'', 
                    description:'', 
                }),
            }
        },
    methods:{
        createCategory(){
            this.ContactData.post('/api/church/message').then(response=>{
                Swal.fire({icon: 'success', title: 'Message was successfully sent!',});
                this.$Progress.finish();
                this.ContactData.reset();
            })
            .catch(()=>{
                this.$Progress.fail();
                Swal.fire({icon: 'error', title: 'Category was not added try again later!',});
            });
        },
        updateCategory(){
            this.ContactData.put('/api/lms/categories/'+this.ContactData.id)
            .then(response=>{
                //this.Category.reset();
                Fire.$emit('CatRefresh', response)
                Swal.fire({
                    icon: 'success',
                    title: 'Category was successfully updated!',
                });
                this.$Progress.finish();
                this.ContactData.reset();
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({
                    icon: 'error',
                    title: 'Category was not updated try again later!',
                })
            });
        },
    },
    mounted() {
        Fire.$on('editCategory', category =>{
            this.ContactData.fill(category);
            console.log(this.editMode)
        });    
    },
    props: {
        'category': Object,
        'editMode': Boolean,
    },
}
</script>