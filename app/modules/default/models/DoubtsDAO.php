<?php

/**
 * @see Zend_Db_Table
 */
require_once 'Zend/Db/Table.php';

/**
 * The DAO Class for Doubts table
 * 
 * @category Models
 * @package App/Modules/Default
 * @subpackage Models
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2013
 * @license http://www.devsdmf.net/license/general.txt
 * @copyright Aplus Tecnologia e Engenharia LTDA | devSDMF Software Development (c)
 *
 */

class DoubtsDAO extends Zend_Db_Table
{
	/**
	 * The table name
	 * @var string
	 */
	protected $_name = 'doubts';
}