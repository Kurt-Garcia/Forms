<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseReimbursement extends Model
{
    protected $fillable = ['name', 'amount', 'category', 'receipt'];

}
