<?php 
namespace App\Models\project_uas;
use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';

    protected $primaryKey = 'id';
    
    protected $allowedFields = [
        'id', 'name', 'harga', 
        "created_at", "updated_at",
    ];
}