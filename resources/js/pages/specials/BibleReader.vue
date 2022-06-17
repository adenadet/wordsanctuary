<template>
<div class="row">
    <div class="col-sm-12">Add Bible Passage Selector Here</div>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label>Testament</label>
                    <select class="form-control" id="testament" name="testament" v-model="ReaderData.testament" :class="{'is-invalid' : ReaderData.errors.has('testament') }" @blur="updateBook()">
                        <option value="">Select Testament</option>
                        <option v-for="(testament, index) in testaments" :key="testament.id" :value="index">{{testament.short}}</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Book</label>
                    <select class="form-control" id="book" name="book" v-model="ReaderData.book" :class="{'is-invalid' : ReaderData.errors.has('book') }" @blur="updateChapter()">
                        <option value="">Select Book</option>
                        <option v-for="(book,index) in books" :key="book.id" :value="index">{{book.name}}</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Chapter</label>
                    <select type="text" class="form-control" id="chapter" name="chapter" v-model="ReaderData.chapter" :class="{'is-invalid':ReaderData.errors.has('chapter')}">
                        <option value="">Select Chapter</option>
                        <option v-for="i in chapters" :key="i">{{i}}</option>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label>Verse</label>
                    <input type="text" class="form-control" id="phone" name="verse" v-model="ReaderData.verse" :class="{'is-invalid': ReaderData.errors.has('verse') }"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12"><button class="form-control btn btn-sm btn-success" @click="getPassage()">Read </button></div>
        </div>    
        <div class="card bg-light mt-5">
            <!--<div class="card-header text-muted border-bottom-0">{{this.testaments != null ? this.testaments[this.ReaderData.testament].short: ''}} {{this.testaments[this.ReaderData.testament].books[this.ReaderData.book].name}} {{this.ReaderData.chapter}} {{this.ReaderData.verse != '' ? ':'+this.ReaderData.verse: ''}}</div>-->
            <div class="card-body pt-0" style="max-height: 300px; overflow:scroll">
                <div class="row">
                    <div class="col-12" v-for="(verse,index) in verses" :key="index">
                        <h2 class="lead"><b>{{verse.verse}}</b></h2>
                        <p class="text-muted text-sm">{{verse.text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    data(){
        return {
            books: [],
            chapters: 50,
            ReaderData:  new Form({
                testament: 0,
                book: 0,
                chapter: 1,
                verse: '',
            }),
            route : "",
            testaments:[],
            verses: [], 
            reference:'',
            translation_id: '',
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
        this.getAllInitials();
        this.getInitialPassage();
    }
}
</script>