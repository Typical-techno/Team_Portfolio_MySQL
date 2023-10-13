 <!-- footer
 <?php include('DBConnection.php'); ?>
   ================================================== -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap');


#contact {
  background-color: #2B2B2B;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 80vh;
}

#contact .contact-box {
  width: clamp(100px, 90%, 1000px);
  margin: 80px 50px;
  display: flex;
  flex-wrap: wrap;
}

#contact .contact-links, .contact-form-wrapper {
  width: 50%;
  padding: 8% 5% 10% 5%;
}


#contact .contact-links {
  background-color: #1f2e43;
  background:
    radial-gradient(
      circle at 55% 92%, #426691 0 12%, transparent 12.2%
    ), 
    radial-gradient(
      circle at 94% 72%, #426691 0 10%, transparent 10.2%
    ), 
    radial-gradient(
      circle at 20% max(78%, 350px), #263a53 0 7%, transparent 7.2%
    ), 
    radial-gradient(
      circle at 0% 0%, #263a53 0 40%, transparent 40.2%
    ), 
    #1f2e43;
  border-radius: 10px 0 0 10px;
}

#contact .contact-form-wrapper {
  background-color: #ffffff8f;
  border-radius: 0 10px 10px 0;
}

@media only screen and (max-width: 800px) {
   #contact .contact-links, .contact-form-wrapper {
    width: 100%;
  }
  
  #contact .contact-links {
    border-radius: 10px 10px 0 0;
  }
  
  #contact .contact-form-wrapper {
    border-radius: 0 0 10px 10px;
  }
}

@media only screen and (max-width: 400px) {
   #contact .contact-box {
    width: 95%;
    margin: 8% 5%;
  }
}

#contact h2 {
  font-family: 'Arimo', sans-serif;
  color: #fff;
  font-size: clamp(30px, 6vw, 60px);
  letter-spacing: 2px;
  text-align: center;
  transform: scale(.95, 1);
}

#contact .links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 50px;
}

#contact .link {
   margin: 25px;
  cursor: pointer;
}

#contact i{
   color: white;
   font-size: 50px;
}

#contact i{
  width: 45px;
  height: 45px;
  transition: 0.2s;
  user-select: none;
}

#contact i:hover {
  transform: scale(1.1, 1.1);
  background-color: black;
  padding: 10px;
  border-radius: 10px;
}

#contact i:active {
  transform: scale(1.1, 1.1);
}

#contact .form-item {
  position: relative;
}

#contact label, #contact input, #contact textarea {
  font-family: 'Poppins', sans-serif;
}

#contact label {
  position: absolute;
  top: 5px;
  left: 2%;
  color: #999;
  font-size: clamp(14px, 1.5vw, 18px);
  pointer-events: none;
  user-select: none;
}

#contact input, #contact textarea {
  width: 100%;
  outline: 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-bottom: 40px;
  padding: 12px;
  font-size: clamp(15px, 1.5vw, 18px);
}

#contact input:focus+label, 
#contact input:valid+label, 
#contact textarea:focus+label, 
#contact textarea:valid+label {
  font-size: clamp(13px, 1.3vw, 16px);
  color: black;
  top: -35px;
  transition: all .225s ease;
}

#contact .submit-btn {
  background-color: #fd917e;
  filter: drop-shadow(2px 2px 3px #0003);
  color: #fff;
  font-family: "Poppins",sans-serif;
  font-size: clamp(16px, 1.6vw, 18px);
  display: block;
  padding: 12px 20px;
  margin: 2px auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  user-select: none;
  transition: 0.2s;
}

#contact .submit-btn:hover {
  transform: scale(1.1, 1.1);
}

#contact .submit-btn:active {
  transform: scale(1.1, 1.1);
  filter: sepia(0.5);
}

@media only screen and (max-width: 800px) {
   #contact h2 {
    font-size: clamp(40px, 10vw, 60px);
  }
}

@media only screen and (max-width: 400px) {
   #contact h2 {
    font-size: clamp(30px, 12vw, 60px);
  }
  
  .links {
    padding-top: 30px;
  }
  
  #contact img {
    width: 38px;
    height: 38px;
  }
}

   </style>
   <script>
        // Function to clear the form fields
        function clearForm() {
            document.getElementById("contact-form").reset();
        }
   </script>
<section id="contact">
        <div class="contact-box">
            <div class="contact-links">
                <h2>CONTACT</h2>
                <div class="links">
                    <div class="link">
                        <a><i class="fa fa-instagram"></i></a>
                    </div>
                    <div class="link">
                        <a><i class="fa fa-github"></i></a>
                    </div>
                    <div class="link">
                        <a><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrapper">
                <form action="#" method="POST">
                    <div class="form-item">
                        <input type="text" name="sender" required>
                        <label>Name:</label>
                    </div>
                    <div class="form-item">
                        <input type="text" name="email" required>
                        <label>Email:</label>
                    </div>
                    <div class="form-item">
                        <textarea class="" name="msg" required></textarea>
                        <label>Message:</label>
                    </div>
                    <button class="submit-btn" type="submit" name="submit">Send</button>
                </form>
            </div>
        </div>
    </section>


   <!-- Java Script
   ================================================== -->
   <script>
       if (window.history.replaceState) {
           window.history.replaceState(null, null, window.location.href);
       }
   </script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="<?php echo base_url ?>profile_asset/js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="<?php echo base_url ?>profile_asset/js/jquery-migrate-1.2.1.min.js"></script>

   <script src="<?php echo base_url ?>profile_asset/js/jquery.flexslider.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/waypoints.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/jquery.fittext.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/magnific-popup.js"></script>
   <script src="<?php echo base_url ?>profile_asset/js/init.js"></script>
   

   <?php
   if(isset($_POST['submit'])) {
    $sender = $_POST['sender'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    // Establish a database connection (assuming $conn is properly set up)
    $conn = mysqli_connect("localhost", "root", "", "db_freelance");

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute the SQL query
    $query = "INSERT INTO `form` (`name`, `email`, `msg`) VALUES ('$sender', '$email', '$msg')";
    $data = mysqli_query($conn, $query);

    // Check if the query was successful
   //  if ($data) {
   //      echo "Data inserted successfully.";
   //  } else {
   //      echo "Error: " . $query . "<br>" . mysqli_error($conn);
   //  }

    // Close the database connection
    mysqli_close($conn);
}
?>
