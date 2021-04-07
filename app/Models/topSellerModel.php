<?php

namespace App\Models;

use CodeIgniter\Model;

class topSellerModel extends Model {
    protected $table = 'TOPSELLER';
    protected $primaryKey = 'ID';

    public function list() {
		return $this->db->table($this->table)->get()->getResult();
	}
}

?>