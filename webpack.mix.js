let mix = require('laravel-mix');
require('dotenv').config(
{
  path:__dirname+'/../../../../.env'
}
);
/*
mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.EnvironmentPlugin (
                ['MIX_PUBLIC_FOLDER']
            )
        ]
    };
});
*/
require('laravel-mix-polyfill');
 mix.options({
 	purifyCss: false,
 });

 mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'], // more than one
    tether: ['window.Tether', 'Tether'],
	'tether-shepherd': ['Shepherd'],
	'popper.js/dist/popper.js': ['Popper'],
  	sweetalert2:['Swal'],
  	'magnific-popup':['magnificPopup'],
    moment: 'moment' // only one
});

var dest = 'dist'; 
//https://statamic.com/marketplace/addons/laravel-mix
mix
	.js('resources/js/app.js', dest+'/js')
	.sass('resources/sass/app.scss', dest+'/css',{ outputStyle: 'expanded' });
 ;
/*
mix
	.js('resources/js/map.js', dest+'/js')
	.sass('resources/sass/map.scss', dest+'/css',{ outputStyle: 'expanded' });
 ;
*/
mix.extract([
   'jquery', //'raphael',
    //    'datatables.net', 'datatables.net-bs', 'datatables.net-responsive', 'datatables.net-responsive-bs',
   'vue', 'vuetify' ,'axios'
]);
mix.version();

console.log('MIX_PUBLIC_FOLDER');
console.log(process.env.MIX_PUBLIC_FOLDER);

mix.setResourceRoot('../../../../')
	.setPublicPath('../../../../'+process.env.MIX_PUBLIC_FOLDER)
  //.setPublicPath(url('/'))
  //.webpackConfig(Object.assign(webpack))
  //.sourceMaps()
  .polyfill({
      enabled: true,
      useBuiltIns: "usage",
      targets: {"firefox": "50", "ie": 11}
   })
 ;

