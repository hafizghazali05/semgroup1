<?php
session_start();
//connectivity
require('../config.php');

if($_SESSION['user']=="")
{
  header('location:../index.php');
}
$username=$_SESSION['user'];
$sql="select * from users where username=$username";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];


?>
<html>
  <head>
    <title>ABC Group</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>
  <body class="is-preload">

    <!-- Wrapper -->
      <div id="wrapper">

        <!-- Main -->
          <div id="main">
            <div class="inner">

              <!-- Header -->
                <header id="header">
                  <a href="index.php" class="logo"><strong>ABC Hostel</strong></a>
                  <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                  </ul>
                </header>

              <!-- Banner -->
                <section id="banner">
                  <div class="content">
                    <header>
                      <center><h1>ABC Group of institution</h1><br></center> 
                    </header>   
                  </div>
                  <span class="image object">
                    <div class="w3-content">
                      <img class="mySlides" src="../images/1.jpg" style="width:100%">
                      <img class="mySlides" src="../images/2.jpg" style="width:100%">
                      <img class="mySlides" src="../images/3.jpg" style="width:100%">
                      <img class="mySlides" src="../images/4.jpg" style="width:100%">
                    </div>
                    <script>
                    var slideIndex = 0;
                    carousel();

                    function carousel() {
                      var i;
                      var x = document.getElementsByClassName("mySlides");
                      for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none"; 
                      }
                      slideIndex++;
                      if (slideIndex > x.length) {slideIndex = 1} 
                      x[slideIndex-1].style.display = "block"; 
                      setTimeout(carousel, 2000); 
                    }
                    </script>
                  </span>
                </section>
              <!-- Section -->
                <section>
                  <header class="major">
                    <h2>ABC Institution Hostel</h2>
                  </header>
                        <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
    <?php
  @$opt = $_GET['option'];
  if($opt=="")
  {
  ?>
    <html>
  <h1><center>Welcome <?php echo $_SESSION['user']; ?></center></h1>
    </html>
                
<?php
    error_reporting(1);
  }
  else{
  switch($opt)
  {
    case 'viewstatus':
    include('viewstatus.php');
    break;
    case 'login':
    include('login.php');
    break;
    case 'about':
    include('about.php');
    break;
    case 'contact':
    include('contact.php');
    break;
    case 'gallery':
    include('gallery.php');
    break;
    case 'course':
    include ('course.php');
    break;
    case 'mfees':
    include('mfees.php');
    break;
    case 'rfees':
    include('rfees.php');
    break;
    case 'hostel':
    include('applyhostel.php');
    break;
    
  }}
  ?>
  </td></section>
  </div>
  </div>

        <!-- Sidebar -->
          <div id="sidebar">
            <div class="inner">

              <!-- Menu -->
                <nav id="menu">
                  <header class="major">
                    <h2>Menu</h2>
                  </header>
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?option=about">About</a></li>
                    <li><a href="index.php?option=hostel">hostel</a></li>
                    <li><a href="index.php?option=mfees">Mess Fees</a></li>
                    <li><a href="index.php?option=rfees">Room Fees</a></li>
                    <li><a href="index.php?option=viewstatus">View Hostel Status</a></li>
                    <li>
                      <span class="opener">College Updates</span>
                      <ul>
                        <li><a href="../index.php?option=notice">Notice Board</a></li>
                        <li><a href="../index.php?option=cdrive">Campus Drive</a></li>
                        <li><a href="../index.php?option=news">News</a></li>
                        <li><a href="../index.php?option=sports">Sports Fest</a></li>
                        <li><a href="../index.php?option=admission">Admission 2014</a></li>
                        <li><a href="../index.php?option=sdp">Student Development Programme</a></li>
                        <li><a href="../index.php?option=wevents">Weekend Events</a></li>
                      </ul>
                    </li>
                    <li><a href="../index.php">Log out</a></li>
                  </ul>
                </nav>
              <!-- Section -->
                <section>
                  <header class="major">
                    <h2>Contact</h2>
                  </header>
                  <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#"> phptpoint@gmail.com</a></li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home"> ABC Engineering College, XYZ Group, Near AIIMS, New Delhi</li>
                  </ul>
                </section>

              <!-- Footer -->
                <footer id="footer">
                  <p class="copyright">Copyright under 2012-2013</p>
                </footer>

            </div>
          </div>

      </div>

    <!-- Scripts -->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/browser.min.js"></script>
      <script src="../assets/js/breakpoints.min.js"></script>
      <script src="../assets/js/util.js"></script>
      <script src="../assets/js/main.js"></script>

  </body>
</html>