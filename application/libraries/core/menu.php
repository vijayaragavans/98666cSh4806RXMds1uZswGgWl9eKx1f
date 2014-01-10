<?php
/**
 * The Menu class file.
 *
 * @category Menu
 * @package  None
 * @author   Anoop KP
 * @license  http://www.skillsweet.com 
 * @link     models/users_model.php
 * 
 */
 
class Menu
{
    private $_CI;    
    // present for all users
    
    public $loggedIn = false;
    /**
     * Constructor.
     * Loads the CI instance, the users_model and some useful helpers.
     * Creates a menu_lib object, populated if passed a valid $init.    
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
        $this->_CI->load->library('core/users');         
        $this->_CI->load->config('menu');
        $this->_CI->load->helper('url');        
		$menus= $this->_CI->config->item('menus');
		$finalMenu = array();		
		
		$fb = 'http://api.facebook.com/restserver.php?method=links.getStats&urls=https://www.facebook.com/CoreIndiaToday';
		
        $xml = file_get_contents($fb);
		
        $homepage = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $xml);
        $xmsl = simplexml_load_string($xml,'SimpleXMLElement', LIBXML_NOCDATA);
		
		$this->_CI->mysmarty->assign('fb_count', $xmsl->link_stat->like_count);
		
    	$twit_followers = file_get_contents("https://cdn.api.twitter.com/1/users/lookup.json?screen_name=HaiInteractive");
    	$twit_followers = json_decode($twit_followers, true);
    	
		$this->_CI->mysmarty->assign('twit_count', $twit_followers[0]);
		
    	$userdata = $this->_CI->session->userdata('user');
        $this->_CI->mysmarty->assign('base_url',base_url()."");
        $sessionUserdata = $this->_CI->session->userdata('RIGHT');
        $this->_CI->mysmarty->assign('sess',$sessionUserdata);
        define('SITE_URL', base_url()."");
        $this->_CI->mysmarty->assign('static_server',base_url());
		$this->_CI->mysmarty->assign('menus',$finalMenu);
         
    }
    
	        
}
/* End of file menu.php */