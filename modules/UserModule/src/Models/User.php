<?php
namespace Vendor\UserModule\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['status', 'created_at'];
}