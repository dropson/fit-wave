<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
class Client extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'trainer_id', 'full_name', 'secred_code'];

    public function coach(): BelongsTo
    {
        return $this->belongsTo(Coach::class);
    }

    protected static function boot(): void
    {
        static::creating(function ($client) {
            $client->secret_code = self::generateUniqueCode();
        });
    }
    protected static function generateUniqueCode():string
    {
        do {
            // $code = Str::random(10);
            $code = Str::uuid()->toString();
        } while (self::where('secret_code', $code)->exists());

        return $code;
    }
}
