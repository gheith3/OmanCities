<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

/**
 * Class OmanLocation
 *
 * @property int $id
 * @property int $wilayat_id
 * @property int $locations_type_id
 * @property string $name
 * @property string $latitude
 * @property string $longitude
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property OmanLocationsType $locations_type
 * @property OmanWilayat $wilayat
 *
 * @package App\Models
 */
class OmanLocation extends Model
{
	use SoftDeletes;
    use HasTranslations;

	protected $table = 'oman_locations';
    public $translatable = ['name'];

	protected $casts = [
		'wilayat_id' => 'int',
		'locations_type_id' => 'int',
        'name' => 'array'
    ];

	protected $fillable = [
		'wilayat_id',
		'locations_type_id',
		'name',
		'latitude',
		'longitude'
	];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }
	public function locations_type()
	{
		return $this->belongsTo(OmanLocationsType::class, 'locations_type_id');
	}

	public function wilayat()
	{
		return $this->belongsTo(OmanWilayat::class, 'wilayat_id');
	}
}
