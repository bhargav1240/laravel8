require('./bootstrap');

window.Vue = require('vue');

Vue.component('home-component', require('./components/Home.vue').default);

new Vue({
    el:"#app"
});