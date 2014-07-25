<?php
/**
 * The users model
 *
 * @category Users
 * @package  None
 * @author   Vijayaragavan Sivagurusamy
 * @license  http://www.Hiiku.com
 * @link     libraries/core/news_api.php
 *
 */
 
class Games_Api_Model extends CI_Model
{
 	 public $_dataMap = ''; 
   function Game_Feed( $provider, $category, $limit )
    {
		$sqls = 'CALL Games_Feed( "'.$provider.'", "'.$category.'", "'.$limit.'")';
		$qresult=$this->db->query($sqls);
    	               mysqli_next_result($this->db->conn_id);
		$db_results = $qresult->result_array();
		 if (count($db_results) > 0 )
                            {            
                            	return $db_results;
                            } else {            
                            	return 'ER';
                            } 
    }

    function Rand_Game( $game_id, $limit )
    {
    
		$sqls = "CALL Rand_Game( $game_id )";
		
		$qresult=$this->db->query($sqls);
		
    	mysqli_next_result($this->db->conn_id);
    	
		$db_results = $qresult->result_array();
		
		 if (count($db_results) > 0 )
        {            

        	return $db_results[0];

        } else {            
        	 return 'ER';
        } 
    }
    
    
    function Category_Feed( $starts, $ends, $category_name)
    {
		$sqls = "CALL Category_Feed( $starts, $ends, '".$category_name."')";
		
		$qresult=$this->db->query($sqls);
		
    	mysqli_next_result($this->db->conn_id);
    	
		$db_results = $qresult->result_array();
		
		 if (count($db_results) > 0 )
        {            

        	return $db_results;

        } else {            
        	 return 'ER';
        } 
    
    }
    
    
    function Contact( $args )
    {
 		$this->db->insert(TOOL_DB_NAME.'.contacts', $args);         
	 	return $this->db->insert_id(); 
       
    }
    
    
    function Find_Games( $count, $keyword )
    {
    
		$sqls = "CALL Find_Games('".$keyword."', $count )";
		
		$qresult=$this->db->query($sqls);
		
    	mysqli_next_result($this->db->conn_id);
    	
		$db_results = $qresult->result_array();
		
		 if (count($db_results) > 0 )
        {            

        	return $db_results;

        } else {            
        	 return 'ER';
        } 
    }
}
/* End of file users_model.php */
?>