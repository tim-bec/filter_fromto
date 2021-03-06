<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage FilterFromTo
 * @author     Christian de la Haye <service@delahaye.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

/**
 * Frontend filter
 */
$GLOBALS['METAMODELS']['filters']['fromto']['class'] = 'MetaModelFilterSettingFromTo';
$GLOBALS['METAMODELS']['filters']['fromto']['image'] = 'system/modules/metamodelsfilter_fromto/html/filter_fromto.png';
$GLOBALS['METAMODELS']['filters']['fromto']['info_callback'] = array('TableMetaModelFilterSetting', 'infoCallback');
$GLOBALS['METAMODELS']['filters']['fromto']['attr_filter'][] = 'numeric';
$GLOBALS['METAMODELS']['filters']['fromto']['attr_filter'][] = 'decimal';