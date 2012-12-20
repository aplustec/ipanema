<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * The Zend View Helper for convert arabic numbers in roman algarism
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

class Zend_View_Helper_InRoman extends Zend_View_Helper_Abstract
{
	/**
	 * Method to convert the number in roman algarism
	 * 
	 * @param integer $num
	 * @return string
	 */
	function inRoman( $num )
	{
		$n = intval($num);
		$result = '';
		$lookup = array
		(
				'M' 	=> 1000,
				'CM' 	=> 900,
				'D' 	=> 500,
				'CD' 	=> 400,
				'C' 	=> 100,
				'XC' 	=> 90,
				'L' 	=> 50,
				'XL' 	=> 40,
				'X' 	=> 10,
				'IX' 	=> 9,
				'V' 	=> 5,
				'IV' 	=> 4,
				'I' 	=> 1
		);
		foreach ($lookup as $roman => $value):
			$matches = intval($n / $value);
			$result .= str_repeat($roman, $matches);
			$n = $n % $value;
		endforeach;
		
		return $result;
	}
}