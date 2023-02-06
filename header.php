<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<meat charset ="<?php bloginfo("charset"); ?>"/>
<title> <?php bloginfo("name"); ?></title>
<link  rel="pingpack" href="<?php bloginfo("pingback_url"); ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>

<?php wp_head(); ?>


<script src="https://kit.fontawesome.com/7128208d2e.js" crossorigin="anonymous"></script>

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url();?>">Edusa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
    <?php display_nav_menu();?>

    </div>
    <form class="d-flex" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s">
        <button class="btn btn-outline-success" type="submit" onclick="">Search</button>
      </form>
  </div>
</nav>

