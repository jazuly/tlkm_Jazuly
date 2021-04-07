<?php

namespace App\Models;

use CodeIgniter\Model;

class umkmModel extends Model {
    protected $table = 'UMKM';
    protected $primaryKey = 'ID';

    public function list() {
		return $this->db->table($this->table)
                        ->select("*, (SELECT SUM(REGISTER) FROM $this->table) TREGISTER, (SELECT SUM(PROJECT) FROM $this->table) TPROJECT")
                        ->get()->getResult();
	}
}

?>