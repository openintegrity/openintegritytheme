<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <span class="submitted">
        <?php print $user_picture; ?>
        <?php print $submitted; ?>
      </span>
    <?php endif; ?>
  </header>
  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    hide($content['field_logo']);
    hide($content['field_entry_type']);
    hide($content['field_entry_developer']);
    hide($content['field_entry_category']);
    hide($content['field_entry_version']);
  ?>

  <div class="container entry-content">
    <div class="entry-title">
      <?php print render($content['field_logo']); ?>
	</div>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <div class="entry-meta">
      <?php print render($content['field_entry_type']); ?>
      <?php print render($content['field_entry_developer']); ?>
      <?php print render($content['field_entry_category']); ?>
      <?php print render($content['field_entry_version']); ?>
	</div>
  </div>

  <?php print render($content); ?>
    

  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article> <!-- /.node -->
