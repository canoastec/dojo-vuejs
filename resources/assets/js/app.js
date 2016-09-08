require('./bootstrap');

var Vue = require('vue');
var Resource = require('vue-resource');

Vue.use(Resource);

Vue.component('posts', require('./components/posts.vue'));
Vue.component('counter', require('./components/counter.vue'));

const app = new Vue({
    el: 'body'
});
