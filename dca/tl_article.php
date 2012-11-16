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
 * Table tl_article
 */
$GLOBALS['TL_DCA']['tl_article']['fields']['cssID']['inputType'] = 'textSelect';
$GLOBALS['TL_DCA']['tl_article']['fields']['cssID']['eval']['widgets'][0] = array
(
	'inputType'		=> $GLOBALS['TL_CONFIG']['useCssIDSelectArticle'] ? 'select' : 'text',
	'options'		=> $GLOBALS['TL_CONFIG']['cssIDSelectArticle'],
);
$GLOBALS['TL_DCA']['tl_article']['fields']['cssID']['eval']['widgets'][1] = array
(
	'inputType'		=> $GLOBALS['TL_CONFIG']['useCssClassSelectArticle'] ? 'select' : 'text',
	'options'		=> $GLOBALS['TL_CONFIG']['cssClassSelectArticle'],
);