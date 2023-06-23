
<!doctype html>
<html lang="en">

<head>
  <title>Registro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/registrarse-estilos.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <div class="background">
            <div class="text">
                <h1>Registrarse</h1>
                <p>Tenes cuenta? <a href="./login">Login</a></p>
            </div>
            <div class="box">
                <form method="POST" class="form" action="/register">
                    @csrf
                    <input type="text" name="username" class="nombrecompleto" placeholder="Usuario" required>
                    <input type="email" name="email" class="correo" placeholder="email@ejemplo.com" required>
                    <input type="password"  name="password" class="password" placeholder="Contraseña" required>
                    <input type="password" name="password_confirmation" class="password" placeholder="Confirmar Contraseña" required>
                    <input type="submit" class="button" value="Registrarse">
                </form>
            </div>
        </div>
    </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
