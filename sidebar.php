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

  <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</aside>
