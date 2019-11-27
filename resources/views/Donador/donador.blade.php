<!DOCTYPE html>
<html lang="es">

<head>

    <title>Registro de Donante</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

<body>
    <article>
        <section class="container">
            <h1 class="h2 text-center my-3">Donante</h1>

            <form action="donadores" method="POST" name="formulario" id="formulario" autocomplete="on">
                @csrf
                <fieldset>
                    <legend class="h4 text-center">
                        Datos Personales
                    </legend>
                    <div required class="form-group">
                        <label>Nombre</label>
                        <input required type="text" id="nombre" name="name" class="form-control" placeholder="Escribe tu nombre">
                    </div>
                    <div required class="form-group">
                        <label>Correo Electronico</label>
                        <input required type="email" id="email" name="email" class="form-control" placeholder="tucorreo@example.com">
                    </div>
                    <div required class="form-group">
                        <label>Edad</label>
                        <input min="1" max="65" required type="number" id="edad" name="edad" class="form-control" placeholder="18">

                        <br>
                        <select required name="type" id="type">
                            <option value="" selected disabled hidden>Tipo de sangre:</option>
                            <option value="A+">A Positiva</option>
                            <option value="A-">A Negativo</option>
                            <option value="B+">B Positivo</option>
                            <option value="B-">B Negativo</option>
                            <option value="O+">O Positivo</option>
                            <option value="O-">O Negativo</option>
                            <option value="AB+">AB Positivo</option>
                            <option value="AB-">AB Negativo</option>

                        </select>

                    </div>

                    <div class="form-group text-center">
                        <input type="submit" id="envio" value="Registrarse" class="btn btn-primary ">
                    </div>
                </fieldset>
            </form>

        </section>
    </article>



    <!-- Script para bootstrap -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="main.css">
</body>

</html>