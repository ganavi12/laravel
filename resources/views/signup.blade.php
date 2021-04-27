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
        <form action="SignUp" method="post">
            <h2 style="padding-bottom: 10px">Sign Up</h2>
            <div class="formInputs">
                <span>
                    <label>Name </label>
                    <input type="text" name="name" required>
                </span>
                <span>
                    <label>MobileNo </label>
                    <input type="text" name="mobile" required>
                </span>
                <span>
                    <label>Email </label>
                    <input type="text" name="email" required>
                </span>
                <span>
                    <label>Password </label>
                    <input type="text" name="password" required>
                </span>
            </div>

            <button class="btn" type="submit">Create Account</button>
            @csrf
        </form>
    </div>

</body>

</html>