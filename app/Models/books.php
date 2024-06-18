<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class books extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'book_id';
    protected $fillable = [
        'language_id',
        'publisher_id',
        'title',
        'num_pages',
        'published_date',
        'price',
        'INR_price',
        'index'
    ];

    public function languageData()
    {
        return $this->hasOne(language::class, 'language_id', 'language_id');
    }
    public function publisherData()
    {
        return $this->hasOne(publisher::class, 'publisher_id', 'publisher_id');
    }
    protected static function booted(): void
    {
        static::created(function ($books) {
            $InrPrice = $books->price;
            $books->INR_price = $InrPrice * 70;
            $books->save();
        });
        static::updated(function ($books) {
            $InrPrice = $books->price;
            $books->INR_price = $InrPrice * 70;
            $books->saveQuietly();
        });
    }
}
