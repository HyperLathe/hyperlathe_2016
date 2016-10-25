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
                    <h1>contact</h1>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <h2>Get in touch...</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <p>...to discuss your online requirements, make an enquiry regarding my availability, or discover more about what I do and my approach to web designing and building.</p>
                        <p>Tel: <strong>+44 (0)7967 639 192</strong><p>
                        <p>Email: <strong>info(at)hyperlathe.com</strong></p>
                        <p>Or use the <strong>contact form:</strong></p>
                        <p class="smallprint">( *required fields )</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="contact_form" id="thankyou_message">
                            <form name="contactform" method="post" action="send_form_email.php">
                               <div class="form_line"><label>First Name *</label><input  type="text" name="first_name" maxlength="50" size="30"></div>
                                <div class="form_line"><label>Last Name *</label><input  type="text" name="last_name" maxlength="50" size="30"></div>
                                <div class="form_line"><label>Email Address *</label><input  type="text" name="email" maxlength="80" size="30"></div>
                                <div class="form_line"><label>Telephone Number</label><input  type="text" name="telephone" maxlength="30" size="30"></div>
                                <div class="form_box"><label>Comments *</label><textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea></div>
                                <input type="submit" value="Submit" class="submit_button"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
    </div>
<?php include("./inc/modals.php"); ?>

<?php include("./inc/footer.php"); ?>
</body>
</html>