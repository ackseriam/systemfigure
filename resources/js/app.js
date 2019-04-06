
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');





const Vuex = require('vuex');
window.store = new Vuex.Store({
	state:{
		status: 0
	},
	mutations:{
		increment(state){
			return state.status++
		}
	}

}) 
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
Vue.component('person-component', require('./components/people/PersonComponent.vue').default);
Vue.component('person-card-component', require('./components/people/PersoncardComponent.vue').default);
Vue.component('guias-form-component', require('./components/guias/GuiasComponent.vue').default);


Vue.component('user-status-component', require('./components/user/UserComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Swal from 'sweetalert2'
window.Swal = Swal;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.Toast = Toast;

const app = new Vue({
    el: '#app'
});
//# sourceMappingURL=popper.js.map