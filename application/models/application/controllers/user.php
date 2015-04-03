<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	function index ()
	{
		$this->register();	
	}

	function register () 
	{
		if($_POST) {
			foreach($_POST as $key => $p) {
				$match_prefix = "DHS_";
				$prefix = substr($key, 0,4);
				
				if($match_prefix == $prefix) {
					$data[$key] = $p;
				}
			}
			
			$insert = array(
				'admin'	=> 0,
				'data'	=> json_encode($data),
			);
			$insert_id = $this->user_model->addUser($insert);
			
			$this->input->set_cookie("userid", $insert_id, 86500);
			
			redirect(base_url()."cases/user/".$insert_id);
		}
		#template
		$data['view'] = "user";
		$this->load->view('template', $data);
	}
	
	function admin ()
	{
		if($_POST) {
			foreach($_POST as $key => $p) {
				$match_prefix = "DHS_";
				$prefix = substr($key, 0,4);
				
				if($match_prefix == $prefix) {
					$data[$key] = $p;
				}
			}
			
			$insert = array(
				'admin'	=> 1,
				'data'	=> json_encode($data),
			);
			$insert_id = $this->user_model->addUser($insert);
			
			$this->input->set_cookie("userid", $insert_id, 86500);
			
			redirect(base_url()."cases/all");
		}
		#template
		$data['view'] = "user";
		$data['content'] = 'admin';
		$this->load->view('template', $data);
	}
	
	function edit ($userid)
	{
		echo "Edit a user so we can edit the permissions to determine wether they are a user/employee/admin";	
	}
	
}

