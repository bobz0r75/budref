<!DOCTYPE html>
<html data-ng-app="budref">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/style.css" />
		<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/lib/angularjs/angular.min.js"></script>
	</head>
	<body data-ng-controller="<?= $GLOBALS['controller'] ?>">
		<div class="budref-layout-transparent mdl-layout mdl-js-layout">
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
