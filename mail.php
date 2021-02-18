<?php
    $to = 'pacilinja2@gmail.com';
    $civility = $_POST['civility'];
    $names = $_POST["names"];
    $nationality = $_POST['nationality'];
    $place_birth = $_POST['place_birth'];
    $date_birth = $_POST['date_birth'];
    $marital_state = $_POST['marital_state'];
    $num_passport = $_POST['num_passport'];
    $expires_when = $_POST['expires_when'];
    $address = $_POST['address'];
    $destination = $_POST['destination'];
    $motif = $_POST['motif'];
    $type_visa = $_POST['type_visa'];
    $num_phone = $_POST['num_phone'];
    $email= $_POST["email"];
    $profession = $_POST['profession'];
    $sex = $_POST['sex'];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$civility.'  '.$names.'  '.$marital_state.' ASSISTANCE VISA</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Phone: '.$num_phone.'</td></tr>
        <tr><td>Destination: '.$destination.'</td></tr>
        <tr><td>Motif: '.$motif.'</td></tr>
        <tr><td>Type de visa: '.$type_visa.'</td></tr>
        <tr><td>Profession: '.$profession.'</td></tr>
        <tr><td>Passport No: '.$num_passport.'</td></tr>
        <tr><td>Expire : '.$expires_when.'</td></tr>
        <td> RENSEIGNEMENTS SUPPLEMENTAIRES </td>
        <tr><td>Lieu de naissance: '.$place_birth.'</td></tr>
        <tr><td>Date de naissance: '.$date_birth.'</td></tr>
        <tr><td>De Nationalite: '.$nationality.'</td></tr>
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }

?>