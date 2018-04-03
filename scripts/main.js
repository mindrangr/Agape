require.config({

paths: {
        'jquery': 'jquery-3.1.1.min'
		},
	 shim: {
			'jquery': {
				exports: '$'
			}
		}
});

// Load the main app module to start the app
require(['modules/bodyLoad'], function (bodyLoad) { 
    bodyLoad.bodyGo(); 
}); 