<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 25px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px #aaa;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .gender {
            width: auto;
        }

        .terms {
            width: auto;
            margin-top: 15px;
        }

        .submit-btn {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Registration Form</h2>

    <form action="process_registration.php" method="POST">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="emailaddress">Email Address:</label>
        <input type="email" id="emailaddress" name="emailaddress" required>

        <label>Gender:</label>
        <input class="gender" type="radio" name="gender" value="Male" required> Male

        <input class="gender" type="radio" name="gender" value="Female"> Female

        <input class="gender" type="radio" name="gender" value="Other"> Other

        <label for="mobile">Mobile No.:</label>
        <input type="tel" id="mobile" name="mobile" required>

        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">-- Select Country --</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">United Kingdom</option>
            <option value="Canada">Canada</option>
            <option value="Australia">Australia</option>
            <option value="Germany">Germany</option>
            <option value="France">France</option>
            <option value="Japan">Japan</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password"
               name="confirm_password" required>

        <label>
            <input class="terms" type="checkbox" name="terms" value="Yes" required>
            I agree to the terms and condition
        </label>

        <button type="submit" class="submit-btn">Register</button>

    </form>

</div>

</body>
</html>
