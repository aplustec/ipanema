<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require 'app/modules/admin/Abstract.php';

/**
 * The Index Controller of Admin module
 * 
 * @category Controllers
 * @package App/Modules/Admin
 * @subpackage Controllers
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2012
 * @license http://www.devsdmf.net/license/general.txt
 * @copyright Aplus Tecnologia e Engenharia LTDA | devSDMF Software Development (c)
 *
 */

class Admin_IndexController extends App_Modules_Admin_Abstract
{
	/**
	 * Method to initialize the controller
	 * 
	 * @see App_Modules_Admin_Abstract::lock()
	 * @see App_Modules_Admin_Abstract::abstractInit()
	 * @see App_Modules_Admin_Abstract::flashMessengerInit()
	 * @see Zend_Controller_Action::init()
	 */
	function init()
	{
		parent::lock();
		parent::abstractInit();
		parent::flashMessengerInit();
	}
	/**
	 * The index Action
	 */
	function indexAction()
	{
		$banner = new BannerDAO();
		$news = new NewsDAO();
		
		$this->view->banners = $banner->fetchAll(null,"idbanner Desc",3);
		$this->view->news = $news->fetchAll(null,"idnews Desc",4);
		
		$this->render();
	}
}