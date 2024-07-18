<?php
namespace Vendor\UserModule\Models;

use Illuminate\Database\Eloquent\Model;

class RoleDetail extends Model
{
    protected $table = 'rolesDetail';
    protected $fillable = ['role_id', 'name', 'description', 'status', 'created_at', 'updated_at'];
}