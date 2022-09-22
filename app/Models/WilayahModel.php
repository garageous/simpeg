<?php

namespace App\Models;

use CodeIgniter\Model;

class WilayahModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'wilayah_2022';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['kode', 'nama'];

}
