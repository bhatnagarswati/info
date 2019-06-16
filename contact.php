<?php

$name = $email = $gender = $comment = $website = "";
if($_SERVER['HTTP_ORIGIN'] == "http://bhatnagarinformatics.com") {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["first"]);
    $last_name = test_input($_POST["Last"]);
    $email = test_input($_POST["Email"]);
    $phone = test_input($_POST["Phone"]);
    $subject = test_input($_POST["Subject"]);
    $message = test_input($_POST["Message"]);
    $ip = $_SERVER['REMOTE_ADDR'];  

    if($name != "" && $last_name != "" && $email != "" && $phone != "" && $subject != "" && $message != "") {
        $db_host = 'localhost';
            $db_username = 'root';
            $db_password = 'demanding0605';
          //  $db_password="";
            $db_name = 'bhatnagars';

            $conn = mysqli_connect( $db_host, $db_username, $db_password, $db_name) or die("Connection Error: " . mysqli_error($conn));
            $date = date("Y-m-d H:i:s");

            mysqli_query($conn, "INSERT INTO `contacts` (first_name, last_name, email, phone, subject, message, ip, created_at) VALUES ('$name', '$last_name', '$email', '$phone', '$subject', '$message', '$ip', '$date') ");
            $insert_id = mysqli_insert_id($conn);
            if(!empty($insert_id)) {
                $message = "Your query is submitted successfully";    
                $data = [
                    'status' => 'success',
                    'message' => $message
                ];
            }else{
                $message =mysqli_error($conn);
                $data = [
                    'status' => 'error',
                    'message' => $message
                ];
            // die(mysqli_error($conn));
            }
            
            echo json_encode($data);
        }
    }
}else{
    $data = [
        'status' => 'error',
        'message' => 'Server side validation'
    ];
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


//header("Location: http://localhost/bhatnagarinformatics/#contact_sec");

//header("Location: http://bhatnagarinformatics.com/#contact_sec");
//exit;
//ob_flush();  

