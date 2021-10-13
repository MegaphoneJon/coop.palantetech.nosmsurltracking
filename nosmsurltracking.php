<?php

require_once 'nosmsurltracking.civix.php';

function nosmsurltracking_civicrm_postProcess($formName, &$form) {
  if ($formName == 'CRM_SMS_Form_Upload') {
    civicrm_api3('Mailing', 'create', ['id' => $form->_mailingID, 'url_tracking' => 0]);
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function nosmsurltracking_civicrm_config(&$config) {
  _nosmsurltracking_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function nosmsurltracking_civicrm_xmlMenu(&$files) {
  _nosmsurltracking_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function nosmsurltracking_civicrm_install() {
  _nosmsurltracking_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function nosmsurltracking_civicrm_uninstall() {
  _nosmsurltracking_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function nosmsurltracking_civicrm_enable() {
  _nosmsurltracking_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function nosmsurltracking_civicrm_disable() {
  _nosmsurltracking_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function nosmsurltracking_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _nosmsurltracking_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function nosmsurltracking_civicrm_managed(&$entities) {
  _nosmsurltracking_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function nosmsurltracking_civicrm_caseTypes(&$caseTypes) {
  _nosmsurltracking_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function nosmsurltracking_civicrm_angularModules(&$angularModules) {
  _nosmsurltracking_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function nosmsurltracking_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _nosmsurltracking_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Functions below this ship commented out. Uncomment as required.
 *
 */
