class Admin_model extends CI_Model {

    var $admin;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function addAdmin ($username, $password, $name, $address, $social, $email, $dob) 
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
        $this->db->insert('users', $data);
        $this->user = $this->getUser($this->db->insert_id());
    }
    
    function hideAdmin () 
    {
        $data = array('hide' => 1);
    	$this->db->where('userid', $caseID);
        $this->db->update('users', $data); 
    
    }
    
    function getAdmin () 
    {
        $sql = $this->db->from('users')->where('userid', $userid)->get();
        $data = $sql->row();
        
        return $data;
    }

}
