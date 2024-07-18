<?php
namespace Vendor\UserModule\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'userRoles';
    protected $fillable = ['role_id', 'user_id', 'status', 'created_at', 'updated_at'];
}
