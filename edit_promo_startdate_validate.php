<?php
session_start(); 
include 'DatabaseConnect.php';
       $edit=$_POST['edit'];
    if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$edit))
    {
        $sql="SELECT * FROM promo WHERE p_name='q'";
         $result = $connect->query($sql);
                           $row = ($result->fetch_assoc());
                            
                                $age = $row["e_date"];
                                
                            
        if(((strtotime($edit)) < (strtotime($age))))
        {
            $update_first_name_query = "UPDATE `promo` SET `s_date`='$edit' WHERE p_name='q'";
                            $result = $connect->query($update_first_name_query);
                    header('location:testing5.php');
        }
        else
        {

        $_SESSION['promo_edit_error'] = "s_date_greater";
            header('location:promo_edit_error.php');       
        }
    }
    else
    {
        $_SESSION['promo_edit_error'] = "format";
            header('location:promo_edit_error.php');
    }
    
                     
?>