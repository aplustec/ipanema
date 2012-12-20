<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * The Admin View Helper for convert dimensions of iframe 
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

class Admin_View_Helper_ConvertIframeDimensions extends Zend_View_Helper_Abstract
{
	/**
	 * Method to convert the iframe dimensions
	 * 
	 * @param string $iframe
	 * @param integer $currentWidth
	 * @param integer $currentHeight
	 * @param integer $width
	 * @param integer $height
	 * @return mixed
	 */
	function convertIframeDimensions( $iframe , $currentWidth , $currentHeight , $width , $height )
	{
		$iframe = str_replace($currentWidth, $width, $iframe);
		$iframe = str_replace($currentHeight, $height, $iframe);
		return $iframe;
	}
}