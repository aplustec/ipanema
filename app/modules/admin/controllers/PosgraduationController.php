<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Posgraduation Controller of Admin module
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

class Admin_PosgraduationController extends App_Modules_Admin_Abstract
{
	/**
	 * The max components of posgraduation course
	 * 
	 * @var integer
	 */
	const COUNT_COMPONENTS = 20;
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
		$pos = new PosgraduationDAO();
		$this->view->courses = $pos->fetchAll();
		$this->render();
	}
	/**
	 * The new Action
	 */
	function newAction()
	{
		if(parent::isPost())
		{
			$pos = new PosgraduationDAO();
			$component = new PoscomponentDAO();
			$filter = new Zend_Filter_StripTags();
			
			$name = trim($filter->filter($this->_request->getPost('name')));
			$objective = trim($filter->filter($this->_request->getPost('objective')));
			$area = trim($filter->filter($this->_request->getPost('area')));
			$public = trim($filter->filter($this->_request->getPost('public')));
			$metodology = trim($filter->filter($this->_request->getPost('metodology')));
			$avaliation = trim($filter->filter($this->_request->getPost('avaliation')));
			$workload = trim($filter->filter($this->_request->getPost('workload')));
			
			$data = array('name'=>$name,'objective'=>$objective,'area'=>$area,'public'=>$public,'metodology'=>$metodology,'avaliation'=>$avaliation,'workload'=>$workload);
			$result = $pos->insert($data);
			
			if($result)
			{
				for($i=1;$i<=self::COUNT_COMPONENTS;$i++)
				{
					$componentName = trim($filter->filter($this->_request->getPost('component_' . $i . '_name')));
					$data = array('idposgraduation'=>$result,'name'=>$componentName);
					$component->insert($data);
				}
				
				$this->_flashMessenger->addMessage('Curso de Pós-Graduação cadastrado com sucesso!');
				$this->_redirect('/admin/posgraduation'); 
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao inserir os dados no banco!');
				$this->_redirect('/admin/posgraduation/new');
			}
		} else
		{
			$this->view->components = self::COUNT_COMPONENTS;
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
			$pos = new PosgraduationDAO();
			$component = new PoscomponentDAO();
			$filter = new Zend_Filter_StripTags();
			
			$name = trim($filter->filter($this->_request->getPost('name')));
			$objective = trim($filter->filter($this->_request->getPost('objective')));
			$area = trim($filter->filter($this->_request->getPost('area')));
			$public = trim($filter->filter($this->_request->getPost('public')));
			$metodology = trim($filter->filter($this->_request->getPost('metodology')));
			$avaliation = trim($filter->filter($this->_request->getPost('avaliation')));
			$workload = trim($filter->filter($this->_request->getPost('workload')));

			$idposgraduation = (int)$this->_request->getParam('idposgraduation'); 
			
			$data = array('name'=>$name,'objective'=>$objective,'area'=>$area,'public'=>$public,'metodology'=>$metodology,'avaliation'=>$avaliation,'workload'=>$workload);
			$pos->update($data, "`idposgraduation`={$idposgraduation}");
			
			for($i=1;$i<=self::COUNT_COMPONENTS;$i++)
			{
				$componentId = (int)$this->_request->getPost('component_' . $i . '_idposcomponent');
				$componentName = trim($filter->filter($this->_request->getPost('component_' . $i . '_name')));
				$data = array('name'=>$componentName);
				$component->update($data, "`idposcomponent`={$componentId}");
			}
			
			$this->_flashMessenger->addMessage('Curso de Pós-Graduação atualizado com sucesso!');
			$this->_redirect('/admin/posgraduation/edit/' . $idposgraduation);
		} else
		{
			$pos = new PosgraduationDAO();
			$component = new PoscomponentDAO();
			
			$idposgraduation = (int)$this->_request->getParam('idposgraduation');
			
			$this->view->posgraduation = $pos->fetchRow("`idposgraduation`={$idposgraduation}");
			$this->view->components = $component->fetchAll("`idposgraduation`={$idposgraduation}");
			$this->view->countComponents = self::COUNT_COMPONENTS;
			
			$this->render();
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$pos = new PosgraduationDAO();
		$component = new PoscomponentDAO();
		
		$idposgraduation = (int)$this->_request->getParam('idposgraduation'); 
		
		$data = $pos->fetchRow("`idposgraduation`={$idposgraduation}");
		if($data)
		{
			$result = $pos->delete("`idposgraduation`={$idposgraduation}");
			if($result)
			{
				$result = $component->delete("`idposgraduation`={$idposgraduation}");
				if($result)
				{
					$this->_flashMessenger->addMessage('Curso de Pós-Graduação removido com sucesso!');
				} else
				{
					$this->_flashMessenger->addMessage('Ocorreu um erro ao remover os componentes deste curso!');
				}
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao remover os dados do banco!');
			}
		} else
		{
			$this->_flashMessenger->addMessage('Curso de Pós-Graduação não encontrado!');
		}
		
		$this->_redirect('/admin/posgraduation');
	}
}