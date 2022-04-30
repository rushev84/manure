<?php


namespace App\Services\Admin\Manure;


use App\Models\Manure;

class Service
{
    public function store($data)
    {
        Manure::create($data);
    }

    public function update($manure, $data)
    {
        $manure->update($data);
    }
}
