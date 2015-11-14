<?php

/**
 * @file
 * Admin settings form and OAuth authentication integration
 */
/**
* Parse administrative settings form.
*/
function parse_admin_settings($form, &$form_state) {
$form['parse'] = array(
'#type' => 'fieldset',
'#title' => t('Parse Application API Settings'),
);
$form['parse']['parse_application_id'] = array(
'#type' => 'textfield',
'#title' => t('Application ID'),
'#required' => TRUE,
'#default_value' => variable_get('parse_application_id', NULL),
);
$form['parse']['parse_masterkey'] = array(
'#type' => 'textfield',
'#title' => t('Master Key'),
'#required' => TRUE,
'#default_value' => variable_get('parse_masterkey', NULL),
);
$form['parse']['parse_restkey'] = array(
'#type' => 'textfield',
'#title' => t('REST API Key'),
'#required' => TRUE,
'#default_value' => variable_get('parse_restkey', NULL),
);
$form['parse']['parse_url'] = array(
'#type' => 'textfield',
'#title' => t('API URL'),
'#required' => TRUE,
'#default_value' => variable_get('parse_url', 'https://api.parse.com/1/'),
);

$form['#validate'][] = 'parse_admin_settings_validate';
return system_settings_form($form);
}

/**
* Validation callback for the administrative settings form.
*/
function parse_admin_settings_validate($form, &$form_state) {
$form_state['values']['parse_application_id'] = trim($form_state['values']['parse_application_id']);
$form_state['values']['parse_masterkey'] = trim($form_state['values']['parse_masterkey']);
$form_state['values']['parse_restkey'] = trim($form_state['values']['parse_restkey']);
$form_state['values']['parse_url'] = trim($form_state['values']['parse_url']);
}