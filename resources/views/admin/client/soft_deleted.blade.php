@extends('layouts.admin')

@section('content')

<h3>Удалённые клиенты</h3>
<br>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Дата договора</th>
            <th scope="col">Стоимость поставки</th>
            <th scope="col">Регион</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientsOnlyTrashed as $client)

            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->contract_date }}</td>
                <td>{{ $client->delivery_cost }}</td>
                <td>{{ $client->region }}</td>
            </tr>

        @endforeach

        </tbody>
    </table>

{{--    <div>--}}
{{--        {{ $manures->withQueryString()->links() }}--}}
{{--    </div>--}}
@endsection
