
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 *
*/

require('./bootstrap');
require('./main');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('favourite-component', require('./components/FavouriteComponent.vue').default);
Vue.component('v-slick-top', require('./components/SlickTopComponent.vue').default);
Vue.component('v-slick1', require('./components/SlickComponent.vue').default);
Vue.component('v-slick', require('./components/SlickVideoComponent.vue').default);
Vue.component('recent-component', require('./components/RecentJobComponent.vue').default);
Vue.component('e-create-step1-job-component', require('./components/EmpCreateStep1JobComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
