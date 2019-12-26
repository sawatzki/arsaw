<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ARTEM SAWATZKI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/style.css">
</head>

<body>
<div id="wrapper">
    <header class="fixed-top">
        <div class="black-line" data-toggle="collapse" data-target="#black-line-contact">
            <div class="username">Artem Sawatzki</div>
            <div id="black-line-contact" class="collapse">
                <div>Handy: 0176 47607548</div>
                <div>Email: artsawatzki@gmail.com</div>
                <div><a target="_blank" href="https://www.xing.com/profile/Artem_Sawatzki/cv">XING</a></div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg as-bg-rgba-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span id="menu-top-mobile-icon">
                    <hr>
                    <hr>
                    <hr>
                </span>
            </button>
<!--            <div class="top-view"><span>--><?//= $component; ?><!--</span></div>-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link col-md-12 pr-3 text-wheat <?= $component === "example" ? "menu-active" : "" ?>"
                           href="index.php?component=example">MUSTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link col-md-12 pr-3 text-wheat <?= $component === "todo" ? "menu-active" : "" ?>"
                           href="index.php?component=todo">AUFGABEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link col-md-12 pr-3 text-wheat <?= $component === "---" ? "menu-active" : "" ?>"
                           href="#">TERMINE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link col-md-12 pr-3 text-wheat <?= $component === "---" ? "menu-active" : "" ?>"
                           href="#">KONTAKT</a>
                    </li>
                </ul>
            </div>

        </nav>

    </header>

    <main>
        <div id="view"><?php require_once "components/$component/controller.php"; ?></div>
    </main>

    <footer>
        <div id="footer" class="as-bg-rgba-dark text-wheat p-3">
            <h3>FOOTER</h3>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa cumque distinctio ratione totam?
                Alias aliquam assumenda autem corporis deserunt distinctio in ipsam iste laudantium magni nobis
                quibusdam quis quod, ratione vero, voluptatibus.
            </div>
        </div>
        <div class="dark-line">
            <h3>ARTEM SAWATZKI</h3>
        </div>
    </footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="/resources/js/main.js"></script>
<script src="../components/<?= $component ?>/code.js"></script>
</body>

</html>
