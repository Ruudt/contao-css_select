<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Ruud Walraven 2012
 * @author     Ruud Walraven <ruud.walraven@gmail.com>
 */


/**
 * Class TextSelectField
 *
 * Provide methods to handle text fields and select fields.
 * @copyright  Leo Feyer 2005-2012
 * @author     Leo Feyer <http://www.contao.org>
 * @copyright  Ruud Walraven 2012
 * @author     Ruud Walraven <ruud.walraven@gmail.com>
 * @package    Controller
 */
class TextSelectField extends TextField
{
	/**
	 * Generate the widget and return it as string
	 * @return string
	 */
	public function generate()
	{
		$type = $this->hideInput ? 'password' : 'text';

		if (!$this->multiple)
		{
			// Hide the Punycode format (see #2750)
			if ($this->rgxp == 'email' || $this->rgxp == 'url')
			{
				$this->varValue = $this->idnaDecode($this->varValue);
			}

			return sprintf('<input type="%s" name="%s" id="ctrl_%s" class="tl_text%s" value="%s"%s onfocus="Backend.getScrollOffset()">%s',
							$type,
							$this->strName,
							$this->strId,
							(strlen($this->strClass) ? ' ' . $this->strClass : ''),
							specialchars($this->varValue),
							$this->getAttributes(),
							$this->wizard);
		}

		// Return if field size is missing
		if (!$this->size)
		{
			return '';
		}

		if (!is_array($this->varValue))
		{
			$this->varValue = array($this->varValue);
		}

		$arrFields = array();

		for ($i=0; $i<$this->size; $i++)
		{
			if (is_array($this->widgets) && isset($this->widgets[$i]) && ($this->widgets[$i]['inputType'] == 'select'))
			{
				$arrWidgetOptions = deserialize($this->widgets[$i]['options']);
				// Add empty option (XHTML) if there are none
				if (empty($arrWidgetOptions))
				{
					$arrWidgetOptions = array(array('value'=>'', 'label'=>'-'));
				}

				$arrOptions = array();
				foreach ($arrWidgetOptions as $strKey=>$arrOption)
				{
					if (isset($arrOption['value']))
					{
						$arrOptions[] = sprintf('<option value="%s"%s>%s</option>',
												 specialchars($arrOption['value']),
												 $this->isSelected($arrOption, $this->varValue[$i]),
												 $arrOption['label']);
					}
					else
					{
						$arrOptgroups = array();

						foreach ($arrOption as $arrOptgroup)
						{
							$arrOptgroups[] = sprintf('<option value="%s"%s>%s</option>',
													   specialchars($arrOptgroup['value']),
													   $this->isSelected($arrOptgroup, $this->varValue[$i]),
													   $arrOptgroup['label']);
						}

						$arrOptions[] = sprintf('<optgroup label="&nbsp;%s">%s</optgroup>', specialchars($strKey), implode('', $arrOptgroups));
					}
				}

				$arrFields[] = sprintf('<select name="%s[]" id="ctrl_%s" class="tl_text_%s"%s onfocus="Backend.getScrollOffset()">%s</select>%s',
								$this->strName,
								$this->strId.'_'.$i,
								$this->size,
								$this->getAttributes(),
								implode('', $arrOptions),
								$this->wizard);	
			}
			else
			{
				$arrFields[] = sprintf('<input type="%s" name="%s[]" id="ctrl_%s" class="tl_text_%s" value="%s"%s onfocus="Backend.getScrollOffset()">',
										$type,
										$this->strName,
										$this->strId.'_'.$i,
										$this->size,
										specialchars($this->varValue[$i]),
										$this->getAttributes());
			}
		}

		return sprintf('<div id="ctrl_%s"%s>%s</div>%s',
						$this->strId,
						(strlen($this->strClass) ? ' class="' . $this->strClass . '"' : ''),
						implode(' ', $arrFields),
						$this->wizard);
	}


	/**
	 * Check whether an option is selected
	 * @param array
	 * @return string
	 */
	protected function isSelected($arrOption, $varValue = '')
	{
		if (empty($varValue) && $arrOption['default'])
		{
			return $this->optionSelected(1, 1);
		}

		return $this->optionSelected($arrOption['value'], $varValue);
	}
}
