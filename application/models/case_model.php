class Case_model extends CI_Model {
	
    var $CaseID;
    var $operation;
    var $enocoded_data;
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function getCase($caseID) 
    {
    	$sql = $this->db->from('case'')->where('caseID', $caseID)->get();
    	$data = $sql->row()
    	return $data;
    }
    
    
    function addCase($operation, $encoded_data)
    {
    	$this->operation = $opearation;
        $this->encoded_data = $encoded_data;
        
        $data = array(
           'operation' => $operation,
           'data'  =>  jsone_encode($_POST),
           'hide'  => 0,
        );
        
        
        // look CI insert
        $query = $this->db->insert('cases', $data);
        
        $this->caseID = $case->caseID;
        return $query->result();
    }

    function hideCase($caseID) 
    {
    	$data = array('hide' => 1);
    	$this->db->where('caseid', $caseID);
        $this->db->update('casses', $data); 

    }
    
    
}
