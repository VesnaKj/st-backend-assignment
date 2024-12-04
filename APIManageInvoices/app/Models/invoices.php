<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invoices extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $fillable = ['invoicenumber','id'];
}
