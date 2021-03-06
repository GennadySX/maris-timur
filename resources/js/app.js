/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

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



Vue.component('profile-index', require('./components/admin/profile/index.vue').default);
Vue.component('profile-edit', require('./components/admin/profile/index.vue').default);


Vue.component('call-index', require('./components/admin/calls/index.vue').default);
Vue.component('call-new', require('./components/admin/calls/index.vue').default);
Vue.component('call-edit', require('./components/admin/calls/index.vue').default);

Vue.component('device-index', require('./components/admin/device/index.vue').default);
Vue.component('device-new', require('./components/admin/device/index.vue').default);
Vue.component('device-edit', require('./components/admin/device/index.vue').default);


Vue.component('receipt-index', require('./components/admin/receipt/index.vue').default);
Vue.component('receipt-new', require('./components/admin/receipt/index.vue').default);
Vue.component('receipt-edit', require('./components/admin/receipt/index.vue').default);


Vue.component('repair-index', require('./components/admin/repairs/index.vue').default);
Vue.component('repair-new', require('./components/admin/repairs/index.vue').default);
Vue.component('repair-edit', require('./components/admin/repairs/index.vue').default);


Vue.component('sum-index', require('./components/admin/sum/index.vue').default);
Vue.component('sum-new', require('./components/admin/sum/index.vue').default);
Vue.component('sum-edit', require('./components/admin/sum/index.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.prototype.$bus = new Vue({})

const app = new Vue({
    el: '#app',
});
