<template>
<div class="row clearfix">
    <div class="modal fade" id="departmentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" v-show="editMode">Edit Department: {{department.name}}</h4>
                    <h4 class="modal-title" v-show="!editMode">New Department</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <DepartmentForm :department="department" :editMode="editMode" />
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Departments</h3>
                <div class="card-tools"><button type="button" class="btn btn-sm btn-primary" @click="addDepartment">Add New</button></div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table m-b-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>HOD</th>
                                <th>Number of Members</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="department in departments.data" :key="department.id">
                                <td>{{department.name}}</td>
                                <td>{{department.name}}</td>
                                <td>{{department.name}}</td>
                                <td :title="department.description">{{department.description | readMore(25, '...')}}</td>
                                <td>
                                    <div class="btn-group">
                                        <router-link :to="'/departments/'+department.id"><button class="btn btn-sm btn-success"><i class="fa fa-eye"></i></button></router-link>
                                        <button class="btn btn-sm btn-primary" @click="editDepartment(department)"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger" @click="deleteDepartment(department.id)"><i class="fa fa-trash"></i></button>
                                    </div>          
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <pagination :data="departments" @pagination-change-page="getDepartments">
                    <span slot="prev-nav">&lt; Previous </span>
                    <span slot="next-nav">Next &gt;</span>
                </pagination>
            </div>
        </div>
    </div>
</div>

</template>

<script>
export default {
    data(){
        return {
            departments:{},
            department:{},
            editMode: false,
        }
    },
    methods:{
        addDepartment(){
            this.department = {},
            this.editMode = false,
            Fire.$emit('DepartmentDataFill', {});
            $('#departmentModal').modal('show');
        },
        deleteDepartment(id){},
        departmentRefresh(response){
            this.departments = response.data.departments;
        },
        editDepartment(department){
            this.department = department,
            this.editMode = true,
            Fire.$emit('DepartmentDataFill', department);
            $('#departmentModal').modal('show');
        },
        getAllInitials(){
            this.$Progress.start();
            axios.get('/api/departments').then(response =>{
                this.departmentRefresh(response);
                this.$Progress.finish();
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({
                    icon: 'error',
                    title: 'Department was not loaded successfully',
                })
            });
        },
        getDepartments(page=1){
            axios.get('/api/departments?page='+page)
            .then(response=>{
                this.departmentRefresh(response);   
            });
        },
        refresh(response){
            $('#departmentModal').modal('hide');
            this.departmentRefresh(response);
        },
    },
    mounted() {
        this.getAllInitials();   
        Fire.$on('editRepayment', repayment =>{
            this.editRepayment(repayment);
        });  
        Fire.$on('DepartmentRefresh', response =>{
            this.refresh(response);
        }); 
    },
}
</script>
