<!DOCTYPE html>
<html <?php language_attributes();?> >
<!-- the language can changed in settings -->
<head>
	<title>HomePage</title>
	<meta charset="<?php bloginfo('charset');?>">
	<!-- bloginfo('charset')=>charset become dynamic -->
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<!-- <link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript"></script>
	   cannot be used -->
</head>
<body>
     <header><h1><?php bloginfo('name'); ?>(settings)</h1></header>
     <div class="des"><?php bloginfo('description'); ?>(settings)</div>

     <section id="main">
  
