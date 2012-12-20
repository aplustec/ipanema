<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Extension Controller of Admin module
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

class Admin_ExtensionController extends App_Modules_Admin_Abstract
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
		$course = new CourseDAO();
		
		$this->view->courses = $course->fetchAll();
		
		$this->render();
	}
	/**
	 * The new Action
	 */
	function newAction()
	{
		if(parent::isPost())
		{
			$course = new CourseDAO();
			$filter = new Zend_Filter_StripTags();
				
			$name = trim($filter->filter($this->_request->getPost('name')));
			$description = $this->_request->getPost('description');
				
			$data = array('name'=>$name,'description'=>$description);
			$result = $course->insert($data);
			if($result)
			{
				$this->_flashMessenger->addMessage('Curso cadastrado com sucesso!');
				$this->redirect('/admin/extension');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao inserir os dados no banco!');
				$this->redirect('/admin/extension/new');
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
			$course = new CourseDAO();
			$filter = new Zend_Filter_StripTags();
			
			$name = trim($filter->filter($this->_request->getPost('name')));
			$description = $this->_request->getPost('description');
			
			$idcourse = (int)$this->getParam('idcourse');
			
			$data = array('name'=>$name,'description'=>$description);
			$result = $course->update($data, "`idcourse`={$idcourse}");
			if($result)
			{
				$this->_flashMessenger->addMessage('Curso atualizado com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao salvar os dados no banco!');
			}
			
			$this->redirect('/admin/extension/edit/' . $idcourse);
		} else
		{
			$course = new CourseDAO();
			
			$idcourse = (int)$this->getParam('idcourse');
			
			$this->view->course = $course->fetchRow("`idcourse`={$idcourse}");
			
			$this->render();
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$course = new CourseDAO();
		
		$idcourse = (int)$this->getParam('idcourse');
		
		$data = $course->fetchRow("`idcourse`={$idcourse}");
		if($data)
		{
			$result = $course->delete("`idcourse`={$idcourse}");
			if($result)
			{
				$this->_flashMessenger->addMessage('Curso removido com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao remover os dados do banco!');
			}
		} else
		{
			$this->_flashMessenger->addMessage('Curso não encontrado!');
		}
		
		$this->redirect('/admin/extension');
	}
}