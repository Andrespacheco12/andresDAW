<?php

declare(strict_types=1);

session_start();

function redireccionar(string $url)
{
    header("Location: $url");
    exit;
}

function syso(string $contenido)
{
    file_put_contents('php://stderr', $contenido . "\n");
}

function obtenerFecha(): string
{
    return date("Y-m-d H:i:s");
}

function generarCadenaAleatoria($longitud): string
{
    for ($s = '', $i = 0, $z = strlen($a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789') - 1; $i != $longitud; $x = rand(0, $z), $s .= $a[$x], $i++) ;
    return $s;
}

function pintarInfoSesion()
{
    if (DAO::haySesionRamIniciada()) {
        echo "<span>Sesión iniciada por <a href='UsuarioVerPerfil.php?'>$_SESSION[identificador]</a> ($_SESSION[nombre] $_SESSION[apellidos]) </span>";
    }
}

