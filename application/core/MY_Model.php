<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {

	// Specifies table name
	public $table = '';

	// Specifies table primary key 
	public $key = '';

	// Specifies custom key
	public $id = '';

	function __construct()
	{
		parent::__construct();
	}

	// CRUD functions
	// Insert into database and possibly return last inserted id
	public function create($data = array())
	{
		if ($this->db->insert($this->table, $data))
		{
			return $this->db->insert_id();
		}
		else
		{
			return NULL;
		}
	}

	// Read data
	// Read all data
	public function read_all_data()
	{
		if ($result = $this->db->get($this->table))
		{
			return $result->result();
		}
		else
		{
			return NULL;
		}
	}

	// Read data in specific columns
	public function read_data_col($field = '')
	{
		if (!$field or $field = '*')
		{
			$this->select_all_data();
		}
		else
		{
			$this->db->select($field);
			if ($result = $this->db->get($this->table)){
				return $result->result();
			}
			else
			{
				return NULL;
			}
		}
	}

	// Read conditional data
	public function read_data($where = array(), $field = '')
	{
		if (!$where)
		{
			if (!$field or $field = '*')
			{
				$this->db->select_all_data();
			}
			else
			{
				$this->select_data_col($field);
			}
		}
		else
		{
			if (!$field) {
				$field = '*';
			}
			$this->db->where($where)
					->select($field);
			if ($result = $this->db->get($this->table))
			{
				return $result->result();
			}
			else
			{
				return NULL;
			}
		}
	}

	// Read a row
	public function read_row($where = array(), $field = '')
	{
		if (!$field)
		{
			$field = '*';
		}
		$this->db->where($where)
				->select($field);
		if ($row = $this->db->get($this->table))
		{
			return $row->row();
		}
		else
		{
			return NULL;
		}
	}
	
	// Update data
	public function update($data = array(), $where = array())
	{
		$this->db->where($where);
		if ($this->db->update($this->table, $data))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	// Delete data, or empty table
	public function delete($where = array())
	{
		if (!$where)
		{
			if ($this->db->empty_table($this->table))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			$this->db->where($where);
			if ($this->db->delete($this->table, $where))
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}
}
