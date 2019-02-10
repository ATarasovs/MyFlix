<?php
/**
 * Created by PhpStorm.
 * User: Aleksandrs Tarasovs
 * Date: 1/28/2019
 * Time: 22:00
 */

require 'config/sql_connect.php';

if(isset($_POST['login'])) {
    $errMsg = '';

    // Get data from FORM
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == '')
        $errMsg = 'Enter email';
    if($password == '')
        $errMsg = 'Enter password';

    if($email != "" && $password != "") {
        try {
            $stmt = $connect->prepare('SELECT * FROM users WHERE email = :email');
            $stmt->execute(array(
                ':email' => $email
            ));
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if($data == false){
                $errMsg = "User $email not found.";
            }
            else {
                if($password == $data['password']) {
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['password'] = $data['password'];
                    $_SESSION['id'] = $data['id'];

                    header('Location: videos/videoMain.php');
                    exit();
                }
                else
                    $errMsg = 'Password not match.';
            }
        }
        catch(PDOException $e) {
            $errMsg = $e->getMessage();
        }
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="../css/login.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <title>PDO MySQL</title>
</head>

<body>
    <!--  Display error message  -->
    <?php if(isset($errMsg)) { ?>
        <div align="center">
            <div style=" border: solid 1px #006D9C; " align="left">
                <div style="color:#FF0000;text-align:center;font-size:17px;"><?php echo $errMsg ?></div>
            </div>
        </div>
    <?php } ?>

    <div class="container">
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                    <h2>Admin Login</h2>
                    <p>Please enter your email and password</p>
                </div>
                <form id="Login" action="" method="post">

                    <div class="form-group">
                        <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" autocomplete="off" class="form-control" placeholder="Password">
                    </div>

                    <div class="options">
                        <a href="register.php">Register</a><br/>
                        <a href="resetPassword.php">Forgot password?</a>
                    </div>

                    <input type="submit" name='login' value="Login" class='btn btn-primary'>

                </form>
            </div>
        </div>
    </div>
</body>
</html>