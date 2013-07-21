<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="mainPageStyle.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <div id="header_container">
            <div id="header_logo">לוגו</div>
            <div id="header_sentence">משפט הסבר על האתר</div>
        </div>
        <div>
            <div id="login_container">
                <table>
                    <tr>
                        <td>
                            שם משתמש<br/><input name="username" type="text" value="" maxlength="15">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            סיסמא<br/><input name="userpassword" type="password" value="" maxlength="15">
                        </td>
                    </tr>
                    <tr>
                        <td class="login_element"><input type="checkbox" name="remember_me">זכור אותי</td>
                    </tr>
                    <tr>
                        <td class="login_element"><a href="forgotPassword.php">שכחת סיסמא?</a></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="login" value="התחבר"></td>
                    </tr>
                </table>
            </div>
            <div id="signup_container">
                <h2>רוצים להירשם ?</h2>
                <div><input type="submit" name="signup_private" value="רישום משתמש פרטי/עסקי חדש"></div>
            </div>
        </div>
        <div id="middle_container">
            <?php  ?>
        </div>
    </body>
</html>
