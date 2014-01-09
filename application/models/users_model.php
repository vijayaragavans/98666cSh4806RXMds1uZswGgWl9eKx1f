<?php
/**
 * The users model
 *
 * @category Users
 * @package  None
 * @author   Anoop kP
 * @license  http://www.flycell.com Flycell
 * @link     libraries/core/users.php
 *
 */
 
class Users_Model extends CI_Model
{
 
	 public $_dataMap = ''; 
	 
    function processLogin($username, $password)
    {
    	
    	$this->db->select("user_id, user_name, user_password, user_type, user_email, created_date");
        $this->db->from(TOOL_DB_NAME.'.tb_users');
        $this->db->where(array('tb_users.user_email'=>$username,"tb_users.user_password"=> $password, "tb_users.user_type" => 'A'));
        
        $query = $this->db->get();
        
		$db_results = $query->result();	
		
		 if (count($db_results) > 0 )
        {            

        	return $db_results[0];

        } else {            
        	 return 'ER';
        } 
        
    }
    
    
    function counts( $type )
    {
    
    	if($type  == '1')		// TIPS
    	{
	    	$this->db->select("article_id");
	        $this->db->from(TOOL_DB_NAME.'.articles');
	        $this->db->where(array('articles.article_is_status'=>'1', 'articles.article_type' => $type ));    	    	
    	}
    	else if($type == '2')   // QUESTIONS
    	{
	    	$this->db->select("article_id");
	        $this->db->from(TOOL_DB_NAME.'.articles');
	        $this->db->where(array('articles.article_is_status'=>'1', 'articles.article_type' => $type ));    	    	
    	}
    	else if($type  == '3') // USERS
    	{
	    	$this->db->select("user_id");
	        $this->db->from(TOOL_DB_NAME.'.tb_users');
	        $this->db->where(array('tb_users.user_is_active'=>'1'));    	
    	}
    	else if($type  == '4') // SIMPLE PLUGIN
    	{
	    	$this->db->select("plugin_id");
	        $this->db->from(TOOL_DB_NAME.'.plugins');
	        $this->db->where(array('plugins.plugin_is_active'=>'1', 'plugins.plugin_type' => '1'));    	
    	}    	
    	else if($type  == '5') // EXTERNAL PLUGIN
    	{
	    	$this->db->select("plugin_id");
	        $this->db->from(TOOL_DB_NAME.'.plugins');
	        $this->db->where(array('plugins.plugin_is_active'=>'1', 'plugins.plugin_type' => '2'));    	
    	}
    	else if($type  == '6') // HTML
    	{
	    	$this->db->select("html_template_id");
	        $this->db->from(TOOL_DB_NAME.'.html_template');
    	}
    	$query = $this->db->get();
        
		$db_results = $query->result();	
		
		 if (count($db_results) > 0 )
        {            

        	return count($db_results);

        } else {            
        	 return false;
        } 
    
    }
    
    
    function lists( $type, $count )
    {
    
    	if($type == '1')
    	{
	    	$this->db->select("user_id, user_name, user_type, user_email, created_date");
	        $this->db->from(TOOL_DB_NAME.'.tb_users');
	        $this->db->order_by("tb_users.created_date", DESC);
    	}
    	else if($type == '2')
    	{
	    	$this->db->select("article_id, title, description, user_email");
	        $this->db->from(TOOL_DB_NAME.'.articles');
	        $this->db->join(TOOL_DB_NAME.'.tb_users', 'tb_users.user_id = articles.posted_by', 'left');	        
        	$this->db->where(array('articles.article_type'=>'1'));        
	        $this->db->order_by("articles.job_created_on", DESC);    	
    	}
    	else if($type == '3')
    	{
	    	$this->db->select("article_id, title, description, user_email");
	        $this->db->from(TOOL_DB_NAME.'.articles');
	        $this->db->join(TOOL_DB_NAME.'.tb_users', 'tb_users.user_id = articles.posted_by', 'left');	        
        	$this->db->where(array('articles.article_type'=>'2'));
	        $this->db->order_by("articles.job_created_on", DESC);    	
    	}
    	
        if($count)
        {
	        $this->db->limit( $count );
        }
        
        $query = $this->db->get();
        
		$db_results = $query->result_array();	
		
		 if (count($db_results) > 0 )
        {            

        	return $db_results;

        } else {            
        	 return false;
        } 
        
    }
    

    
    function Get_Spam_Emails($ids)
    {
    
    	$query = mysql_query("SELECT title, user_name, user_email FROM `articles` as a LEFT JOIN `tb_users` as u ON u.user_id = a.posted_by  WHERE `article_id` IN ($ids)");
        
    	while($row = mysql_fetch_array($query))
    	{
    		$data[] = $row['user_email'];
    	}
    	
    	return $data;
    
    }
    
    
    function Get_All_Users()
    {
    
    	$this->db->select("*");
        $this->db->from(TOOL_DB_NAME.'.tb_users');
        $this->db->where(array("tb_users.user_type !=" => 'A'));
        $this->db->order_by("tb_users.user_id", "DESC");
        
        $query = $this->db->get();
        
		$db_results = $query->result_array();	
		
		 if (count($db_results) > 0 )
        {            

        	return $db_results;

        } else {            
        	 return false;
        } 
    
    }
    
    
    function Spam_Users( $ids )
    {
    
    	$query = mysql_query("UPDATE `tb_users` SET `user_is_active` = '0' WHERE user_id IN ($ids)");
    	
    	return true;
    	
    }
    
    function Get_All_Articles( $type )
    {
    
    	$this->db->select("*");
        $this->db->from(TOOL_DB_NAME.'.articles');
        $this->db->where(array("articles.article_type " => $type));
        $this->db->order_by("articles.article_id", "DESC");
        
        $query = $this->db->get();
        
		$db_results = $query->result_array();	
		
		 if (count($db_results) > 0 )
        {            

        	return $db_results;

        } else {            
        	 return false;
        } 
    }
    
    
    
    function Get_All_Comments()
    {
    
    	$this->db->select("*");
        $this->db->from(TOOL_DB_NAME.'.comments');
	    $this->db->join(TOOL_DB_NAME.'.articles', 'articles.article_id = comments.comment_article_id', 'left');	        
        $this->db->order_by("comments.comment_id", "DESC");
        
        $query = $this->db->get();
        
		$db_results = $query->result_array();	
		
		 if (count($db_results) > 0 )
        {            

        	return $db_results;

        } else {            
        	 return false;
        } 
    }
    
    
    
        function Get_Spam_Comments($ids)
    {
    
    	$query = mysql_query("SELECT title, user_name, user_email FROM `comments` as a LEFT JOIN `tb_users` as u ON u.user_id = a.comment_posted_by  WHERE `comment_id` IN ($ids)");
        
    	while($row = mysql_fetch_array($query))
    	{
    		$data[] = $row['user_email'];
    	}
    	
    	return $data;
    
    }
    
}
/* End of file users_model.php */
?>