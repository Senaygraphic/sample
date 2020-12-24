<?php
              session_start();
              include_once 'dbConfig.php';

              if(isset($_POST['LogIn']))
                  {
                      	$uname = mysql_real_escape_string($_POST['name']);
                     	$upass = mysql_real_escape_string($_POST['password']);
	                    $uname = trim($uname);
	                    $upass = trim($upass);
	                    
						$res=mysql_query("SELECT id, name, password FROM General WHERE name='$uname' and password='$upass' ");
	                    $row=mysql_fetch_array($res);
	                    $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	                    if($count == 1)
	                               {
		                                   $_SESSION['user'] = $row['name'];
		                                   header("Location: /lucy.php");
	                               }
	                    else 
	                               {
		                                    $res1=mysql_query("SELECT id, name, password FROM marketing WHERE name='$uname' and password='$upass' ");
	                    $row=mysql_fetch_array($res1);
	                    $count = mysql_num_rows($res1);
						              if($count == 1)
	                                            {
											$_SESSION['user'] = $row['name'];
		                                    header("Location: /wegagen.php");
	                                            }
					                                                           else
	                                                                                     {
		                                    ?>
                                             <script>alert('Name / Password Seems Wrong !');</script>
                                             <?php
	                                                                                      }
	                                                                       }
								                              
	                   
	
                  }
?>

<?php
?>
<html>
	<head>
		<title>HelloCash-Authentication-Demo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<form name="frmregister"action="#" method="post" >
		        <h2>መለያ ኮድ ወይም ስልክ ቁጥር:</h2>
				<input class="inp-text" name="name" value="z" id="name" type="text"/>
				
				<h2>የይለፍ ሚስጥር ቃል:</h2>
				<input class="inp-text" name="password" id="password" type="password"/>
				<h2>የሚጠቀሙበት ባንክ:</h2>
				<select name="demo-category" id="demo-category">
																	<option value="">ሉሲ-Lucy</option>
																	<option value="1">CBO</option>
																	<option value="1">Lion</option>
																	<option value="1">Walya</option>
																	<option value="1">Wegagen</option>
																</select>
				<hr />
				<input class="button primary" type="submit" value="ግባ" alt="Submit" title="Submit" name="LogIn" />
				
	</form>
						</div>
						<div class="image">
							<img src="images/banner.jpg" alt="" />
						</div>
					</section>

				<!-- Two -->
					

				<!-- Footer -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
							
							<p>&copy; Designed By: Juicy Solutions <ul class="icons">
								<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
							</ul>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>



