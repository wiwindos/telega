<?php
final class DefaultSettings {
	static protected $token = "457726276:AAFsAs3GN3H-6S8NffU7SesK10HUc8m-9IE";						//токен
	
	static protected $user = '045367002_bot';														//подключение к бд
	static protected $password = ']Uhntgfcbcd7';
	static protected $database = 'andry-nolove_bot';

	function getToken(){
		return self::$token;
	}
	
	function connectDB(){
		if( !isset($mysql) ) { 																		// проверяем подключение
			$mysql = new mysqli('localhost',self::$user,self::$password,self::$database); 			//var_dump($mysql);
			if ( mysqli_connect_errno($mysql) ) { 													// Поключение к БД
				return "<!-- Не удалось подключиться к БД " . mysqli_connect_error() . "--> \r\n";
			} else {
				$mysql->set_charset("utf8");
				return $mysql;
			}
		}
	}
}
?>