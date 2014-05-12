class Case_model extends CI_Model {
	
    var $case;
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function getCase($caseID) 
    {
    	$sql = $this->db->from('case')->where('caseID', $caseID)->get();
    	$data = $sql->row();
    	$data->data = json_decode($data->data);
    	return $data;
    }
    
    
    function addCase($operation, $encoded_data)
    {
        
        $data = array(
           'operation' => $operation,
           'data'  =>  jsone_encode($_POST),
           'hide'  => 0,
        );
        
        // look CI insert
        $this->db->insert('cases', $data);
        
        $this->case = $this->getCase($this->db->insert_id());
   
    }

    function hideCase($caseID) 
    {
    	$data = array('hide' => 1);
    	$this->db->where('caseid', $caseID);
        $this->db->update('casses', $data); 

    }
    
    
}
