<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/libraries/config.html
 */
class CI_Model {

	/**
	 * Class constructor
	 *
	 * @return	void
	 */

	private $table;
	private $pk;
	private $field_order;
	private $fields_like;

	public function __construct($data)
	{
		foreach ($data as $key => $value) {
			$this->$key = $value;
		}
		log_message('info', 'Model Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * __get magic
	 *
	 * Allows models to access CI's loaded classes using the same
	 * syntax as controllers.
	 *
	 * @param	string	$key
	 */
	public function __get($key)
	{
		// Debugging note:
		//	If you're here because you're getting an error message
		//	saying 'Undefined Property: system/core/Model.php', it's
		//	most likely a typo in your model code.
		return get_instance()->$key;
	}

	public function get($condition = null){
		$this->db->select('*');
		$this->db->from($this->table);
		
		if($condition != null || !empty($condition))
			$this->db->where($condition);
		$this->db->order_by($this->field_order);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_id($id = null){
		if(is_null($id))
			return false;
		return $this->get([$this->pk => $id]);
	}

	//Devuelve los personas segun una cadena
	public function get_like($string){
		$this->db->like($this->fields_like[0],$string);
		unset($this->fields_like[0]);
		foreach ($this->fields_like as $field) {
			$this->db->or_like($field,$string);
		}
		$query = $this->db->get($this->table);
		return $query->result();
	}


	public function insert($data){
		if(empty($data))
			return false;

		$this->db->insert($this->table,$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	public function update($id,$data){
		if(is_null($id) || empty($data))
			return false;

		$this->db->where($this->pk,$id);
		$this->db->update($this->table,$data);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

	//elimina segun un id
	public function delete($id = null){
		if(is_null($id))
			return false;
		$this->db->where($this->pk,$id);
		$this->db->delete($this->table);
		return ($this->db->affected_rows() == 1) ? true : false;
	}

}
