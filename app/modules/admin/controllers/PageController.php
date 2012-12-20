<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Page Controller of Admin module
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

class Admin_PageController extends App_Modules_Admin_Abstract
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
		$this->_redirect('/admin');
	}
	/**
	 * The process Action
	 */
	function processAction()
	{
		if(parent::isPost())
		{
			$content = new ContentDAO();
			$filter = new Zend_Filter_StripTags();
			$transfer = new Zend_File_Transfer_Adapter_Http();
			$validator = $this->_helper->getHelper('FileValidator');
			
			$destinationPath = PUBLIC_PATH . 'uploads/images/content/';
			
			$transfer->setDestination($destinationPath);
			
			$validator->addExtension('jpg,jpeg');
			
			$title = trim($filter->filter($this->_request->getPost('title')));
			if($title != '')
			{
				$result = $content->update(array('value'=>$title),"`param`='PROCESS_TITLE'");
				if($result)
				{
					$this->_flashMessenger->addMessage('Título atualizado!');
				}
			}		
			
			if(is_string($transfer->getFileName()))
			{
				$validator->setFileName($transfer->getFileName());
				if($validator->validate())
				{
					if($transfer->receive())
					{
						$ext = $validator->getExtension();
						$image = $this->_helper->generateFileName($ext,'process','start',true);
						rename($transfer->getFileName(), $destinationPath . $image);
						
						$result = $content->update(array('value'=>$image), "`param`='PROCESS_IMAGE'");
						if($result)
						{
							$this->_flashMessenger->addMessage('Imagem atualizada!');
						}
					}
				}
			}
			
			$this->_redirect('/admin/page/process');
		} else
		{
			$this->render();
		}
	}
}