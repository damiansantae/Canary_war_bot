<?php
class DataBase{
    private static $connection=null;
    public static function get(){
		if(self::$connection === null){
			self::$connection = $db = new PDO('mysql:host=35.181.85.196;dbname=cwb_db', "cwbadmin", "Pache013!");
		}
		return self::$connection;
    }
	
	public static function execute_sql($sql, $parms=null){
        try {
            $db = self::get();
            $res= $db->prepare ( $sql );
            if ($res->execute($parms)) {
                return $res;
            }
        }
        catch (PDOException $e) {
            echo '<h3>Error en la BBDD: ' . $e->getMessage() . '</h3>';
        }
        return false;
    }

	public static function getMunicipios($isla){
		try {
			$db = self::get();
			$result = $db->query("SELECT nombre FROM municipios WHERE isla='".$isla."'");
			$municipios = $result->fetchAll();
			return $municipios;
		} catch(PDOException $e){
			echo "Error con la BBDD".$e->getMessage();
		}
    }
    
    public static function enviarApoyo($email, $municipio){
		try {
			$db = self::get();
			$result = $db->query("INSERT INTO apoyoweb (correo,municipio) VALUES ('$email','$municipio')");
			return $result;
		} catch(PDOException $e){
			echo "Error con la BBDD".$e->getMessage();
		}
    }
    
    public static function verificarEmail($email){
		try {
			$db = self::get();
            $result = $db->query("SELECT correo FROM apoyoweb WHERE correo='".$email."'");
			$verificacion = $result->rowCount();
            if ($verificacion == 0){
            return 0;
            } else {
              return 1;
           }
		} catch(PDOException $e){
			echo "Error con la BBDD".$e->getMessage();
		}
	}


}
