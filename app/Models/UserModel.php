<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $infoKey = 'id';
    protected $allowedFields = [
        'username','avatar','password','salt','created_date','created_by','update_date','update_by'
    ];
    protected $returnType = 'App\Entities\User';
    protected $useTimestampes = false;
}
?>