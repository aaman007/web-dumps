<?php
		class dataClass{
			public static $username = "";

			public static function setUsername($username)
			{
				self::$username = $username;
			}
			public static function getUsername()
			{
				return self::$username;
			}
		}

?>