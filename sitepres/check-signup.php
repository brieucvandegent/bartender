<?php

include ('database_connection.php');
if (isset($_POST['formsubmitted'])) {
    $error = array();//Declare An Array to store any error message  
    if (empty($_POST['name'])) {//if no name has been supplied 
        $error[] = 'Indiquez votre nom';//add to array "error"
    } else {
        $name = $_POST['name'];//else assign it a variable
    }

    if (empty($_POST['e-mail'])) {
        $error[] = 'Indiquez votre e-mail';
    } else {


        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['e-mail'])) {
           //regular expression for email validation
            $Email = $_POST['e-mail'];
        } else {
             $error[] = 'Votre e-mail est invalide';
        }


    }


    if (empty($_POST['Password'])) {
        $error[] = 'Entrez votre password ';
    } else {
        $Password = $_POST['Password'];
    }


    if (empty($error)) //send to Database if there's no error '

    { // If everything's OK...

        // Make sure the email address is available:
        $query_verify_email = "SELECT * FROM members  WHERE Email ='$Email'";
        $result_verify_email = mysqli_query($dbc, $query_verify_email);
        if (!$result_verify_email) {//if the Query Failed ,similar to if($result_verify_email==false)
            echo ' rreur base de donnée ';
        }

        if (mysqli_num_rows($result_verify_email) == 0) { // IF no previous user is using this email .


            // Create a unique  activation code:
            $activation = md5(uniqid(rand(), true));


            $query_insert_user = "INSERT INTO `members` ( `Username`, `Email`, `Password`, `Activation`) VALUES ( '$name', '$Email', '$Password', '$activation')";


            $result_insert_user = mysqli_query($dbc, $query_insert_user);
            if (!$result_insert_user) {
                echo 'Query Failed ';
            }

            if (mysqli_affected_rows($dbc) == 1) { //If the Insert Query was successfull.


                // Send the email:
               
                $message .= "Veuillez activer votre compte en cliquant sur ce lien:\n\n";
                $message .= WEBSITE_URL . '/activate.php?email=' . urlencode($Email) . "&key=" .$activation;
           
                mail($Email, 'Confirmation de votre enregistrement', $message, 'From: support@bartender.com');

                // Flush the buffered output.


                // Finish the page:
                echo '<div class="success"><p>Merci pour votre inscription, un e-mail vous à été envoyé à cette adresse '.$Email.' </br>Cliquez sur le lien qui vous à été envoyé pour activer votre compte</p> </div>';


            } else { // If it did not run OK.
                echo '<div class="errormsgbox"><p>Erreur lors de votre enregistrement.</p></div>';
            }

        } else { // The email address is not available.
            echo '<div class="errormsgbox" ><p>Cet e-mail est déja utilisé.</p>
</div>';
        }

    } else {//If the "error" array contains error msg , display them
        
        

echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '	<li>'.$values.'</li>';


       
        }
        echo '</ol></div>';

    }
  
    mysqli_close($dbc);//Close the DB Connection

} // End of the main Submit conditional.


?>
