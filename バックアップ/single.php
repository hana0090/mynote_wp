

<?php get_header(); ?>

<div class="container">

  <main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article <?php post_class('uk-article'); ?>>

        <ul class="uk-breadcrumb">
          <li><a href="<?php echo home_url(); ?>">Home</a></li>
          <li><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
          <li><span><?php the_title(); ?></span></li>
        </ul>

        <h1 class="uk-article-title">
          <a class="uk-link-reset" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>

        <?php if (has_post_thumbnail()) : ?>
          <img class="thumbnail" src="<?php the_post_thumbnail_url('large'); ?>" alt="Thumbnail" />
        <?php else : ?>
          <img class="thumbnail" src="https://via.placeholder.com/1200x300" alt="Thumbnail" />
        <?php endif; ?>

        <div class="body-text">
          <?php the_content(); ?>
        </div>

        <div class="article-fotter">
          <p class="uk-article-meta">
            Written by <a href="#"><?php the_author(); ?></a> on <?php the_date(); ?>. Posted in
            <?php the_category(', '); ?>
          </p>

          <div class="uk-grid-small uk-child-width-auto" uk-grid>
            <div>
              <a class="uk-button uk-button-text" href="<?php echo home_url(); ?>">Back</a>
            </div>
          </div>
        </div>

      </article>

    <?php endwhile; else : ?>
      <p>No posts found</p>
    <?php endif; ?>

  </main>

  <!-- サイドバー -->
  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
