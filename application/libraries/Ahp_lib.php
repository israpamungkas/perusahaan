<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AHP_lib
{	

	public function __construct()
	{
		$this->CI = &get_instance();
	}

	public function matriks_berpasangan($parameter){
		$total 				= count($parameter);
		$matriks 			= array(array());
		
		for($i = 0; $i < $total; $i++) {
			$jumlah				= 0;

			for ($j = 0; $j < $total; $j++) { 
				$matriks[$i][$j] = $this->hitung_berpasangan($parameter[$j], $parameter[$i]);				
				$jumlah			 = $jumlah + $matriks[$i][$j];
			}
			$matriks[$i][$total] = $jumlah;
		}

		return $matriks;
		//$this->matriks = $matriks;
	}

	private function hitung_berpasangan($nilai1, $nilai2){
		$nilai_berpasangan 	= null;

		if($nilai1 > $nilai2){
			$nilai_berpasangan = number_format((($nilai1 - $nilai2) + 1), 2);
		}
		else{
			$nilai_berpasangan = number_format((1 / (($nilai2 - $nilai1) + 1)), 2);
		}

		return $nilai_berpasangan;
	}

	public function normalisasi_matriks($matriks, $n){
		$normalisasi 		= array(array());
		$total				= $n; // total menjelaskan jumlah baris		
		
		for($i = 0; $i < $total; $i++){ // i menjelaskan baris			
			for($j = 0; $j < $total; $j++){ // j menjelaskan kolom
				$normalisasi[$i][$j] = $matriks[$i][$j] / $matriks[$i][$total];				
			}			
		}

		for ($i = 0; $i < $total; $i++) { 
			$jumlah				= 0;
			for ($j = 0; $j < $total; $j++) { 
				$jumlah = $jumlah + $normalisasi[$j][$i];
			}
			$normalisasi[$total][$i] = $jumlah;
		}

		return $normalisasi;
	}

	public function eigen_vector($normalisasi, $n){
		$eigen_vector 		= array();
		$total 				= $n;

		for($i = 0; $i < $total; $i++){
			$eigen_vector[$i]	= $normalisasi[$total][$i] / $total;
		}		

		return $eigen_vector;
	}

	public function lamda_maks($eigen_vector, $matriks, $n){
		$lamda_maks 	= 0;		

		for($i = 0; $i < $n; $i++){
			$lamda_maks = $lamda_maks + ($eigen_vector[$i] * $matriks[$i][$n]);
		}

		return $lamda_maks;
	}

	public function concistency($lamda_maks, $n){				
		$concistency['index']	= ($lamda_maks - $n) / ($n - 1);
		$concistency['ratio']	= ($lamda_maks - $n) / ($n - 1);

		return $concistency;
	}
}