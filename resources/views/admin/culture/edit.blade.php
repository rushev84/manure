@extends('layouts.admin')

@section('content')

<div>
    <form action="{{ route('admin.culture.update', $culture->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="name">Название культуры</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ $culture->name }}">
        </div>

        <button type="submit" class="btn btn-primary mb-5">Обновить</button>
    </form>
</div>

@endsection
