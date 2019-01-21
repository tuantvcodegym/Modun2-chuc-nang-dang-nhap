<html>
<head>
    <title>Thuc hanh chuc nang dang nhap</title>
    <style>
        .login{
            width: 230px;
            height: 180px;
            border: 1px #ccc solid;
            padding: 10px;
        }
        input{
            margin-bottom: 5px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form method="get">
        <div class="login">
            <h2>Login</h2>
            <input type="text" name="username" size="25" placeholder="username"/>
            <input type="password" name="password" size="25" placeholder="password"/>
            <input type="submit" value="Sing in"/>
        </div>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $username = $_GET["username"];
            $password = $_GET["password"];
            if($username == 'admin' && $password == 'admin'){
                echo "<h2>Welcome<span style='color: red'>.$username.</span>to website</h2>";
            }else{
                echo "<h2><span style='color: red'>Login Error</span></h2>";
            }
        }
    ?>
</body>
</html>