<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * Controller  : Home, Landing Page
	 * Created on  : 21-Nov-2011
	 * Created By  : Vijayaragavan S
	 * Modified On :
	 * Modified By :	  
	 * Project     : Rightern
	 */

class Game extends CI_Controller {
	
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
		
		$filename = 'site/'.SITE_LANG.'/home.html' ;
		
        $this->mysmarty->assign('filename', $filename);
        $this->mysmarty->display('site/home.html'); 
		
	}
	
	
	public function category()
	{
		$category_name =  $this->url_input[$this->title];
		
		$req_uri = $_SERVER['REQUEST_URI'];
		
		if(is_numeric($category_name))
        {
        	$next = $category_name+1;
        	$prev = $category_name-1;
        	
        	$req_uri = substr( $req_uri, 0, -2 );
        	
        	$starts = $category_name*$this->cat_limit;
        	
        	$category_name =  $this->url_input[ $this->category ];
        	
        }else
        {
        	$starts = 0;
        	$next = 1;
        	$prev = -1;
        }
        
		$category_games = $this->games_api->Category_Feed( $starts, 20, $category_name );
		
		$filename = 'site/'.SITE_LANG.'/category.html' ;
		
        $this->mysmarty->assign('req_uri', $req_uri);
	    $this->mysmarty->assign('next', $next);
		$this->mysmarty->assign('prev', $prev);
        $this->mysmarty->assign('name', $category_name);
		$this->mysmarty->assign('category_games', $category_games);
		$this->mysmarty->assign('filename', $filename);
        $this->mysmarty->display('site/home.html'); 
	}
	
	
	public function play()
	{
		$game_id =  $this->url_input[$this->category];
		
		$shooting_games = $this->games_api->Game_Feed('1', 'Shooting', 4);
		$game = $this->games_api->Rand_Game( $game_id, 1);
		
		$popular_games = $this->games_api->Game_Feed('1', 'Sports', 5);
		
		$recent_games = $this->games_api->Game_Feed('1', 'Shooting', 5);
		
		$hot_games = $this->games_api->Game_Feed('1', 'Fighting', 5);
		
		$filename = 'site/'.SITE_LANG.'/play.html' ;
		
		$this->mysmarty->assign('hot_games', $hot_games);
		$this->mysmarty->assign('recent_games', $recent_games);
		$this->mysmarty->assign('popular_games', $popular_games);
		$this->mysmarty->assign('shooting_games', $shooting_games);
		$this->mysmarty->assign('game', $game);
		$this->mysmarty->assign('filename', $filename);
        $this->mysmarty->display('site/home.html'); 	
	}
	
}

/* End of file home.php */
?>