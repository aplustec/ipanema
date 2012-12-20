<?php

/**
 * @see App_Modules_Default_Abstract
 */
require_once 'app/modules/default/Abstract.php';

/**
 * The Media Controller of Default module
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

class MediaController extends App_Modules_Default_Abstract
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
	 * The videos Action
	 */
	function videosAction()
	{
		Zend_Loader::loadClass('Zend_View_Helper_PaginationControl');
		
		$video = new VideoDAO();
		
		$select = $video->select();
		
		$paginator = Zend_Paginator::factory($select);
		$paginator->setCurrentPageNumber($this->_request->getParam('p'));
		$paginator->setDefaultItemCountPerPage(3);
		$paginator->setDefaultPageRange(5);
		$paginator->setDefaultScrollingStyle('Sliding');
		
		$this->view->paginator = $paginator;
		
		$this->render();
	}
	/**
	 * The video Action
	 */
	function videoAction()
	{
		$video = new VideoDAO();
		
		$idvideo = (int)$this->_request->getParam('idvideo');
		
		$this->view->video = $video->fetchRow("`idvideo`={$idvideo}");
		
		$this->render();
	}
	/**
	 * The gallery Action
	 */
	function galleryAction()
	{
		Zend_Loader::loadClass('Zend_View_Helper_PaginationControl');
		
		$gallery = new GalleryDAO();
		
		$select = $gallery->select();
		
		$paginator = Zend_Paginator::factory($select);
		$paginator->setCurrentPageNumber($this->_request->getParam('p'));
		$paginator->setDefaultItemCountPerPage(3);
		$paginator->setDefaultPageRange(5);
		$paginator->setDefaultScrollingStyle('Sliding');
		
		$this->view->paginator = $paginator;
		
		$this->render();
	}
	/**
	 * The photos Action
	 */
	function photosAction()
	{
		$gallery = new GalleryDAO();
		$photo = new PhotoDAO();
		
		$idgallery = (int)$this->_request->getParam('idgallery');
		
		$this->view->gallery = $gallery->fetchRow("`idgallery`={$idgallery}");
		$this->view->photos = $photo->fetchAll("`idgallery`={$idgallery}");
		$this->render();
	}
}