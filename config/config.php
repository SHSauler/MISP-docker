<?php
$config = array (
  'debug' => 0,
  'MISP' => 
  array (
    'baseurl' => 'http://localhost',
    'footermidleft' => '',
    'footermidright' => '',
    'org' => 'ORGNAME',
    'showorg' => true,
    'threatlevel_in_email_subject' => true,
    'email_subject_TLP_string' => 'TLP Amber',
    'email_subject_tag' => 'tlp',
    'email_subject_include_tag_name' => true,
    'background_jobs' => true,
    'cached_attachments' => true,
    'email' => 'cyber@pulsemail.nl',
    'contact' => 'email@address.com',
    'cveurl' => 'http://cve.circl.lu/cve/',
    'disablerestalert' => false,
    'default_event_distribution' => '1',
    'default_attribute_distribution' => 'event',
    'tagging' => true,
    'full_tags_on_event_index' => true,
    'attribute_tagging' => true,
    'full_tags_on_attribute_index' => true,
    'footer_logo' => '',
    'take_ownership_xml_import' => false,
    'unpublishedprivate' => false,
    'disable_emailing' => false,
    'manage_workers' => true,
    'Attributes_Values_Filter_In_Event' => 'id, uuid, value, comment, type, category, Tag.name',
    'uuid' => '5c6d283a-fedc-4970-b454-0040ac150004',
    'live' => true,
    'language' => 'eng',
    'host_org_id' => 1,
    'redis_host' => 'redis',
    'redis_port' => 6379,
    'redis_password' => '',
    'redis_database' => 13,
  ),
  'GnuPG' => 
  array (
    'onlyencrypted' => false,
    'email' => '',
    'homedir' => '',
    'password' => '',
    'bodyonlyencrypted' => false,
    'sign' => true,
  ),
  'SMIME' => 
  array (
    'enabled' => false,
    'email' => '',
    'cert_public_sign' => '',
    'key_sign' => '',
    'password' => '',
  ),
  'Proxy' => 
  array (
    'host' => '',
    'port' => '',
    'method' => '',
    'user' => '',
    'password' => '',
  ),
  'SecureAuth' => 
  array (
    'amount' => 5,
    'expire' => 300,
  ),
  'Security' => 
  array (
    'level' => 'medium',
    'salt' => 'drDHnZH0v9B5NNrNukE*&HASz)Z#CC-n',
    'cipherSeed' => '',
  ),
  'Session.defaults' => 'php',
  'Session.timeout' => 60,
  'Session.cookie_timeout' => 10080,
  'Session.autoRegenerate' => false,
  'Session.checkAgent' => false,
  'site_admin_debug' => NULL,
  'Plugin' => 
  array (
    'Enrichment_services_enable' => true,
    'Enrichment_hover_enable' => false,
    'Import_services_enable' => true,
    'Cortex_services_enable' => true,
    'Export_services_enable' => true,
  ),
  'CertAuth' => NULL,
  'ApacheShibbAuth' => NULL,
  'ApacheSecureAuth' => NULL,
);