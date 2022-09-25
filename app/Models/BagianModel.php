<?php

namespace App\Models;

use CodeIgniter\Model;

class BagianModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'bagian';
    protected $primaryKey       = 'id_bagian';
    protected $allowedFields    = ['nama_bagian'];
}