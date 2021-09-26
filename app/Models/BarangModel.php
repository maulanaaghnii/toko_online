<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $infoKey = 'id';
    protected $allowedFields = [
        'nama', 'harga', 'stok', 'gambar', 'created_by', "created_date", 'updated_by', 'update_date'
    ];
    protected $returnType = 'App\Entities\Barang';
    protected $useTimestampes = false;
}
?>