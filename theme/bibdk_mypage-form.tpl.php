<?php

/**
 * @file
 * Theme implementation for bibdk_mypage.
 */
?>

<?php print drupal_render($form['header']); ?>
<?php foreach (element_children($form['rows']) as $key => $element):
  $data = $form['rows'][$element]; ?>
  <div class="bibdk-mypage-row">
    <p><?php print drupal_render($data['label_row']); ?></p>
    <p><?php print drupal_render($data['value_row']); ?></p>
  </div>
<?php endforeach; ?>
<div class="bibdk-mypage-link"><?php print drupal_render($form['link_setting']); ?></div>
