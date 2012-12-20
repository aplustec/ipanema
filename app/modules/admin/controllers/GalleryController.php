<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Gallery Controller of Admin module
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

class Admin_GalleryController extends App_Modules_Admin_Abstract
{
	/**
	 * The destination path
	 * 
	 * @var string
	 */
	protected $_destinationPath = null;
	/**
	 * The variation factor
	 * 
	 * @var array
	 */
	protected $_variationFactor = array();
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
		
		$this->_destinationPath = PUBLIC_PATH . 'uploads/images/gallery/';
		
		$this->_variationFactor = array('KSH','AOS','URH','LKS','NUC','TQK');
	}
	/**
	 * The index Action
	 */
	function indexAction()
	{
		Zend_Loader::loadClass('Zend_View_Helper_PaginationControl');
		
		$gallery = new GalleryDAO();
		
		$select = $gallery->select();
		
		$paginator = Zend_Paginator::factory($select);
		$paginator->setCurrentPageNumber($this->_request->getParam('p'));
		$paginator->setDefaultItemCountPerPage(12);
		$paginator->setDefaultPageRange(5);
		$paginator->setDefaultScrollingStyle('Sliding');
		
		$this->view->gallerys = $paginator;
		
		$this->render();
	}
	/**
	 * The new Action
	 */
	function newAction()
	{
		if(parent::isPost())
		{
			$gallery = new GalleryDAO();
			$photo = new PhotoDAO();
			$filter = new Zend_Filter_StripTags();
			$transfer = new Zend_File_Transfer_Adapter_Http();
			$validator = $this->_helper->getHelper('FileValidator');
			
			$transfer->setDestination($this->_destinationPath);
			
			$validator->addExtension('jpg,jpeg');
			
			$title = trim($filter->filter($this->_request->getPost('title')));
			$description = trim($filter->filter($this->_request->getPost('description')));
			
			$data = array('title'=>$title,'description'=>$description);
			$idgallery = $gallery->insert($data);
			if($idgallery)
			{
				$files = $transfer->getFileInfo();
				foreach($files as $file => $info)
				{
					$info = (object)$info;
					$validator->setFileName($info->name);
					if($validator->validate())
					{
						if($transfer->receive($file))
						{
							$ext = $validator->getExtension();
							$factor = $this->_variationFactor[rand(0,5)] . '_' . $idgallery;
							$image = $this->_helper->generateFileName($ext,$factor,'start',true);
							rename($transfer->getFileName($file) , $this->_destinationPath . $image);
							$data = array('idgallery'=>$idgallery,'image'=>$image);
							
							$result = $photo->insert($data);
							if(!$result)
							{
								$this->_flashMessenger->addMessage('Ocorreu um erro ao salvar a imagem ' . $info->name . ' no banco de dados!');
							}
						} else
						{
							$this->_flashMessenger->addMessage('Ocorreu um erro ao enviar a imagem ' . $info->name . ' ao servidor!');
						}
					} else
					{
						$this->_flashMessenger->addMessage('O arquivo ' . $info->name . ' é inválido!');
					}
				}
				
				$this->_flashMessenger->addMessage('Galeria cadastrada com sucesso!');
				$this->_redirect('/admin/gallery/edit/' . $idgallery);
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao cadastrar a galeria!');
				$this->_redirect('/admin/gallery/new');
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
			$gallery = new GalleryDAO();
			$photo = new PhotoDAO();
			$filter = new Zend_Filter_StripTags();
			$transfer = new Zend_File_Transfer_Adapter_Http();
			$validator = $this->_helper->getHelper('FileValidator');
				
			$transfer->setDestination($this->_destinationPath);
				
			$validator->addExtension('jpg,jpeg');
				
			$title = trim($filter->filter($this->_request->getPost('title')));
			$description = trim($filter->filter($this->_request->getPost('description')));
			
			$idgallery = (int)$this->_request->getParam('idgallery');
				
			$data = array('title'=>$title,'description'=>$description);
			$gallery->update($data,"`idgallery`={$idgallery}");
			
			$files = $transfer->getFileInfo();
			foreach($files as $file => $info)
			{
				$info = (object)$info;
				$validator->setFileName($info->name);
				if($validator->validate())
				{
					if($transfer->receive($file))
					{
						$ext = $validator->getExtension();
						$factor = $this->_variationFactor[rand(0,5)] . '_' . $idgallery;
						$image = $this->_helper->generateFileName($ext,$factor,'start',true);
						rename($transfer->getFileName($file) , $this->_destinationPath . $image);
						$data = array('idgallery'=>$idgallery,'image'=>$image);
			
						$result = $photo->insert($data);
						if(!$result)
						{
							$this->_flashMessenger->addMessage('Ocorreu um erro ao salvar a imagem ' . $info->name . ' no banco de dados!');
						}
					} else
					{
						$this->_flashMessenger->addMessage('Ocorreu um erro ao enviar a imagem ' . $info->name . ' ao servidor!');
					}
				} else
				{
					$this->_flashMessenger->addMessage('O arquivo ' . $info->name . ' é inválido!');
				}
			}
			
			$this->_flashMessenger->addMessage('Galeria atualizada com sucesso!');
			$this->_redirect('/admin/gallery/edit/' . $idgallery);	
		} else
		{
			$gallery = new GalleryDAO();
			$photo = new PhotoDAO();
			
			$idgallery = (int)$this->_request->getParam('idgallery');
			
			$this->view->gallery = $gallery->fetchRow("`idgallery`={$idgallery}");
			$this->view->photos = $photo->fetchAll("`idgallery`={$idgallery}");
			
			$this->render();
		}
	}
	/**
	 * The removephoto Action
	 */
	function removephotoAction()
	{
		$photo = new PhotoDAO();
		
		$idphoto = (int)$this->_request->getParam('idphoto');
		
		$data = $photo->fetchRow("`idphoto`={$idphoto}");
		if($data)
		{
			$result = $photo->delete("`idphoto`={$idphoto}");
			if($result)
			{
				$result = unlink($this->_destinationPath . $data->image);
				if($result)
				{
					$this->_flashMessenger->addMessage('Imagem removida com sucesso!');
				} else
				{
					$this->_flashMessenger->addMessage('Ocorreu um erro ao remover o arquivo de imagem do servidor!');
				}
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao remover os dados do banco!');
			}
			
			$this->_redirect('/admin/gallery/edit/' . $data->idgallery);
		} else
		{
			$this->_flashMessenger->addMessage('Imagem não encontrada!');
			$this->_redirect('/admin/gallery');
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$gallery = new GalleryDAO();
		$photo = new PhotoDAO();
		
		$idgallery = (int)$this->_request->getParam('idgallery');
		
		$data = $gallery->fetchRow("`idgallery`={$idgallery}");
		if($data)
		{
			$result = $gallery->delete("`idgallery`={$idgallery}");
			if($result)
			{
				$photos = $photo->fetchAll("`idgallery`={$idgallery}");
				foreach($photos as $row)
				{
					unlink( $this->_destinationPath . $row->image );
					$photo->delete("`idphoto`={$row->idphoto}");
				}
				
				$this->_flashMessenger->addMessage('Galeria removida com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao remover a galeria do sistema!');
			}
		} else
		{
			$this->_flashMessenger->addMessage('Galeria não encontrada!');
		}
		
		$this->_redirect('/admin/gallery');
	}
}