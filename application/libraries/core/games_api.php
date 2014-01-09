<?php
/**
 * The Users class file.
 *
 * @category Users
 * @package  None
 * @author   Vijayaragavan Sivagurusamy
 * @license  http://www.hiiku.com 
 * @link     models/news_api_model.php
 * 
 */
 
class Games_api
{
    private $_CI;    
    // present for all users
 
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
        $this->_CI->load->model('games_api_model');         
        $this->_CI->load->config('account');  
        $this->perPage = 2;
		$this->current_date = date('Y-m-d H:i:s');
        //$this->_CI->load->helper(array('form', 'url', 'cookie'));         
    }
    
    public function Game_Feed( $provider, $category, $limit )
    {
    	$response = false;
    
    	$response = $this->_CI->games_api_model->Game_Feed( $provider, $category, $limit );    
    	
    	return $response;		
    	
    }
    
    
    public function Rand_Game( $game_id, $limit )
    {
    	$response = false;
    
    	$response = $this->_CI->games_api_model->Rand_Game( $game_id, $limit );    
    	
    	return $response;		
    
    }
    
    
    public function Category_Feed( $starts, $ends, $category_name )
    {
    	$response = false;
    
    	$response = $this->_CI->games_api_model->Category_Feed( $starts, $ends, $category_name );    
    	
    	return $response;		
    
    }
    
    
    public function Contact( $cf_name, $cf_email, $cf_subject, $cf_message ){
    
    		$arg = array(
    				'user_name'	=> $cf_email,
    				'user_email' => $cf_email,
    				'subject'	=> $cf_subject,
    				'message'	=> $cf_message,
    				'created_on' => date('Y-m-d H:i:s')
    				);
    
    	$response = false;
    
    	$response = $this->_CI->games_api_model->Contact( $arg );    
    	
    	return $response;		
    }
    
    
}