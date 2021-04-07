<?php

namespace App\Models;

use CodeIgniter\Model;

class trenNilaiProjectModel extends Model {
    protected $table = 'TRENNILAIPROJECT';
    protected $primaryKey = 'ID';

    public function list() {
		return $this->db->table($this->table)->get()->getResult();
	}
}

?>