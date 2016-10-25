<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@hyperlathe.com";
    $email_subject = "Contact via Website";
     
     
    function died($error) {
        // your error code can go here
        echo "<h1>We are very sorry, but there were error(s) found with the form you submitted.</h1>";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back to amend these errors. Thank you.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- include your own success html here -->
 
<!DOCTYPE HTML>

<html lang="en">

<?php $pageTitle = "HyperLathe | Web Design";
      $metaDescription = "Effective and responsive web design, development and maintenance by Richard Young";
      $metaKeywords = "web, design, build, development, copywriting, writing, responsive, html5, css3, html, css, semantic, accessible";
      include("./inc/head.php");
?>


<body>
<div id="page-wrap">
<?php include("./inc/sidebar.php"); ?>

<section id="main-content" class="container-fluid">
    <div id="guts" class="header_indent">
    <div class="logo_mobile visible-xs-block" id="home"><a href="index.php#"><span>hyperlathe</span></a></div>
        <div id="top-section">
            <h1>Success!</h1>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2>Thank you for your interest</h2>
                <p>I will be in touch as soon as possible.</p>
            </div>
        </div>
    </div>
<?php include("./inc/footer.php"); ?>
</section>

</div>
<?php include("./inc/modals.php"); ?>
</body>
</html>

 

<?php
}
?>