<?php
    
// Connects to your Database 
 if(mysql_connect("localhost", "root", "minja"))
    {
        echo "Yes<br />";
        
        if(mysql_select_db("myDb1"))
        {
            echo "Success";
        }
        else 
            {
                echo "Failed 2";
                die(mysql_error()); 
            }
            

    }
    else 
        {
            echo "No<br />";
            die(mysql_error()); 
        }
        
 

?>

