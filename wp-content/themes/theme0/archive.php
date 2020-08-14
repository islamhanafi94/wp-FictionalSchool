<?php get_header(); ?>

<?php while(have_posts()):?>
    <?php the_post()?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_archive_title(); ?></h1>
            <div class="page-banner__intro">
                <p><?php the_archive_description();?></p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog');?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Blog Home</a>
                <span class="metabox__main">
                Posted By <?php the_author_posts_link() ?> |
                <?php the_time('l, F j, Y');  ?> | In
            </span>
            </p>
        </div>
        <div class="generic-content">
            <?php the_content(); ?>
        </div>

    </div>

<?php endwhile?>
<?php get_footer()?>