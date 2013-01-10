<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Doubts Controller of Admin Module
 * 
 * @category Controllers
 * @package App/Modules/Admin
 * @subpackage Controllers
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2013
 * @license http://www.devsdmf.net/license/general.txt
 * @copyright Aplus Tecnologia e Engenharia LTDA | devSDMF Software Development (c)
 *
 */

class Admin_DoubtsController extends App_Modules_Admin_Abstract
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
		$doubts = new DoubtsDAO();
		
		$this->view->doubts = $doubts->fetchAll();
		
		$this->render();
	}
	/**
	 * The new Action
	 */
	function newAction()
	{
		if(parent::isPost())
		{
			$doubts = new DoubtsDAO();
			$filter = new Zend_Filter_StripTags();
			
			$question = trim($filter->filter($this->_request->getPost('question')));
			$answer = trim($filter->filter($this->_request->getPost('answer')));
			
			$data = array('question'=>$question,'answer'=>$answer);
			$result = $doubts->insert($data);
			if($result)
			{
				$this->_flashMessenger->addMessage('Dúvida cadastrada com sucesso!');
				$this->redirect('/admin/doubts');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao inserir os dados no banco!');
				$this->redirect('/admin/doubts/new');
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
			$doubts = new DoubtsDAO();
			$filter = new Zend_Filter_StripTags();
			
			$iddoubts = (int)$this->getParam('iddoubts');
			
			$question = trim($filter->filter($this->_request->getPost('question')));
			$answer = trim($filter->filter($this->_request->getPost('answer')));
				
			$data = array('question'=>$question,'answer'=>$answer);
			$result = $doubts->update($data, "`iddoubts`={$iddoubts}");
			if($result)
			{
				$this->_flashMessenger->addMessage('Dúvida atualizada com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao salvar os dados no banco!');
			}
			
			$this->redirect('/admin/doubts/edit/' . $iddoubts);
		} else
		{
			$doubts = new DoubtsDAO();
			
			$iddoubts = (int)$this->getParam('iddoubts');
			
			$this->view->doubts = $doubts->fetchRow("`iddoubts`={$iddoubts}");
			
			$this->render();
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$doubts = new DoubtsDAO();
		
		$iddoubts = (int)$this->getParam('iddoubts');
		
		$result = $doubts->delete("`iddoubts`={$iddoubts}");
		if($result)
		{
			$this->_flashMessenger->addMessage('Dúvida removida com sucesso!');
		} else
		{
			$this->_flashMessenger->addMessage('Ocorreu um erro ao remover os dados do banco!');
		}
		
		$this->redirect('/admin/doubts');
	}
}