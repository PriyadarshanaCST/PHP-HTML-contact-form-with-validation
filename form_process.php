<?php

    //define variables and set to empty values
    $name_error = $email_error =$phone_error = $url_error = " ";
    $name = $email = $phone = $url = $success = " ";

    //form is submited with POST method
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $name_error = "Name is Required";
    }else{
            $name = test_input($_POST["name"]);
            
        }
    //email Required       
    if(empty($_POST["email"])){
    $email_error = "Email is Required";
    }else{
        $email = test_input($_POST["email"]);
        
    }
    //phone number required
    if(empty($_POST["phone"])){
    $phone_error = "Phone Number is Required";
    }else{
        $phone = test_input($_POST["phone"]);
        
    }

    //URL  required
    if(empty($_POST["url"])){
    $url_error = "URL  is required";
    }else{
    $url = test_input($_POST["url"]);

    }   

    if(empty($_POST["message"])){
    $message = "";    

    }else{
    $message = test_input($_POST["message"]);

    }


    if($name_error == '' and $email_error == '' and $phone_error == '' and $url_error == '' ){
       $message_body - '';
       unset ($_POST['submit']);
       foreach($_POST as $key => $value){
            $message_body .= "$key : $value\n";
       } 



    }


}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data); 
    return $data;

}

















    ?>