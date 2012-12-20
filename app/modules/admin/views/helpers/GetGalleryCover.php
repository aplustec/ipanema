<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * The Admin View Helper for get the cover of gallery album
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

class Admin_View_Helper_GetGalleryCover extends Zend_View_Helper_Abstract
{
	/**
	 * Method to get the cover of gallery
	 * 
	 * @param integer $idgallery
	 * @return Ambigous <Zend_Db_Table_Row_Abstract, NULL, unknown>
	 */
	function getGalleryCover( $idgallery )
	{
		$obj = new PhotoDAO();
		$data = $obj->fetchRow("`idgallery`={$idgallery}");
		return $data;
	}
}