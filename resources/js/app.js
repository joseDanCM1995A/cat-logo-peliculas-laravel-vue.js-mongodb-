require('./bootstrap');

window.Vue = require('vue');

Vue.component('pie-component', require('./components/pieComponent.vue').default);


const app = new Vue({
    el: '#app',
});