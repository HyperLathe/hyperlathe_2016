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
        	<h1>development</h1>
        </div>
        <div class="row">
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="dlg" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_dlg.jpg" alt="Direct Line Group">
      				<div class="caption">Direct Line Group</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="bostonIvy" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_bostonivy.jpg" alt="Boston Ivy">
      				<div class="caption">Boston Ivy</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="treasure8" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_treasure8.jpg" alt="Treasure8">
      				<div class="caption">Treasure8</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="cascades" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_thecascades.jpg" alt="The Cascades">
      				<div class="caption">The Cascades</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="beforeTheTour" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_beforethetour.jpg" alt="Before the Tour">
      				<div class="caption">Before the Tour</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="invenias" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_invenias.jpg" alt="Invenias">
      				<div class="caption">Invenias</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="missionHousing" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_missionhousing.jpg" alt="Mission Housing">
      				<div class="caption">Mission Housing</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="brianLock" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_brianlockmusic.jpg" alt="Brian Lock Music">
      				<div class="caption">Brian Lock Music</div>
    			</a>
  			</div>
  			<div class="col-xs-12 col-sm-6 col-md-4	">
    			<a onclick="loadModal(this.id)" data-toggle="modal" id="lebara" data-target=".modal_detail" class="thumbnail">
      				<img src="./img/thumbnail_lebara.jpg" alt="Lebara Mobile">
      				<div class="caption">Lebara Mobile</div>
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