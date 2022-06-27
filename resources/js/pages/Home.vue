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
            <div class="row" v-if="(videos != null) && (videos[0]  != null)  ">
                <h1>MINISTRATIONS</h1>
                <div class="col-lg-7 col-xl-7">
                    <h3>Livestream</h3>
                    <div style="overflow:hidden;">
                        <youtube :video-id="videos[0].id.videoId" ref="youtube"></youtube>
                    </div>
                    <a class="btn-outline-reg" :href="'/pages/media/watch/'+videos[0].id.videoId" target="_blank">Join</a>
                </div>
                <div class="col-lg-5 col-xl-5">
                    <div class="row">
                        <h3>Saved Ministrations</h3>
                        <div class="col-lg-6">
                            <div class="image-container">
                                <router-link :to="'/pages/media/watch/'+videos[1].id.videoId">
                                <img class="img-fluid" :src="videos[1].snippet.thumbnails.high.url" :title="videos[1].snippet.title" :alt="videos[1].snippet.title" />
                                </router-link>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-container">
                                <router-link :to="'/pages/media/watch/'+videos[2].id.videoId">
                                <img class="img-fluid" :src="videos[2].snippet.thumbnails.high.url" :title="videos[2].snippet.title" :alt="videos[2].snippet.title" />
                                </router-link>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <div class="image-container">
                                <router-link :to="'/pages/media/watch/'+videos[3].id.videoId">
                                <img class="img-fluid" :src="videos[3].snippet.thumbnails.high.url" :title="videos[3].snippet.title" :alt="videos[3].snippet.title" />
                                </router-link>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <div class="image-container">
                                <router-link :to="'/pages/media/watch/'+videos[4].id.videoId">
                                <img class="img-fluid" :src="videos[4].snippet.thumbnails.high.url" :title="videos[4].snippet.title" :alt="videos[4].snippet.title" />
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <h1>EVENTS</h1>
                {{events.data}}
                <div class="col-12">
                    <h3>Upcoming Events</h3>
                    <vue-horizontal-list :items="items" :options="options">
                        <template v-slot:nav-prev>
                        <div>👈</div>
                        </template>

                        <template v-slot:nav-next>
                        <div>👉</div>
                        </template>

                        <template v-slot:default="{item}">
<div class="card card-widget">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle" :src="item.author != null ? '/dist/img/user1-128x128.jpg' : ''" alt="User Image">
            <span class="username"><a href="#">{{item.author != null ? item.author.first_name+' '+item.author.last_name : 'UNknown User'}}</a></span>
            <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>
    </div>
    <div class="card-body">
        <img v-if ="item.image != null" class="img-fluid pad" :src="'/img/events/'+item.image" :alt="item.title">
        <p>{{item.content}}</p>
    </div>
</div>
                        </template>
                    </vue-horizontal-list>
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
            events: {},
            options: {
                responsive: [
                    { end: 576, size: 1 },
                    { start: 576, end: 768, size: 2 },
                    { start: 768, end: 992, size: 3 },
                    { size: 4 },
                ],
                list: {windowed: 1200, padding: 24,},
                position: {start: 2,},
                autoplay: { play: true, repeat: true, speed: 2500 },
            },
            items: [],
            videos: {},
            channelID: 'UC3PXrUTffkEAyFLvfzlrliw',
            maxResult: 5,
            api_key: 'AIzaSyDgLOsMSzF83g5wF9sgtCoJxpnUImvt3Bk',  
        }
    },
    methods:{
        getAllEvents(){
            axios.get('/api/church/events')
            .then(response =>{
                this.events = response.data.events;
                this.items = this.events.data;
            })
            .catch(()=>{});
        },
        getAllInitials(){
            this.$Progress.start();
            axios.get('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='+this.channelID+'&maxResults='+this.maxResult+'&key='+this.api_key)
            .then(response =>{
                this.videos = response.data.items;
                toast.fire({icon: 'success', title: 'Home was loaded successfully',});
                this.$Progress.finish();
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({icon: 'error', title: 'Home was not loaded successfully',})
            });
        },
    },
    mounted() {
        this.getAllEvents();
        this.getAllInitials();
    }
}
</script>
