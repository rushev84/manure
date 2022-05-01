<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ManureFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const PURPOSE = 'purpose';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
            self::PURPOSE => [$this, 'purpose'],
        ];
    }

    // контекстный поиск
    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    // контекстный поиск
    public function description(Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");
    }

    // контекстный поиск
    public function purpose(Builder $builder, $value)
    {
        $builder->where('purpose', 'like', "%{$value}%");
    }
}
