<?php

namespace App\Models;

use CodeIgniter\Model;

class totalModel extends Model {
    protected $table = 'TOTAL';
    protected $primaryKey = 'ID';

    public function list() {
		return $this->db->table($this->table)->get()->getResult();
	}
}

?>