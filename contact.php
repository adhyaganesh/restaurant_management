<?php 
require('admin/include/config.php');
require('admin/include/require.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My hotel-contact</title>
    <?php require('include/links.php'); ?>
</head>

<body class="bg-light">
     
    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati soluta reiciendis
            velit,<br> voluptates non illum consectetur ipsum asperiores atque? Facere?</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-3 ">
                    <iframe class="w-100 rounded" height="350"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15549.372798517963!2d77.539951877811!3d13.013803303250103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d7115e2a667%3A0xf3f2ccdee4063552!2sMahalakshmi%20Layout%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1688360707433!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <i class="bi bi-geo-alt-fill"></i>
                    <a href="https://goo.gl/maps/cENsrEHTGDfCpyUL7" target="_blank"
                        class="text-decoration-none text-dark mb-5">waah taaj,Mahalakshmi layout,banglore</a>
                    <h5 class="mt-4">Call us</h5>
                    <i class="bi bi-telephone-plus-fill"></i><a href="tel : +91987654321"
                        class="d-inline-block mb-2 text-decoration-none text-dark">+91987654321</a>
                    <h5 class="mt-4">E-mail</h5>
                    <i class="bi bi-envelope-fill my-5"></i><a href="waahtaj8@gmail.com"
                        class="d-inline-block mb-2 text-decoration-none text-dark mx-1">waahtaj8@gmail.com</a>
                    <h5>Call us</h5>
                    <i class="bi bi-telephone-plus-fill"></i><a href="tel : +91987654321"
                        class="d-inline-block mb-2 text-decoration-none text-dark">+91987654321</a>
                        <h5>Follow us</h5>
                        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark fs-5 me-2">
                
                                <i class="bi bi-twitter me-1"></i> 
                        </a>

                        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark fs-5 me-2">
                           
                                <i class="bi bi-instagram me-1"></i>
                        </a>
                        
                        <a href="#" class="d-inline-block mb-2 text-decoration-none text-dark">
                            
                                <i class="bi bi-facebook me-1"></i>
                        </a>
                </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-3">
                        <form method="POST">
                            <h5>Send a message</h5>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight:500 ;">Name</label>
                                <input type="text" class="form-control shadow-none" id="exampleInputEmail1" name="name" required aria-describedby="emailHelp"> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight:500 ;">Email</label>
                                <input type="email" name="email" required class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight:500 ;">Subject</label>
                                <input type="text" name="subject" required class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp"> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight:500 ;">Message</label>
                                <textarea class="form-control shadow-none" name="message" required id="exampleFormControlTextarea1" rows="4" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" name="send" class="btn custom-bg btn-outline-dark">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>



    <?php
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
     use PHPMailer\PHPMailer\Exception;

     $name = $email = $subject = $message = '';
    $mailSent = false;
    $mailError = '';


        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];

           

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                    //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ganiguni28@gmail.com';                     //SMTP username
    $mail->Password   = 'dobpnvitwiqexstg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ganiguni28@gmail.com', 'contact us');
    $mail->addAddress($email, $name);     //Add a recipient

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thank you for your feedback for waah taaj!';
    $mail->Body = '<html><body>';
    $mail->Body .= '<p><b>Thank You for Your Feedback</b></p>';
    $mail->Body .= '<p>Dear ' . htmlspecialchars($name) . ',</p>';
    $mail->Body .= '<p>We have received your feedback and appreciate your valuable input. Your opinion helps us improve our services and better serve our customers.</p>';
    $mail->Body .= '<p>We will review your feedback and take any necessary actions to address your concerns or suggestions.</p>';
    $mail->Body .= '<p>Your feedback is important to us, and we strive to provide the best experience for our customers.</p>';
    $mail->Body .= '</body></html>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    $mailSent = true;
} catch (Exception $e) {
    $mailError= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

if ($mailSent) {
    // Assuming you have a function to insert data into the database
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `user_query`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
    $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

    $res = insert($q, $values, "ssss");

    if ($res == 1) {
        // Data inserted successfully
        alert('success', 'Feedback sent');
    } else {
        // Error occurred during data insertion
        alert('error', 'Some error occurred. Please try again later.');
    }
}
        }    
    ?>
    <?php require('include/footer.php'); ?>


    


</body>

</html>