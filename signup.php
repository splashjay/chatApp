/**
 * Created by PhpStorm.
 * User: Maheshi
 * Date: 6/20/2019
 * Time: 4:29 PM
 */
/**
* Created by PhpStorm.
* User: Maheshi
* Date: 4/20/2019
* Time: 10:13 PM
*/
<html>
<head>
    <title>Create new account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>
<div class="signup-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>Sign Up</h2>
            <p>Fill out this form and start chating with your friends</p>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="user_name" placeholder="username" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label>Country</label>
            <select class="form-control" name="user_country" required>
                <option disabled="">Select a country</option>
                <option>Sri Lanka</option>
                <option>USA</option>
                <option>UK</option>
                <option>India</option>
                <option>France</option>
                <option>Germany</option>
                <option>Australia</option>
                <option>Canada</option>
            </select>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="user_gender" required>
                <option disabled="">Select your gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>
        </div>
        <div class="form-group">
            <label class="checkbox-inline">
                <input type="checkbox" required>
                I accept the <a href="#">Terms of use</a> &amp; <a href="#">privacy policy</a>
            </label>
        </div>

        <div class="form-group">
            <button type="submit" name="sign_up" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>

        <?php include ("signup_user.php") ?>
    </form>
    <div class="text-center small" style="color: #ddeeee;">
        Already have an account? <a href="signin.php" style="color: #00cb82">Signin here</a>
    </div>
</div>

</body>
</html>