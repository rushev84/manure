@extends('layouts.admin')

@section('content')

    <div class="mb-3">
        <a href="{{ route('admin.client.create') }}" class="btn btn-primary">Добавить клиента</a>
    </div>

    <div id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                       aria-controls="collapseOne">
                        Фильтр по клиентам
                    </a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block pt-2 pl-3">
                    <form action="{{ route('admin.client.index') }}" method="get">
                        <div style="display: flex">
                            @csrf
                            <div class="form-group mr-3">

                                <div style="display: flex;">
                                    <div class="mr-3">
                                        <label for="name">Наименование</label>
                                        <input value="{{ isset($data['name']) ? $data['name'] : null }}" type="text"
                                               name="name"
                                               class="form-control mb-2"
                                               id="name"
                                               placeholder="Название">
                                    </div>
                                    <div class="mr-3">
                                        <label for="contract_date">Дата договора</label>
                                        <input
                                            value="{{ isset($data['contract_date']) ? $data['contract_date'] : null }}"
                                            type="text" name="contract_date"
                                            class="form-control mb-2"
                                            id="contract_date"
                                            placeholder="01.01.2022">
                                    </div>
                                    <div class="mr-3">
                                        <label for="delivery_cost">Стоимость поставки</label>
                                        <input
                                            value="{{ isset($data['delivery_cost']) ? $data['delivery_cost'] : null }}"
                                            type="text" name="delivery_cost"
                                            class="form-control mb-2"
                                            id="delivery_cost"
                                            placeholder="1000">
                                    </div>
                                    <div class="mr-3">
                                        <label for="region">Регион</label>
                                        <input value="{{ isset($data['region']) ? $data['region'] : null }}" type="text"
                                               name="region"
                                               class="form-control mb-2"
                                               id="region"
                                               placeholder="Регион">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info mb-5">Применить фильтр</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Дата договора</th>
            <th scope="col">Стоимость поставки</th>
            <th scope="col">Регион</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)

            <tr>
                <th scope="row">{{ $client->id }}</th>
                <td>{{ $client->name }}</td>
                <td>{{ $client->contract_date }}</td>
                <td>{{ $client->delivery_cost }}</td>
                <td>{{ $client->region }}</td>
                <td>
                    <div style="display: flex">
                        <div class="mr-3">
                            <a href="{{ route('admin.client.edit', $client->id) }}" class="btn btn-success">Редактировать</a>
                        </div>

                        <div>
                            <form action="{{ route('admin.client.delete', $client->id) }}" method="post" class="mb-3">
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
        {{ $clients->withQueryString()->links() }}
    </div>
    <div style="display: flex; justify-content: flex-end;">
        <div>
            <a href="{{ route('admin.clients_soft_deleted') }}" class="btn btn-secondary ml-3 mb-3">Удалённые
                клиенты</a>
        </div>
    </div>
@endsection
