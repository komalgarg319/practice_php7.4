<?php
//
//$to = "komal.gaarg@gmail.com";
//$subject = "Mail Test";
//$message = "Hello there...";
//$header = "From:komalaggarwal319@gmail.com \r\n";
////$header .= "Content-type:text/html;charset=UTF-8 \r\n";
//$result = mail($to,$subject,$message,$header);
//if($result == true){
//    echo "mail sent";
//}else{
//    echo "mail not sent.";
//}

//return decoded string
echo htmlentities("<Il était une fois un être>.\n");
echo htmlspecialchars("<Il était une fois un être>.\n");

