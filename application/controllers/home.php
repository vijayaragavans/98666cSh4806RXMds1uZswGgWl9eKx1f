<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * Controller  : Home, Landing Page
	 * Created on  : 21-Nov-2011
	 * Created By  : Vijayaragavan S
	 * Modified On :
	 * Modified By :	  
	 * Project     : Rightern
	 */

class Home extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();        			
        // load the necessary libraries
        $this->load->library('form_validation');
        $this->load->library('parser');
        
        $this->load->library('core/games_api');
        $this->load->library('core/users');
        $this->load->helper(array('form', 'url', 'cookie'));
        
        error_reporting(0);
        
        $this->start = '';
        $this->perPage = 1;
        $this->current_date = date("Y-m-d H:i:s");
        
        $this->cat_limit = 20;
        
        $this->url = $_SERVER['REQUEST_URI'];

        $this->url_input = split('/', $this->url);

        $this->title = count($this->url_input) -1;
        
        $this->category = count($this->url_input) -2;
        
        $this->id = count($this->url_input) -3;
    }
	/*
	 * Function: Index 
	 * Purpose : Loading the landing page
	 */	
	public function index()
	{
		
		$main_game = $this->games_api->Game_Feed('1', 'Sports', 1);
		
		$top4_games = $this->games_api->Game_Feed('1', 'Driving', 4);
		
		$popular_games = $this->games_api->Game_Feed('1', 'Sports', 5);
		
		$recent_games = $this->games_api->Game_Feed('1', 'Shooting', 5);
		
		$hot_games = $this->games_api->Game_Feed('1', 'Fighting', 5);
		
		$casino_games = $this->games_api->Game_Feed('1', 'Fighting', 8);
		
		$rand_key = rand(1, 11650);
		
		$left_game = $this->games_api->Rand_Game($rand_key, 1);
		
		$adventures_games = $this->games_api->Game_Feed('1', 'Adventure', 2);
				
		$education_games = $this->games_api->Game_Feed('1', 'Education', 2);
		
		$rhythm_games = $this->games_api->Game_Feed('1', 'Rhythm', 3);
		
		$filename = 'site/'.SITE_LANG.'/home.html' ;
		
        $this->mysmarty->assign('main_game', $main_game[0]);
        $this->mysmarty->assign('top4_games', $top4_games);
        $this->mysmarty->assign('popular_games', $popular_games);
        $this->mysmarty->assign('recent_games', $recent_games);
        $this->mysmarty->assign('hot_games', $hot_games);
        $this->mysmarty->assign('casino_games', $casino_games);
        $this->mysmarty->assign('left_game', $left_game);
        $this->mysmarty->assign('adventures_games', $adventures_games);
        $this->mysmarty->assign('education_games', $education_games);
        $this->mysmarty->assign('rhythm_games', $rhythm_games);
        
        $this->mysmarty->assign('filename', $filename);
        $this->mysmarty->display('site/home.html'); 
		
	}
	

	public function contact( )
	{
		$top4_games = $this->games_api->Game_Feed('1', 'Driving', 4);
	
		$popular_games = $this->games_api->Game_Feed('1', 'Sports', 5);
		
		$recent_games = $this->games_api->Game_Feed('1', 'Shooting', 5);
		
		$hot_games = $this->games_api->Game_Feed('1', 'Fighting', 5);
		
		$cf_name = $this->security->xss_clean( $this->input->get_post('cf_name') );
		
		$cf_email = $this->security->xss_clean( $this->input->get_post('cf_email') );

		$cf_subject = $this->security->xss_clean( $this->input->get_post('cf_subject') );
		
		$cf_message = $this->security->xss_clean( $this->input->get_post('cf_message') );

		
		if(isset($cf_name{3}) )
		{
		
			if(isset($cf_name{3}) && isset($cf_email{3}) && isset($cf_subject{3}) && isset($cf_message{3}))
				$response = $this->games_api->Contact($cf_name, $cf_email, $cf_subject, $cf_message );
			
        	$this->mysmarty->assign('success', "Thanks For contact. We will back to soon");
			
		}
		
		
		$filename = 'site/'.SITE_LANG.'/contact.html' ;
		
        $this->mysmarty->assign('popular_games', $popular_games);
        $this->mysmarty->assign('recent_games', $recent_games);
        $this->mysmarty->assign('hot_games', $hot_games);
		$this->mysmarty->assign('top4_games', $top4_games);
		$this->mysmarty->assign('filename', $filename);
        $this->mysmarty->display('site/home.html'); 
	}
	
	
	public function search( )
	{
	
        $keyword =  $this->security->xss_clean( $this->input->get("key"));
        $related = $this->games_api->Find_Games( 20, $keyword );
		$top4_games = $this->games_api->Game_Feed('1', 'Driving', 4);
        
		$filename = 'site/'.SITE_LANG.'/search.html' ;
		
		$this->mysmarty->assign('top4_games', $top4_games);
		$this->mysmarty->assign('category_games', $related);
	    $this->mysmarty->assign('filename', $filename);
        $this->mysmarty->display('site/home.html'); 
	}
}

/* End of file home.php */
?>