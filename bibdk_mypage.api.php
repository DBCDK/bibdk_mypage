<?php

/**
 * @file
 * Hooks provided by the Bibdk_mypage module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Get fieldsets from other modules.
 *
 * @param $form
 * @param $form_state
 * @return array
 *  Render array
 */
function hook_bibdk_mypage_tabs($max_rows=3) {
  global $user;

  $form['module_name'] = array(
    '#type'         => 'fieldset',
    '#tree'         => TRUE,
    '#theme'        => 'bibdk_mypage-form',
    '#attributes'   => array('class' => array('element-wrapper', 'bibdk-mypage-wrapper')),
  );

  $form['module_name']['header'] = array(
    '#type'           => 'markup',
    '#markup'         => t('Account'),
  );

  $form['module_name']['rows'] = array(
    '#type'         => 'fieldset',
    '#tree'         => TRUE,
  );

  $form['module_name']['rows'][0]['label_row'] = array(
    '#type'           => 'markup',
    '#markup'         => t('Label'),
  );
  $form['module_name']['rows'][0]['value_row'] = array(
    '#type'           => 'markup',
    '#markup'         => t('Value'),
  );

  $form['module_name']['link_profile2_tab'] = array(
    '#type'           => 'link',
    '#title'          => t('Edit settings'),
    '#title_display'  => 'invisible',
    '#href'           => 'user/' . $user->uid . '/edit',
    '#options'        => array('attributes' => array('title' => t('Edit settings'))),
  );

  return $form;
}

/**
 * @} End of "addtogroup hooks".
 */










