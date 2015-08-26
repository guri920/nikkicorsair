/*
 *  Main entry point
 */

require('es5-shim');
require('consolelog');
require('browsernizr/test/touchevents');

var $               = require('jquery');
var ui              = require('./ui.js');
var AnalyticsModule = require('./analytics.js');
var analytics = new AnalyticsModule({ gaid: '' });

/**
 * Initialize the app on DOM ready
 */
$(function() {
    ui.initLightbox();
	analytics.init();
	carousel.init();
});