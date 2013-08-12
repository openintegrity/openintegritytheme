<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<h3><?php print $title; ?></h3>
<?php foreach ($rows as $id => $row): ?>
  <?php print $row; ?>
<?php endforeach; ?>
