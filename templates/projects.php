<?php /* Template Name: Projekty */ ?>

<?php get_header(); ?>


<?php

    $posts_array = get_posts(
        array(
            'posts_per_page' => -1,
            'post_type' => 'gallery',
        )
    );

    foreach ($posts_array as $post) {
        $sections[] = get_the_terms($post->ID, 'galleries')[0]->name;
        $sections =  array_unique($sections);
    }

?>


    <!-- =================================================
       Content
   ================================================== -->
    <main class="content portfolio">

        <div class="container">

            <?php

                $index = 1;

                foreach($sections as $section) {

                $categories_array = get_posts(array(
                    'post_type' => 'gallery',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'galleries',
                            'field' => 'slug',
                            'terms' => array( $section )
                        )
                    )
                ));

                ?>

                <div class="column six columns">

                    <h2 class="title-underline">
                        <?php echo $section; ?>
                    </h2>

                    <nav class="categories" id="categories-<?php echo $index; ?>">
                        <ul>
                            <li class="active"><a href="#" data-filter=".<?php echo slugify($section); ?>">Wszystkie</a></li>
                            <?php foreach($categories_array as $category){ ?>
                                <li><a href="#" data-filter=".<?php echo slugify($category->post_title); ?>"><?php echo $category->post_title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </nav>

                    <ul class="list-images" id="list-images-<?php echo $index; ?>">

                        <?php foreach($categories_array as $category){

                                $images = get_field('gallery', $category->ID);

                                if( $images ) {

                                    foreach ($images as $image){ ?>

                                        <li class="<?php echo slugify($section) . ' ' . slugify($category->post_title); ?>">
                                            <figure class="image-hover">
                                                <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                     data-src="<?php echo $image['url']; ?>"
                                                     alt="<?php echo $image['alt']; ?>"/>
                                                <a href="<?php echo $image['url']; ?>" rel="lightbox">
                                                    <figcaption>
                                                        <h3><?php echo $image['title']; ?></h3>
                                                        <h4><?php echo $category->post_title; ?></h4>
                                                    </figcaption>
                                                </a>
                                            </figure>
                                        </li>

                                    <?php }
                                }
                        } ?>

                    </ul>

                </div><!-- /.six-columns -->

            <?php
                $index++;
            } ?>

        </div><!-- /.container -->

    </main><!-- /.content -->


<?php get_footer(); ?>