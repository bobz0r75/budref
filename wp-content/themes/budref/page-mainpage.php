<?php
$GLOBALS['page'] = "mainpage";
get_header(); ?>

<script type="text/javascript">
	var pageData = {
		pageName: '<?= $GLOBALS['page'] ?>'
	};
</script>

Ez itten a fooldal :)

<div>
	<span class="material-icons mainpage">verified_user</span>
	<span class="material-icons mainpage">volume_up</span>
</div>

<?php get_footer(); ?>