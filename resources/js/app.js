require('./bootstrap');
window.Vue = require('vue');
window.Vuetify = require('vuetify');
Vue.use(Vuetify);
Vue.config.devtools = true;

//Vue.component('vue-cookie-law', require('./components/CookieLawComponent.vue'));
import Example from './components/ExampleComponent'
import CookieLaw from './components/CookieLawComponent'
//import CookieLaw from 'vue-cookie-law'

const theme_comps_path='./components';

Vue.component('bs-modal', require(theme_comps_path+'/BsModal.vue').default);
Vue.component('bs-iframe-modal', require(theme_comps_path+'/BsIframeModal.vue').default);
Vue.component('rating-one', require(theme_comps_path+'/RatingOne.vue').default);



//const opts = {}

//export default new Vuetify(opts);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    components: { Example,CookieLaw }
});

var pub_res='.';
//require('../../../../resources/js');
//require(pub_res+'/lighbox.js'); //magnificPopup is not a function
//require(pub_res+'/modal_ajax.js');
var piece='/..';

//require(__dirname+piece.repeat(6)+'/Modules/FormX/Resources/views/js/modal_ajax.js');

//require(pub_res+'/modal_ajax.js');  // under developing
require(pub_res+'/btnDeleteX2.js');
require(pub_res+'/flatpickr.js');
require(pub_res+'/typeahead_js.js');
require(pub_res+'/xot.js');
