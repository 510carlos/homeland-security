<?

class User_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->cookieUser();
    }
	
	function addUser($data)
    {
        $query = $this->db->insert('users', $data);
		
		return $this->db->insert_id();

    }
	
	function cookieUser()
	{
		$userid = $this->input->cookie('userid', TRUE);
		
		
	
		if(empty($userid))
			return;
		
		$user = $this->getUser($userid);	
		
	
		$CI =& get_instance();	
		
		$CI->user = $user;
		

		
	}
	
	function getUser ($userid)
	{
		$user_sql = $this->db
				->select()
				->where('userid', $userid)
				->from('users')
				->get();
		$data = $user_sql->row();
		
		$data2 = json_decode($data->data);
		unset($data->data);
		
		$data = (object) array_merge((array) $data, (array) $data2);
		
		return $data;
	}
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}