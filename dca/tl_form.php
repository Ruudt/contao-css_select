<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Core
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 *
 * @copyright  Ruud Walraven 2012
 * @author     Ruud Walraven <ruud.walraven@gmail.com>
 */


/**
 * Table tl_form
 */
$GLOBALS['TL_DCA']['tl_form']['fields']['attributes']['inputType'] = 'textSelect';
$GLOBALS['TL_DCA']['tl_form']['fields']['attributes']['eval']['widgets'][0] = array
(
	'inputType'		=> $GLOBALS['TL_CONFIG']['useCssIDSelectForm'] ? 'select' : 'text',
	'options'		=> $GLOBALS['TL_CONFIG']['cssIDSelectForm'],
);
$GLOBALS['TL_DCA']['tl_form']['fields']['attributes']['eval']['widgets'][1] = array
(
	'inputType'		=> $GLOBALS['TL_CONFIG']['useCssClassSelectForm'] ? 'select' : 'text',
	'options'		=> $GLOBALS['TL_CONFIG']['cssClassSelectForm'],
);