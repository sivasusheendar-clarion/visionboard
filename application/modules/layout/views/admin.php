<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/default/css/bootstrap2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/default/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/default/css/bootswatch.min.css">
     <script src="<?php echo base_url(); ?>assets/default/js/jquery-1.8.2.min.js"></script>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Project name</a>
         <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="#"><i class="icon-home"></i> Home</a></li>
                    <li class="divider-vertical"></li>
                    <li class="active"><a href="/admin/users/"><i class="icon-user"></i> Users</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-envelope"></i> Messages</a></li>
                    <li class="divider-vertical"></li>
                      <li><a href="#"><i class="icon-signal"></i> Stats</a></li>
                    <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-lock"></i> Permissions</a></li>
                    <li class="divider-vertical"></li>
                </ul>
                
                <?php $this->layout->load_view('layout/_login'); ?> 
               
            </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
     <div class="row-fluid">
        <div class="span3">
          <div class="sidebar-nav">
          <div class="well" style="width:300px; padding: 8px 0;">
        <ul class="nav nav-list"> 
          <li class="nav-header">Main</li>        
          <li class="active"><a href="index" class="shortcut"><i class="icon-home icon-large"></i> Dashboard</a></li>
          <li><a href="#"><i class="icon-edit"></i> Add Blog Post</a></li>
          <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
          <li><a href="#"><i class="icon-user"></i> Members</a></li>
          <li><a href="#"><i class="icon-comment"></i> Comments</a></li>
          <li><a href="#"><i class="icon-picture"></i> Gallery</a></li>
        </ul>
    </div>
    </div>
        </div><!--/span-->
    <div class="span9">  
      <?php echo $content; ?> 
     </div>
  

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
   <script src="<?php echo base_url(); ?>assets/default/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/default/js/bootswatch.js"></script>

  </body>
</html>
