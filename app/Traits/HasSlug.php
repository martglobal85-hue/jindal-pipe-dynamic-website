<?php

namespace App\Traits;

use Illuminate\Support\Str;

/**
 * Automatic, unique, URL-friendly slugs + slug based route model binding.
 *
 * The slug is never entered by the admin. It is generated from the column
 * returned by getSlugSourceColumn() (default: "title") when a record is
 * created, and regenerated when that source column changes.
 *
 * Duplicates get a numeric suffix: my-title, my-title-1, my-title-2 ...
 * (a counter, never the database ID).
 */
trait HasSlug
{
    public static function bootHasSlug(): void
    {
        static::creating(function ($model) {
            $model->slug = static::generateUniqueSlug(
                $model->getAttribute($model->getSlugSourceColumn())
            );
        });

        static::updating(function ($model) {
            if ($model->isDirty($model->getSlugSourceColumn()) || empty($model->slug)) {
                $model->slug = static::generateUniqueSlug(
                    $model->getAttribute($model->getSlugSourceColumn()),
                    $model->getKey()
                );
            }
        });
    }

    public function getSlugSourceColumn(): string
    {
        return 'title';
    }

    /** Route model binding uses the slug, so IDs never appear in URLs. */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public static function generateUniqueSlug(?string $value, $ignoreKey = null): string
    {
        $base = Str::slug((string) $value);

        if ($base === '') {
            $base = Str::slug(class_basename(static::class)) ?: 'item';
        }

        $base = trim(mb_substr($base, 0, 230), '-');
        $slug = $base;
        $counter = 1;

        while (static::slugExists($slug, $ignoreKey)) {
            $slug = $base . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    protected static function slugExists(string $slug, $ignoreKey = null): bool
    {
        $instance = new static();

        return static::query()
            ->where('slug', $slug)
            ->when($ignoreKey, fn ($query) => $query->where($instance->getKeyName(), '!=', $ignoreKey))
            ->exists();
    }
}
