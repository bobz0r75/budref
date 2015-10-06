<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/budref/style.css" />
		<script type="text/javascript" src="/wp-content/themes/budref/js/lib/requirejs/require.min.js"></script>
		<script type="text/javascript" src="/wp-content/themes/budref/js/lib/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/wp-content/themes/budref/js/lib/angularjs/angular.min.js"></script>
		<script type="text/javascript" src="/wp-content/themes/budref/js/logger.js"></script>
		<script type="text/javascript" src="/wp-content/themes/budref/js/budref.js"></script>
		
	</head>
	<body data-ng-controller="<?= $GLOBALS['page'] ?>Controller">
		<div class="budref-layout-transparent mdl-layout mdl-js-layout" data-ng-class="{}">
			<header class="mdl-layout__header mdl-layout__header--transparent">
				<div class="mdl-layout__header-row">
					<!-- Title -->
					<span class="mdl-layout-title">Budakalászi Református Egyház</span>
					<!-- Add spacer, to align navigation to the right -->
					<div class="mdl-layout-spacer"></div>
					<!-- Navigation -->
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link" href="#">Magunkról</a>
						<a class="mdl-navigation__link" href="#">Csatlakozz!</a>
						<a class="mdl-navigation__link" href="#">A Református Egyházról</a>
					</nav>
				</div>
			</header>
		</div>
		<section id="budref-page-content">
