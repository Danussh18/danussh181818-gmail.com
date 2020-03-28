<?php
session_start(); 
include 'DatabaseConnect.php';
		$edit=$_POST['edit'];
		if($edit>=0&&$edit<=100)
		{
		$update_first_name_query = "UPDATE `promo` SET `percent`='$edit' WHERE p_name='q'";
                            $result = $connect->query($update_first_name_query);
                            echo $edit;
                            header('location:testing5.php');
        }
        else
        {
        	       $_SESSION['promo_edit_error'] = "percent";
            header('location:promo_edit_error.php'); 
        }
?>