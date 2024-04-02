<?php

namespace App\Models;

use DrewRoberts\Blog\Exceptions\HasChildrenException;
use DrewRoberts\Blog\Exceptions\InvalidSlugException;
use DrewRoberts\Blog\Traits\HasPageViews;
use DrewRoberts\Media\Traits\HasMedia;
use Tipoff\Support\Models\BaseModel;
use Tipoff\Support\Traits\HasCreator;
use Tipoff\Support\Traits\HasPackageFactory;
use Tipoff\Support\Traits\HasUpdater;

class MemeType extends BaseModel
{
    use HasCreator;
    use HasUpdater;
    use HasPackageFactory;
    use HasMedia;
    use HasPageViews;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function (MemeType $memeType) {
            $memeType->validateSlug();
        });
    }

    private function validateSlug(): void
    {
        InvalidSlugException::checkRootSlugRestrictions($this->slug);

        // Prevent topic from having same slug as topics
        $count = MemeType::query()
            ->where(function ($builder) {
                if ($this->id) {
                    $builder->where('id', '<>', $this->id);
                }
            })
            ->where('slug', '=', $this->slug)
            ->count();
        throw_if($count, InvalidSlugException::class);
    }

    public function getPathAttribute()
    {
        return "/memes/{$this->slug}";
    }

    public function memes()
    {
        return $this->hasMany(Meme::class);
    }
}
