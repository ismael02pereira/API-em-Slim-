
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<style>
    .container {
        width: 40%;
        padding-top: 60px;

    }
</style>

<body>
    <div class="container">
        <!-- Pills navs -->
        <div class="borda">
            <form action="http://localhost:8000/login" method="POST"   enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example1">E-mail</label>
                    <input type="email" name="email" class="form-control"
                        placeholder="Exemplo:ismael@gmail.com" />

                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example2">Senha</label>
                    <input type="password" name="password" class="form-control" placeholder="Exemplo:Senha@123!" />

                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Enviar" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Me Lembre </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Esqueci a senha?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </form>
        </div>
    </div>
</body>

</html>