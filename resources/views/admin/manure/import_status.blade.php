@extends('layouts.admin')

@section('content')
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Статус</th>
                <th scope="col">Id пользователя</th>
                <th scope="col">Дата создания статуса</th>
            </tr>
            </thead>
            <tbody>

            @foreach($manuresImportStatuses as $status)

                <tr class="{{ $status->status === 'Данные успешно импортированы' ? 'table-success' : 'table-danger' }}">
                    <td>{{ $status->status }}</td>
                    <td>{{ $status->user_id }}</td>
                    <td>{{ $status->created_at }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>

@endsection
