<?php
namespace Resource;

class Utils {

	public static function querydb($pdo, $sql, $ins){
		$query = $pdo->prepare($sql);
		foreach ($ins as $key => $value){
			if (is_int($value)){ $query->bindValue(":".$key, (int)$value, PDO_PARAM_INT); }
			else{ $query->bindValue(":".$key, $value); }
		}
		$query->execute();
		return $query;
	}

	// Should return to ajax calls
	/*
	public static function login($username, $password){
		$user = new \Resource\User();
		$user->getByUsernamePass($username, $password);
		if ($user->found){
			$_SESSION['logged_in'] = 1;
			$_SESSION['userid'] = $user->id;
			$_SESSION['username'] = $user->username;
			$_SESSION['email'] = $user->email;
			$_SESSION['type'] = $user->type;
		}
		else{ echo "Username or password incorrect. "; }
	}

	public static function logout(){
		if (isset($_SESSION['logged_in'])){
			$_SESSION['logged_in'] = 0;
			unset($_SESSION['logged_in']);
		}
		if (isset($_SESSION['userid'])){
			$_SESSION['userid'] = 0;
			unset($_SESSION['userid']);
		}
		if (isset($_SESSION['username'])){
			$_SESSION['username'] = 0;
			unset($_SESSION['username']);
		}
		if (isset($_SESSION['email'])){
			$_SESSION['email'] = 0;
			unset($_SESSION['email']);
		}
		if (isset($_SESSION['type'])){
			$_SESSION['type'] = 0;
			unset($_SESSION['type']);
		}
		session_destroy();
	}

	public static function isLoggedIn(){
		return isset($_SESSION['logged_in']);
	}
	public static function isAdminLoggedIn(){
		return isset($_SESSION['logged_in'])&&$_SESSION['type']==2;
	}

	public static function elapsedTime($seconds){
		$a_sec=1;
		$a_min=$a_sec*60;
		$an_hour=$a_min*60;
		$a_day=$an_hour*24;
		$a_week=$a_day*52;
		$a_month=$a_day*30;
		$a_year=$a_day*365;

		$params=1;
		$text='';
		if($seconds>$a_year){
			$years=floor($seconds/$a_year);
			$text.=intval($years).' years ';
			$seconds=$seconds-($years*$a_year);
			$params--;
		}
		if($params==0) return $text;
		if($seconds>$a_month){
			$months=floor($seconds/$a_month);
			$text.=intval($months).' months ';
			$seconds=$seconds-($months*$a_month);
			$params--;
		}
		if($params==0) return $text;
		if($seconds>$a_week){
			$weeks=floor($seconds/$a_week);
			$text.=intval($weeks).' weeks ';
			$seconds=$seconds-($months*$a_week);
			$params--;
		}
		if($params==0) return $text;
		if($seconds>$a_day){
			$days=floor($seconds/$a_day);
			$text.=intval($days).' days ';
			$seconds=$seconds-($days*$a_day);
			$params--;
		}
		if($params==0) return $text;
		$H=gmdate("H", $seconds);
		if($H>0){
			$text.=intval($H).' hours ';
			$params--;
		}
		if($params==0) return $text;
		$M=gmdate("i", $seconds);
		if($M>0){
			$text.=intval($M).' minutes ';
			$params--;
		}
		if($params==0) return $text;
		$S=gmdate("s", $seconds);
		$text.=intval($S).' seconds ';

		return $text;
	}
	*/
}