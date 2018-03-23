
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('@fancyapps/fancybox/dist/jquery.fancybox.min')

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

jQuery(document).ready(function() {
// Smooth scroll to anchor
  $("a.scrollable").click(function (event) {
    event.preventDefault();
    $("html, body").animate({
      scrollTop: $($(this).attr("href")).offset().top - 40
    }, 500);
  });

  
  $(".searchicon").click(function (event) {
    if (!($(this).hasClass('active'))) {
      $(this).addClass('active');
      event.preventDefault();
      $('.searchbox input').show(); //noscript 
      $('.searchbox input').focus();
      }
  });
});

