<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cases extends CI_Controller {
	
	
	public function all ()
	{
		$cases = $this->case_model->getAll();
		
		$data['cases'] = $cases;
		#template
		$data['content'] = "all";
		$data['view'] = "cases";
		$this->load->view('template', $data);
	}
	
	public function view ($caseid)
	{
		$case = $this->case_model->getCase($caseid);
		
		if($_POST) {
			
			$level = $this->input->post('level');
			
			$this->case_model->updateThreat($case, $level);
		}
		$case = $this->case_model->getCase($caseid);
		
		$data['case'] = $case;
		#template
		$data['formid'] = $case->formid;
		$this->load->view('template', $data);
	}

	public function index()
	{
	}
	
	public function user ($userid)
	{
		$user = $this->user_model->getUser($userid);
		
		if($_POST) {
			
			$data = array();
			
			$form_id = (int) $this->input->post('form_id');
			foreach($_POST as $key => $p) {
				$match_prefix = "DHS_";
				$prefix = substr($key, 0,4);
				
				if($match_prefix == $prefix) {
					$data[$key] = $p;
				}
			}
			
			$insert = array(
				'userid'	=>	$userid,
				'formid'	=> $form_id,
				'data'		=> json_encode($data),
			);
			
			
			$case = $this->case_model->addCase($insert);
			
			
			$data['case'] = $case;
			#template
			$data['formid'] = $case->formid;
			$this->load->view('template', $data);
			return;
		}
		
		#template
		$data['user'] = $user;
		$data['view'] = "cases";
		$data['content'] = "forms";
		$this->load->view('template', $data);
	}
	
	public function test ($userid) 
	{
		$user = $this->user_model->getUser($userid);
		
		
		
		$data['user'] = $user;
		$data['view'] = "cases";
		$data['content'] = "test";
		$this->load->view('template', $data);
	}
	
	public function see ()
	{
			$user = $this->user_model->getUser(5);
			var_dump($user);
	}
}

