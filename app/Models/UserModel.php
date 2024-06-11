<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'nim';
    
    protected $allowedFields = ['nim', 'name', 'kelas'];
}