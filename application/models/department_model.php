class Department_model extends CI_Model {

    var $department;
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function addDepartment ($name) 
    {
        $data = array(
            'name'  => $name,
        );
        $this->db->insert('departments', $data);
        $this->department = $this->getDepartment($this->db->insert_id());
    }
    
    function hideDepartment () 
    {
        $data = array('hide' => 1);
    	$this->db->where('userid', $caseID);
        $this->db->update('departments', $data); 
    
    }
    
    function getDepartment () 
    {
        $sql = $this->db->from('departments')->where('userid', $userid)->get();
        $data = $sql->row();
        
        return $data;
    }
    
}
