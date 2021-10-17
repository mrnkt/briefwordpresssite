<?php get_header() ?>

<div class="container">
	<!-- <div class="d-flex justify-content-around"> -->

    <!-- let's go : <?php wp_title(); ?> -->

    <!-- est ce qu'il y'a des articles? -->
    <?php if (have_posts()): ?>

    <!-- <ul> -->
    <!-- the-post, cette fonction permettra de déclarer l'article et ca permettra à d'autres fonctions d'être utilisés à l'intérieur -->
    <!-- <?php while(have_posts()): the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>">
            <?php the_title() ?>
            </a>
        </li>
    <?php endwhile ?>
    </ul> -->

    <div class="row">

    <?php while(have_posts()): the_post(); ?>

    <div class="col">
        <div class="card shadow-lg animate__animated animate__bounce" style="width: 18rem; margin-top: 50px;">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/articles/cat.jpg" class="card-img-top" alt="cat"> -->
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' => 'cat', 'style' => 'height:auto']) ?>
            <div class="card-body">
                <h5 class="card-title"><?php the_title() ?></h5>
                <p class="card-text"><?php the_excerpt('En voir plus') ?></p>
                <a href="<?php the_permalink() ?>" class="btn btn-warning">En savoir plus</a>
            </div>
        </div>
    </div>

    <?php endwhile ?>

    </div>    

<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>