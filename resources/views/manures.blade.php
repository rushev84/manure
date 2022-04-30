@extends('layouts.main')
@section('content')
    Manures page (список удобрений для клиентов)

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название удобрения</th>
            <th scope="col">Норма Азот</th>
            <th scope="col">Норма Фосфор</th>
            <th scope="col">Норма Калий</th>
            <th scope="col">Id культуры (поправить)</th>
            <th scope="col">Район</th>
            <th scope="col">Стоимость</th>
            <th scope="col">Описание</th>
            <th scope="col">Назначение</th>
        </tr>
        </thead>
        <tbody>
        @foreach($manures as $manure)

            <tr>
                <th scope="row">{{ $manure->id }}</th>
                <td>{{ $manure->name }}</td>
                <td>{{ $manure->norm_nitrogen }}</td>
                <td>{{ $manure->norm_phosphorus }}</td>
                <td>{{ $manure->norm_potassium }}</td>
                <td>{{ $manure->culture_id }}</td>
                <td>{{ $manure->district }}</td>
                <td>{{ $manure->price }}</td>
                <td>{{ $manure->description }}</td>
                <td>{{ $manure->purpose }}</td>
            </tr>

        @endforeach

        </tbody>
    </table>



@endsection
