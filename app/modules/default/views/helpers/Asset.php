<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * This is a Zend View Helper for import assets in view scripts
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

class Zend_View_Helper_Asset extends Zend_View_Helper_Abstract
{
	/**
	 * Method to import the assets
	 * 
	 * @param string $filename
	 * @param string $folder
	 */
	function asset( $filename , $folder )
	{
		echo $this->view->assetUrl . $this->view->currentModule . '/' . $folder . '/' . $filename;
	}
}