<?php

/**
 * @see Zend_Db_Table
 */
require_once 'Zend/Db/Table.php';

/**
 * The DAO Class for Component table
 * 
 * @category Models
 * @package App/Modules/Default
 * @subpackage Models
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2012
 * @license http://www.devsdmf.net/license/general.txt
 * @copyright Aplus Tecnologia e Engenharia | devSDMF Software Development (c)
 *
 */

class ComponentDAO extends Zend_Db_Table
{
	/**
	 * The table name
	 * 
	 * @var string
	 */
	protected $_name = 'component';
}