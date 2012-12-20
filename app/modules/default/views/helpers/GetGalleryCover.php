<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * The Zend View Helper for get the gallery cover
 * 
 * @category Helpers
 * @package App/Modules/Default/Views
 * @subpackage Helpers
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2012
 * @license http://www.devsdmf.net/license/general.txt
 * @copyright Aplus Tecnologia e Engenharia LTDA | devSDMF Software Development (c)
 *
 */

class Zend_View_Helper_GetGalleryCover extends Zend_View_Helper_Abstract
{
	/**
	 * Method to get the cover of gallery
	 * 
	 * @param integer $idgallery
	 * @return string
	 */
	function getGalleryCover( $idgallery )
	{
		$obj = new PhotoDAO();
		$data = $obj->fetchRow("`idgallery`={$idgallery}");
		return $data->image;
	}
}