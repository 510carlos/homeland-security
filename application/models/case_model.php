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
    	
    }
    
    function addCase($operation, $encoded_data)
    {
    	$this->operation = $opearation;
        $$this->encoded_data = $encoded_data;
        
        // look CI insert
        $query = $this->db->insert('entries', 10);
        
        $this->caseID = $case->caseID;
        return $query->result();
    }

	function hideCase() {}
    
    
}