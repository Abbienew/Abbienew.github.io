<?php 
if(isset($POST['submit'])){
    $to = "248179@network.rca.ac.uk"; // this is your Email address
    $from = $POST['email']; // this is the sender's Email address
    $name = $POST['name'];
    $subject = $POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>