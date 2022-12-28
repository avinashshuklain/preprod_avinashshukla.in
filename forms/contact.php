<?php
      include '../includes/dbconnection.php';
      // Taking all 4 values from the contact form data(input)
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $phone = $_REQUEST['phone'];
      $message = $_REQUEST['message'];

      $sql = "INSERT INTO contact_form (name,email,phone_number,message) VALUES ('$name','$email','$phone','$message')";

      // MySQLi Object-oriented method to insert the data in the database.
      if ($conn->query($sql) === TRUE) {
        echo "<script>
alert('Thank you for filling out your information!');
window.location.href='../index.php#contact';
</script>";
      } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script>
alert('Please try again after sometime.');
window.location.href='../index.php#contact';
</script>";
      }
      // Close connection
      mysqli_close($conn);
      
      ?>