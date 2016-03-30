<?php

class Kabkota extends Eloquent 
{
	public $table = 'kabkota';

	public function provinsi() {
		return $this->belongsTo('Provinsi');
	}

	public function scopeSearchKabkota($query, $kabkota) {
	  if ($kabkota) return $query->where('nama_kabkota','LIKE', '%'.$kabkota.'%');
	}

	public function scopeSearchProvinsi($query, $provinsi) {
	  if ($provinsi) return $query->where('provinsi_id', $provinsi);
	}

}