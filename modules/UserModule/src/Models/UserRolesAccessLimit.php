<?php
namespace Vendor\UserModule\Models;

use Illuminate\Database\Eloquent\Model;

class UserRolesAccessLimit extends Model
{
    protected $table = 'usersRolesAccessLimit';
    protected $fillable = ['userRoles_id', 'rolesDetail_id', 'status', 'created_at', 'updated_at'];
}