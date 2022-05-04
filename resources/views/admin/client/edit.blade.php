@extends('layouts.admin')

@section('content')

<div>
    <form action="{{ route('admin.client.update', $client->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Наименование</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ $client->name }}">
        </div>
        <div class="form-group">
            <label for="contract_date">Дата договора</label>
            <input type="text" name="contract_date" class="form-control" id="contract_date" placeholder="date" value="{{ $client->contract_date }}">
        </div>
        <div class="form-group">
            <label for="delivery_cost">Стоимость поставки</label>
            <input type="text" name="delivery_cost" class="form-control" id="delivery_cost" placeholder="name" value="{{ $client->delivery_cost }}">
        </div>
        <div class="form-group">
            <label for="region">Регион</label>
            <input type="text" name="region" class="form-control" id="region" placeholder="name" value="{{ $client->region }}">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Обновить</button>
    </form>
</div>

@endsection
