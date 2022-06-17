<template>
<div class="card">
    <div class="body">
        <form @submit.prevent="editMode ? updateNote() : (loggedIn ? createNote() : logNote())"  enctype="multipart/form-data">
            <alert-error :form="noteData"></alert-error> 
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Topic</label>
                        <input type="text" name="topic" id="topic" v-model="noteData.topic" />
                    </div>
                </div>
                <div class="col-md-12">
                    <wysiwyg v-model="noteData.details" @change="test()" />
                </div>
                <div class="col-md-4 col-sm-12">
                    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                </div>
            </div>
        </form>
    </div>
</div>
</template>
<script>
export default {
    data(){
        return {
            editMode: false,
            loggedIn: false,
            noteData: new Form({
                id:'',
                topic: '',
                details:'', 
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
