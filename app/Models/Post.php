<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function getRouteKeyName(): string
    {
        return 'slug';
    }


    // ? Relación uno a muchos inversa.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    // ? Relación muhcos a muchos
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    // ? Relación uno a uno polimórfica
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
