<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int id
 * @property string name
 * @property string article
 * @property string status
 * @property array data
 */
class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['name', 'article', 'status', 'data'];
    protected $casts = [
        'data' => 'array',
    ];

    /**
     * @param Builder $query
     * @return mixed
     */
    public function scopeAvailable(Builder $query): Builder
    {
        return $query->where('status', 'available');
    }

}
