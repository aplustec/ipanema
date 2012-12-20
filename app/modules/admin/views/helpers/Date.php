<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * The Admin View Helper for convert the date format
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

class Admin_View_Helper_Date extends Zend_View_Helper_Abstract
{
	/**
	 * Method to convert the date
	 * 
	 * @param string $date
	 * @param string $to Optional; common or sql
	 * @return string
	 */
	function date( $date , $to = 'common')
	{
		switch($to)
		{
			case 'sql' : 
				$date = explode('/',$date);
				$date = array_reverse($date);
				$date = implode('-', $date);
				break;
			case 'common' : 
				$date = explode('-',$date);
				$date = array_reverse($date);
				$date = implode('/',$date);
				break;
			default :
				break;
		}
		
		return $date;
	}
}