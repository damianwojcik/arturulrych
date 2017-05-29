<?php get_header(); ?>

<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>


<!-- =================================================
    Content
================================================== -->
<main class="content">

    <div class="container">

        <h3>Strony nie znaleziono</h3>

        <p>
            Przepraszamy ale strona, której szukasz (<span style="opacity:0.7;"><?= $actual_link; ?></span>) nie została odnaleziona. Sprawdź, czy adres URL nie zawiera błędów lub wróć na <a href="<?= SITE_URL; ?>">stronę główną</a>.
        </p>

    </div><!-- /.container -->

</main><!-- /.content -->


<?php get_footer(); ?>
