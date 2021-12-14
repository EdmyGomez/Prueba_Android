<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contacto</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/CSS/style.css">
</head>
<body>
    <header class="header_pages">
        <div class="container_header_index_top">
            <div class="header_index-top">
                <a href="/Views/Home/index.html">
                    <img src="/Media/img/logo.svg" alt="img_logo">
                </a>
            </div>
            <nav class="container_item_nav">
                <ul class="container_item_ul">
                    <li class="item_header"><a class="item_header" href="/Views/Pages/Nosotros.html">Nosotros</a></li>
                    <li class="item_header"><a class="item_header" href="/Views/Pages/Anuncios.html">Anuncios</a></li>
                    <li class="item_header"><a class="item_header" href="/Views/Pages/Blog.html">Blog</a></li>
                    <li class="item_header"><a class="item_header" href="/Views/Pages/Contactanos.html">Contacto</a></li>
                    <li>
                        <button class="button_index_darkmode" type="button"><img src="/Media/img/dark-mode.svg"
                                alt="noche" width="20px"></button>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    <section>
        <h1 class="normal text_center margin-20">Contacto</h1>
        <img class="width-100_100 height" src="/Media/img/destacada3.jpg" alt="" srcset="">
    </section>
    <section>
        <h1 class="normal text_center margin-20">Llene el Formulario de Contacto</h1>
        
        <form action="/php/contacto.php" method="POST" class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="name">Nombres</label><br>
                <input type="text" name="nombre" id="name" placeholder="Nombre Completos" required>
                <br>
                <label for="correo">E-mail</label><br>
                <input type="email" name='correo' id='correo' placeholder="Correo Electronico">
                <br>
                <label for="telefono">Telefono</label><br>
                <input type="tel" name='telefono' id='telefono' placeholder="Numero de Contacto" required>
                <br>
                <label for="textmensaje">Mensaje:</label><br>
                <textarea name="mensajes" id="textmensaje" cols="30" rows="5" maxlength="256"></textarea>

                <!-- <label for="genero">Genero:</label>
                <input type="radio" name="genero" id="genero" value="femenino" required>Femenino
                <input type="radio" name="genero" id="genero" value="masculino">Masculino
                <input type="radio" name="genero" id="genero" value="binarios">Binario
                <input type="radio" name="genero" id="genero" value="otros">Otros
                <br>
                <label for="fnacimiento">Fecha nacimiento</label>
                <input type="date" name="fechanacimiento" id="fnacimiento" required> -->


            </fieldset>
            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <label for="inmuebles">Vende o Compra:</label><br>
                <select name="inmuebles" id="inmuebles">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="compra">Compra</option>
                    <option value="vende">Vende</option>
                    <option value="otros">Otro</option>
                </select>
                <br>
                <label for="presupuesto" >Precio o Presupuesto </label><br>
                <input type="number" name='presupuesto' id='presupuesto' placeholder="Precio o Presupuesto" >
                <br>

            </fieldset>
            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <br>
                <!-- <p>Como desea ser contactado</p> -->
                <!-- <br> -->
                <label for="modocontacto">Como desea ser contactado</label>
                <br>
                <label for="modocontacto-tel">Telefono</label><input type="radio" name="modocontacto" id="modocontacto-tel" value="telefono" required>
                <label for="modocontacto-mail">E-mail</label><input type="radio" name="modocontacto" id="modocontacto-mail" value="email" required>
                <br>
                <p >Si eligio Telefono, elija la fecha y la hora</p>
                <label for="fecha">Fecha:</label><br>
                <input type="date" name="fecha" id="fecha" date-date-format="DD MMMM YYYY">
                <br>
                <label for="hora">Hora:</label><br>
                <input type="time" name="hora" id="hora">

            </fieldset>
            <input type="submit">
        </form>
        <script src=""></script>
    </section>
    <footer>
        <div class="header_pages">
            <nav class="container_item_nav ">
                <ul class="container_item_ul margin-top-10px padding-left-0px">
                    <li class="item_header"><a class="item_header" href="/Views/Pages/Nosotros.html">Nosotros</a></li>
                    <li class="item_header"><a class="item_header" href="/Views/Pages/Anuncios.html">Anuncios</a></li>
                    <li class="item_header"><a class="item_header" href="/Views/Pages/Blog.html">Blog</a></li>
                    <li class="item_header"><a class="item_header" href="/Views/Pages/Contactanos.html">Contacto</a></li>
                </ul>
            </nav>
            <div class="container_footer">
                <h2 class="color-white font-size-20">Todos los derechos Reservados 2021 &copy</h2>
            </div>

        </div>
    </footer>
</body>
</html>