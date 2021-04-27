<html>
<head>
<title>fill the Form</title>
</head>
    <body>
        <form action = "/register/1" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            <table>
                <tr>
                <td>Name</td>
                <td><input type= "text" name="name"/></td>
                </tr>
                <tr>
                <td>username</td>
                <td><input type="text" name="username"/></td>
                </tr>
                <tr>
                <td>password</td>
                <td><input type="text" name="password"/></td>
                </tr>
                <tr>
                <td  colspan = "2">
                    <input type="submit" value="register"/>
                </td>
                </tr>
            </table>
        </form>
    </body>
</html>
