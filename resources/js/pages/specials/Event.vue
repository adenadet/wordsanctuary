<template>
<div class="card card-widget">
    <div class="card-header">
        <div class="user-block">
            <img class="img-circle" src="/dist/img/user1-128x128.jpg" alt="User Image">
            <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
            <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
            <i class="far fa-circle"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <img class="img-fluid pad" :src="event.image" alt="Photo">
        <p>{{event.content | readMore, 50 }}</p>
        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
    </div>
</div>
</template>
<script>
export default {
    data(){
        return {

        }
    },
    methods:{
        getAllInitials(){
            this.$Progress.start();
            axios.get('/api/church/bible')
            .then(response =>{
                this.testaments = response.data.testaments;
                this.books = this.testaments[0].books;
                this.$Progress.finish();
                toast.fire({icon: 'success', title: 'Bible was loaded successfully',});
            })
            .catch(()=>{
                this.$Progress.fail();
                toast.fire({icon: 'error', title: 'Bible was not loaded successfully',})
            });
        },
        getInitialPassage(){
            axios.get('https://bible-api.com/genesis1')
            .then(response => {
                this.verses = response.data.verses;
            })
            .catch(()=>{});
        },
        getPassage(){
            this.$Progress.start();
            if (this.ReaderData.verse != ''){
                this.route = this.route = this.testaments[this.ReaderData.testament].books[this.ReaderData.book].name+' '+this.ReaderData.chapter+':'+this.ReaderData.verse;
            }
            else{
                this.route = this.testaments[this.ReaderData.testament].books[this.ReaderData.book].name+' '+this.ReaderData.chapter;
            }
            axios.get('https://bible-api.com/'+this.route)
            .then(response => {
                this.verses = response.data.verses;
                this.reference = response.data.reference;
                this.translation_id = response.data.translation_id;
                this.$Progress.finish();
            })
            .catch(()=>{
                this.$Progress.fail();
            });
        },
        updateBook(){
            this.books = this.testaments[this.ReaderData.testament].books;
        },
        updateChapter(){
            this.chapters = this.books[this.ReaderData.book].chapters;
        },
    },
    mounted() {
        //this.getAllInitials();
        //this.getInitialPassage();
    },
    props:{
        'event': Object,
    }
}

</script>