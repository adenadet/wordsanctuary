<template>
<section>
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4">
                    <div class="image-container" style="padding-top:130px;">
                        <img class="img-fluid" src="/nubis/images/img-30.jpg" alt="alternative">
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="text-container">
                        <div class="section-title" style="text-align:right; margin-top:0px; padding:0px;"><h2>TRAININGS</h2></div>
                        <p>One of the most important part of productivity is training , the higher your training the more productive you are expected to become, the more productive you become I'm the gospel of John 15:7 the bible says the branch that beats fruit is pruned so it can bear more fruits.</p>
                        <p>It is easy to destroy an organization, simply put an untrained man there!</p>
                        <p>One of the greatest limitations of the acts and doings of our fathers in the bible is in their lack of training or orientation! The deacons were just appointed, only 1 gave us a reasonable report, the apostles cast lot to pick the man to replace Judas Iscariot, and that was the end of his story!</p>
                        <p>If we want to achieve the results our fathers achieved then we do what they did; if we want to achieve a better result then we must do beyond and better then they did!</p>
                        <p>Word sanctuary lays a huge amount of emphasis on trainings hence you cannot become without training</p>
                        <p>You cannot rise in leadership without trainings...and we have been called to be kings and priests to God Rev 1:5-6</p>
                        <p>In word sanctuary we have the following trainings: 
                            <ul>
                                <li>Foundation training</li>
                                <li>Executive assistant training</li>
                                <li>Assistant HOD training</li>
                                <li>HOD training</li>
                                <li>Minister's training</li>
                                <li>Pastor's training </li>
                            </ul>
                        </p>
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
            training: {},   
        }
    },
    methods:{
        getAllInitials(){
            this.$Progress.start();
            /* axios.get('/api/lms/courses/'+this.$route.params.id)
            .then(response =>{
                this.courseReload(response);
                this.$Progress.finish();
                toast.fire({icon: 'success', title: 'Course was loaded successfully',});
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({icon: 'error', title: 'Course was not loaded successfully',})
            }); */
        },
    },
    mounted() {
        this.getAllInitials();
    }
}
</script>
