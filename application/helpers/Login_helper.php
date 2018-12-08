<?php 
    /**
     * Function Name
     *
     * Function description
     *
     * @access	public
     * @param	type	name
     * @return	type	
     */

    if (! function_exists('is_logged_in'))
    {
    	function is_logged_in()
    	{
    		if(isset($_SESSION['user'])){
    			return true;        
    		} else {
    			return false;
    		}
    	}
    }

    if (! function_exists('is_level'))
    {
    	function is_level(){
    		return $_SESSION['user']['level'];
    	}
    }

    if (! function_exists('is_nama')) {
        function is_nama(){
            return $_SESSION['user']['nama_user'];
        }
    }

    if (! function_exists('is_id')) {
        function is_id(){
            return $_SESSION['user']['iduser'];
        }
    }
    ?>