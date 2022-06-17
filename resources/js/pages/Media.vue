<template>
<section>
<div id="details" class="basic-1" style="margin-top: 10px;">
    <div class="container">
        <div class="row">
            <h1>Ministrations </h1>
            <div class="col-md-3 mt-3" v-for="video in videos" :key="video.id.videoId">
                <div class="card">
                    <div class="card-header">{{video.snippet.title}}</div>
                    <img class="img-fluid" :src="video.snippet.thumbnails.high.url" :title="video.snippet.title" :alt="video.snippet.title" />
                    <div class="card-footer"><router-link :to="'/pages/media/watch/'+video.id.videoId"><button class="btn btn-sm btn-danger"><i class="fab fa-youtube"></i></button></router-link></div>
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
            videos: {},
            channelID: 'UC3PXrUTffkEAyFLvfzlrliw',
            maxResult: 12,
            api_key: 'AIzaSyDgLOsMSzF83g5wF9sgtCoJxpnUImvt3Bk',   
        }
    },
    methods:{
        getAllInitials(){
            this.$Progress.start();
            axios.get('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='+this.channelID+'&maxResults='+this.maxResult+'&key='+this.api_key)
            .then(response =>{
                this.videos = response.data.items;
                this.$Progress.finish();
                toast.fire({icon: 'success', title: 'Course was loaded successfully',});
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({icon: 'error', title: 'Course was not loaded successfully',})
            });
        },
    },
    mounted() {
        this.getAllInitials();
    }
}
</script>
