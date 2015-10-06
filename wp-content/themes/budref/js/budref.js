/**
 * Switch of frontend logging
 */
var logging = true;

var budref = angular.module('budref', []);
var angularControllers = {};

/**
 * Bootstraps AngularJS after each controller has loaded
 *
 * @returns {void}
 * @author bence.demeter
 */
function bootstrapIfControllersLoaded() {
	var go = true;
	for (var cntr in angularControllers) {
		if (angularControllers[cntr] != true) {
			go = false;
		}
	}
	bootstrapAngular(go);
}

/**
 * Bootstraps AngularJS when gets green light
 *
 * @param go The green light as a boolean
 * @returns {void}
 * @author bence.demeter
 */
function bootstrapAngular(go) {
	if (go) {
		logger.info("Starting AngularJS functionality");
		angular.bootstrap(document, ['budref']);
	}
}

/**
 * Sets the loaded controller's status to <code>true</code>
 * and try to bootstrap AngularJS
 *
 * @param controllerName
 * @author bence.demeter
 */
function handleLoadedController(controllerName) {
	logger.info("\"" + controllerName + "\" AngularJS controller loaded");
	angularControllers[controllerName] = true;
	bootstrapIfControllersLoaded();
}

/**
 * Loads the AngularJS controllers for each
 * [data-ng-controller] element
 *
 * @author bence.demeter
 */
function getNecessaryControllers() {
	logger.info("AngularJS factory loaded");
	angular.element('[data-ng-controller]').each(function () {
		var controllerName = angular.element(this).attr('data-ng-controller').replace(/Controller$/img, '');
		angularControllers[controllerName] = false;
		require(['/wp-content/themes/budref/js/controllers/' + controllerName + '.js'], function() {
			handleLoadedController(controllerName);
		});
	});
}

/**
 * Performs google login
 *
 * @param googleUser The actual google user
 * @author bence.demeter
 */
function onSignIn(googleUser) {
	// Useful data for your client-side scripts:
	var profile = googleUser.getBasicProfile();
	logger.debug("Got Google profile: " + JSON.stringify(profile));
	// The ID token you need to pass to your backend:
	var id_token = googleUser.getAuthResponse().id_token;
	logger.debug("ID Token: " + id_token);
};

/**
 * Begins the AngularJS bootstrap process
 */
angular.element(document).ready(function () {
	require(['/wp-content/themes/budref/js/services/angular-factory.js'], getNecessaryControllers);
});

