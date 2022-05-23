<?php

require_once 'angularprofiles.civix.php';
use CRM_AngularProfiles_ExtensionUtil as E;

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 * @param $config
 */
function angularprofiles_civicrm_config(&$config) {
  _angularprofiles_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function angularprofiles_civicrm_install() {
  return _angularprofiles_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function angularprofiles_civicrm_uninstall() {
  return _angularprofiles_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function angularprofiles_civicrm_enable() {
  return _angularprofiles_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function angularprofiles_civicrm_disable() {
  return _angularprofiles_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function angularprofiles_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _angularprofiles_civix_civicrm_upgrade($op, $queue);
}

/**
 * @param $angularModule
 */
function angularprofiles_civicrm_angularModules(&$angularModule) {
  $angularModule['crmProfileUtils'] = [
    'ext' => E::LONG_NAME,
    'js' => ['js/crmProfiles.js'],
    'partials' => ['partials'],
    'settings' => [
      'backboneInitUrl' => E::url('js/initBackbone.js'),
    ],
  ];
}

// /**
//  * Implements hook_civicrm_postInstall().
//  *
//  * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
//  */
// function angularprofiles_civicrm_postInstall() {
//   _angularprofiles_civix_civicrm_postInstall();
// }

// /**
//  * Implements hook_civicrm_entityTypes().
//  *
//  * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
//  */
// function angularprofiles_civicrm_entityTypes(&$entityTypes) {
//   _angularprofiles_civix_civicrm_entityTypes($entityTypes);
// }
