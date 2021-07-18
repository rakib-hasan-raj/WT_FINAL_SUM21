<?php include 'controllers/user.php'; ?>
<html>
    <body>
        <h4><?php echo $err_db; ?></h4>
        <form action="" method="post">
            <fieldset>
                <p align="middle"><font color="blue" size="5">Sign up</font></p>
            <table align="center">
                <tr>
                    <td>
                        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name">
                        <span><?php echo $err_name; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    <input type="text" name="username" value="<?php echo $uname; ?>" placeholder="Username">
                    <span><?php echo $err_uname; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    <input type="text" name="email" value="<?php echo $uemail; ?>" placeholder="Email">
                    <span><?php echo $err_uemail; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
                    <input type="password" name="password" value="<?php echo $upass; ?>" placeholder="Password">
                    <span><?php echo $err_upass; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="signup" value="Sign up">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>

