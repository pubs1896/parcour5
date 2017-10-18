<!DOCTYPE html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title><?= isset($title) ? $title : 'Voyage' ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="http://localhost/parcour-5/web/css/style.css">

</head>

<div id="page">
    <p>Loisirs et Vacances</p>
    <nav>
        <ul>
            <li><a href="/parcour5/"> Accueil </a></li>
            <li><a href="loisirs.php"> Idée loisirs </a></li>
            <li><a href="../../web/index.php"> contacte </a></li>
        </ul>
    </nav>
</div>
<div id="none">
    <nav>

        <i id="menu-mobile" class="fa fa-bars fa-3x" aria-hidden="true"></i> <i id="menu-close"
                                                                                class="fa fa-times fa-3x none"
                                                                                aria-hidden="true"></i>


        <ul id="deroul-menu">
            <li><a href="/parcour5/"> Accueil </a></li>
            <li><a href="loisirs.php"> Idée loisirs </a></li>
            <li><a href="/parcour5/contacte.html"> contacte </a></li>

        </ul>
    </nav>
</div>
<body>


<section id="unique">


    <P> Administration </P>

</section>




<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://localhost/parcour-5/web/js/ajax.js"></script>
<script src="http://localhost/parcour-5/web/js/menu.js"></script>
<script src="http://localhost/parcour-5/web/js/date.js"></script>
