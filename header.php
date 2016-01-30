<!DOCTYPE html>
<html <?php language_attributes();?>>
    <header>
        <meta charset="<?php bloginfo("charset")?>"/>
        <meta name="viewport" content="width=device-width"/>
        <title><?php bloginfo('name');?></title>
        <?php wp_head();?>
    </header>
<body <?php body_class();?>>
    <div class="container">
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name');?></a></h1>
        <h5><?php bloginfo('description');?></h5>
    </header>