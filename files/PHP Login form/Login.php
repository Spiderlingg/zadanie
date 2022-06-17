<?php

session_start();



global $ico;
$ico_err_nul = "the field is empty";

if ( !empty($_POST['ico'])){
    $ico = $_POST['ico'];
}

$pattern =  '/^[0-9]+$/';
if (preg_match($pattern, $ico) == 1){
    header("location:data.php");
} 
else {
    $ico_err = "Please use 8 numbers";
}

$_SESSION["url"] = $ico


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($ico_err_nul)){
            echo '<div class="alert alert-danger">' . $ico_err_nul . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>ICO</label>
                <input type="text" name="ico" maxlength = 8 class="form-control <?php echo (!empty($ico_err_nul)) ? 'is-invalid' : ''; ?>" value="<?php echo $ico = ''; ?>">
                <span class="invalid-feedback"><?php echo $ico_err; ?></span>
            </div>    
           
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>
</body>
</html>