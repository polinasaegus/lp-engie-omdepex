<?php session_start();/** Dedicated to gather/store the timestamp (used in "confirmation.php") */

const TESTMODE      = FALSE;
const ENV_WORK      = 'int'; // Prod : prod - Recette: int
const I_PAGE_NAME   = 'landing_page.depex_degex_plus';
const C_PAGE_NAME   = 'landing_degex_plus.confirmation';
const TAG_COMMANDER = '//cdn.tagcommander.com/3468/tc_ENGIE_1.js';
const MAIL_SUBJECT  = 'Votre demande de souscription à l\'offre Garantie Electroménager';
const MAIL_FROM     = 'www-data@gdfenergyngweb01.ikoula.com';
const MAIL_TO       = 'polina.obertysheva@saegus.com'; //PROD: contactsitesweb@contact.engie.com  // RECETTE : contactsitesweb-rct@contact.engie.com
const PARCOURS_CLIENT = 'NC';
const SITE_VERSION = '1.1';
const THEME_DEMANDE = 'Souscription service Landing'; 