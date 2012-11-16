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
 * Table tl_page
 */
if ($GLOBALS['TL_CONFIG']['useCssClassSelectPage'])
{
	$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['inputType'] = 'select';
	$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['options'] = array();
	$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['reference'] = array();
	foreach (deserialize($GLOBALS['TL_CONFIG']['cssClassSelectPage']) as $option)
	{
		$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['options'][] = $option['value'];
		$GLOBALS['TL_DCA']['tl_page']['fields']['cssClass']['reference'][$option['value']] = $option['label'];
	}
}