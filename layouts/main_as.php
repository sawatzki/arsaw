<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ARTEM SAWATZKI</title>
    <link rel="stylesheet" href="/as/resources/css/style.css">
</head>

<body>
<div id="wrapper">
    <header>

        <div id="menu-top-mobile-icon">
            <hr>
            <hr>
            <hr>
        </div>

        <div id="menu-top">
            <nav>
                <ul>
                    <li><a class="<?= $component === "todo" ? "menu-active" : "" ?>" href="index.php?component=todo">Aufgabenliste</a></li>
                    <li><a class="<?= $component === "notes" ? "menu-active" : "" ?>" href="index.php?component=notes">NOTIZEN</a></li>
                    <li><a class="<?= $component === "appointment" ? "menu-active" : "" ?>" href="index.php?component=appointment">TERMINE</a></li>
                    <li><a class="<?= $component === "example" ? "menu-active" : "" ?>" href="index.php?component=example">EXAMPLE</a></li>
                </ul>
            </nav>
        </div>

    </header>

    <main>
        <div id="view">
            <?php require_once "components/$component/controller.php"; ?>
        </div>
    </main>

    <footer>
        <div id="footer">
            <h3>FOOTER</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa cumque distinctio ratione totam?
                Alias aliquam assumenda autem corporis deserunt distinctio in ipsam iste laudantium magni nobis
                quibusdam quis quod, ratione vero, voluptatibus.</p>
        </div>
        <div class="dark-line">
            <h3>ARTEM SAWATZKI</h3>
        </div>
    </footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="/as/resources/js/main.js"></script>
<script src="../components/<?= $component ?>/code.js"></script>
</body>

</html>
