<?php

namespace Gheith3\OmanCities\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class OmanCity extends Model
{
  use HasFactory, SoftDeletes, HasTranslations;

  protected $table = "oman_cities";

  public $translatable = ['name'];


    protected $guarded = ['id'];


  public function Governorate(): BelongsTo
  {
    return $this->belongsTo(OmanGovernorate::class, "governorate_id");
  }
}
