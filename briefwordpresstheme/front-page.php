<?php get_header() ?>

    <?php while(have_posts()): the_post(); ?>

        <!-- <h1><?php the_title() ?></h1>

        <?php the_content() ?>

        <a href="<?= get_post_type_archive_link('post') ?>">Voir les articles</a> -->

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6 animate__animated animate__rubberBand">
                    <img src="https://i.ibb.co/yh7djmg/cat.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="953" height="495" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 animate__animated animate__backInDown">CopyCat, un CopyCat d'Happy Cat</h1>
                    <p class="lead animate__animated animate__backInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="<?= get_post_type_archive_link('post') ?>">
                    <button type="button" class="btn btn-warning btn-lg px-4 me-md-2 animate__animated animate__backInUp">Lire les articles</button>
                    </a>
                    <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> -->
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile ?>

<?php get_footer() ?>