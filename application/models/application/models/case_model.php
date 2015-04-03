<?
class Case_model extends CI_Model {
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function getCase($caseID) 
    {
    	$case_sql = $this->db
				->where('caseid', $caseID)
				->from('cases')
				->get();
		$case = $case_sql->row();
		
		$data2 = json_decode($case->data);
		unset($case->data);
		
		$case = (object) array_merge((array) $case, (array) $data2);
		
		return $case;
    }
	
	function getAll ()
	{
		$cases_sql = $this->db
					->select('cases.*, name')
					->from('cases')
					->join('forms', 'forms.formid = cases.formid')
					->order_by('caseid DESC')
					->get();
		$cases = $cases_sql->result();
		
		
		foreach($cases as $key => $case) 
		{
			$data2 = json_decode($case->data);
			unset($case->data);		
			$cases[$key] = (object) array_merge((array) $cases[$key], (array) $data2);
			
		}
		

		
		return $cases;
	}
    
    function addCase($data)
    {
        $query = $this->db->insert('cases', $data);
		$id = $this->db->insert_id();
		return $this->getCase($id);
    }
	
	function updateThreat ($case, $level) 
	{
		$data = array(
		   'threat' => $level
		);

		$this->db->where('caseid', $case->caseid);
		$this->db->update('cases', $data); 
	}

}