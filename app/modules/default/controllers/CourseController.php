<?php

/**
 * @see App_Modules_Default_Abstract
 */
require_once 'app/modules/default/Abstract.php';

/**
 * The Course Controller of Default module
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

class CourseController extends App_Modules_Default_Abstract
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
	 * The index Action
	 */
	function indexAction()
	{
		$this->_redirect('/');
	}
	/**
	 * The enterprising Action
	 */
	function enterprisingAction()
	{
		$this->render();
	}
	/**
	 * The languages Action
	 */
	function languagesAction()
	{
		$this->render();
	}
	/**
	 * The graduation Action
	 */
	function graduationAction()
	{
		$graduation = new GraduationDAO();
		$module = new ModuleDAO();
		
		$factor = $this->_request->getParam('factor');
		$factor = explode(',,',$factor);
		$idgraduation = $factor[0];
		
		$this->view->course = $graduation->fetchRow("`idgraduation`={$idgraduation}");
		$this->view->modules = $module->fetchAll("`idgraduation`={$idgraduation}");
		
		$this->render();
	}
	/**
	 * The posgraduation Action
	 */
	function posgraduationAction()
	{
		$posgraduation = new PosgraduationDAO();
		$component = new PoscomponentDAO();
		
		$factor = $this->_request->getParam('factor');
		$factor = explode(',,',$factor);
		$idposgraduation = $factor[0];
		
		$this->view->course = $posgraduation->fetchRow("`idposgraduation`={$idposgraduation}");
		$this->view->components = $component->fetchAll("`idposgraduation`={$idposgraduation}");
		
		$this->render();
	}
	/**
	 * The extension Action
	 */
	function extensionAction()
	{
		$course = new CourseDAO();
		
		$factor = $this->getParam('factor');
		$factor = explode(',,',$factor);
		$idcourse = $factor[0];
		
		$this->view->course = $course->fetchRow("`idcourse`={$idcourse}");
		
		$this->render();
	}
}