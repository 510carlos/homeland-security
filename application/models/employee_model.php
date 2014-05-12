class Employee_model extends CI_Model {

    var $employee;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    

    
    function addEmployee ($username, $password, $name, $address, $social, $email, $dob) 
    {
        $data = array(
            'username'  => $username,
            'password'  => $password,
            'name'      => $name,
            'address'   => $address,
            'social'    => $social,
            'email'     => $email,
            'DoB'       => $dob,
            'Date'      => time(),
        );
        $this->db->insert('employees', $data);
        $this->user = $this->getEmployee($this->db->insert_id());
    }
    
    function hideEmployee () 
    {
        $data = array('hide' => 1);
    	$this->db->where('userid', $caseID);
        $this->db->update('employees', $data); 
    
    }
    
    function getEmployee () 
    {
        $sql = $this->db->from('employees')->where('userid', $userid)->get();
        $data = $sql->row();
        
        return $data;
    }
    

}
