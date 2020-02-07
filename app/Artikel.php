<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
    	'judul',
        'slug', 'deskripsi', 'foto', 'user_id', 'kategori_id'
    ];
    public $timestamps = true;

    public function kategori()
    {
    	// data model Artikel bisa dimiliki oleh model User
    	// melalui kategri_id
    	return $this->belongsTo('App\Kategori', 'kategori_id');
    }

    public function user()
    {
    	// data model Artikel bisa dimiliki oleh model User
    	// melalui user_id
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function tag()
    {
    	// Model Tag memiliki relasi Many to Many(belongsToMany)
    	// Terhadap model Artikel yang terhubung oleh
    	// table artikel tag masing masing sebagai artikel_id dan
    	// artikel_id
    	return $this->belongsToMany(
    		'App\Tag',
    	    'artikel_tag',
    	    'artikel_id', 
    	    'tag_id'
    	);
    }
}
