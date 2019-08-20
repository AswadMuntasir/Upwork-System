<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $table = "job";
	protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
