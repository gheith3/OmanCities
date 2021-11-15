<?php

namespace Gheith3\OmanCities\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class OmanGovernorate extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    protected $table = "oman_governorates";

    public $translatable = ['name'];


    protected $guarded = ['id'];

    public function cities(): HasMany
    {
        return $this->hasMany(OmanCity::class, "governorate_id");
    }


}
