        <?php
         $name=$_POST['name'];
         $email=$_POST['email'];

     //       $message=$_POST['message'];
	        $from="From: $name<$email>\r\nReturn-path: $email";

            mail("info@aquagroup.me", $name, $message, $from);


        //echo "Email sent!";


        ?>


