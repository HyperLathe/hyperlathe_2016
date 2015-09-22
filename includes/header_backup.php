<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/logo.gif" alt="HyperLathe" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'design.php')) echo 'class="active"';?>><a href="design.php">DESIGN</a></li>
        <li><a href="#test_link">TEST LINK</a></li>
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'build.php')) echo 'class="active"';?>><a href="build.php">BUILD</a></li>
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'copywriting.php')) echo 'class="active"';?>><a href="copywriting.php">COPYWRITING</a></li>
        <li <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="active"';?>><a href="contact.php">CONTACT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


