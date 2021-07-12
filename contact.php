 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">Contact Us</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

        <style type="text/css">
            
            /* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

        </style>

    <?php
        if(isset($_POST['submit']))
        {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hotel_db";

        $fn = $_POST['firstname'];
        $ln = $_POST['lastname'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO contact (fname, lname, tel, email, discription) VALUES ('$fn', '$ln', '$tel', '$email', '$subject')";

        if ($conn->query($sql) === TRUE) {
          //echo "New record created successfully";
        } else {
          //echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        }
    ?>

        <body>

<div class="container">
  <div class="row">
    <div class="column">

    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11202.498431619022!2d79.84143934003244!3d6.928644280986647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593b09364c4f%3A0x7dc13fa1f24d5c16!2sShangri-La%20Colombo!5e0!3m2!1sen!2slk!4v1622581871469!5m2!1sen!2slk" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="column">
      <form action="index.php?page=contact" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required="true">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required="true">
        <label for="country">Contact No.</label>
        <input type="text" id="lname" name="tel" placeholder="Your Contact No.." required="true">
        <label for="country">Email</label>
        <input type="email" id="lname" name="email" placeholder="Your Email.." required="true">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>