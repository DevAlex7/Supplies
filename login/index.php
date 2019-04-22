<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../global/css/materialize.min.css">
    <link rel="stylesheet" href="../global/css/material-icons.css">
    <link rel="stylesheet" href="../resources/dashboard/css/index.css">

</head>
<body>
    <div class="row">
        <div class="card col s12 m4 offset-m4" id="Login">
            <div class="card-panel">
                <span class="card-title">Iniciar Sesión</span>
            </div>
            <div class="card-content">
                <div class="row">
                    <form method="post">
                        <div class="input field col s10 offset-s1">
                            <span class="blue-text">Correo electronico:</span>
                            <input type="text" name="EmailUser" id="EmailUser">
                        </div>
                        <div class="input field col s10 offset-s1">
                            <span class="blue-text">Contraseña:</span>
                            <input type="password" name="PasswordUser" id="PasswordUser">
                        </div>
                        <button type="submit" id="LoginBtn" class="col s12 btn grey">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>