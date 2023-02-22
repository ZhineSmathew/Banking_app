<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
	protected $table = 'registerdeatils';

	protected $fillable = [
		'id_no',
		'name',
		'email',
		'password',
		'currentbalancesamount',
		'date',
		'time',
		'debit_amount',
		'credit_amount',
		'type',
		'details'
	];
}