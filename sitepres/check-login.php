<?php
if (isset($_POST['formsubmitted'])) {
    // Initialize a session:
session_start();
    $error = array();//this aaray will store all error messages
  

    if (empty($_POST['e-mail'])) {//if the email supplied is empty 
        $error[] = 'Veuillez entrer votre e-mail';
    } else {


        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {
           
            $Email = $_POST['e-mail'];
        } else {
             $error[] = 'Votre e-mail est invalide  ';
        }


    }


    if (empty($_POST['Password'])) {
        $error[] = 'Veuillez entrer votre password ';
    } else {
        $Password = $_POST['Password'];
    }


       if (empty($error))//if the array is empty , it means no error found
    { 

       

        $query_check_credentials = "SELECT * FROM members WHERE (Email='$Email' AND password='$Password') AND Activation IS NULL";
   
        

        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials){//If the QUery Failed 
            echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.

           


            $_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable
           
            header("Location: page.php");
          

        }else
        { 
            
            $msg_error= '<p>Votre compte est inactif ou votre e-mail, password est incorrect</p>';
        }

    }  else {
        
        

echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '	<li>'.$values.'</li>';


       
        }
        echo '</ol></div>';

    }
    
    
    if(isset($msg_error)){
        
        echo '<div class="warning">'.$msg_error.' </div>';
    }
    /// var_dump($error);
    mysqli_close($dbc);

} // End of the main Submit conditional.



?>
