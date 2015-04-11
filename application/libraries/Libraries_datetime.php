<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Libraries_datetime {

	function formatDate($stars)
	{
		$year = substr($stars,0,4);
		$date = substr($stars,8,2);
		$month = substr($stars,5,2);
		$hour = substr($stars,11,2);
		$minute = substr($stars,14,2);
		$formatMonth = $this->getMonthIndonesia($month);
		$icon = array('clock'=>'<i class="wait icon"></i>','calendar'=>'<i class="calendar icon"></i>');
		return $icon['calendar'].' '.$date.' '.$formatMonth.' '.$year.' '.$icon['clock'].' '.$hour.':'.$minute;
	}

	function getMonthIndonesia($stars)
	{
		$month = "";
		switch($stars){
			case '01':
				$month = 'Januari';
			break;
			case '02':
				$month = 'Februari';
			break;
			case '03':
				$month = 'Maret';
			break;
			case '04':
				$month = 'April';
			break;
			case '05':
				$month = 'Mei';
			break;
			case '06':
				$month = 'Juni';
			break;
			case '07':
				$month = 'Juli';
			break;
			case '08':
				$month = 'Agustus';
			break;
			case '09':
				$month = 'September';
			break;
			case '10':
				$month = 'Oktober';
			break;
			case '11':
				$month = 'November';
			break;
			case '12':
				$month = 'Desember';
			break;
		}
		return $month;
	}
}