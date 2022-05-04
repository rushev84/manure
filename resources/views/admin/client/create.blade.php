@extends('layouts.admin')

@section('content')
    (создание нового клиента)

<div>
    <form action="{{ route('admin.client.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Наименование</label>
            <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="name" placeholder="Наименование">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="contract_date">Дата договора</label>
            <input value="{{ old('contract_date') }}" type="text" name="contract_date" class="form-control" id="contract_date" placeholder="01.01.2022">
            @error('contract_date')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="delivery_cost">Стоимость поставки</label>
            <input value="{{ old('delivery_cost') }}" type="text" name="delivery_cost" class="form-control" id="delivery_cost" placeholder="0.0">
            @error('delivery_cost')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="region">Регион</label>
            <input value="{{ old('region') }}" type="text" name="region" class="form-control" id="region" placeholder="Регион">
            @error('region')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mb-5">Добавить</button>
    </form>
</div>

@endsection
