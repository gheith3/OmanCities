<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

/**
 * Class OmanGovernorate
 *
 * @property int $id
 * @property string $name
 * @property string $latitude
 * @property string $longitude
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|wilayat[] $oman_wilayats
 *
 * @package App\Models
 */
class OmanGovernorate extends Model
{
	use SoftDeletes;
    use HasTranslations;

	protected $table = 'oman_governorates';
    public $translatable = ['name'];
    protected $casts = [
        'name' => 'array'
    ];
	protected $fillable = [
		'name',
		'latitude',
		'longitude'
	];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }
	public function wilayats()
	{
		return $this->hasMany(OmanWilayat::class, 'governorate_id');
	}
}
