<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * The Admin View Helper for get the components of module
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

class Admin_View_Helper_GetComponentsOfModule extends Zend_View_Helper_Abstract
{
	/**
	 * Method to get the components
	 * 
	 * @param integer $idmodule
	 * @return Zend_Db_Table_Rowset_Abstract
	 */
	function getComponentsOfModule( $idmodule )
	{
		$obj = new ComponentDAO();
		$data = $obj->fetchAll("`idmodule`={$idmodule}");
		return $data;
	}
}