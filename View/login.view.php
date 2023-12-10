<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        input {
            margin: 7px;
        }
    </style>
</head>

<body>
    <h1>LOGIN</h1>
    <form method="post" action="./../Controller/login.controller.php">
        <div>
            <input required name="usuario" type="text" placeholder="Usuario">
        </div>
        <div>
            <input required name="senha" type="password" placeholder="Senha">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>

</body>

</html>