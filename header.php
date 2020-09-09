<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buisness Inn</title>
    <?php wp_head() ?>
</head>

<body>
    <section class="black-header"></section>
    <!-- section header start -->
    <section class="header-section">
        <div class="container">
            <!-- <div class="row"> -->
            <nav class="navbar navbar-expand-lg navbar-light px-0 " id="navbar">
                <!-- <div class="container"> -->
                <a class="navbar-brand" href="#">
                    <?php the_custom_logo() ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => '',
                    'items_wrap' => '
                    <ul class="navbar-nav m-auto">%3$s</ul>',
                ]);
                ?>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control" type="text" placeholder="Search..." aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- </div> -->
            </nav>
            <!-- </div> -->
        </div>
    </section>
    <!-- section header end -->