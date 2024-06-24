<?php 
namespace App\Models\project_uas;
use CodeIgniter\Model;

class MemberModel extends Model
{
    protected $table = 'member';

    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'id', 'email', 'password', 'username',
        'role', 'is_valid', 'membership',
        'created_at', 'updated_at', 'total'
    ];
}