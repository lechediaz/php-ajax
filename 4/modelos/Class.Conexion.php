<?php
/*
    Clase que permite la conexión a la base de datos.
    Creado por Oscar David Dïaz Fortaleché el 27/01/2016.
 */

class Conexion extends mysqli {
	// Datos de acceso a la base de datos.
	const SERVIDOR         = '127.0.0.1';
	const BASE_DE_DATOS    = 'base_de_datos';
	const USUARIO          = 'root';
	const CONTRASENA       = '';

	public function __construct() 
	{
		parent::__construct(
            $this::SERVIDOR,$this::USUARIO,$this::CONTRASENA,$this::BASE_DE_DATOS
        );
	}

	function Cerrar()
	{
        $this->close();
	}

	/*
        Propósito: Permite realizar una consulta a la base de datos y devolver 
        los resultados.

        Parametros:
            $consulta (String): Consulta SQL a realizar.

        Retorno:
            Conjunto de resultados, en caso de que no se pueda realizar 
            la consulta este devuelve FALSE. Mayor información en 
            http://php.net/manual/es/mysqli.query.php
	 */
	function Consultar($consulta)
	{
		return $this->query($consulta);
	}

	/*
        Propósito: Permite ejecutar una sentencia a la base de datos que 
        no requiera devolver resultados, por ejemplo un INSERT, UPDATE, 
        ALTER TABLE, etc.

        Parametros:
            $sentencia: String que contiene la sentencia a ejecutar.

        Retorno:
            Devuelve TRUE si fue exitosa la operación, FALSE de lo
            contrario más información en http://php.net/manual/es/mysqli.real-query.php
	 */
	function Ejecutar($sentencia)
	{
		return $this->real_query($sentencia);
	}
}