<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotes extends Model
{
    protected $table = "quotes";
	protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
