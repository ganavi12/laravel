<!-- <form action="Login" method="post" style="margin:auto;width:250px;text-align:center">
    <h2>Login Account</h2>
    <label>Email</label>
    <input type="text" name="email" required><br><br>
    <label>Password </label>
    <input type="password" name="password" required><br><br>
    <button style="text-align:center" type="submit">login</button><br><br>
    <a href="welcome">click here to go to sign up</a>
    @csrf
</form> -->



<html xml:lang="en">

<head>
    <title></title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .wrapper {
        max-width: 500px;
        margin: 20px auto;
        text-align: center;
        background: aliceblue;
        font-family: cursive;
        color: black;
        padding: 15px;
    }

    .formInputs span {
        padding: 10px;
    }

    .formInputs span label {
        width: 35%;
        margin-right: 20px;
        text-align: left;
        float: left;
    }

    .formInputs span input {
        width: 60%;
        padding: 5px;
        border-radius: 5px;
        border: none;
        outline: none;
        background: #c0dada;
    }

    .formInputs span {
        width: 100%;
        display: block;
    }

    .btn {
        text-align: center;
        padding: 8px 15px;
        border-radius: 5px;
        border: none;
        outline: none;
        font-size: 14px;
        color: white;
        background: steelblue;
        margin: 20px 0px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="Login" method="post">
            <h2 style="padding-bottom: 10px">Login</h2>
            <div class="formInputs">
                <span>
                    <label>Email </label>
                    <input type="text" name="email" required>
                </span>
                <span>
                    <label>Password </label>
                    <input type="text" name="password" required>
                </span>
            </div>
            <div>
                <button class="btn" type="submit">Login</button>
            </div>
            <a href="welcome">Don't have account? sign up</a>
            @csrf
        </form>
    </div>

</body>

</html>

<!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" -->