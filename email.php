<?php
    if(isset($_POST['email'])) 
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $email = $_POST['phone'];
        $message = $_POST['message'];
        $title_subject = $_POST['subject'];
        
        $result = [];
        
        $to = "marscorporateho@gmail.com";
        $subject = "New message from $name";
        $body = "Name: $name\nEmail: $email\nSubject: $title_subject\nMessage: $message";
        $headers = "From: $email\r\nReply-To: $email\r\n";
      
        if(mail($to, $subject, $body, $headers)) 
        {
            $result['status'] = 'Success';
            $result['remarks'] = 'Your message has been sent successfully.';
        } 
        else 
        {
            $result['status'] = 'Failed';
            $result['remarks'] = 'Error in sending email';
        }
    }
    else
    {
        $result['status'] = 'Failed';
        $result['remarks'] = 'No email id received.';
    }
    
    echo json_encode($result);
?>