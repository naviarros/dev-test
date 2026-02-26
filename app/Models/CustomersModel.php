<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'gender',
        'ip_address',
        'company',
        'city',
        'title',
        'website'
    ];

    public $timestamps = false;

    public $incrementing = false;
}
