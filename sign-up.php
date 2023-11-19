<?php

$fullnameMsg = $emailMsg = $phoneMsg = $addressMsg =  $dobMsg =  $religionMsg =  $usernameMsg = $passwordMsg =  $cpasswordMsg =  '';

if (isset($_GET['err'])) {

  $err_msg = $_GET['err'];
  
  switch ($err_msg) {
    case 'fullnameEmpty': {
        $fullnameMsg = "Fullname can not be empty.";
        break;
      }
    case 'phoneEmpty': {
        $phoneMsg = "Phone number can not be empty.";
        break;
      }
    case 'addressEmpty': {
        $addressMsg = "Address can not be empty.";
        break;
      }
    case 'emailEmpty': {
        $emailMsg = "Email can not be empty.";
        break;
      }
    case 'dobEmpty': {
        $dobMsg = "Date of birth can not be empty.";
        break;
      }
    case 'religionEmpty': {
        $religionMsg = "Religion can not be empty.";
        break;
      }
    case 'usernameEmpty': {
        $usernameMsg = "Username can not be empty.";
        break;
      }
    case 'passwordEmpty': {
        $passwordMsg = "Password can not be empty.";
        break;
      }
    case 'cpasswordEmpty': {
        $cpasswordMsg = "Confirm password can not be empty.";
        break;
      }
    case 'fullnameInvalid': {
        $fullnameMsg = "Fullname is not valid.";
        break;
      }
    case 'phoneInvalid': {
        $phoneMsg = "Phone number is not valid.";
        break;
      }
    case 'emailInvalid': {
        $emailMsg = "Email is not valid.";
        break;
      }
    case 'emailExists': {
        $emailMsg = "Email already exists.";
        break;
      }
    case 'usernameInvalid': {
        $usernameMsg = "Username is not valid.";
        break;
      }
    case 'passwordInvalid': {
        $passwordMsg = "Password is not valid.";
        break;
      }
    case 'passwordMismatch': {
        $cpasswordMsg = "Passwords do not match.";
        break;
      }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>

    <table width="27%" border="1" cellspacing="0" cellpadding="25" align="center">
        <tr>
            <td>
                <form method="post" action="sign-up-controller.php" novalidate autocomplete="off">
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration Page</h1>
                    <b>Full Name:</b>
                    <input type="text" name="fullname" size="43px"placeholder="Enter Your Full Name">
                    <?php if (strlen($fullnameMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $fullnameMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <b>Phone Number: </b><br>
                    <input type="text" name="phone" size="43px"placeholder="Enter Your Phone Number">
                    <?php if (strlen($phoneMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $phoneMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <b>Email:</b><br>
                    <input type="email" name="email" size="43px"placeholder="Enter Your Email">
                    <?php if (strlen($emailMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $emailMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <b>Address:</b>
                    <input type="text" name="address" size="43px"placeholder="Enter Your Address">
                    <?php if (strlen($addressMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $addressMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <b>Date of Birth: </b> &nbsp;&nbsp;&nbsp;
                    <input type="date" name="dob" size="43px">
                    <?php if (strlen($dobMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $dobMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <b>Religion: </b>&nbsp;&nbsp;&nbsp;
                    <select name="religion">
                        <option disabled selected hidden value="Not Selected">Choose Your Religion</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Christian">Christian</option>
                    </select>
                    <?php if (strlen($religionMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $religionMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <b>Username:</b> <br>
                    <input type="text" name="username" size="43px"placeholder="Enter Your Username">
                    <?php if (strlen($usernameMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $usernameMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <b>Password:</b><br>
                    <input type="password" name="password" size="43px"placeholder="Enter Your Password">
                    <?php if (strlen($passwordMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $passwordMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <b>Confirm Password:</b><br>
                    <input type="password" name="cpassword" size="43px"placeholder="Enter Your Confirm Password">
                    <?php if (strlen($cpasswordMsg) > 0) { ?>
                        <br><br>
                        <font color="red"><?= $cpasswordMsg ?></font>
                    <?php } ?>
                    <br><br>
                    <button>Create Account</button>
                    <a href="sign-in.php">Go Back</a>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>