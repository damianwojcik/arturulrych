<?php /* Template Name: Strona główna */ ?>

<?php get_header(); ?>


<?php
    $photo = get_field('photo');
    $greeting = get_field('greeting');
?>

<!-- =================================================
	Content
================================================== -->
<main class="content">

    <div class="container">

        <div class="hero b-lazy" data-src="<?php echo $photo['url']; ?>">

            <div class="wrap">

                <?php if( !empty($greeting) ): ?>
                    <div class="inner-wrap">
                        <small><?php echo $greeting; ?></small>
                    </div>
                <?php endif; ?>

                <?php if( have_rows('typed_strings') ): ?>

                    <div id="typed-strings">

                        <?php while ( have_rows('typed_strings') ) : the_row(); ?>

                            <p>
                                <?php the_sub_field('sentence'); ?>
                            </p>

                        <?php endwhile; ?>

                    </div>

                    <span id="typed"></span>

                <?php endif; ?>

            </div><!-- /.wrap -->

        </div><!-- /.hero -->

    </div><!-- /.container -->

</main><!-- /.content -->

<?php get_footer(); ?>