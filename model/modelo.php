<?php
class productos
{
	private $productos;
	private $dbh;

	public function __construct()
	{
		$this->productos = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bdapple', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_productos()
	{
		self::set_names();
		$sql="select idproducto, nombre, marca, precio, categoria, existencia, modelo, color from tblproductos";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->productos[]=$res;
		}
		return $this->productos;
		$this->dbh=null;
	}
}
?>