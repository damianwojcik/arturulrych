<?php /* Template Name: O mnie */ ?>

<?php get_header(); ?>


<?php
    $photo = get_field('photo');
    $photo_mobile = get_field('photo_mobile');
    $title = get_field('title');
    $content = get_field('content');
    $headline = get_field('headline');
?>

    <!-- =================================================
       Content
   ================================================== -->
    <main class="content about">

        <div class="container">

            <div class="column five columns">
                <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $photo['url'] ?>" alt=""<?php echo $photo['alt'] ?>"">
            </div><!-- /.five columns -->

            <div class="column seven columns">

                <div class="wrap">

                    <h2 class="title-underline"><?php echo $title; ?></h2>

                    <img class="img-mobile b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $photo_mobile['url']; ?>" alt="<?php echo $photo_mobile['alt']; ?>">

                    <p>
                        <?php echo $content; ?>
                    </p>

                </div><!-- /.wrap -->

                <?php if( !empty($headline) ): ?>
                    <div class="wrap">

                        <h3 class="title-underline"><?php echo $headline; ?></h3>

                    </div><!-- /.wrap -->
                <?php endif; ?>

                <?php if( have_rows('section') ): ?>

                    <div class="row">

                        <?php while ( have_rows('section') ) : the_row(); ?>

                            <div class="column six columns">

                                <h4><?php the_sub_field('section_title'); ?></h4>

                                <p>
                                    <?php the_sub_field('section_description'); ?>
                                </p>

                                <?php if( have_rows('section_links') ): ?>

                                    <nav class="menu-titles">
                                        <ul>
                                            <?php while ( have_rows('section_links') ) : the_row(); ?>
                                                <li><a href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_title'); ?></a></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </nav>

                                <?php endif; ?>

                            </div><!-- /.six columns -->

                        <?php endwhile; ?>

                    </div><!-- /.row -->

                <?php endif; ?>

            </div><!-- /.seven columns -->

        </div><!-- /.container -->

    </main><!-- /.content -->

<?php get_footer(); ?>