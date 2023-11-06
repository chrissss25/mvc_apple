<?php
	require_once("../model/modelo.php");
	$menu = new productos();
	$pd = $menu->lista_productos();
	require_once("../view/vista.php");
?>