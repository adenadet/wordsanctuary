<template>
<div>
    <form @submit.prevent="editMode ? updateDepartment() : createDepartment() "> 
    <alert-error :form="DepartmentData"></alert-error> 
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name *" v-model="DepartmentData.name" :class="{'is-invalid' : DepartmentData.errors.has('name') }" required />
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" id="status" name="status" placeholder="Enter Street Desc" v-model="DepartmentData.status" :class="{'is-invalid' : DepartmentData.errors.has('status') }" required>
                        <option value="">---Select Department---</option>
                        <option value="1">Active</option>
                        <option value="0">Pending</option>
                        <option value="2">Deactivated</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea rows="5" class="form-control" id="description" name="description" placeholder="Enter Description " v-model="DepartmentData.description" :class="{'is-invalid' : DepartmentData.errors.has('description') }"></textarea>
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
                DepartmentData: new Form({
                    id:'',
                    name: '',
                    status:'', 
                    description:'', 
                }),
            }
        },
    methods:{
        createDepartment(){
            this.DepartmentData.post('/api/departments').then(response=>{
                Swal.fire({
                    icon: 'success',
                    title: 'Department was successfully added!',
                });
                Fire.$emit('DepartmentRefresh', response)
                this.$Progress.finish();
                this.DepartmentData.reset();
            })
            .catch(()=>{
                this.$Progress.fail();
                Swal.fire({
                    icon: 'error',
                    title: 'Sub Category was not added try again later!',
                });
            });
        },
        updateDepartment(){
            this.DepartmentData.put('/api/departments/'+this.DepartmentData.id)
            .then(response=>{
                //this.Department.reset();
                Fire.$emit('DepartmentRefresh', response)
                Swal.fire({
                    icon: 'success',
                    title: 'Department was successfully updated!',
                });
                this.DepartmentData.reset();
                
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({
                    icon: 'error',
                    title: 'Department was not updated try again later!',
                })
            });
        },
    },
    mounted() {
        Fire.$on('editDepartment', sub_category =>{
            this.DepartmentData.fill(sub_category);
        }); 
        Fire.$on('DepartmentDataFill', department => {
            this.DepartmentData.fill(department);
        });   
    },
    props: {
        'department': Object,
        'editMode': Boolean,
    },
}
</script>