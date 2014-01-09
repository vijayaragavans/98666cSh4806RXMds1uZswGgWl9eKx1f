<?php
/**
 * The Users class file.
 *
 * @category Users
 * @package  None
 * @author   Anoop KP
 * @license  http://www.skillsweet.com 
 * @link     models/users_model.php
 * 
 */
 
class Users
{
    private $_CI;    
    // present for all users
    public $userId = '';
    public $userName = '';
    public $password = '';
    public $lastLogin = '';    
    public $status = '';    
    public $createDate = '';
    public $emailId = '';  
    public $firstName = '';
    public $lastName = '';
    public $privilage = '';  
    public $loggedIn = false;
    public $corpID = '';

    /**
     * Constructor.
     * Loads the CI instance, the users_model and some useful helpers.
     * Creates a users_lib object, populated if passed a valid $init.    
     * @param string/int $init - user id or email of user to load   
     * @access public   
     * @return none
     */
    public function __construct($init = false)
    {
        // take advantage of codeigniter libraries
        // use $this->_CI in place of normal codeigniter $this
        $this->_CI = & get_instance();
        // load users model
        $this->_CI->load->model('users_model');         
        $this->_CI->load->config('account');  
        $this->perPage = 2;
		$this->current_date = date('Y-m-d H:i:s');
        //$this->_CI->load->helper(array('form', 'url', 'cookie'));         
    }
    
	/**
     * @method is_loggedin 
     * @param   
     * @access public      
     * @return boolean - true: success, false: failure
     */
    public function is_loggedin()
    {
         if($this->_CI->session->userdata('user')){         	
         	return true;
         }else{
         	return false;
         }
    }  
    
    /**
     * @method login
     * @param  string  $username      email of user to login
     * @param  string  $password   password of the user to login
     * @access public 
     * @return boolean true: success, false: failure
     */
    public function processLogin($username, $password)
    {
         
    	return $this->_CI->users_model->processLogin($username,$password); 
    	
    }
    
    
    public function counts( $type )
    {
    	return $this->_CI->users_model->counts( $type );
    }
    
    
    public function Add_New_Plugin( $regarr )
    {
    	return $this->_CI->users_model->Add_New_Plugin( $regarr );    
    }
    
    
    public function lists( $type, $count )
    {
    	return $this->_CI->users_model->lists( $type, $count );    
    }
    
    
    public function Get_Spam_Emails( $ids )
    {
    	return $this->_CI->users_model->Get_Spam_Emails( $ids );        
    }
    
    
    
    public function Get_All_Users()
    {
    	return $this->_CI->users_model->Get_All_Users( );    
    }
    
    
    public function Spam_Users( $ids )
    {
    	return $this->_CI->users_model->Spam_Users( $ids );        
    }
    
    
    public function Get_All_Articles( $type )
    {
    	return $this->_CI->users_model->Get_All_Articles( $type);        
    }
    
    
    public function Get_All_Comments()
    {
    	return $this->_CI->users_model->Get_All_Comments( );            
    }
    
    
    public function Get_Spam_Comments()
    {
    	return $this->_CI->users_model->Get_Spam_Comments( );            
    }
    
    
}