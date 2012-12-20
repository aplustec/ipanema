<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Banner Controller of Admin module
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

class Admin_BannerController extends App_Modules_Admin_Abstract
{
	/**
	 * The valid image types
	 * 
	 * @var string
	 */
	const VALID_IMAGE_TYPES = 'jpg,jpeg';
	/**
	 * The destination path of uploaded files
	 * 
	 * @var string
	 */
	protected $_destinationPath = null;
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
		
		$this->_destinationPath = PUBLIC_PATH . 'uploads/images/banner/';
	}
	/**
	 * The index Action
	 */
	function indexAction()
	{
		$banner = new BannerDAO();
		
		$this->view->banners = $banner->fetchAll();
		
		$this->render();
	}
	/**
	 * The new Action
	 */
	function newAction()
	{
		if(parent::isPost())
		{
			$banner = new BannerDAO();
			$filter = new Zend_Filter_StripTags();
			$transfer = new Zend_File_Transfer_Adapter_Http();
			$validator = $this->_helper->getHelper('FileValidator');
			
			$errors = 0;
			
			$transfer->setDestination($this->_destinationPath);
			
			$validator->addExtension(self::VALID_IMAGE_TYPES);
			
			$url = trim($filter->filter($this->_request->getPost('url')));
			
			$validator->setFileName( $transfer->getFileName() );
			
			if($validator->validate())
			{
				if($transfer->receive())
				{
					$ext = $validator->getExtension();
					
					$image = $this->_helper->generateFileName($ext);
					
					rename($transfer->getFileName() , $this->_destinationPath . $image );
				} else
				{
					$errors++;
					$this->_flashMessenger->addMessage('Ocorreu um erro ao enviar o arquivo ao servidor!');
				}
			} else
			{
				$errors++;
				$this->_flashMessenger->addMessage('Selecione um arquivo de imagem válido!');
			}
			
			if($errors == 0)
			{
				$data = array('image'=>$image,'url'=>$url);
				$result = $banner->insert($data);
				if($result)
				{
					$this->_flashMessenger->addMessage('Banner cadastrado com sucesso!');
					$this->_redirect('/admin/banner');
				} else
				{
					unlink($this->_destinationPath . $image);
					$this->_flashMessenger->addMessage('Ocorreu um erro ao salvar os dados no banco!');
					$this->_redirect('/admin/banner/new');
				}
			} else
			{
				$this->_redirect('/admin/banner/new');
			}
		} else
		{
			$this->render();
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$banner = new BannerDAO();
		
		$idbanner = (int)$this->_request->getParam('idbanner');
		
		$data = $banner->fetchRow("`idbanner`={$idbanner}");
		
		if($data)
		{
			$result = $banner->delete("`idbanner`={$idbanner}");
			if($result)
			{
				$result = unlink($this->_destinationPath . $data->image);
				if($result)
				{
					$this->_flashMessenger->addMessage('Banner removido com sucesso!');
				} else
				{
					$this->_flashMessenger->addMessage('Ocorreu um erro ao remover o arquivo de imagem do servidor!');
				}
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao remover os dados do banco!');
			}
		} else
		{
			$this->_flashMessenger->addMessage('Banner inexistente!');
		}
		
		$this->_redirect('/admin/banner');
	}
}