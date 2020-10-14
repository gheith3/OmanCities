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
 * Class OmanWilayat
 *
 * @property int $id
 * @property int $governorate_id
 * @property string $name
 * @property string $latitude
 * @property string $longitude
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property OmanGovernorate $governorate
 * @property Collection|OmanLocation[] $locations
 *
 * @package App\Models
 */
class OmanWilayat extends Model
{
	use SoftDeletes;
    use HasTranslations;

	protected $table = 'oman_wilayats';
    public $translatable = ['name'];

	protected $casts = [
		'governorate_id' => 'int',
        'name' => 'array'
	];

	protected $fillable = [
		'governorate_id',
		'name',
		'latitude',
		'longitude'
	];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }

	public function governorate()
	{
		return $this->belongsTo(OmanGovernorate::class, 'governorate_id');
	}

	public function locations()
	{
		return $this->hasMany(OmanLocation::class, 'wilayat_id');
	}
}
