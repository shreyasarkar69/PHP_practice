<?php

$errors = [];

$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $mobile = trim($_POST["mobile"] ?? "");
    $country = $_POST["country"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";

    // Username
    if ($username == "") {
        $errors["username"] = "Username is required";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {
        $errors["username"] = "Only letters, numbers and spaces are allowed";
    }

    // Email
    if ($email == "") {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    // Gender
    if ($gender == "") {
        $errors["gender"] = "Gender must be selected";
    }

    // Mobile
    if ($mobile == "") {
        $errors["mobile"] = "Mobile number is required";
    } elseif (!preg_match("/^\+?[0-9]+$/", $mobile)) {
        $errors["mobile"] = "Only numbers and + are allowed";
    }

    // Country
    if ($country == "") {
        $errors["country"] = "Country must be selected";
    }

    // Password
    if (strlen($password) < 8) {
        $errors["password"] = "Password must be at least 8 characters";
    }

    // Confirm password
    if ($confirm_password != $password) {
        $errors["confirm_password"] = "Passwords do not match";
    }

    if (empty($errors)) {
        echo "<h3 style='color:green;'>Registration Successful!</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        .error {
            color: red;
        }

        .form-row {
            margin-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 150px;
        }
    </style>
</head>

<body>

<h2>Registration Form</h2>

<form method="POST" action="registration.php">

    <div class="form-row">
        <label>Username:</label>

        <input type="text" name="username"
               value="<?php echo htmlspecialchars($username); ?>">

        <?php if (isset($errors["username"])) { ?>
            <span class="error">
                * <?php echo $errors["username"]; ?>
            </span>
        <?php } ?>
    </div>


    <div class="form-row">
        <label>Email:</label>

        <input type="text" name="email"
               value="<?php echo htmlspecialchars($email); ?>">

        <?php if (isset($errors["email"])) { ?>
            <span class="error">
                * <?php echo $errors["email"]; ?>
            </span>
        <?php } ?>
    </div>


    <div class="form-row">
        <label>Gender:</label>

        <input type="radio" name="gender" value="Male"
            <?php if ($gender == "Male") echo "checked"; ?>>
        Male

        <input type="radio" name="gender" value="Female"
            <?php if ($gender == "Female") echo "checked"; ?>>
        Female

        <?php if (isset($errors["gender"])) { ?>
            <span class="error">
                * <?php echo $errors["gender"]; ?>
            </span>
        <?php } ?>
    </div>


    <div class="form-row">
        <label>Mobile No:</label>

        <input type="text" name="mobile"
               value="<?php echo htmlspecialchars($mobile); ?>">

        <?php if (isset($errors["mobile"])) { ?>
            <span class="error">
                * <?php echo $errors["mobile"]; ?>
            </span>
        <?php } ?>
    </div>


    <div class="form-row">
        <label>Country:</label>

        <select name="country">
            <option value="">-- Select Country --</option>

            <option value="India"
                <?php if ($country == "India") echo "selected"; ?>>
                India
            </option>

            <option value="USA"
                <?php if ($country == "USA") echo "selected"; ?>>
                USA
            </option>

            <option value="UK"
                <?php if ($country == "UK") echo "selected"; ?>>
                UK
            </option>
        </select>

        <?php if (isset($errors["country"])) { ?>
            <span class="error">
                * <?php echo $errors["country"]; ?>
            </span>
        <?php } ?>
    </div>


    <div class="form-row">
        <label>Password:</label>

        <input type="password" name="password">

        <?php if (isset($errors["password"])) { ?>
            <span class="error">
                * <?php echo $errors["password"]; ?>
            </span>
        <?php } ?>
    </div>


    <div class="form-row">
        <label>Confirm Password:</label>

        <input type="password" name="confirm_password">

        <?php if (isset($errors["confirm_password"])) { ?>
            <span class="error">
                * <?php echo $errors["confirm_password"]; ?>
            </span>
        <?php } ?>
    </div>


    <input type="submit" value="Register">

</form>

</body>
</html>
