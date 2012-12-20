<?php

/**
 * @see App_Modules_Default_Abstract
 */
require_once 'app/modules/default/Abstract.php';

/**
 * The News Controller of Default module
 * 
 * @category Controllers
 * @package App/Modules/Default
 * @subpackage Controllers
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2012
 * @license http://www.devsdmf.net/license/general.txt
 * @copyright Aplus Tecnologia e Engenharia LTDA | devSDMF Software Development (c)
 *
 */

class NewsController extends App_Modules_Default_Abstract
{
	/**
	 * Method to initialize the controller
	 * 
	 * @see App_Modules_Default_Abstract::abstractInit()
	 * @see App_Modules_Default_Abstract::flashMessengerInit()
	 * @see Zend_Controller_Action::init()
	 */
	function init()
	{
		parent::abstractInit();
		parent::flashMessengerInit();
	}
	/**
	 * The index Action
	 */
	function indexAction()
	{
		Zend_Loader::loadClass('Zend_View_Helper_PaginationControl');
		
		$news = new NewsDAO();
		
		$select = $news->select()->order("idnews Desc");
		
		$paginator = Zend_Paginator::factory($select);
		$paginator->setCurrentPageNumber($this->_request->getParam('p'));
		$paginator->setDefaultItemCountPerPage(5);
		$paginator->setDefaultPageRange(7);
		$paginator->setDefaultScrollingStyle('Sliding');
		
		$this->view->paginator = $paginator;
		
		$this->render();
	}
	/**
	 * The details Action
	 */
	function detailsAction()
	{
		$news = new NewsDAO();
		
		$factor = $this->_request->getParam('factor');
		$factor = explode(',,',$factor);
		$idnews = $factor[0];
		
		$this->view->news = $news->fetchRow("`idnews`={$idnews}");
		
		$this->render();
	}
}