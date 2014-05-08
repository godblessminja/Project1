<?php
    //connecting to a databse
    $link = mysql_connect('localhost','root','minja');
    if ($link)
    {
        echo "Connected <br />";
        $query1 = "SELECT * FROM myList1 WHERE id = '1'";
        if(mysql_select_db("myDb1",$link))
        {
            echo "Db selected<br />";
            if(mysql_query($query1))
            {
                echo "Query success <br />";
                
                $result = mysql_query($query1);
                while($row = mysql_fetch_array($result))
                    {
                        echo $row['field1'] . " " . $row['field2']. " " . $row['field3']
                                . " " . $row['field5'];
                        echo "<br>";                
                    }
            }
            else 
                {
                    echo "Query Failed<br />" . mysql_error();
                }
        }
        else 
                {
                    echo "DB selection Failed<br />";
                }
    }
    else
    {
        echo "Not connected <br />"  . mysql_error()."<br />";
    }



?>