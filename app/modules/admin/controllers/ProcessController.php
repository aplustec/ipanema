<?php
/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Process Controller of Admin module
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

class Admin_ProcessController extends App_Modules_Admin_Abstract
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
		if(parent::isPost())
		{
			$process = new ProcessDAO();
			$filter = new Zend_Filter_StripTags();
			
			$code = trim($filter->filter($this->_request->getPost('code')));
			$label = trim($filter->filter($this->_request->getPost('label')));
			
			$data = array('code'=>$code,'label'=>$label);
			$result = $process->insert($data);
			if($result)
			{
				$this->_flashMessenger->addMessage('Processo seletivo cadastrado!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao inserir os dados no banco!');
			}
			
			$this->_redirect('/admin/process');
		} else
		{
			$process = new ProcessDAO();
			$this->view->process = $process->fetchAll();
			$this->render();
		}
	}
	/**
	 * The remove Action
	 */
	function removeAction()
	{
		$process = new ProcessDAO();
		
		$idprocess = (int)$this->_request->getParam('idprocess');
		
		$result = $process->delete("`idprocess`={$idprocess}");
		if($result)
		{
			$this->_flashMessenger->addMessage('Processo seletivo removido com sucesso!');
		} else
		{
			$this->_flashMessenger->addMessage('Ocorreu um erro ao remover o processo seletivo!');
		}
		
		$this->_redirect('/admin/process');
	}
}