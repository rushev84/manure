@extends('layouts.admin')

@section('content')
    <div>

        <div style="display: flex">
            <div class="ml-5">
                <form action="{{ route('admin.manures_import.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="manure_file" accept=".xlsx,.xls" required>

                    <!-- Если файл не выбран, всё равно показывается "Данные импортируются -->
                    <button type="submit" class="btn btn-success"
                            onclick="document.querySelector('.status').innerHTML = 'Данные импортируются...'">Загрузить
                        Excel-файл с удобрениями
                    </button>
                </form>
            </div>
            <div class="ml-5">
                <a href="{{ route('admin.manures_export') }}" class="btn btn-secondary">Скачать Excel-файл с
                    удобрениями</a>
            </div>

        </div>
        <div>
            <div class="status">{{ session('status') }}</div>

            <div>
                @if($errors->any())
                    <h5 style="color:red">Ошибки в Excel-файле:</h5>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>

@endsection
