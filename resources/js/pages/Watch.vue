<template>
<section>
    <div id="details" class="basic-1" style="margin-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-7">
                    <h1>Watch Ministration</h1>
                    <youtube :video-id="videoId" ref="youtube"></youtube>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-5 mt-5">
                    <div class="card card-success">
                        <div class="card-header p-0 pt-1">
                            <h3 class="card-title">Helpers</h3>
                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">Bible</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-two-profile-tab" data-toggle="pill" href="#custom-tabs-two-profile" role="tab" aria-controls="custom-tabs-two-profile" aria-selected="false">Notes</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                    <BibleReader></BibleReader>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-two-profile" role="tabpanel" aria-labelledby="custom-tabs-two-profile-tab">
                                    <FormNotes></FormNotes>
                                </div>
                            </div>
                        </div>
                    </div>
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
            videoId: '',   
        }
    },
    methods:{
        getAllInitials(){
            this.$Progress.start();
            this.videoId = this.$route.params.id;
            this.$Progress.finish();
            /*axios.get('/api/lms/courses/'+this.$route.params.id)
            .then(response =>{
                this.courseReload(response);
                this.$Progress.finish();
                toast.fire({icon: 'success', title: 'Course was loaded successfully',});
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({icon: 'error', title: 'Course was not loaded successfully',})
            });*/
        },
    },
    mounted() {
        this.getAllInitials();
    }
}
</script>