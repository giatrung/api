<?php

namespace App\Models\Contracts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

    protected static function booted()
    {
        $cls = \Helper::getShortName(static::class);
        $observer = \Helper::makeModelClassName($cls, 'Observer');
        if (!$observer) {
            $observer = BaseObserver::class;
        }
        static::class::observe($observer);
    }

    /**
     * リレーション文字列用
     *
     * @param  string $name
     * @param  string $subname
     * @return string
     */
    public static function relate($name, $subname = ''): string
    {
        return \Helper::makeModelClassName($name, $subname);
    }
}
