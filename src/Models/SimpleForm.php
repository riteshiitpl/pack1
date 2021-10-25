<?php 

namespace Invoidea\SimpleContact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SimpleForm extends Model
{
	use HasFactory;

	protected $table = 'simpleform';
	protected $fillable = [
		'name','email','age'
	];
}


?>