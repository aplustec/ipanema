<?php

/**
 * @see App_Modules_Admin_Abstract
 */
require_once 'app/modules/admin/Abstract.php';

/**
 * The Settings Controller of Admin module
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

class Admin_SettingsController extends App_Modules_Admin_Abstract
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
		$this->_redirect('/settings/password');
	}
	/**
	 * The password Action
	 */
	function passwordAction()
	{
		if(parent::isPost())
		{
			$admin = new AdministratorDAO();
			$filter = new Zend_Filter_StripTags();
			
			$oldpass = trim($filter->filter($this->_request->getPost('oldpass')));
			$newpass = trim($filter->filter($this->_request->getPost('newpass')));
			
			$oldpass = $this->_helper->encrypt($oldpass);
			$newpass = $this->_helper->encrypt($newpass);
			
			$data = Zend_Auth::getInstance()->getIdentity();
			$idadministrator = $data->idadministrator;
			
			$data = $admin->fetchRow("`idadministrator`={$idadministrator}");
			if($data->password == $oldpass)
			{
				$data = array('password'=>$newpass);
				$result = $admin->update($data, "`idadministrator`={$idadministrator}");
				if($result)
				{
					$this->_flashMessenger->addMessage('Senha atualizada com sucessso!');
				} else
				{
					$this->_flashMessenger->addMessage('Ocorreu um erro ao atualizar a senha no banco de dados!');
				}
			} else
			{
				$this->_flashMessenger->addMessage('A senha antiga está incorreta!');
			}
			
			$this->_redirect('/admin/settings/password');
		} else
		{
			$this->render();
		}
	}
}