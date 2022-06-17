require('./bootstrap');

window.Vue = require('vue');

//Import Document Reader 
import VueDocPreview from 'vue-doc-preview';
Vue.component(VueDocPreview);

//Import PDF Reader
import pdf from 'vue-pdf';
Vue.component(pdf);

//Import PDF Reader
import VuePdfReader from 'vue-pdf-reader';
Vue.use(VuePdfReader);

//Import Progress Bar
import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar, {color: 'rgb(255, 255, 19)', failedColor: 'red',height: '5px',});

//Import Scroll Bar
import vueCustomScrollbar from 'vue-custom-scrollbar';
import "vue-custom-scrollbar/dist/vueScrollbar.css";
Vue.use(vueCustomScrollbar);

//Import MultiStepform for Exam
import VueStepWizard from 'vue-step-wizard';
Vue.use(VueStepWizard);

//Import Sweet Alert
import Swal from 'sweetalert2'
window.Swal = Swal;

const toast = Swal.mixin({
    toast: true, position: 'top-end', showConfirmButton: false, timer: 5000, timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });

window.toast = toast;
//Import Moment for DateTime functions
import moment from 'moment';

//Import Video Player
import VueVideoPlayer from 'vue-video-player';
import 'video.js/dist/video-js.css'
import 'vue-video-player/src/custom-theme.css'

Vue.use(VueVideoPlayer, /* {
    options: global default options,
    events: global videojs events} */
    );

//Import VueRouter for SPA Routing
import VueRouter from 'vue-router';
Vue.use(VueRouter);

//Import Simple Pagination
Vue.component('pagination', require('laravel-vue-pagination'));

//Import Vform for forms and Errors
import {Form, HasError, AlertError} from 'vform';
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
window.Form = Form;

//import objectToFormData from './objectToFormData'
//window.objectToFormData = objectToFormData;
//const objectToFormData = window.objectToFormData

//Import Chart and ChartKick for Charts
import VueChartkick from 'vue-chartkick';
import 'chartkick/chart.js';
Vue.use(VueChartkick);

//Import Emit for all components
window.Fire = new Vue();

//Import Flutterwave for all components
import Flutterwave from 'vue-flutterwave'
Vue.use(Flutterwave, { publicKey: 'FLWPUBK-81fc7da0bf14b563d2dc2c36d4817132-X' })
//Import Multiselect Option
import Multiselect from 'vue-multiselect'
Vue.component('multiselect', Multiselect)

//Import WYSIWYG
import wysiwyg from "vue-wysiwyg";
Vue.use(wysiwyg, {});

//Import Youtube Player
import VueYoutube from 'vue-youtube'
Vue.use(VueYoutube)

//Special Created Filters
Vue.filter('currency', function(value) {
    if (isNaN(value)){ return '0.00';}
    let val = (value/1).toFixed(2).replace(',', '.')
    return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    });

Vue.filter('ExcelDate', function(text){
    return moment(text).format('MMMM Do, YYYY');
    });

Vue.filter('firstUp', function(text){
        return text.charAt(0).toUpperCase() + text.slice(1).toLowerCase(); 
        });

Vue.filter('readMore', function (text, length, suffix) {
    if (text == null){return text;}
    else if (text.length <= length){return text;}
    else{return text.substring(0, length) + suffix;}
});        

Vue.filter('shortDate', function(text){
    return moment(text).format('MMM Do, YY');
    });

import PageContact      from    './pages/Contact.vue';
import PageGivings      from    './pages/Givings.vue';
import PageHome         from    './pages/Home.vue';
import PageMedia        from    './pages/Media.vue';
import PageMediaWatch   from    './pages/Watch.vue';
import PageTraining     from    './pages/Training.vue';

Vue.component ('PageContact',      PageContact);
Vue.component ('PageGivings',      PageGivings);
Vue.component ('PageHome',         PageHome);
Vue.component ('PageMedia',        PageMedia);
Vue.component ('PageMediaWatch',   PageMediaWatch);
Vue.component ('PageTraining',     PageTraining);

    import BibleReader from './pages/specials/BibleReader.vue';
    import FormContact from './pages/forms/Contact.vue';    
import Vue from 'vue';
    Vue.component('BibleReader', BibleReader);
    Vue.component('FormContact', FormContact);
//Users Components

let routes = [
    {path: '/',                             component: PageHome},
    {path: '/pages/contact',                component: PageContact},
    {path: '/pages/givings',                component: PageGivings},
    {path: '/pages/home',                   component: PageHome},
    {path: '/pages/media',                  component: PageMedia},
    {path: '/pages/media/watch/:id',        component: PageMediaWatch},
    {path: '/pages/training',               component: PageTraining},
    //{path: '/home',           component: Dashboard},
]

const router = new VueRouter({
    mode: 'history',
    routes
})

const app = new Vue({
    el: '#corner',
    router,
    data:{search: '',},
    methods:{searchIt: _.debounce(()=>{Fire.$emit('searchInstance');}, 1000)},

});
