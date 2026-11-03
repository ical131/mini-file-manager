<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FileItem extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'parent_id',
        'name',
        'type',
        'original_name',
        'disk',
        'path',
        'mime_type',
        'extension',
        'size',
        'checksum',
    ];

    protected function casts(): array
    {
        return [
            'size' => 'integer',
        ];
    }

        // Parent folder
    public function parent(): BelongsTo
    {
        return $this->belongsTo(FileItem::class, 'parent_id');
    }

    // Child items
    public function children(): HasMany
    {
        return $this->hasMany(FileItem::class, 'parent_id');
    }
}
