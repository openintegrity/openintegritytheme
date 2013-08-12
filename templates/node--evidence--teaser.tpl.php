<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix <?php foreach ($current_user_roles as $role) { ?><?php print $role; ?> <?php } ?>"<?php print $attributes; ?>>

  <h2<?php print $title_attributes; ?>><?php print $title; ?> <span class="link">[ <a href="<?php print render($field_evidence_link[0]['url']); ?>"><?php print render($field_evidence_link[0]['url']); ?></a> ]</span></h2>

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
    hide($content['field_evidence_link']);
    print render($content);
  ?>

</article>