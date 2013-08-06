<header id="navbar" role="banner" class="navbar container">
  <div class="navbar-inner">
    <div class="container">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <?php if (!empty($logo)): ?>
	    <div id="logo-wrapper" class="span3">
          <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <div class="nav-collapse collapse span8">
          <nav role="navigation" id="nav">
            <?php if (!empty($primary_nav)): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($secondary_nav)): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>


<?php if (!empty($page['highlighted'])): ?>
  <div class="row row-hero">
    <div class="highlighted hero-unit"><div class="container"><?php print render($page['highlighted']); ?></div></div>
  </div>
<?php endif; ?>

  <?php if (!empty($page['header'])): ?>
  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
  <?php endif; ?> 

  <?php if (!empty($page['icons'])): ?>
    <div class="row row-icons">
      <div class="container">
        <?php print render($page['icons']); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="row row-content">
    <div class="container">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside id="sidebar-first" class="span4" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  

    <section class="<?php print _bootstrap_content_span($columns); ?>">  
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class=""><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span4" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

    </div>
  </div>

  <?php if (!empty($page['icons_bottom'])): ?>
    <div class="row row-icons-bottom">
      <div class="container">
        <?php print render($page['icons_bottom']); ?>
      </div>
    </div>
  <?php endif; ?>

<footer class="footer">
  <div class="container">
    <?php print render($page['footer']); ?>
  </div>
</footer>
