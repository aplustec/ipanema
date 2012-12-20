<?php

/**
 * @see Zend_Controller_Action_Helper_Abstract
 */
require_once 'Zend/Controller/Action/Helper/Abstract.php';

/**
 * The Action Helper for validate the iframe dimensions
 * 
 * @category Helpers
 * @package App/Plugins
 * @subpackage Helpers
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2012
 * @license http://www.devsdmf.net/license/general.txt
 * @copyright Aplus Tecnologia e Engenharia LTDA | devSDMF Software Development (c)
 *
 */

class Helper_ValidateIframeDimension extends Zend_Controller_Action_Helper_Abstract
{
	/**
	 * The iframe
	 * 
	 * @var string
	 */
	protected $_iframe = null;
	/**
	 * The width
	 * 
	 * @var integer
	 */
	protected $_width = null;
	/**
	 * The height
	 * 
	 * @var integer
	 */
	protected $_height = null;
	/**
	 * Constructor
	 */
	function __construct(){}
	/**
	 * Method to set the iframe content
	 * 
	 * @param string $iframe
	 */
	function setIframe( $iframe )
	{
		if(is_string($iframe))
			$this->_iframe = $iframe;
	}
	/**
	 * Method to set the width of iframe
	 * 
	 * @param integer $width
	 */
	function setWidth( $width )
	{
		if(is_int($width))
			$this->_width = $width;
	}
	/**
	 * Method to set the height of iframe
	 * 
	 * @param height $height
	 */
	function setHeigth( $height )
	{
		if(is_int($height))
			$this->_height = $height;
	}
	/**
	 * Method to get the current iframe content
	 * 
	 * @return string
	 */
	function getIframe()
	{
		return $this->_iframe;
	}
	/**
	 * Method to get the current width value
	 * 
	 * @return number
	 */
	function getWidth()
	{
		return $this->_width;
	}
	/**
	 * Methot to get the current height value
	 * 
	 * @return number
	 */
	function getHeight()
	{
		return $this->_height;
	}
	/**
	 * Method to validate the iframe
	 * 
	 * @param string $iframe Optional
	 * @param integer $width Optional
	 * @param integer $height Optional
	 * @return boolean
	 */
	function validate( $iframe = null , $width = null , $height = null )
	{
		if(!is_null($iframe))
			$this->setIframe($iframe);
		
		if(!is_null($width))
			$this->setWidth($width);
		
		if(!is_null($height))
			$this->setHeigth($height);
		
		if($this->validateHeight() === true && $this->validateWidth() === true)
			return true;
		else
			return false;
	}
	/**
	 * Method to validate the width
	 * 
	 * @return boolean
	 */
	protected function validateWidth()
	{
		if(strpos($this->_iframe, 'width="' . $this->_width . '"') === false)
			return false;
		else
			return true;
	}
	/**
	 * Method to validate the height 
	 * 
	 * @return boolean
	 */
	protected function validateHeight()
	{
		if(strpos($this->_iframe, 'height="' . $this->_height . '"') === false)
			return false;
		else
			return true;
	}
	/**
	 * Strategy pattern to allow direct access by controller 
	 * 
	 * @param string $iframe
	 * @param integer $width
	 * @param integer $height
	 * @return boolean
	 */
	function direct( $iframe , $width , $height )
	{
		return $this->validate($iframe,$width,$height);
	}
}