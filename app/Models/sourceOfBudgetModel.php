<?php

namespace App\Models;

use CodeIgniter\Model;

class sourceOfBudgetModel extends Model {
    protected $table = 'SOURCEOFBUDGET';
    protected $primaryKey = 'ID';

    public function list() {
		return $this->db->table($this->table)
                        ->select("*, (SELECT SUM(AMOUNT) FROM $this->table) TOTAL")
                        ->get()->getResult();
	}
}

?>