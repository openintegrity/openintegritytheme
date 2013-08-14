<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>
  <?php print (isset($block->title_link))?"<a href='/".$block->title_link."'><h2>":""; ?>  
    <?php print $content ?>
  <?php print (isset($block->title_link))?"</h2></a>":""; ?>
</section>
 <!-- /.block -->
