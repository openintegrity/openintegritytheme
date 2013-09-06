<div class="feature-bg"></div>
<div class="feature-container">
  <div class="top-row">
    <?php 
      $entry = entity_metadata_wrapper('node', $node);
      $index_results = views_get_view_result('iterate_entries_for_scoring','views_rules_2', $node->nid, 60);
      foreach ($index_results as $ind) {
        $index = entity_metadata_wrapper('node', $ind->field_index_entry_node_nid);
        if ($index->field_criteria->value()->name == "Policy") $index_policy = $index;
        if ($index->field_criteria->value()->name == "Security") $index_security = $index;
        if ($index->field_criteria->value()->name == "Privacy") $index_privacy = $index;
      }
    ?>
    <?php $field_entry_score = field_get_items('node', $node, 'field_logo'); ?>
    <img src="<?php echo image_style_url('index-full', $entry->field_logo->value()['uri']); ?>" alt="">
    <?php if (!$page && $title): ?>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    <?php endif; ?>
  </div>
  <div class="feature-listing-3">
    <div class="col-1">
      <div class="listing-title">
      <?php 
        $policy_collection = $entry->field_entry_score->value()[0];
        $policy = entity_metadata_wrapper('field_collection_item', $policy_collection);
        $policy_score = $policy->field_index_score->value()->name;
      ?>
        <img src="https://openintegrity.org/badge/img/<?php echo $policy_score; ?>Small.png" alt=""/><?php echo t('Policy') ?>
      </div>
      <ul>
      <?php
        $pnid = $index_policy->nid->raw();
        $policy_results = views_get_view_result('iterate_entries_for_scoring','views_rules_3', $pnid, 60);
        foreach ($policy_results as $sub) {
          $subindex = entity_metadata_wrapper('node', $sub->field_subindex_index_node_nid);
          $subindex_img = $subindex->field_subindex_score->value()->name;
          $status = $subindex->field_subindex_status;
          $status_arr = $status->raw();
          if (!(empty($status_arr))) {
            if ($status->value()[0]->name == "Unsubstantiated") { $subindex_img = "unsubstantiated";}
            if ($status->value()[0]->name == "Disputed") { $subindex_img = "disputed";}
            if ($status->value()[0]->name == "Outdated") { $subindex_img = "outdated";}
          }
          echo '<li class="'. $subindex_img . '"><img src="https://openintegrity.org/badge/img/' . $subindex_img . 'Tiny.png" alt=""/>';
          echo $subindex->field_subcriteria->value()->name;
          echo '</li>';
        }
      ?>
      </ul>
    </div>
    <div class="col-2">
      <div class="listing-title">
      <?php 
        $security_collection = $entry->field_entry_score->value()[1];
        $security = entity_metadata_wrapper('field_collection_item', $security_collection);
        $security_score = $security->field_index_score->value()->name;
      ?>
        <img src="https://openintegrity.org/badge/img/<?php echo $security_score; ?>Small.png" alt=""/><?php echo t('Security') ?>
      </div>
      <ul>
      <?php
        $snid = $index_security->nid->raw();
        $security_results = views_get_view_result('iterate_entries_for_scoring','views_rules_3', $snid, 60);
        foreach ($security_results as $sub) {
          $subindex = entity_metadata_wrapper('node', $sub->field_subindex_index_node_nid);
          $subindex_img = $subindex->field_subindex_score->value()->name;
          $status = $subindex->field_subindex_status;
          $status_arr = $status->raw();
          if (!(empty($status_arr))) {
            if ($status->value()[0]->name == "Unsubstantiated") { $subindex_img = "unsubstantiated";}
            if ($status->value()[0]->name == "Disputed") { $subindex_img = "disputed";}
            if ($status->value()[0]->name == "Outdated") { $subindex_img = "outdated";}
          }
          echo '<li class="'. $subindex_img . '"><img src="https://openintegrity.org/badge/img/' . $subindex_img . 'Tiny.png" alt=""/>';
          echo $subindex->field_subcriteria->value()->name;
          echo '</li>';
        }
      ?>
      </ul>
    </div>
    <div class="col-3">
      <div class="listing-title">
      <?php 
        $privacy_collection = $entry->field_entry_score->value()[2];
        $privacy = entity_metadata_wrapper('field_collection_item', $privacy_collection);
        $privacy_score = $privacy->field_index_score->value()->name;
      ?>
        <img src="https://openintegrity.org/badge/img/<?php echo $privacy_score; ?>Small.png" alt=""/><?php echo t('Privacy') ?>
      </div>
      <ul>
      <?php
        $prnid = $index_privacy->nid->raw();
        $privacy_results = views_get_view_result('iterate_entries_for_scoring','views_rules_3', $prnid, 60);
        foreach ($privacy_results as $sub) {
          $subindex = entity_metadata_wrapper('node', $sub->field_subindex_index_node_nid);
          $subindex_img = $subindex->field_subindex_score->value()->name;
          $status = $subindex->field_subindex_status;
          $status_arr = $status->raw();
          if (!(empty($status_arr))) {
            if ($status->value()[0]->name == "Unsubstantiated") { $subindex_img = "unsubstantiated";}
            if ($status->value()[0]->name == "Disputed") { $subindex_img = "disputed";}
            if ($status->value()[0]->name == "Outdated") { $subindex_img = "outdated";}
          }
          echo '<li class="'. $subindex_img . '"><img src="https://openintegrity.org/badge/img/' . $subindex_img . 'Tiny.png" alt=""/>';
          echo $subindex->field_subcriteria->value()->name;
          echo '</li>';
        }
      ?>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <?php
    $values = $entry->field_entry_category->raw();
    if (!empty($values)) {
      $values = is_array($values) ? $values : array($values);
    } 
    $entry_categories = implode(",", $values);
    $alternatives = views_get_view_result('alternatives', 'page_1', $entry_categories, $node->nid);
    if (!empty($alternatives)) {
  ?>
  <div class="grey-belt middle-row">
    <div id="carousel-title" class="carousel-title">
        <h2>Alternatives to<br/>this tool</h2>
              <a id="simplePrevious"><img src="https://openintegrity.org/badge/img/slider-previous.png" alt="slider-previous" width="18px" height=" 18px;" /></a>
              <a id="simpleNext"><img src="https://openintegrity.org/badge/img/slider-next.png" alt="slider-next" width="18px" height=" 18px;" /></a>
    </div>
    <div id="viewport">
      <ul>
      <?php
        $values = $entry->field_entry_category->raw();
        if (!empty($values)) {
          $values = is_array($values) ? $values : array($values);
        } 
        $entry_categories = implode(",", $values);
        $alternatives = views_get_view_result('alternatives', 'page_1', $entry_categories, $node->nid) ;
        foreach ($alternatives as $alt) {
          $alt_entry = entity_metadata_wrapper('node', $alt->nid);
          echo '<li class="carousel-slide">';
          echo ' <h2>' . $alt_entry->title->value() . '</h2>';
          if (isset($alt_entry->field_logo->value()['uri'])) { 
//            echo ' <img src="' . image_style_url('logo-list', $alt_entry->field_logo->value()['uri']) . '" alt=""/>';
            echo field_view_field('node', $alt_entry->raw(), 'field_entry_score' , Array('type' => 'custom_formatters_static_badge'))[0]['#markup'];
          }
          echo '</li>';
        }
        ?>
      </ul>
    </div> 
  </div>
  <?php } ?>
  <div class="bottom-row">
    <div class="col-1">
      <div class="col-left">
        <img src="https://openintegrity.org/badge/img/open-integrity-space.png" alt=""/>
          <h1>Open Integrity Index</h1>
      </div>
      <div class="col-right">
	<p>Make sure you understand more about the threats you're facing and your practices outside of the digital world before you take any risks. <a href="https://openintegrity.org/about" class="text-link">Read more</a></p>
      </div>
    </div>
    <div class="col-2">
      <a href="<?php echo "https://openintegrity.org/node/" . $node->nid; ?>" class=" btn-blue"><?php echo t("Full Report") ?></a>
    </div>
  </div>
</div>
