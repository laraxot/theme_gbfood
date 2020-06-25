import $ from 'jquery';
import 'select2';                       // globally assign select2 fn to $ element
import 'select2/dist/css/select2.css';  // optional if you have css loader

$(() => {
  $('.select2-enable').select2();
});

// https://pixinvent.com/bootstrap-admin-template/robust/html/ltr/vertical-menu-template/form-selectize.html
// https://sebastiandedeyne.com/code-splitting-with-laravel-mix/
