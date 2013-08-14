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
    hide($content['field_entry_score']);
    hide($content['field_dependencies']);
    hide($content['body']);
  ?>

  <div class="row row-entry">
    <div class="container entry-content">
      <div class="entry-meta span5 clearfix">
        <div class="entry-info clearfix">
          <div class="entry-info-top clearfix">
            <?php print render($content['field_entry_type']); ?>
            <?php print render($content['field_entry_developer']); ?>
	      </div>
          <div class="entry-info-middle clearfix">
            <?php print render($content['field_dependencies']); ?>
	      </div>
          <div class="entry-info-bottom clearfix">
            <?php print render($content['field_entry_category']); ?>
            <?php print render($content['field_entry_version']); ?>
	      </div>
	    </div>
        <?php print render($content['field_entry_score']); ?>
	  </div>
      <div class="entry-title span6 clearfix">
        <?php print render($content['field_logo']); ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php print $node->body[$node->language][0]['safe_value']; ?>
	  </div>
    </div>
  </div>

  <?php print render($content); ?>
    
  <div class="container"> 
  <?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
      <?php print render($content['field_tags']); ?>
      <?php print render($content['links']); ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['comments']); ?>
  </div>

</article> <!-- /.node -->