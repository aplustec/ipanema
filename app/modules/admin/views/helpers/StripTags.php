<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * @see Zend_Filter_StripTags
 */
require_once 'Zend/Filter/StripTags.php';

/**
 * The Admin View Helper for strip html tags from string
 * 
 * @category Helpers
 * @package App/Modules/Admin/Views
 * @subpackage Helpers
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2012
 * @license http://www.devsdmf.net/license/general.txt
 * @copyright Aplus Tecnologia e Engenharia LTDA | devSDMF Software Development (c)
 *
 */

class Admin_View_Helper_StripTags extends Zend_View_Helper_Abstract
{
	/**
	 * Method to strip tags
	 * 
	 * @param string $value
	 * @return string
	 */
	function stripTags( $value )
	{
		$obj = new Zend_Filter_StripTags();
		$value = $obj->filter($value);
		return $value;
	}
}