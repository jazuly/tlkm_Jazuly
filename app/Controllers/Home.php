<?php

namespace App\Controllers;

use DateTime;
use App\Models\sourceOfBudgetModel;
use App\Models\topCategoryModel;
use App\Models\topSellerModel;
use App\Models\totalModel;
use App\Models\trenNilaiProjectModel;
use App\Models\umkmModel;

class Home extends BaseController
{
	function __construct() {
		$this->sourceOfBudgetModel = new sourceOfBudgetModel();
		$this->topSellerModel = new topSellerModel();
		$this->trenNilaiProjectModel = new trenNilaiProjectModel();
		$this->umkmModel = new umkmModel();
		$this->topCategoryModel = new topCategoryModel();
		$this->totalModel = new totalModel();
	}

	public function index()
	{
		$data = [
			'TC' => $this->topCategoryModel->list(),
			'T' => $this->totalModel->list(),
			'HELPER' => $this
		];

		return view('welcome_message', $data);
	}

	public function dataVisual() {
		$dataVisual = [];

		$SOB = $this->sourceOfBudgetModel->list();
		$TS = $this->topSellerModel->list();
		$TNP = $this->trenNilaiProjectModel->list();
		$UMKM = $this->umkmModel->list();

		foreach ($SOB as $key => $value) {
			$dataVisual['SOB']['label'][] = $value->NAMA.': '.$this->bd_nice_number($value->AMOUNT).' ('.number_format($value->AMOUNT / $value->TOTAL * 100, 0).'%)';
			$dataVisual['SOB']['amount'][] = $value->AMOUNT;
		}

		foreach ($TS as $key => $value) {
			$dataVisual['TS']['label'][] = $value->NAMA;
			$dataVisual['TS']['amount'][] = $value->AMOUNT;
		}

		foreach ($TNP as $key => $value) {
			$dataVisual['TNP']['label'][] = (new DateTime($value->PERIODE))->format('F Y');
			$dataVisual['TNP']['amount'][] = $value->AMOUNT;
		}

		foreach ($UMKM as $key => $value) {
			$dataVisual['UMKM']['labelR'][] = $value->NAMA.': '.$this->bd_nice_number($value->REGISTER).' ('.number_format($value->REGISTER / $value->TREGISTER * 100, 0).'%)';
			$dataVisual['UMKM']['labelP'][] = $value->NAMA.': '.$this->bd_nice_number($value->PROJECT).' ('.number_format($value->PROJECT / $value->TPROJECT * 100, 0).'%)';
			$dataVisual['UMKM']['register'][] = $value->REGISTER;
			$dataVisual['UMKM']['project'][] = $value->PROJECT;
		}

		return $this->response->setJSON($dataVisual);
	}

	public function bd_nice_number($n) {
        $n = (0+str_replace(",","",$n));
       
        if(!is_numeric($n)) return false;
       
        if($n>1000000000000) return round(($n/1000000000000),1).'T';
        else if($n>1000000000) return round(($n/1000000000),1).'M';
        else if($n>1000000) return round(($n/1000000),1).'J';
        else if($n>1000) return round(($n/1000),1).'K';
       
        return number_format($n);
    }

	public function bd_nice_number2($n) {
        $n = (0+str_replace(",","",$n));
       
        if(!is_numeric($n)) return false;
       
        if($n>1000000000000) return 'RP'.round(($n/1000000000000),1).'T';
       
        return number_format($n);
    }
}
