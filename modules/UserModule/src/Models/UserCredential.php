<?php
namespace Vendor\UserModule\Models;

use Illuminate\Database\Eloquent\Model;

class UserCredential extends Model
{
    protected $table = 'usersCredentials';
    protected $fillable = ['user_id', 'username', 'password', 'status', 'created_at', 'updated_at'];
}