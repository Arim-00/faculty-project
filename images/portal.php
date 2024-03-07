 
<?php
require'connect.php';
if(isset($_POST['submit'])){
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$message = filter_input(INPUT_POST, 'message');
        if (mysqli_connect_error()) {
            die('Connect Error ('. mysqli_connect_errno().')'
            .mysqli_connect_error());
        }else{
            $sql = "INSERT INTO comments(name,email,phone,message)
            VALUES('$name','$email', '$phone','$message')";
            if ($conn->query($sql)) {
               echo"<script> alert('submit successful');</script>";
            }else{
                echo"<script> alert('not sent');</script>";
            }
               $conn ->close();
        }
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Walewale Technical Institute</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utensils/style.css">
    <link rel="stylesheet" href="utensils/index.css">
    <link rel="stylesheet" href="utensils/food.css">
</head>


<body>
<div id="top-header">
            <div id="logo">
                <img src="" alt="">
            </div>
            <nav>
                <div id="menu">
                    <ul>
                        <li> <a class="active"><a href="portal.php">Home</a></li>
                        <li><a href="StudentResults.php">Results</a></li>
                        <li><a href="login.php">Apply </a></li>
                        <li><a href="Admission.php"> Admission</a></li>
                        <li><a href="Programmes.php"> Programmes</a></li>
                       
                    </ul>
                </div>

            </nav>
        </div>
        
        <div class="log">
<img src="logo.png" alt="" width="100" height="100"><br>
<label for="">Kumasi Technical University</label>
</div> 
    <ul>
<li><a class="active"><a href="portal.php">Alumni</a> </a></li>
<li><a href="Apply.php">Email</a></li>
<li><a href="Admission.php">Library</a></li><br>
<li><a href="Programmes.php">Student Portal</a></li>
<li><a href="contact us">Staff Portal</a></li>
</ul>
<div id="header-image-menu">
<section class="columns">
<div class="img-container">
                    <img src="ENTRANCE.jpg"width="1400" height="650" alt="">
                    <img src="CAMPUS2.jpg"width="1400" height="650">
                    <img src="GRADUATIONS.jpg"width="1400" height="650">
                    <img src="STAFF.jpg"width="1400" height="650">
                    <img src="ENTRANCE.jpg"width="1400" height="650">
                    <p id="image-text"></p>
                    </div>
            <h2 id="image-text">
                   
            </h2>
</div>
<center><br><br>
<div class="animation">

                <img src="university.jpeg" width="60" height="60"> 
                <img src="hat.png" width="60"height="60">
                <img src="pole.jpeg" width="60" height="60">
                <img src="computer.jpeg" width="60" height="60">
            </div>
</center>
<h4>Please make donation to help in developing the school</h4>
<div class="donates">
<form action="login.php">
<div class="donation">
   
    <div class="mb-2">
        <a href="login.php"><img src="NICE.jpg" alt=""></a><br>
        <h5>The school has many uncompleted <br>Dormitories and we pleading you to<br> make donate 
            to be able to complete it
        </h5>
    </div>
    <div class="mb-2">
        <a href="login.php"><img src="NICE.jpg" alt=""></a>
        <h5>The school has many uncompleted <br>Dormitories and we pleading you to<br> make donate 
            to be able to complete it
    </div>
    <div class="mb-2">
        <a href="login.php"><img src="NICE.jpg" alt=""></a>
        <h5>The school has many uncompleted <br>Dormitories and we pleading you to<br> make donate 
            to be able to complete it
    </div>
    <div class="mb-2">
        <a href="login.php"><img src="NICE.jpg" alt=""></a>
        <h5>The school has many uncompleted <br>Dormitories and we pleading you to<br> make donate 
            to be able to complete it
    </div>
    </div>
    <button type="submit" class="submit-donate">Donate Now!!!</button>
    </form>
    </div>
           
<center><h4>Recent News</h4></center>         
<div class="donates">
<form action="login.php">
<div class="donation">
   
    <div class="mb-2">
        <a href="login.php"><img src="ADMISSION.jpg" alt=""></a><br>
        <h5>The school has many uncompleted <br>Dormitories and we pleading you to<br> make donate 
            to be able to complete it
        </h5>
    </div>
    <div class="mb-2">
        <a href="login.php"><img src="GRADUATIONS.jpg" alt=""></a>
        <h5>The school has many uncompleted <br>Dormitories and we pleading you to<br> make donate 
            to be able to complete it
    </div>
    <div class="mb-2">
        <a href="login.php"><img src="STAFF.jpg" alt=""></a>
        <h5>The school has many uncompleted <br>Dormitories and we pleading you to<br> make donate 
            to be able to complete it
    </div>
    <div class="mb-2">
        <a href="login.php"><img src="NICE.jpg" alt=""></a>
        <h5>The school has many uncompleted <br>Dormitories and we pleading you to<br> make donate 
            to be able to complete it
    </div>
    </div>
    
    </form>
    </div>
      <b><HR></b> 
      <div class="more">
      <div class="more1">
      <div class="card1">
   <a href=""><img src="GRADUATIONS.jpg" alt=""  width="250"height="250"></a> 
    </div>
    <div class="card1">
    <a href=""><img src="GRADUATIONS.jpg" alt=""  width="250"height="250"></a> 
    </div>
    <div class="card1">
    <a href=""><img src="GRADUATIONS.jpg" alt=""  width="250"height="250"></a> 
    </div>
    <div class="card1">
    <a href=""><img src="GRADUATIONS.jpg" alt=""  width="250"height="250"></a> 
    </div>
      </div> 
      <form action="Contact.php" method="post">
      <button type="submit" class="submit1">Read More</button> 
      </form>
     
      </div> 
     <div class="comment">
        <div class="blank">

        </div>
        <div class="message">
            <form action="portal.php" method="post">
                <div class="mb-4">
                <input type="text"name="name" class="form-control" placeholder="Name" id="InputName" required>
                </div>
               <div class="mb-4">
               <input type="email"name="email" class="form-control" placeholder="Email" id="InputEmail" required>
               </div>
              <div class="mb-4">
              <input type="number"name="phone" class="form-control" placeholder="Phone Number" id="InputPhone" required>
              </div>
                <div class="mb-4">
                <textarea name="message" id="InputMeassage" cols="80" rows="5" placeholder="Message"></textarea>
                </div>
               
                <button type="submit"name="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

     </div>
      <footer id="footer">

<div class="school-details">
    <div class="row">
        <div id="col1">
            <span id="icon" class="fa fa-map-marker"></span>

            <span>
            Quick Links
            <br/>Staff portal <br>Student portal <br>Results check <br>
        </span>
        </div>

        <div id="col2">
            <span id="icon" class="fa fa-phone"></span>

            <span>
                Offices & Directorates <br>
            Telephone: +23355345567
        </span>
        </div>

        <div id="col3">
            <span id="icon" class="fa fa-envelope"></span>
            Faculties
            <span>hanapanther@gmail.com</span>
        </div>

        <div id="col3">
            <span id="icon" class="fa fa-envelope"></span>
            Contact WAVTI
            <span>hanapanther@gmail.com</span>
        </div>
    </div>
</div>


</footer>   
                
    </body>
    
</html>