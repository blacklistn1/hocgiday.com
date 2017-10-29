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
	public function read_data_col($field = '*')
	{
		if ($field == '*')
		{
			$this->read_all_data();
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

	// Read data with matched conditions (and filters)
	public function read_data($field = '*', $where = array(1=>1), $cond = FALSE)
	{
		if ($cond)
		{
			$this->add_filter($cond);
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

	// Read a row
	public function read_row($field = '*', $where = array(1=>1), $cond = FALSE, $is_array = FALSE)
	{
		if ($cond)
		{
			$this->add_filter($cond);
		}
		$this->db->where($where)
				->select($field);
		if ($row = $this->db->get($this->table))
		{
			if ($is_array === FALSE)
			{
				return $row->row();
			}
			else
			{
				return $row->row_array();
			}
		}
		else
		{
			return NULL;
		}
	}
	
	// Update data
	public function update($data = array(), $where = array())
	{
		if ($where)
		{
			$this->db->where($where);
		}
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
	// End of CRUD
	
	// Count all rows
	public function count_all()
	{
		return $this->db->count_all($this->table);
	}

	// Produce processed query w/o result
	// Used for various outputs
	public function run_query($field = '*', $where = array(1=>1), $cond = FALSE)
	{
		if ($cond)
		{
			$this->add_filter($cond);
		}
		$this->db->where($where)
				->select($field);
		return $this->db->get($this->table);
	}
	
	
	// Add filters to the query
	// type of $arg varies on $portion
	public function add_filter($cond = array())
	{
		foreach ($cond as $portion => $arg)
		{
			if ($portion == 'order_by') // $arg MUST be string
			{
				$this->db->order_by($arg);
			}
			if ($portion == 'limit') // $arg type varies on $portion
			{
				if (gettype($arg) == 'array')
				{
					$this->db->limit($arg[0], $arg[1]);
				}
				elseif (gettype($arg) == 'integer')
				{
					$this->db->limit($arg);
				}
			}
			if ($portion == 'group_by') // $arg MUST be string
			{
				$this->db->group_by($arg);
			}
			if ($portion == 'join')
			{
				if (isset($arg[2]))
				{
					$this->db->join($arg[0], $arg[1], $arg[2]);
				}
				else
				{
					$this->db->join($arg[0], $arg[1]);
				}
				
			}
		}
	}
}
