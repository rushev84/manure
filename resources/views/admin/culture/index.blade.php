@extends('layouts.admin')

@section('content')

    <div>
        <form action="{{ route('admin.culture.store') }}" method="post">
            @csrf
            <div style="display: flex;">
                <div class="form-group mr-3">
                    <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="name"
                           placeholder="Название культуры">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="btn btn-primary mb-5">Добавить культуру</button>
                </div>
            </div>
        </form>
    </div>

    <div style="display: flex;">
    <div style="flex-basis: 33%;">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Культура</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        @foreach($cultures as $culture)
            <tr>
                <th scope="row">{{ $culture->id }}</th>
                <td>{{ $culture->name }}</td>
                <td>
                    <div style="display: flex">
                        <div class="mr-3">
                            <a href="{{ route('admin.culture.edit', $culture->id) }}" class="btn btn-success">Редактировать</a>
                        </div>

                        <div>
                            <form action="{{ route('admin.culture.delete', $culture->id) }}" method="post" class="mb-3">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    <div>
        {{ $cultures->withQueryString()->links() }}
    </div>

    <div style="display: flex; justify-content: flex-end;">
        <div>
            <a href="{{ route('admin.cultures_soft_deleted') }}" class="btn btn-secondary ml-3 mb-3">Удалённые культуры</a>
        </div>
    </div>

    </div>
    </div>
@endsection
