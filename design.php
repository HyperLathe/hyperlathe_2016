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
    <div id="guts">
    	<div class="logo_mobile visible-xs-block" id="home"><a href="index.php#"><span>hyperlathe</span></a></div>
    	<div id="top-section">
        	<h1>design</h1>
        </div>
        <div class="row">
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="lebara" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_lebara.jpg" alt="Lebara Mobile screenshot">
      				<div class="caption">Lebara Mobile</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="pcs" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_pcs.jpg" alt="Payment Card Solutions screenshot">
      				<div class="caption">Payment Card Solutions</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="burningMan" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_burningman.jpg" alt="Burning Man detail map">
      				<div class="caption">Burning Man</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="annSummers" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_annsummers.jpg" alt="Ann Summers screenshot">
      				<div class="caption">Ann Summers</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="ima" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_ima.jpg" alt="Iron Monkey Arts logo">
      				<div class="caption">Iron Monkey Arts</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="inw" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_ignitionnw.jpg" alt="Ignition Northwest book cover">
      				<div class="caption">Ignition Northwest</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="myStyleSearch" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_mystylesearch.jpg" alt="My Style Search screenshot">
      				<div class="caption">MyStyleSearch</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="brianLock" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_brianlockmusic.jpg" alt="Brian Lock Music screenshot">
      				<div class="caption">Brian Lock Music</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" href="#" data-toggle="modal" id="ashleysPub" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_ashleyspub.jpg" alt="Ashley's Pub logo">
      				<div class="caption">Ashley's Pub</div>
    			</a>
  			</div>
  		</div>
    </div>
<?php include("./inc/footer.php"); ?>
</section>
<div class="corner_graphic">&nbsp;</div>
</div>
<?php include("./inc/modals.php"); ?>

</body>
</html>