<!-- サイドバーメニュー -->
<aside>
  <div class="widget">
    <!-- Profile Widget -->
    <div class="profile">
      <h4>Profile</h4>
      <img src="https://via.placeholder.com/100" alt="Profile Image" />
      <p>Author Name</p>
      <p>Author Bio Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>

  <div class="widget">
    <!-- Search Widget -->
    <div class="search">
      <form class="uk-search uk-search-default">
        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
        <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search" />
      </form>
    </div>
  </div>

  <div class="widget">
    <!-- Categories Widget -->
    <h4>Categories</h4>
    <ul class="uk-list uk-list-divider">
      <ul class="uk-list uk-link-text">
        <li><a href="#">Category 1</a></li>
        <li><a href="#">Category 2</a></li>
        <li><a href="#">Category 3</a></li>
      </ul>
    </ul>
  </div>

  <div class="widget">
    <!-- Latest Posts Widget -->
    <h4>Latest Posts</h4>
    <ul class="uk-nav uk-nav-secondary">
      <li>
        <a href="#">
          <div>
            Item
            <div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</div>
          </div>
        </a>
      </li>
      <li>
        <a href="#">
          <div>
            Item
            <div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</div>
          </div>
        </a>
      </li>
      <li>
        <a href="#">
          <div>
            Item
            <div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</div>
          </div>
        </a>
      </li>
    </ul>
  </div>
</aside>


<!-- サイドバーメニュー -->
<aside>
  <div class="widget">
    <!-- Profile Widget -->
    <div class="profile">
      <h4>Profile</h4>
      <img src="https://via.placeholder.com/100" alt="Profile Image" />
      <p>Author Name</p>
      <p>Author Bio Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>

  <div class="widget">
        <?php dynamic_sidebar('search_widget'); ?>
    </div>
    


    <div class="widget">
        <h4>Categories</h4>
        <?php
        // カテゴリーウィジェットの表示
        $args = array(
            'title_li' => '', // タイトルを非表示
        );
        wp_list_categories($args);
        ?>
    </div>

    <div class="widget">
        <h4>Latest Posts</h4>
        <?php
        // 最新の投稿ウィジェットの表示
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 5, // 表示する投稿数
            'no_found_rows'  => true, // ページネーションを無効にする
        );
        $latest_posts = new WP_Query($args);

        if ($latest_posts->have_posts()) :
            echo '<ul class="uk-nav uk-nav-secondary">';
            while ($latest_posts->have_posts()) : $latest_posts->the_post();
                echo '<li>';
                echo '<a href="' . get_the_permalink() . '">';
                echo '<div>';
                echo 'Item';
                echo '<div class="uk-nav-subtitle">' . get_the_excerpt() . '</div>';
                echo '</div>';
                echo '</a>';
                echo '</li>';
            endwhile;
            echo '</ul>';
        else :
            echo '<p>No latest posts found</p>';
        endif;

        // クエリをリセット
        wp_reset_postdata();
        ?>
    </div>
</aside>
