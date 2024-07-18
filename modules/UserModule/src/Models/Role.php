<?php
namespace Vendor\UserModule\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $fillable = ['name', 'status', 'created_at', 'updated_at'];
}