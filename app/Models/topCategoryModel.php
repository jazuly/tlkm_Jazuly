<?php

namespace App\Models;

use CodeIgniter\Model;

class topCategoryModel extends Model {
    protected $table = 'TOPCATEGORY';
    protected $primaryKey = 'ID';

    public function list() {
		return $this->db->table($this->table)->get()->getResult();
	}
}

?>