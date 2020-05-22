<?php
include "database.php";

if(isset($_POST['submit'])){	
	
$name = mysqli_escape_string($conn, $_POST['name']);
$email = mysqli_escape_string($conn, $_POST['email']);
$phone_no = mysqli_escape_string($conn, $_POST['phone_no']);
$subject = mysqli_escape_string($conn, $_POST['subject']);
$message = mysqli_escape_string($conn, $_POST['message']);





$sql = "INSERT INTO feedbacks (name, email, phone_no, subject, message)
VALUES ('$name','$email','$phone_no','$subject', '$message' )";

if ($conn->query($sql) === TRUE) {
  ?>
		   <script type="text/javascript">
		   alert("message submitted successfully.");
		   window.location="index.php";
		   </script>
			<?php
			die();

  } 
   



$conn->close();
}
?>

		