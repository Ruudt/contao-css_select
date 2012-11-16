<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssClassSelectPage';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssIDSelectArticle';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssClassSelectArticle';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssIDSelect';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssClassSelect';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssClassSelectNews';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssClassSelectCalendarEvents';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssIDSelectForm';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssClassSelectForm';
$GLOBALS['TL_DCA']['tl_settings']['palettes']['__selector__'][] = 'useCssClassSelectFormField';

if (version_compare(VERSION, '3.0', '>='))
{
	$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = preg_replace('@(;{frontend_legend})@', ';{cssid_legend},useCssClassSelectPage,useCssIDSelectArticle,useCssClassSelectArticle,useCssIDSelect,useCssClassSelect,useCssClassSelectNews,useCssClassSelectCalendarEvents,useCssIDSelectForm,useCssClassSelectForm,useCssClassSelectFormField$1', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);
}
else
{
	$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = preg_replace('@(;{frontend_legend})@', ';{cssid_legend},useCssClassSelectPage,useCssIDSelectArticle,useCssClassSelectArticle,useCssIDSelect,useCssClassSelect,useCssClassSelectCalendarEvents,useCssIDSelectForm,useCssClassSelectForm,useCssClassSelectFormField$1', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);
}

// Subpalettes
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssClassSelectPage'] = 'cssClassSelectPage';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssIDSelectArticle'] = 'cssIDSelectArticle';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssClassSelectArticle'] = 'cssClassSelectArticle';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssIDSelect'] = 'cssIDSelect';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssClassSelect'] = 'cssClassSelect';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssClassSelectNews'] = 'cssClassSelectNews';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssClassSelectCalendarEvents'] = 'cssClassSelectCalendarEvents';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssIDSelectForm'] = 'cssIDSelectForm';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssClassSelectForm'] = 'cssClassSelectForm';
$GLOBALS['TL_DCA']['tl_settings']['subpalettes']['useCssClassSelectFormField'] = 'cssClassSelectFormField';

		
/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssClassSelectPage'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssClassSelectPage'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssClassSelectPage'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssClassSelectPage'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssIDSelectArticle'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssIDSelectArticle'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssIDSelectArticle'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssIDSelectArticle'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssClassSelectArticle'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssClassSelectArticle'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssClassSelectArticle'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssClassSelectArticle'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssIDSelect'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssIDSelect'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssIDSelect'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssIDSelect'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssClassSelect'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssClassSelect'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssClassSelect'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssClassSelect'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssClassSelectNews'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssClassSelectNews'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssClassSelectNews'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssClassSelectNews'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssClassSelectCalendarEvents'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssClassSelectCalendarEvents'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssClassSelectCalendarEvents'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssClassSelectCalendarEvents'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssIDSelectForm'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssIDSelectForm'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssIDSelectForm'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssIDSelectForm'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssClassSelectForm'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssClassSelectForm'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssClassSelectForm'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssClassSelectForm'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['useCssClassSelectFormField'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['useCssClassSelectFormField'],
	'inputType'		=> 'checkbox',
	'eval'			=> array('submitOnChange'=>true, 'tl_class'=>'m12')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['cssClassSelectFormField'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['cssClassSelectFormField'],
	'inputType'     => 'optionWizard',
	'eval'          => array('mandatory'=>true, 'tl_class'=>'long'),
);
