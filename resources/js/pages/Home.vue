<template>
<section>
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large" style="color:#FFF;">Experience Worship in a new dimension</h1>
                        <p class="p-large"  style="color:#FFF;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim, neque ut ultrices sollicitudin</p>
                        <a class="btn-solid-lg" href="#services">Offered services</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <!--<img class="img-fluid" src="nubis/images/header-image.png" alt="alternative"> -->
                    </div>
                </div>
            </div> 
        </div>
    </header>
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
                        <router-link class="btn-solid-reg" to="/pages/training">Learn More</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <h1>MINISTRATIONS</h1>
                <div class="col-lg-7 col-xl-7">
                    <h3>Livestream</h3>
                    <div style="overflow:hidden;">
                        <youtube video-id="moCRR-IYY0g" ref="youtube" ></youtube>
                    </div>
                    <a class="btn-outline-reg" href="#">Join</a>
                </div>
                <div class="col-lg-5 col-xl-5">
                    <div class="row">
                        <h3>Saved Ministrations</h3>
                        <div class="col-lg-6">
                            <div class="image-container"><img class="img-fluid" src="/nubis/images/details-2.png" alt="alternative"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-container"><img class="img-fluid" src="/nubis/images/details-2.png" alt="alternative"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-container"><img class="img-fluid" src="/nubis/images/details-2.png" alt="alternative"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-container"><img class="img-fluid" src="/nubis/images/details-2.png" alt="alternative"></div>
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
            categories:[],
            certificate_types:[],
            course:{},
            departments: [],
            editMode: false,
            exam_types: [],
            form: new Form({}),
            lessons: {},
            sub_categories:[],
            tutors: [],
            users:[],   
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
