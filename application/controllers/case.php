<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases extends CI_Controller {


	public function index()
	{
		if($_POST) {
			
			$data = array();
			
			$form_id = (int) $this->input->post('form_id');
			foreach($_POST as $key => $p) {
				$match_prefix = "";
				$prefix = substr($p, 0,3);	
				if($match_prefix == $prefix) {
					$data[$key] = $p;
				}
			}
			
			$insert = array(
				'form_id'	=> $form_id,
				'data'		=> json_encode($data),
			);
			
			$this->db->where('form_id', $form_id)->insert('cases', $data);
		}
		
		$this->load->view('forms');
		
	}
	
	public function form ()
	{
		
	}
}
