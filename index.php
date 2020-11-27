<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="favicon.ico" />
        <title>PoC Speech Captcha</title>
        <style>
        .styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
    background-color: rgba(255, 0, 0, 1);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}
        </style>
    </head>
    <body>
        <form method="GET" action="validade.php">
            Texto : <input type="text" name="msg" placeholder="Digite qualquer coisa aqui..."> <br>
            Captcha : <img src="image.php" style="display: block;">
                <input class="styled" type="button" onclick="grava();" value="Gravar voz">
                <input type="hidden" id="captcha" name="captcha" value="">
            <button type="submit">Enviar</button>
        </form>
        <script src="script.js"></script>
    </body>
</html>
