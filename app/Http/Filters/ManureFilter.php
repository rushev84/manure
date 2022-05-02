<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ManureFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const DESCRIPTION = 'description';
    public const PURPOSE = 'purpose';

    public const NORM_NITROGEN_FROM = 'norm_nitrogen_from';
    public const NORM_NITROGEN_TO = 'norm_nitrogen_to';

    public const NORM_PHOSPHORUS_FROM = 'norm_phosphorus_from';
    public const NORM_PHOSPHORUS_TO = 'norm_phosphorus_to';

    public const NORM_POTASSIUM_FROM = 'norm_potassium_from';
    public const NORM_POTASSIUM_TO = 'norm_potassium_to';

    public const PRICE_FROM = 'price_from';
    public const PRICE_TO = 'price_to';

    public const CULTURES = 'cultures';

    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],
            self::DESCRIPTION => [$this, 'description'],
            self::PURPOSE => [$this, 'purpose'],

            self::NORM_NITROGEN_FROM => [$this, 'norm_nitrogen_from'],
            self::NORM_NITROGEN_TO => [$this, 'norm_nitrogen_to'],

            self::NORM_PHOSPHORUS_FROM => [$this, 'norm_phosphorus_from'],
            self::NORM_PHOSPHORUS_TO => [$this, 'norm_phosphorus_to'],

            self::NORM_POTASSIUM_FROM => [$this, 'norm_potassium_from'],
            self::NORM_POTASSIUM_TO => [$this, 'norm_potassium_to'],

            self::PRICE_FROM => [$this, 'price_from'],
            self::PRICE_TO => [$this, 'price_to'],

            self::CULTURES => [$this, 'cultures'],
        ];
    }

    // контекстный поиск -------------
    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function description(Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");
    }

    public function purpose(Builder $builder, $value)
    {
        $builder->where('purpose', 'like', "%{$value}%");
    }

    // поиск от и до -------------
    public function norm_nitrogen_from(Builder $builder, $normNitrogenFrom)
    {
        $builder->where('norm_nitrogen', '>', $normNitrogenFrom);
    }

    public function norm_nitrogen_to(Builder $builder, $normNitrogenTo)
    {
        $builder->where('norm_nitrogen', '<', $normNitrogenTo);
    }

    public function norm_phosphorus_from(Builder $builder, $normPhosphorusFrom)
    {
        $builder->where('norm_phosphorus', '>', $normPhosphorusFrom);
    }

    public function norm_phosphorus_to(Builder $builder, $normPhosphorusTo)
    {
        $builder->where('norm_phosphorus', '<', $normPhosphorusTo);
    }

    public function norm_potassium_from(Builder $builder, $normPotassiumFrom)
    {
        $builder->where('norm_phosphorus', '>', $normPotassiumFrom);
    }

    public function norm_potassium_to(Builder $builder, $normPotassiumTo)
    {
        $builder->where('norm_potassium', '<', $normPotassiumTo);
    }

    public function price_from(Builder $builder, $priceFrom)
    {
        $builder->where('price', '>', $priceFrom);
    }

    public function price_to(Builder $builder, $priceTo)
    {
        $builder->where('price', '<', $priceTo);
    }

    public function cultures(Builder $builder, $arrayOfIds)
    {
        $builder->whereIn('culture_id', $arrayOfIds);
    }
}
