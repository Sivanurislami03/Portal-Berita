<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = ['nama', 'slug'];
	public $timestamps = true;

    public function artikel()
    {
    	// Model Tag memiliki relasi Many to Many(belongsToMany)
    	// Terhadap model Artikel yang terhubung oleh
    	// table artikel tag masing masing sebagai artikel_id dan
    	// Dari model artikel melalui tag_id
    	return $this->belongsToMany(
    		'App\Artikel',
    	    'artikel_tag', 
    	    'tag_id', 
			'artikel_id'
		);
    }
}
