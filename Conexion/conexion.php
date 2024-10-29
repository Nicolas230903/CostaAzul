<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"

define("USUARIO", "ujgr0xlamhagnkeq");
define("PASSWORD", "ZajbC3dt1EyqykBgZQu7");
define("DSN", "mysql:host=b9z9dz2a2z4gc8nqklaa-mysql.services.clever-cloud.com;dbname=b9z9dz2a2z4gc8nqklaa;charset=utf8");

function conectar()
{
  $pdo = new PDO(DSN, USUARIO, PASSWORD);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  return $pdo;
}

function cerrarConexion(&$pdo)
{
  $pdo=null;
}

$pdo = conectar();