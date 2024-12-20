<!DOCTYPE html>
<html>
<head>
  <title>Form using PHP and JavaScript</title>
</head>
<body>
 
    <form method="post" action="" style="max-width: 600px; margin: 0 auto; padding: 20px;  background-color: #F7D8BA; border-radius: 8px; ">

      <h2>STUDENT REGISTRATION</h2>
     <h3>FILL HERE!!</H3>
        Name:<input type="text" name="Name" ><br><br>
        Email:<input type="text" name="email" ><br><br>
        Mobile no:<input type="text" name="mob" maxlength="10"><br><br>
        Username:<input type="text" name="user" ><br><br>
        Password:<input type="password" name="password" ><br><br>
 	Confirm Password:<input type="password" name="cpass" ><br><br>
 	 <h2>Other details</h2>
      <table border="1">
        <tr>
          <td>Gender:</td>
          <td><input type="text" name="gender" /></td>
        </tr>
        <tr>
          <td>Caste</td>
          <td><input type="text" name="caste" maxlength="10"/></td>
        </tr>
        <tr>
          <td>Course:</td>
          <td><input type="email" name="course" /></td>
        </tr>
        <tr>
          <td>Department:</td>
          <td><input type="text" name="user" /></td>
        </tr>
     </table><br><br>
       <input type="submit" value="Submit" name="submit" />
       
    </form>
  
  <?php
  if (isset($_POST['submit'])) {
      $name = $_POST['Name'];
      $email = $_POST['email'];
      $mob = $_POST['mob'];
      $user = $_POST['user'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      
      if (empty($name)) {
          echo "<script>alert('Enter Name !!');</script>";
      } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
          echo "<script>alert('Enter Valid Name !!');</script>";
      } else if (empty($email)) {
          echo "<script>alert('Enter Email !!');</script>";
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<script>alert('Enter Valid Email !!');</script>";
      } else if (empty($mob)) {
          echo "<script>alert('Enter Mobile No !!');</script>";
      } else if (!is_numeric($mob)) {
          echo "<script>alert('Enter Valid Mobile No !!');</script>";
      } else if (strlen($mob) != 10) {
          echo "<script>alert('Enter Valid Mobile No !!');</script>";
      } else if (empty($user)) {
          echo "<script>alert('Enter Username !!');</script>";
      } else if (empty($password)) {
          echo "<script>alert('Enter Password !!');</script>";
      } else if (strlen($password) < 8) {
          echo "<script>alert('Password must contain 8 characters !!');</script>";
      } else if ($password!=$cpassword) {
          echo "<script>alert('Password Not matching !!');</script>";
      } else {
          echo "<script>alert('Registration Successful !');</script>";
      }
  }
  ?>
</body>
</html>
