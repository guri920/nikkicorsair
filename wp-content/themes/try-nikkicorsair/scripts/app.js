/*
 *  Main entry point
 */

require('es5-shim');
require('consolelog');
require('browsernizr/test/touchevents');

var $               = require('jquery');
var carousel        = require('./carousel.js');
var AnalyticsModule = require('./analytics.js');
var analytics = new AnalyticsModule({ gaid: '' });

/**
 * Initialize the app on DOM ready
 */
$(function() {
	analytics.init();
	carousel.init();
});