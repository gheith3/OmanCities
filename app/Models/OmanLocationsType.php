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
 * Class OmanLocationsType
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|OmanLocation[] $locations
 *
 * @package App\Models
 */
class OmanLocationsType extends Model
{
	use SoftDeletes;
    use HasTranslations;

	protected $table = 'oman_locations_types';
    public $translatable = ['name'];
    protected $casts = [
        'name' => 'array'
    ];
	protected $fillable = [
		'name'
	];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }
	public function locations()
	{
		return $this->hasMany(OmanLocation::class, 'locations_type_id');
	}
}
