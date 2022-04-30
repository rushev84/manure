@extends('layouts.admin')

@section('content')

<div>
    <form action="{{ route('admin.manure.update', $manure->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Название удобрения</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ $manure->name }}">
        </div>
        <div class="form-group">
            <label for="norm_nitrogen">Норма азота</label>
            <input type="text" name="norm_nitrogen" class="form-control" id="norm_nitrogen" placeholder="name" value="{{ $manure->norm_nitrogen }}">
        </div>
        <div class="form-group">
            <label for="norm_phosphorus">Норма фосфора</label>
            <input type="text" name="norm_phosphorus" class="form-control" id="norm_phosphorus" placeholder="name" value="{{ $manure->norm_phosphorus }}">
        </div>
        <div class="form-group">
            <label for="norm_potassium">Норма калия</label>
            <input type="text" name="norm_potassium" class="form-control" id="norm_potassium" placeholder="name" value="{{ $manure->norm_potassium }}">
        </div>
        <div class="form-group">
            <label for="district">Район</label>
            <input type="text" name="district" class="form-control" id="district" placeholder="name" value="{{ $manure->district }}">
        </div>
        <div class="form-group">
            <label for="price">Цена</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="name" value="{{ $manure->price }}">
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea name="description" class="form-control" id="description" placeholder="name">{{ $manure->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="purpose">Назначение</label>
            <input type="text" name="purpose" class="form-control" id="purpose" placeholder="name" value="{{ $manure->purpose }}">
        </div>
        <div class="form-group">
            <label for="culture">Культура</label>
            <select class="form-control" id="culture" name="culture_id">
                @foreach($cultures as $culture)
                    <option
                        {{ $culture->id === $manure->culture->id ? ' selected' : '' }}
                        value="{{ $culture->id }}">{{ $culture->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mb-5">Обновить</button>
    </form>
</div>

@endsection
