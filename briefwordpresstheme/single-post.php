<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- <div class="container">
                <h1><?php the_title() ?></h1>
                <img src="<?php the_post_thumbnail_url() ?>" alt="cat" style="width:100%; height:50%;">
                <?php the_content() ?>
        </div> -->

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6 animate__animated animate__RubberBand">
                    <img src="<?php the_post_thumbnail_url() ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="953" height="495" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3 animate__animated animate__backInDown"><?php the_title() ?></h1>
                    <p class="lead animate__animated animate__backInLeft"><?php the_content() ?></p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="<?= get_post_type_archive_link('post') ?>">
                    <button type="button" class="btn btn-warning btn-lg px-4 me-md-2 animate__animated animate__backInUp">Retour aux articles</button>
                    </a>
                    <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> -->
                    </div>
                </div>
            </div>
        </div>

<?php endwhile;
endif; ?>

<?php get_footer() ?>