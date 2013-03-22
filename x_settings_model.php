<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 test
class X_settings_model extends CI_Model 
{
	function __construct()
	{
	    // Call the Model constructor
	    parent::__construct();
	    
	    $query=$this->db->get('x_settings');
	    foreach ($query->result() as $row) 
			{
     	  $this->config->set_item($row->setting_name, $row->setting_value);
      }	    
	}
	
	function set_settings($setting_name, $value)
	{		
		$this->db->where('setting_name', $setting_name);
 		$this->db->update('x_settings', $value);	
	}
	
}
?>