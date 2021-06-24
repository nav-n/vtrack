<?php include('server.php')  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>V-Track</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <div class="header">
            <h2>Login</h2>
        </div> 
    </head>

    <body>     
        <form method="post" action="login.php">
            <?php include('errors.php') ;?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" style="backround-color:#5f9ea0"  name="login_user">Login</button>
            </div>

            <p>
                Not yet a member? <a href="register.php">Sign-up</a>
            </p>
        </form>
    </body>
</html>