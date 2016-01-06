<?php 


if(isset($_POST['sendMail'])){

	  	 $to = "lasha.janjgava13@gmail.com";
         $subject = "Contact Us replay from ".$_POST['name'];
         
         $message = isset($_POST['text']) ? $_POST['text']:" ";
       
         
         $header = "From:".$_POST['email']." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }



}
