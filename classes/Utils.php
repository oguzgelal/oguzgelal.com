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

}