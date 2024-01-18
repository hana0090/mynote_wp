<?php get_header(); ?>

<div class="container">
  <main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div <?php post_class('post-card'); ?>>
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', array('class' => 'post-thumbnail')); ?>
          <?php else : ?>
            <img src="https://via.placeholder.com/800x600" alt="Post Image Placeholder" />
          <?php endif; ?>
          <div class="card-body">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
            <span class="post-info"><?php echo get_the_date(); ?> | <?php the_category(', '); ?></span>
          </div>
        </a>
      </div>
  <?php endwhile; else : ?>
    <p>No posts found</p>
  <?php endif; ?>
  <?php the_posts_pagination(array("prev_text"=>"＜", "next_text"=>"＞")); ?>
</main>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
