<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static create(array $to_insert)
 */
class Tag extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**ap
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

    // ? Relación muchos a muchos
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    // ? Relación uno a muchos inversa.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
