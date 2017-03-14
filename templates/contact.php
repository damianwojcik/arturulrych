<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>


<?php
    $title = get_field('title');
    $address = get_field('address');
    $email = get_field('email');
    $phone = get_field('phone');
?>


    <!-- =================================================
        Content
    ================================================== -->
    <main class="content contact">

        <div class="container">

            <?php if( !empty($title) ): ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>

        </div><!-- /.container -->

    </main><!-- /.content -->


    <!-- =================================================
        Contact-details
    ================================================== -->
    <section class="contact-details">

        <div class="container">

            <div class="column three columns">
                <div class="wrap">
                    <div class="inner-wrap">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h3>Adres</h3>
                    </div><!-- /.inner-wrap -->
                    <a href="#map"><?php echo $address ?></a>
                </div><!-- /.wrap -->
            </div><!-- /.column three -->

            <div class="column three columns">
                <div class="wrap">
                    <div class="inner-wrap">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h3>E-mail</h3>
                    </div><!-- /.inner-wrap -->
                    <a href="mailto: <?php echo $email ?>"><?php echo $email ?></a>
                </div><!-- /.wrap -->
            </div><!-- /.column three -->

            <div class="column three columns">
                <div class="wrap">
                    <div class="inner-wrap">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <h3>Telefon</h3>
                    </div><!-- /.inner-wrap -->
                    <a href="tel: <?php echo $phone ?>"><?php echo $phone ?></a>
                </div><!-- /.wrap -->
            </div><!-- /.column three -->

        </div><!-- /.container -->

    </section><!-- /.contact-details -->


    <div id="map"></div>

<?php get_footer(); ?>