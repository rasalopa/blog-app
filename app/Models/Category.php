<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $to_insert)
 */
class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * @var mixed
     */
    private $id;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($table) {
            if (!app()->runningInConsole())
            {
                $table->created_by = auth()->id();
            }
        });
    }

    // ? Relación uno a muchos con los post
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    // ? Relación uno a muchos inversa.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
