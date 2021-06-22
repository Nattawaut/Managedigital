<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="" href="stylesheet/styleadmin.css">
    <link rel="stylesheet" type="" href="stylesheet/style.css">
    <title>Form Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
    <div class="container">
        <section id="content">
            <form name="frmlogin" method="post" action="../backend/login.php">
                <h1>Login Form</h1>
                <div>
                    <input type="text" id="Username" required name="Username" placeholder="Username">
                </div>
                <div>
                    <input type="password" id="Password" required name="Password" placeholder="Password">
                </div>
                <div class="btnin">
                    <input type="submit" value="Log in" />
                </div>
            </form>
        </section>
    </div>
</body>
</html>