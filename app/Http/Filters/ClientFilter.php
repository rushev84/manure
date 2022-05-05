<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ClientFilter extends AbstractFilter
{
    public const NAME = 'name';

    public const DELIVERY_COST_FROM = 'delivery_cost_from';
    public const DELIVERY_COST_TO = 'delivery_cost_to';

    public const REGION = 'region';


    protected function getCallbacks(): array
    {
        return [
            self::NAME => [$this, 'name'],

            self::DELIVERY_COST_FROM => [$this, 'delivery_cost_from'],
            self::DELIVERY_COST_TO => [$this, 'delivery_cost_to'],

            self::REGION => [$this, 'region'],
        ];
    }

    // контекстный поиск -------------
    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function region(Builder $builder, $value)
    {
        $builder->where('region', 'like', "%{$value}%");
    }

    // поиск от и до -------------
    public function delivery_cost_from(Builder $builder, $deliveryCostFrom)
    {
        $builder->where('delivery_cost', '>', $deliveryCostFrom);
    }

    public function delivery_cost_to(Builder $builder, $deliveryCostTo)
    {
        $builder->where('delivery_cost', '<', $deliveryCostTo);
    }
}
