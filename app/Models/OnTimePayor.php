<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnTimePayor extends Model
{
    use HasFactory;

    protected $fillable=['Borrower_Name','Date_of_Transaction','Amount_of_Money_Borrowed','Remarks'];
}
