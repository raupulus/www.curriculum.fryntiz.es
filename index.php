<!DOCTYPE html>
<?php
/**
 * @author Raúl Caro Pastorino
 * @copyright Copyright © 2017 Raúl Caro Pastorino
 * @license https://www.gnu.org/licenses/gpl-3.0-standalone.html
 */
?>

<HTML lang="es">
    <HEAD>
        <?php
            include 'head.php';
        ?>
    </HEAD>

    <BODY id="paginicio">
        <?php
            include 'AnalíticaSeguimiento.php';
            include 'menusuperior.php';
        ?>

        <HEADER id="cajaHead">
            <?php
                include 'header.php';
            ?>
        </HEADER>

        <DIV id="contenidoweb">
            <?php
                include 'contenidoprincipal.php';
                include 'barraderecha.php';
            ?>
        </DIV><!--Fin del contenedor para la web-->

        <?php
            include 'piedepagina.php';
        ?>
    </BODY>
</HTML>
