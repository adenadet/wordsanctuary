<template>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Search for Report</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
                <input type="text" class="form-control" placeholder=".col-3">
            </div>
            <div class="col-3">
                <input type="text" class="form-control" placeholder=".col-4">
            </div>
            <div class="col-3">
                <input type="text" class="form-control" placeholder=".col-5">
            </div>
        </div>
    </div>
</div>  
</template>
<script>
export default {
    data(){
        return {
            searchData: new Form({
                start_date:'',
                from_date: '',
                service_id:'', 
                branch_id:'', 
            }),
        }
    },
    methods:{
        findReport(){
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
        getInitials(){
            axios.get('/api/reports/services/initials').then(response =>{
                this.branches = response.data.branches;
                this.services = response.data.services;
                this.$Progress.finish();
                toast.fire({
                    icon: 'success',
                    title: 'Search loaded successfully',
                });
                Fire.$emit('BioDataFill', this.user);
                Fire.$emit('NextOfKinFill', this.nok);
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({
                    icon: 'error',
                    title: 'Profile not loaded successfully',
                })
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
}
</script>
