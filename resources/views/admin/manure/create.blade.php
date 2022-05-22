@extends('layouts.admin')

@section('content')
    admin->manure->create.blade.php (создание нового удобрения)

<div>
    <form action="{{ route('admin.manure.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Название</label>
            <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="name" placeholder="Название">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="norm_nitrogen">Норма азота</label>
            <input value="{{ old('norm_nitrogen') }}" type="text" name="norm_nitrogen" class="form-control" id="norm_nitrogen" placeholder="0.0">
            @error('norm_nitrogen')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="norm_phosphorus">Норма фосфора</label>
            <input value="{{ old('norm_phosphorus') }}" type="text" name="norm_phosphorus" class="form-control" id="norm_phosphorus" placeholder="0.0">
            @error('norm_phosphorus')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="norm_potassium">Норма калия</label>
            <input value="{{ old('norm_potassium') }}" type="text" name="norm_potassium" class="form-control" id="norm_potassium" placeholder="0.0">
            @error('norm_potassium')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="district">Район</label>
            <input value="{{ old('district') }}" type="text" name="district" class="form-control" id="district" placeholder="Район">
            @error('district')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Цена</label>
            <input value="{{ old('price') }}" type="text" name="price" class="form-control" id="price" placeholder="0">
            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea name="description" class="form-control" id="description" placeholder="Описание">{{ old('description') }}</textarea>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="purpose">Назначение</label>
            <input value="{{ old('purpose') }}" type="text" name="purpose" class="form-control" id="purpose" placeholder="Назначение">
            @error('purpose')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="culture">Культура</label>
            <select class="form-control" id="culture" name="culture_id">
                @foreach($cultures as $culture)
                <option
                    {{ old('culture_id') == $culture->id ? ' selected' : '' }}
                    value="{{ $culture->id }}">{{ $culture->name }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary mb-5">Добавить</button>
    </form>
</div>

@endsection
