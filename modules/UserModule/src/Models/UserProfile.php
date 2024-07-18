<?php
namespace Vendor\UserModule\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'userProfile';
    protected $fillable = [
        'user_id', 
        'firstName', 
        'middleName', 
        'lastName', 
        'email', 
        'mobileNumber', 
        'bdate', 
        'gender', 
        'status', 
        'created_at', 
        'updated_at'
    ];
}