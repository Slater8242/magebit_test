<?php
  // Email validation file and function
  include 'database/emailValidation.php';
  $validation = new emailValidation();
  $validation->validation();
  // Data insertion into DB
  include 'database/subscribers.php';
  $subscribers= new subscribers();
  $subscribers->insertSubscribers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pineapple</title>
  <!-- Page stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!-- Fontawesome link for submit button -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
	 crossorigin="anonymous" />
</head>

	<div class="row">
    <!-- Base of the content -->
		<div class="base col-4">
      <!-- Top bar of the site -->
			<div class="topBar">
        <!-- Logo of site-->
				<div class="logo">
					<img id="logoImage" src="Images/logo.png" alt="logo">
              <a href="#topBar"><p id="logoName">pineapple.</p></a>
          </div>
            <!-- Top Bar menu -->
            <div class="topMenu">
              <a class="links" href="#about">About</a>
              <a class="links" href="#howItWorks" style="white-space: nowrap;">How it works</a>
              <a class="links" href="#contact">Contact</a>
            </div>
        </div>
          <!-- Content division -->
          <div class="content">
            <!-- Information division -->
            <div class="info">
              <h1 style="margin:0; margin-bottom:7.5px;">Subscribe to newsletter</h1>
              <p style="margin:0; margin-bottom:7.5px; width:80%;">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
            </div>
            <!-- Email Input field & button -->
            <div class="emailInput">
              <form id="validation" method="post" >
                <input id="emailText" type="text" name="emailText" placeholder="Type your email address here…" onkeyup="validation()" >
                <button id="emailSubmit" type="submit" name="emailSubmit"><i class="fal fa-long-arrow-right"></i></button>
                <p id="emailMessage">
                  <?php  // If condition ,in case if there have been made mistake
                    if (isset($_GET['error'])) {
                      if ($_GET['error'] == "emptyfields") {
                        echo "<span style='color:#FF0000;'>Email is required</span>";
                      }elseif ($_GET['error'] == "invalidmail") {
                        echo "<span style='color:#FF0000;'>Invalid email format</span>";
                      }elseif ($_GET['error'] == "columbia") {
                        echo "<span style='color:#FF0000;'>We are not accepting subscriptions from Colombia emails</span>";
                      }elseif ($_GET['error'] == "checkbox") {
                        echo "<span style='color:#FF0000;'>You must accept the terms and conditions</span>";
                      }
                    }
                  ?>
                </p>
              </form>
            </div>
            <!-- Terms of Service division -->
            <div class="tos">
              <!-- Label for custom checkbox -->
              <label class="checkboxLabel">
                <input type="checkbox" name="tos" id="checkbox" onclick="validation()" form="validation">
                <span id="tosCheckbox"></span>
              </label>
              <p id="tosText">I agree to <span style="text-decoration: underline; color: black;"><strong>terms of service</strong></span></p>
            </div>
            <!-- Horizontal rule between TOS & Social icons -->
            <hr id="line">
            <!-- Social Icons division -->
            <div class="socialIcons">
              <a href="#"><i class="fab fa-facebook-f icon"></i></a>
              <a href="#"><i class="fab fa-instagram icon"></i></a>
              <a href="#"><i class="fab fa-twitter icon"></i></a>
              <a href="#"><i class="fab fa-youtube icon"></i></a>
            </div>
          </div>
      </div>
    <!-- Background division -->
    <div class="col-8 bg"></div>
    <!-- Javascript file -->
    <script src="script.js"></script>
  </body>
</html>