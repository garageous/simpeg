<?php

namespace App\Models;

use CodeIgniter\Model;

class StrukturModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'struktur';
    protected $primaryKey       = 'id_so';
    protected $allowedFields    = ['nama_so', 'jumlah_bagian'];
    protected $useTimestamps = false;

    // konek antar 2 tabel
    function getAll()
    {
        $builder = $this->db->table('struktur');
        $builder->join('bagian', 'bagian.id_bagian = struktur_id_bagian_foreign');
        $query = $builder->get();
        return $query->getResult();
    }
}
