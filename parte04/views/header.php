<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <ul class="header__ul">
                <li class="header__li">
                    <a class="header__link" href="<?php echo constant('URL'); ?>main">Main</a>
                </li>
                <li class="header__li">
                    <a class="header__link" href="<?php echo constant('URL'); ?>nuevo">Nuevo</a>
                </li>
                <li class="header__li">
                    <a class="header__link" href="<?php echo constant('URL'); ?>consulta">Consulta</a>
                </li>
                <li class="header__li">
                    <a class="header__link" href="<?php echo constant('URL'); ?>ayuda">Ayuda</a>
                </li>
            </ul>
        </nav>
    </header>