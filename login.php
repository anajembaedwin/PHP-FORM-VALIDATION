<DOCTYPE html>
<html>
    <head>
    </head>

    <body>
    <?php require_once 'reg-log.php' ?>
    <section>
        <h4>Thank you for registering , please Login: </h4>
<!--ensure you don't use the GET method as it exposes the user details.-->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">  
            <label>Email:    </label><br>
            <input name="email" type="email" required placeholder="Enter Your Email"><br><br>
            <label>Password:</label><br>
            <input name="password" type="password" required placeholder="Enter Your Password"><br><br>
            <button type="submit" name="login">Login</button>      
        </form>
        <form action="register.php"><button type="submit" name="register">Register</button></form>
    </section>
    </body>
</html