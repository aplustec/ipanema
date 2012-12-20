<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The News Controller of Admin module
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

class Admin_NewsController extends App_Modules_Admin_Abstract
{
	const TT_CONSUMER_KEY = 'CcKaGlA4kJgTagswDJfBw';
	
	const TT_CONSUMER_SECRET = 'mCehVE6ZpdIYAs2eLw0DvQhWkAcnVg9jmHfv988l0';
	
	const TT_OAUTH_ACCESS_TOKEN = '459472105-hXH4Jh8nc3tOVfFm6vmd0Yw0PwUge7XV4C2M9U';
	
	const TT_OAUTH_ACCESS_TOKEN_SECRET = 'eiz6Bezj2vut7gWlMJUsYRJTmNkEgR421kA1hgX9bM';
	/**
	 * The destination path to uploaded files
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
		
		$this->_destinationPath = PUBLIC_PATH . 'uploads/images/news/';
	}
	/**
	 * The index Action
	 */
	function indexAction()
	{
		Zend_Loader::loadClass('Zend_View_Helper_PaginationControl');
		
		$news = new NewsDAO();
		
		$select = $news->select();
		
		$paginator = Zend_Paginator::factory($select);
		$paginator->setCurrentPageNumber($this->_request->getParam('p'));
		$paginator->setDefaultItemCountPerPage(7);
		$paginator->setDefaultPageRange(5);
		$paginator->setDefaultScrollingStyle('Sliding');
		
		$this->view->paginator = $paginator;
		
		$this->render();
	}
	/**
	 * The new Action
	 */
	function newAction()
	{
		if(parent::isPost())
		{
			$news = new NewsDAO();
			$filter = new Zend_Filter_StripTags();
			$transfer = new Zend_File_Transfer_Adapter_Http();
			$validator = $this->_helper->getHelper('FileValidator');
			
			$errors = 0;
			
			$transfer->setDestination($this->_destinationPath);
			
			$validator->addExtension('jpg,jpeg');
			
			$title = trim($filter->filter($this->_request->getPost('title')));
			$content = trim($this->_request->getPost('content'));
			
			if(is_string($transfer->getFileName()))
			{
				$validator->setFileName($transfer->getFileName());
				if($validator->validate())
				{
					if($transfer->receive())
					{
						$ext = $validator->getExtension();
						$image = $this->_helper->generateFileName($ext,null,null,true);
						rename( $transfer->getFileName() , $this->_destinationPath . $image );
					} else
					{
						$errors++;
						$this->_flashMessenger->addMessage('Ocorreu um erro ao enviar a imagem ao servidor!');
					}
				} else
				{
					$errors++;
					$this->_flashMessenger->addMessage('O arquivo de imagem enviado é inválido!');
				}
			} else 
			{
				$image = null;
			}
			
			if($errors == 0)
			{
				$data = array('title'=>$title,'content'=>$content,'image'=>$image,'date'=>date("Y-m-d"));
				$result = $news->insert($data);
				if($result)
				{
					$this->_flashMessenger->addMessage('Notícia cadastrada com sucesso!');
					
					$url = 'http://www.faculdadeipanema.com.br/noticia/' . $result;
					$status = "Nova Noticia: " . utf8_encode($title) . " " . $url;
					$this->postToTwitter($status);
					
					$this->_redirect('/admin/news');
				} else
				{
					if($image != null)
					{
						unlink($this->_destinationPath . $image);
					}
					$this->_flashMessenger->addMessage('Ocorreu um erro ao salvar os dados no banco de dados!');
					$this->_redirect('/admin/news/new');
				}
			} else
			{
				$this->_redirect('/admin/news/new');
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
			$news = new NewsDAO();
			$filter = new Zend_Filter_StripTags();
			$transfer = new Zend_File_Transfer_Adapter_Http();
			$validator = $this->_helper->getHelper('FileValidator');
				
			$errors = 0;
				
			$transfer->setDestination($this->_destinationPath);
				
			$validator->addExtension('jpg,jpeg');
			
			$idnews = (int)$this->_request->getParam('idnews');
			
			$old = $news->fetchRow("`idnews`={$idnews}");
				
			$title = trim($filter->filter($this->_request->getPost('title')));
			$content = trim($this->_request->getPost('content'));
				
			if(is_string($transfer->getFileName()))
			{
				$validator->setFileName($transfer->getFileName());
				if($validator->validate())
				{
					if($transfer->receive())
					{
						$ext = $validator->getExtension();
						$image = $this->_helper->generateFileName($ext,null,null,true);
						rename( $transfer->getFileName() , $this->_destinationPath . $image );
					} else
					{
						$errors++;
						$this->_flashMessenger->addMessage('Ocorreu um erro ao enviar a imagem ao servidor!');
					}
				} else
				{
					$errors++;
					$this->_flashMessenger->addMessage('O arquivo de imagem enviado é inválido!');
				}
			} else
			{
				$image = $old->image;
			}
				
			if($errors == 0)
			{
				$data = array('title'=>$title,'content'=>$content,'image'=>$image);
				$result = $news->update($data,"`idnews`={$idnews}");
				if($result)
				{
					if($image != $old->image)
					{
						unlink($this->_destinationPath . $old->image); 
					}
					$this->_flashMessenger->addMessage('Notícia atualizada com sucesso!');
					$this->_redirect('/admin/news/edit/' . $idnews);
				} else
				{
					if($image != $old->image)
					{
						unlink($this->_destinationPath . $image);
					}
					$this->_flashMessenger->addMessage('Ocorreu um erro ao salvar os dados no banco de dados!');
					$this->_redirect('/admin/news/edit/' . $idnews);
				}
			} else
			{
				$this->_redirect('/admin/news/edit/' . $idnews);
			}
		} else
		{
			$news = new NewsDAO();
			
			$idnews = (int)$this->_request->getParam('idnews');
			
			$this->view->news = $news->fetchRow("`idnews`={$idnews}");
			
			$this->render();
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$news = new NewsDAO();
		
		$idnews = (int)$this->_request->getParam('idnews');
		
		$data = $news->fetchRow("`idnews`={$idnews}");
		if($data)
		{
			$result = $news->delete("`idnews`={$idnews}");
			if($result)
			{
				unlink($this->_destinationPath . $data->image);
				$this->_flashMessenger->addMessage('Noticia removida com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao remover a notícia do sistema!');
			}
		} else
		{
			$this->_flashMessenger->addMessage('Notícia não encontrada!');
		}
		
		$this->_redirect('/admin/news');
	}
	/**
	 * Method to post a news on twitter
	 * @param string $status
	 */
	protected function postToTwitter($status)
	{
		Zend_Loader::loadClass('Twitter');
		$twitter = new Twitter(self::TT_CONSUMER_KEY, self::TT_CONSUMER_SECRET);
		$twitter->setOAuthToken(self::TT_OAUTH_ACCESS_TOKEN);
		$twitter->setOAuthTokenSecret(self::TT_OAUTH_ACCESS_TOKEN_SECRET);
		$twitter->statusesUpdate($status);
	}
}