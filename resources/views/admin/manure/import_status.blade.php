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
                    <td style="width:300px;">{{ $status->status }}</td style="width:300px;">
                    <td style="width:200px;">{{ $status->user_id }}</td>
                    <td>{{ $status->created_at }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>

@endsection
