
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(()=>{
    // new Flatpickr('.flatpickr', {
    //     enableTime: true,
    // });
    $(".flatpickr").flatpickr({
        enableTime: true,
        altInput: true,
        altFormat: "F j, Y h:i K",
        defaultDate: new Date(),
        enableSeconds: true
    });
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//
import Buefy from 'buefy';
import 'buefy/lib/buefy.css';
import FlatpickrV from './components/Flatpickr.vue';
import Select2 from './components/Select2.vue';
Vue.component("flatpickr", FlatpickrV);
Vue.component("select2", Select2);
Vue.use(Buefy, {
    defaultIconPack: 'fa',
});
const app = new Vue({
    el: '.content',
    methods:{
        createSlug(event){
            //console.log(event);
            // var slug = document.getElementById("title").value;
            var slug = event.toLowerCase();
            slug = slug.replace(/ /g, "-");
            document.getElementById("slug").value = slug;
        }
    }
});
