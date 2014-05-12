class User_model extends CI_Model {

    $userID;
    $username;
    $password;
    $name;
    $address;
    $social;
    $email;
    $DoB;
    $Date;

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
        $this->db->insert('users', $data);
        
    }
    
    function hideEmployee () 
    {
        $data = array('hide' => 1);
    	$this->db->where('userid', $caseID);
        $this->db->update('users', $data); 
    
    }
    
    function getEmployee () 
    {
        $sql = $this->db->from('users')->where('userid', $userid)->get();
        $data = $sql->row();
        
        return $data;
    }
    

}
