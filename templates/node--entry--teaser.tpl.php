<li class="carousel-slide">
  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_logo']);
  ?>

  <?php print render($content['field_logo']); ?>
  <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php print render($content); ?>
  <a href="<?php print $node_url; ?>" class="entry-teaser-link">View Report &#62;</a>
</li>