<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Soundcrave</title>
	
  <link rel="<?php echo base_url(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
	.btn-change.btn-primary:hover {
	  color: #fff;
	  background-color: #00ceffe8 !important;
	  border-color: #40bff7 !important;
	}
	.form-div {
	  margin-top: 100px;
	  border: 1px solid #e0e0e0;
	}
	#profileDisplay {
	    display: block;
	    height: 190px;
	    width: 92%;
	    margin: 0px auto;
	    border-radius: 50%;
	}
	.img-placeholder {
	  width: 33%;
	  color: white;
	  height: 100%;
	  background: black;
	  opacity: .7;
	  height: 210px;
	  border-radius: 50%;
	  z-index: 2;
	  position: absolute;
	  left: 50%;
	  transform: translateX(-50%);
	  display: none;
	}
	.img-placeholder h4 {
	  margin-top: 40%;
	  color: white;
	}
	.img-div:hover .img-placeholder {
	  display: block;
	  cursor: pointer;
	}
	.card {
	  font-size: 1em;
	  overflow: hidden;
	  padding: 0;
	  border: none;
	  border-radius: .28571429rem;
	  box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
	}
	.card-block {
	  font-size: 1em;
	  position: relative;
	  margin: 0;
	  padding: 1em;
	  border: none;
	  border-top: 1px solid rgba(34, 36, 38, .1);
	  box-shadow: none;
	}
	.card-img-top {
	  display: block;
	  width: 100%;
	  height: auto;
	}
	.card-title {
	  color: #494b4c;
	  font-size: 1.28571429em;
	  font-weight: 700;
	  line-height: 1.2857em;
	}
	.card-text {
	  clear: both;
	  margin-top: .5em;
	  color: rgba(0, 0, 0, .68);
	}
	.card-footer {
	  font-size: 1em;
	  position: static;
	  top: 0;
	  left: 0;
	  max-width: 100%;
	  padding: .75em 1em;
	  color: rgba(0, 0, 0, .4);
	  border-top: 1px solid rgba(0, 0, 0, .05) !important;
	  background: #fff;
	}
	.card-inverse .btn {
	  border: 1px solid rgba(0, 0, 0, .05);
	}
	.profile {
	  position: absolute;
	  top: -58px;
	  display: inline-block;
	  overflow: hidden;
	  box-sizing: border-box;
	  width: 87px;
	  height: 82px;
	  margin: 0;
	  border: 1px solid #fff;
	  border-radius: 50%;
	}
	.profile-avatar {
	  display: block;
	  width: 100%;
	  height: 100%;
	  border-radius: 50%;
	}
	.profile-inline {
	  position: relative;
	  top: 0;
	  display: inline-block;
	}
	.profile-inline ~ .card-title {
	  display: inline-block;
	  margin-left: 4px;
	  vertical-align: top;
	}
	.text-bold {
	  font-weight: 700;
	}
	.meta {
	  font-size: 1em;
	  color: rgba(0, 0, 0, .4);
	}
	.meta a {
	  text-decoration: none;
	  color: rgba(0, 0, 0, .4);
	}
	.meta a:hover {
	  color: rgba(0, 0, 0, .87);
	} 
	a:hover {
	  text-decoration: none !important;
	}
	.dropbtn {
	  background-color: #3495b7;
	  color: white;
	  padding: 7px;
	  font-size: 14px;
	  border: none;
	  margin-top: -3px;
	  margin-right: -1px;
	}
	.dropdown {
	  position: relative;
	  display: inline-block;
	  padding-left: 16px;
	  margin-right: 1px;
	  float: right;
	}
	.dropdown-content {
	  display: none;
	  background-color: #f1f1f1;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	  width: 76px;
	  font-size: 12px;
	  padding-left: 1px;
	}
	.dropdown-content a {
	  color: #565767;;
	  padding: 10px 11px;
	  text-decoration: none;
	  display: block;
	}
	.dropdown-content a:hover {background-color: #ddd;}
	.dropdown:hover .dropdown-content {display: block;}
	.dropdown:hover .dropbtn {background-color: #3495b7;}
  </style>
</head>

<body id="page-top">

  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image:linear-gradient(180deg,#960b68 10%,#03113a 100%);">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>index.php/UserController/">      
        <div class="sidebar-brand-text mx-3" style="text-transform: none !important;font-size: 1.2rem !important;margin-left: 0rem!important;">Soundcrave</div>
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fa fa-headphones"></i>
        </div>
      </a>
      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/UserController/UserDashboardButton">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>MY PROFILE</span></a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        User Detail
      </div>

      <li class="nav-item">
        <span class="nav-link" >
          <span class="img-div">
            <?php $base = $this->config->base_url(); ?>
            <img src="<?php echo  $base.'/assets/images/' .$this->session->userdata('avatar'); ?>" id="profileDisplay" width="90" height="90" alt="">
          </span>
        </span>
      </li> 

      <li class="nav-item">
        <span class="nav-link" >
          <center>
          	<?php echo "<a href='".$base."index.php/UserController/ShowPublicProfile'>"; ?> 
          	<span class="public-button" style="box-shadow: 1px 6px 13px 1px #232222;background-color: #1a5f82;border-radius: 21px;padding: 6px 10px;text-decoration: none;color: white;" >VIEW AS PUBLIC</span>
      	  	</a>
      	  </center>
        </span>
      </li>
	
	  <li class="nav-item">
        <span class="nav-link" >
          <i class="fa fa-fw fa-user"></i>
          <span><?php echo $this->session->userdata('fullname'); ?></span>
        </span>
      </li>

      <li class="nav-item">
        <span class="nav-link" >
          <i class="fa fa-fw fa-envelope"></i>
          <span><?php echo $this->session->userdata('email'); ?></span>
        </span>
      </li>

      <li class="nav-item">
        <span class="nav-link" >
          <i class="fa fa-fw fa-music"></i>
          <span style="text-align: right;">Favourite genre: </span></br>
          <span style="float: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $genreArray = $this->session->userdata('genres'); echo $genreArray; ?></span>
        </span>
      </li>

      <hr class="sidebar-divider">
      <li class="nav-item">
        <span class="nav-link" >
          <i class="fa fa-fw fa-users"></i>
          Following : 
          <?php 
          echo count($whoUserFollows); 
          ?>
      	</span>
      </li>

      <li class="nav-item">
        <span class="nav-link" >
          <i class="fa fa-fw fa-puzzle-piece"></i>
          Followers : 
          <?php 
          echo count($showfollowers); 
          ?>
        </span>
      </li>

      <center>
      	<a href="/Soundcrave/index.php/UserController/ShowEditProfile" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-change" style="background-color: #2895b7;border-color: #3495b7;">
      		<i class="fa fa-pencil fa-sm text-white-50"></i> Edit Profile </a>
      </center>
	  <br>
      <center>
      	<a href="/Soundcrave/index.php/UserController/Logout" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-change" style="background-color: #2895b7;border-color: #3495b7;"><i class="fa fa-sign-out fa-sm text-white-50"></i> Logout </a></center>
      <br>
      <hr class="sidebar-divider d-none d-md-block">
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
	  <div id="content">
	    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="background-color: #86467b!important;">

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto" >
            <span >
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/UserController/UserDashboardButton" style="color:white">
              Home</a>
            </span>
          </ul>  
          <ul class="navbar-nav ml-auto">
            <span >
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/FollowerController/ShowFollowing" style="color:white">
              Following</a>
            </span>
          </ul>  
          <ul class="navbar-nav ml-auto">
            <span>
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/FollowerController/ShowFollowers" style="color:white">
              Followers</a>
            </span>
          </ul>

          <ul class="navbar-nav ml-auto">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="/Soundcrave/index.php/UserController/SearchGenre" method="POST">
              <div class="input-group">
                <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for favourite genre..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary btn-change" style="background-color: #3495b7;border-color: #3495b7;" type="submit">
                    <i class="fa fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </ul>
            
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <span class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span href="/Soundcrave/index.php/UserController/ShowPublicProfile" target="_blank" class="mr-2 d-none d-lg-inline text-gray-600 small" style="color:white !important;"><?php echo $this->session->userdata('username'); ?></span>
               <img class="img-profile rounded-circle" src="<?php echo  $base.'/assets/images/' .$this->session->userdata('avatar'); ?>">
              </span>
            </li>

         
            <div class="topbar-divider d-none d-sm-block"></div>

            <li class="nav-item dropdown no-arrow">
		 		<span class="nav-link dropdown-toggle" id="userDropdown" role="button" >
					<a href="/Soundcrave/index.php/UserController/Logout" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm btn-change" style="background-color: #3495b7;border-color: #3495b7;">
						<i class="fa fa-sign-out fa-sm text-white-50"></i> Logout 
					</a>
              	</span>
            </li>
          </ul>
        </nav>

        <div class="container">
        	<br>
			<h1 id='search results' class='h3 mb-2 text-gray-800'><b>Your Search Results are . . .<b></h1>
			<br>
		<div class="row">
            <br>
<?php
    if (count($searchGenre) > 0) {
        $counter = 1;
			foreach ($searchGenre as $m) {
				if ( $m->getUserName() == $this->session->userdata('username') ){
				// Show nothing
				} else {	
					echo "<div class='col-sm-6 col-md-4 col-lg-3 mt-4'>";
				    echo "   <div class='card card-inverse card-info'>";
				    $base = $this->config->base_url();
				    echo "      <img class='card-img-top' src='".$base."assets/img/bg-masthead-8.jpg' style='filter:blur(1.8px);' >";
				    echo "    <div class='card-block'>";
				    echo "       <figure class='profile'>";
				    echo "           <img src='".$base."assets/images/".$m->getUserAvatar()."'  class='profile-avatar' >";
				    echo "      </figure>";
				    echo "     <h4 class='card-title mt-3'><a href='".$base."index.php/UserController/ShowPublicProfile?username=".$m->getUserName()."&userid=".$m->getId()."' style='color:#48b9cd;' >".$m->getUserName()."</a>"."</h4>";
				    echo "    <div class='meta card-text'>";
				    $followerId = $m->getId();
				    if (in_array($followerId, $whoUserFollows) && in_array($followerId, $isUserFriend)){ 
				    	echo "        <a style='font-weight: 600 !important;'>Friend</a>";
				    } else {
				    	echo "        <a style='font-weight: 600 !important;'>&nbsp;</a>";
				    }
				    echo "    </div>";
				    echo "    <div class='card-text' style='font-weight: 600 !important;'>";
				    echo $m->getUserName()."'s favourite genre is ".$m->getGenre().". Try checking out the profile.";
				    echo "   </div>";
				    echo " 	 </div>";
				    echo "   <div class='card-footer'>";
				    echo "   <small style='font-size: 60%;
				    font-weight: 400;'> Favourite Genre: ".$m->getGenre()."</small>";    
				    if (in_array($followerId, $whoUserFollows)){ 
					  echo "<div class='dropdown'>";
  					  echo "<button class='dropbtn btn btn-info btn-sm'>Following</button>";
					  echo "<div class='dropdown-content'>";
					  echo "<a href='".$base."index.php/FollowerController/UnfollowUser?followerid=".$m->getId()."&searchgenre=".$searchedGenre."&followername=".$m->getUserName()."'>Unfollow</a>";
					  echo "</div>";
					  echo "</div>";
					} else { 
					  echo "<a href='".$base."index.php/FollowerController/FollowUser?followerid=".$m->getId()."&searchgenre=".$searchedGenre."&followername=".$m->getUserName()."' class='btn btn-info float-right btn-sm'  style='color:#ffffff;'>Follow</a>";
					} 
					echo " </div>";
				    echo " </div>";
				    echo "</div>";
				    $counter++;            
			    }
			 } 
	} else {
        echo "<h1>No results found for the genre you searched. <br/> Try searching again.</h1>";
    }
?> 
</div>
	</div>        
      <!-- Footer -->
      <footer class="sticky-footer bg-white" style="margin-top: 100px;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Soundcrave 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/sb-admin-2.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/demo/chart-pie-demo.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/demo/datatables-demo.js"></script>

</body>
</html>
