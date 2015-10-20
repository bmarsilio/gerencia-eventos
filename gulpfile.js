var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

 mix.styles([
  'bootstrap.min.css',
  'jquery.dataTables.min.css',
  'sweetalert2.css',
  'animation.css'
 ], 'public/css/all.css');

 mix.styles([
  'layout-login.css'
 ], 'public/css/login.css');

 mix.scripts([
  'html5shiv.min.js',
  'respond.min.js',
  'jquery.min.js',
  'vue.min.js',
  'bootstrap.js',
  'jquery.dataTables.min.js',
  'jquery.mask.js',
  'sweetalert2.min.js',
  'agendamento.js'
 ], 'public/js/all.js');

 mix.copy('resources/assets/fonts', 'public/build/fonts');
 mix.copy('resources/assets/img', 'public/build/img');

 mix.version([
  'css/all.css',
  'css/login.css',
  'js/all.js'
 ]);

});
