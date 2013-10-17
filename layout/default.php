<!DOCTYPE html>
<html>
    <head>
        <title>Juez Virtual</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <h1>JUEZ VIRTUAL</h1>
                <nav>
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/registrar">Registrar</a></li>
                    </ul>
                    <div class="clear"></div>
                </nav>
            </header>
            <section>
                <?php include 'vistas/' . $page . '.php'; ?>
            </section>
        </div>
    </body>
</html>
