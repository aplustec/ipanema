<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Video Controller of Admin module
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

class Admin_VideoController extends App_Modules_Admin_Abstract
{
	/**
	 * The valid iframe width
	 * 
	 * @var integer
	 */
	const VALID_IFRAME_WIDTH = 640;
	/**
	 * The valid iframe height
	 * 
	 * @var integer
	 */
	const VALID_IFRAME_HEIGHT = 360;
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
		$video = new VideoDAO();
		
		$this->view->videos = $video->fetchAll();
		$this->view->defaultIframeWidth = self::VALID_IFRAME_WIDTH;
		$this->view->defaultIframeHeight = self::VALID_IFRAME_HEIGHT;
		
		$this->render();
	}
	/**
	 * The new Action
	 */
	function newAction()
	{
		if(parent::isPost())
		{
			$video = new VideoDAO();
			$filter = new Zend_Filter_StripTags();
			
			$title = trim($filter->filter($this->_request->getPost('title')));
			$description = trim($filter->filter($this->_request->getPost('description')));
			$iframe = trim($this->_request->getPost('iframe'));
			
			if($this->_helper->validateIframeDimension($iframe,self::VALID_IFRAME_WIDTH,self::VALID_IFRAME_HEIGHT))
			{
				$data = array('title'=>$title,'description'=>$description,'iframe'=>$iframe);
				$result = $video->insert($data);
				if($result)
				{
					$this->_flashMessenger->addMessage('Video cadastrado com sucesso!');
					$this->_redirect('/admin/video');
				} else
				{
					$this->_flashMessenger->addMessage('Ocorreu um erro ao cadastrar o video!');
					$this->_redirect('/admin/video/new');
				}
			} else 
			{
				$this->_flashMessenger->addMessage('Iframe com dimensões incorretas!');
				$this->_redirect('/admin/video/new');
			}
		} else
		{
			$this->render();
		}
	}
	/**
	 * The edit Action
	 */
	function editAction()
	{
		if(parent::isPost())
		{
			$video = new VideoDAO();
			$filter = new Zend_Filter_StripTags();
			
			$idvideo = (int)$this->_request->getParam('idvideo');
				
			$title = trim($filter->filter($this->_request->getPost('title')));
			$description = trim($filter->filter($this->_request->getPost('description')));
			$iframe = trim($this->_request->getPost('iframe'));
				
			if($this->_helper->validateIframeDimension($iframe,self::VALID_IFRAME_WIDTH,self::VALID_IFRAME_HEIGHT))
			{
				$data = array('title'=>$title,'description'=>$description,'iframe'=>$iframe);
				$result = $video->update($data,"`idvideo`={$idvideo}");
				if($result)
				{
					$this->_flashMessenger->addMessage('Video atualizado com sucesso!');
					$this->_redirect('/admin/video');
				} else
				{
					$this->_flashMessenger->addMessage('Ocorreu um erro ao atualizar o video!');
					$this->_redirect('/admin/video/edit/' . $idvideo);
				}
			} else
			{
				$this->_flashMessenger->addMessage('Iframe com dimensões incorretas!');
				$this->_redirect('/admin/video/edit/' . $idvideo);
			}
		} else
		{
			$video = new VideoDAO();
			
			$idvideo = (int)$this->_request->getParam('idvideo');
			
			$this->view->video = $video->fetchRow("`idvideo`={$idvideo}");
			
			$this->render();
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$video = new VideoDAO();
		
		$idvideo = (int)$this->_request->getParam('idvideo');
		
		$data = $video->fetchRow("`idvideo`={$idvideo}");
		if($data)
		{
			$result = $video->delete("`idvideo`={$idvideo}");
			if($result)
			{
				$this->_flashMessenger->addMessage('Video removido com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao remover o video!');
			}
		} else
		{
			$this->_flashMessenger->addMessage('Video não encontrado na base de dados!');
		}
		
		$this->_redirect('/admin/video');
	}
}