<?php

/**
 * @see App_Modules_Default_Abstract
 */
require_once 'app/modules/default/Abstract.php';

/**
 * The Index Controller of Default module
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

class IndexController extends App_Modules_Default_Abstract
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
		$banner = new BannerDAO();
		$video = new VideoDAO();
		$gallery = new GalleryDAO();
		$news = new NewsDAO();
		
		$this->view->banners = $banner->fetchAll();
		$this->view->video = $video->fetchRow(null,"idvideo Desc");
		$this->view->gallerys = $gallery->fetchAll(null,"idgallery Desc",2);
		$this->view->news = $news->fetchAll(null,"idnews Desc",3);
		
		$this->render();
	}
	/**
	 * The about Action
	 */
	function aboutAction()
	{
		$this->render();
	}
	/**
	 * The structure Action
	 */
	function structureAction()
	{
		$this->render();
	}
	/**
	 * The howtojoin Action
	 */
	function howtojoinAction()
	{
		$this->render();
	}
	/**
	 * The doubts Action
	 */
	function doubtsAction()
	{
		if(parent::isPost())
		{
			$filter = new Zend_Filter_StripTags();
			$templater = Templater::getInstance();
			$mail = new Zend_Mail();
			
			$to = 'contato@faculdadeipanema.com.br';
			
			$name = trim($filter->filter($this->_request->getPost('name')));
			$email = trim($filter->filter($this->_request->getPost('email')));
			$phone = trim($filter->filter($this->_request->getPost('phone')));
			$message = trim($filter->filter($this->_request->getPost('message')));
			
			$data = array('NAME'=>$name,'EMAIL'=>$email,'PHONE'=>$phone,'MESSAGE'=>$message,'DATA'=>date("d/m/Y H:i:s"));
			
			$templater->setTemplate('duvidas');
			$templater->setData($data);
			$html = $templater->render();
			
			$mail->addTo($to)
				 ->setBodyHtml($html)
				 ->setSubject('Mensagem enviada via site: Duvidas')
				 ->addHeader('X-Priority', '1 (Higuest)')
				 ->addHeader('X-MSMail-Priority', 'High')
				 ->addHeader('Importance', 'High');
			
			$result = $mail->send();
			
			if($result)
			{
				$this->_flashMessenger->addMessage('Mensagem enviada com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao enviar a sua mensagem!');
			}
			
			$this->_redirect('/duvidas');
		} else
		{
			$doubts = new DoubtsDAO();
			
			$this->view->doubts = $doubts->fetchAll();
			
			$this->render();
		}
	}
	/**
	 * The fies Action
	 */
	function fiesAction()
	{
		$this->render();
	}
	/**
	 * The process Action
	 */
	function processAction()
	{
		$content = new ContentDAO();
		
		$this->view->contentTitle = $content->fetchRow("`param`='PROCESS_TITLE'");
		$this->view->contentImage = $content->fetchRow("`param`='PROCESS_IMAGE'");
		
		$this->render();
	}
	/**
	 * The inscription Action
	 */
	function inscriptionAction()
	{
		$process = new ProcessDAO();
		
		$this->view->process = $process->fetchAll();
		
		$this->render();
	}
	/**
	 * The contact Action
	 */
	function contactAction()
	{
		if(parent::isPost())
		{
			$filter = new Zend_Filter_StripTags();
			$templater = Templater::getInstance();
			$mail = new Zend_Mail();
			
			$areaMails = array();
			$areaMails[1] = 'fabio.leonardo@faculdadeipanema.com.br';
			$areaMails[2] = 'cv@faculdadeipanema.com.br';
			$areaMails[3] = 'talita.maschetto@faculdadeipanema.com.br';
			$areaMails[4] = 'eliene.silva@faculdadeipanema.com.br';
			$areaMails[5] = 'francine.moraes@faculdadeipanema.com.br';
			$areaMails[6] = 'eliene.silva@faculdadeipanema.com.br';
			$areaMails['default'] = $areaMails[6];
			
			$name = trim($filter->filter($this->_request->getPost('name')));
			$email = trim($filter->filter($this->_request->getPost('email')));
			$phone = trim($filter->filter($this->_request->getPost('phone')));
			$subject = trim($filter->filter($this->_request->getPost('subject')));
			$area = (int)$this->_request->getPost('area');
			$message = trim($filter->filter($this->_request->getPost('message')));
			
			if($area)
				$to = $areaMails[$area];
			else
				$to = $areaMails['default'];
			
			$data = array('NAME'=>$name,'EMAIL'=>$email,'PHONE'=>$phone,'SUBJECT'=>$subject,'MESSAGE'=>$message,'DATA'=>date("d/m/Y H:i:s"));
			
			$templater->setTemplate('contato');
			$templater->setData($data);
			$html = $templater->render();
			
			$mail->addTo($to)
				 ->setBodyHtml($html)
				 ->setSubject('Mensagem enviada via site: Contato')
				 ->addHeader('X-Priority', '1 (Higuest)')
				 ->addHeader('X-MSMail-Priority', 'High')
				 ->addHeader('Importance', 'High');
			
			$result = $mail->send();
			
			if($result)
			{
				$this->_flashMessenger->addMessage('Mensagem enviada com sucesso!');
			} else
			{
				$this->_flashMessenger->addMessage('Ocorreu um erro ao enviar a sua mensagem!');
			}
			
			$this->_redirect('/contato');
		} else
		{
			$this->render();
		}
	}
}