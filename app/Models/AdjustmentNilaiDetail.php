<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use App\Models\AdjustmentNilai;
//use App\Models\Item;

class AdjustmentNilaiDetail extends Model
{
	protected $fillable = ['adjustment_nilai_id', 'item_id', 'nilai', 'keterangan'];

	// public function adjustmentNilai()
 //    {
 //    	return $this->belongsTo(adjustmentNilai::class, 'adjustmentnilai_id');
 //    }

 //    public function item()
 //    {
 //    	return $this->belongsTo(Item::class, 'item_id');
 //    }
}
