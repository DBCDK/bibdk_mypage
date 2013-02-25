<?php

/**
 * @file
 * Theme implementation for bibdk_mypage.
 */
?>

<h2><?php print drupal_render($form['header']); ?></h2>
<?php foreach (element_children($form['rows']) as $key => $element):
  $data = $form['rows'][$element]; ?>
  <div class="bibdk-mypage-row clearfix">
    <?php print ( !empty($data['label_row']) ) ? '<p class="label-row">' . drupal_render($data['label_row']) . '</p>' : ''; ?>
    <?php print ( !empty($data['value_row']) ) ? '<p class="value-row">' . drupal_render($data['value_row']) . '</p>' : ''; ?>
    <?php print ( !empty($data['item_row']) )  ? '<p class="item-row">'  . drupal_render($data['item_row']) . '</p>' : ''; ?>
  </div>
<?php endforeach; ?>
<div class="bibdk-mypage-link"><?php print drupal_render($form['link_profile2_tab']); ?></div>
