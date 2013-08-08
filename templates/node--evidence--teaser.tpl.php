<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?> </a><span class="link"><?php print render($field_evidence_link[0]['url']); ?></span></h2>

    <?php if ($display_submitted): ?>
      <span class="submitted">
        <?php print $user_picture; ?>
        <?php print $submitted; ?>
      </span>
    <?php endif; ?>

  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

</article> <!-- /.node -->