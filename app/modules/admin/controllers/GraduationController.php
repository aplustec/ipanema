<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Graduation Controller of Admin module
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

class Admin_GraduationController extends App_Modules_Admin_Abstract
{
	/**
	 * The count of modules per course
	 * 
	 * @var integer
	 */
	const COUNT_MODULES = 4;
	/**
	 * The count of components per module
	 * @var unknown_type
	 */
	const COUNT_COMPONENTS = 9;
	/**
	 * Method to initialize the controller
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
		$graduation = new GraduationDAO();
		
		$this->view->courses = $graduation->fetchAll();
		
		$this->render();
	}
	/**
	 * The new Action
	 */
	function newAction()
	{
		if(parent::isPost())
		{
			$graduation = new GraduationDAO();
			$module = new ModuleDAO();
			$component = new ComponentDAO();
			$filter = new Zend_Filter_StripTags();
			
			$graduationName = trim($filter->filter($this->_request->getPost('name')));
			$graduationDescription = trim($filter->filter($this->_request->getPost('description')));
			$graduationBigenterprise = trim($filter->filter($this->_request->getPost('bigenterprise')));
			$graduationMiddleenterprise = trim($filter->filter($this->_request->getPost('middleenterprise')));
			$graduationPeriod = trim($filter->filter($this->_request->getPost('period')));
			$graduationDuration = trim($filter->filter($this->_request->getPost('duration')));
			$graduationVacancies = trim($filter->filter($this->_request->getPost('vacancies')));
			$graduationPrice = trim($filter->filter($this->_request->getPost('price')));

			$data = array('name'=>$graduationName,'description'=>$graduationDescription,'remuneration_bigenterprise'=>$graduationBigenterprise,'remuneration_middleenterprise'=>$graduationMiddleenterprise,'period'=>$graduationPeriod,'duration'=>$graduationDuration,'vacancies'=>$graduationVacancies,'price'=>$graduationPrice);
			$result = $graduation->insert($data);
			
			if($result)
			{
				for($i=1;$i<=self::COUNT_MODULES;$i++)
				{
					$moduleName = trim($filter->filter($this->_request->getPost('module_' . $i . '_name')));
					$moduleWeekly = trim($filter->filter($this->_request->getPost('module_' . $i . '_weekly_workload')));
					$moduleSemester = trim($filter->filter($this->_request->getPost('module_' . $i . '_semester_hours')));
					
					$data = array('idgraduation'=>$result,'name'=>$moduleName,'weekly_workload'=>$moduleWeekly,'semester_hours'=>$moduleSemester);
					$idmodule = $module->insert($data);
					for($j=1;$j<=self::COUNT_COMPONENTS;$j++)
					{
						$componentName = trim($filter->filter($this->_request->getPost('module_' . $i . '_component_' . $j . '_name')));
						$componentWeekly = trim($filter->filter($this->_request->getPost('module_' . $i . '_component_' . $j . '_weekly_workload')));
						$componentSemester = trim($filter->filter($this->_request->getPost('module_' . $i . '_component_' . $j . '_semester_hours')));
						
						$data = array('idmodule'=>$idmodule,'name'=>$componentName,'weekly_workload'=>$componentWeekly,'semester_hours'=>$componentSemester);
						$component->insert($data);
					}
				}
				
				$this->_flashMessenger->addMessage('Curso de Graduação cadastrado com sucesso!');
				$this->_redirect('/admin/graduation'); 
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao inserir os dados no banco!');
				$this->_redirect('/admin/graduation/new');
			}
		} else
		{
			$this->view->modules = self::COUNT_MODULES;
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
			$graduation = new GraduationDAO();
			$module = new ModuleDAO();
			$component = new ComponentDAO();
			$filter = new Zend_Filter_StripTags();
				
			$graduationName = trim($filter->filter($this->_request->getPost('name')));
			$graduationDescription = trim($filter->filter($this->_request->getPost('description')));
			$graduationBigenterprise = trim($filter->filter($this->_request->getPost('bigenterprise')));
			$graduationMiddleenterprise = trim($filter->filter($this->_request->getPost('middleenterprise')));
			$graduationPeriod = trim($filter->filter($this->_request->getPost('period')));
			$graduationDuration = trim($filter->filter($this->_request->getPost('duration')));
			$graduationVacancies = trim($filter->filter($this->_request->getPost('vacancies')));
			$graduationPrice = trim($filter->filter($this->_request->getPost('price')));
			
			$idgraduation = (int)$this->_request->getParam('idgraduation');
			
			$data = array('name'=>$graduationName,'description'=>$graduationDescription,'remuneration_bigenterprise'=>$graduationBigenterprise,'remuneration_middleenterprise'=>$graduationMiddleenterprise,'period'=>$graduationPeriod,'duration'=>$graduationDuration,'vacancies'=>$graduationVacancies,'price'=>$graduationPrice);
			$graduation->update($data, "`idgraduation`={$idgraduation}");

			for($i=1;$i<=self::COUNT_MODULES;$i++)
			{
				$moduleId = trim($filter->filter($this->_request->getPost('module_' . $i . '_idmodule')));
				$moduleName = trim($filter->filter($this->_request->getPost('module_' . $i . '_name')));
				$moduleWeekly = trim($filter->filter($this->_request->getPost('module_' . $i . '_weekly_workload')));
				$moduleSemester = trim($filter->filter($this->_request->getPost('module_' . $i . '_semester_hours')));
				
				$data = array('name'=>$moduleName,'weekly_workload'=>$moduleWeekly,'semester_hours'=>$moduleSemester);
				$module->update($data,"`idmodule`={$moduleId}");
				for($j=1;$j<=self::COUNT_COMPONENTS;$j++)
				{
					$componentId = trim($filter->filter($this->_request->getPost('module_' . $i . '_component_' . $j .'_idcomponent')));
					$componentName = trim($filter->filter($this->_request->getPost('module_' . $i . '_component_' . $j . '_name')));
					$componentWeekly = trim($filter->filter($this->_request->getPost('module_' . $i . '_component_' . $j . '_weekly_workload')));
					$componentSemester = trim($filter->filter($this->_request->getPost('module_' . $i . '_component_' . $j . '_semester_hours')));
					
					$data = array('name'=>$componentName,'weekly_workload'=>$componentWeekly,'semester_hours'=>$componentSemester);
					$component->update($data, "`idcomponent`={$componentId}");
				}
			}
			
			$this->_flashMessenger->addMessage('Graduação atualizada com sucesso!');
			$this->_redirect('/admin/graduation/edit/' . $idgraduation);
		} else
		{
			$graduation = new GraduationDAO();
			$module = new ModuleDAO();
			
			$idgraduation = (int)$this->_request->getParam('idgraduation');
			
			$this->view->graduation = $graduation->fetchRow("`idgraduation`={$idgraduation}");
			$this->view->modules = $module->fetchAll("`idgraduation`={$idgraduation}");
			$this->view->countModules = self::COUNT_MODULES;
			$this->view->countComponents = self::COUNT_COMPONENTS;
			
			$this->render();
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$graduation = new GraduationDAO();
		$module = new ModuleDAO();
		$component = new ComponentDAO();
		
		$idgraduation = (int)$this->_request->getParam('idgraduation');
		
		$data = $graduation->fetchRow("`idgraduation`={$idgraduation}");
		if($data)
		{
			$result = $graduation->delete("`idgraduation`={$idgraduation}");
			if($result)
			{
				$modules = $module->fetchAll("`idgraduation`={$idgraduation}");
				foreach($modules as $row)
				{
					$component->delete("`idmodule`={$row->idmodule}");
					$module->delete("`idmodule`={$row->idmodule}");
				}
				$this->_flashMessenger->addMessage('Curso removido com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao remover os dados do banco!');
			}
		} else
		{
			$this->_flashMessenger->addMessage('Curso de Graduação não encontrado!');
		}
		
		$this->_redirect('/admin/graduation');
	}
}