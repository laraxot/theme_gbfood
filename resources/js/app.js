/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//https://github.com/laravel-frontend-presets/laravel-vuetify/blob/master/src/vuetify-stubs/resources/js/app.js

Vue.component('star-rating', require('./components/RatingComponent.vue'));

Vue.component('login-button', require('./components/LoginButtonComponent.vue'));
Vue.component('register-button', require('./components/RegisterButtonComponent.vue'));
Vue.component('remember-password', require('./components/RememberPasswordComponent.vue'));
Vue.component('reset-password', require('./components/ResetPasswordComponent.vue'));
Vue.component('snackbar', require('./components/SnackBarComponent.vue'));
Vue.component('gravatar', require('./components/GravatarComponent.vue'));

window.Vuetify = require('vuetify');
/*
Vue.use(Vuetify, {
  components: {
    VCard,
    VRating,
    VToolbar,
  },
  directives: {
    Ripple,
  },
})
*/
Vue.use(Vuetify);




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('test-component', require('./components/TestComponent.vue').default);
/*
Vue.component('date-picker', {
  template: '<input/>',
  props: [ 'dateFormat' ],
  mounted: function() {
    $(this.$el).datepicker({
      dateFormat: this.dateFormat
    });
  },
  beforeDestroy: function() { 
  }
});
*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//*
const app = new Vue({
    el: '#app',
});
//*/

// ES6 Modules or TypeScript
//import Swal from 'sweetalert2'
//var fs = require(‘fs’);
//var ENV = require(‘node-env-file’)(__dirname + ‘/.env’);
//https://devpark.pl/environments-variables-usage-in-sass-scripts/
//import conf from '../../../../conf.json';
//require(conf.theme_js+'/test.js');
//https://laravel-mix.com/extensions/env-file 
var pub_res='../../../../resources/js';
var pub_res='.';
//require('../../../../resources/js');
require(pub_res+'/lighbox.js'); //magnificPopup is not a function
require(pub_res+'/modal_ajax.js');
require(pub_res+'/btnDeleteX2.js');
require(pub_res+'/flatpickr.js');
require(pub_res+'/typeahead_js.js');
require('./xot.js');