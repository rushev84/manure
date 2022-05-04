@extends('layouts.admin')

@section('content')

    <div class="mb-3">
        <a href="{{ route('admin.client.create') }}" class="btn btn-primary">Добавить клиента</a>
    </div>

{{--    <div id="accordion" role="tablist" aria-multiselectable="true">--}}

{{--        <div class="card">--}}
{{--            <div class="card-header" role="tab" id="headingOne">--}}
{{--                <h5 class="mb-0">--}}
{{--                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"--}}
{{--                       aria-controls="collapseOne">--}}
{{--                        Фильтр по удобрениям--}}
{{--                    </a>--}}
{{--                </h5>--}}
{{--            </div>--}}

{{--            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">--}}
{{--                <div class="card-block pt-2 pl-3">--}}
{{--                    <form action="{{ route('admin.manure.index') }}" method="get">--}}
{{--                        <div style="display: flex">--}}
{{--                            --}}{{--                        @csrf--}}
{{--                            <div class="form-group mr-3">--}}
{{--                                <label for="name">Название</label>--}}
{{--                                <input value="{{ isset($data['name']) ? $data['name'] : null }}" type="text" name="name"--}}
{{--                                       class="form-control mb-2"--}}
{{--                                       id="name"--}}
{{--                                       placeholder="Название">--}}

{{--                                <label for="district">Район</label>--}}
{{--                                <input value="{{ isset($data['district']) ? $data['district'] : null }}" type="text" name="district"--}}
{{--                                       class="form-control mb-2"--}}
{{--                                       id="district"--}}
{{--                                       placeholder="Район">--}}

{{--                                <label for="purpose">Назначение</label>--}}
{{--                                <input value="{{ isset($data['purpose']) ? $data['purpose'] : null }}" type="text" name="purpose"--}}
{{--                                       class="form-control mb-2"--}}
{{--                                       id="purpose"--}}
{{--                                       placeholder="Назначение">--}}

{{--                                <label for="description">Описание</label>--}}
{{--                                <input value="{{ isset($data['description']) ? $data['description'] : null }}" type="text" name="description"--}}
{{--                                       class="form-control mb-2"--}}
{{--                                       id="description"--}}
{{--                                       placeholder="Описание">--}}

{{--                            </div>--}}
{{--                            <div class="form-group mr-3" style="flex-basis: 150px">--}}
{{--                                <label for="norm_nitrogen_from">Норма азота: </label> от--}}
{{--                                <input--}}
{{--                                    style="width: 120px"--}}
{{--                                    value="{{ isset($data['norm_nitrogen_from']) ? $data['norm_nitrogen_from'] : null }}"--}}
{{--                                    type="text" name="norm_nitrogen_from"--}}
{{--                                    class="form-control" id="norm_nitrogen_from" placeholder="0.0">--}}
{{--                                до--}}
{{--                                <input--}}
{{--                                    style="width: 120px"--}}
{{--                                    value="{{ isset($data['norm_nitrogen_to']) ? $data['norm_nitrogen_to'] : null }}"--}}
{{--                                    type="text" name="norm_nitrogen_to"--}}
{{--                                    class="form-control mt-1" id="norm_nitrogen_to" placeholder="0.0">--}}
{{--                            </div>--}}
{{--                            <div class="form-group mr-3" style="flex-basis: 150px">--}}
{{--                                <label for="norm_phosphorus_from">Норма фосфора: </label> от--}}
{{--                                <input--}}
{{--                                    style="width: 120px"--}}
{{--                                    value="{{ isset($data['norm_phosphorus_from']) ? $data['norm_phosphorus_from'] : null }}"--}}
{{--                                    type="text" name="norm_phosphorus_from"--}}
{{--                                    class="form-control" id="norm_phosphorus_from" placeholder="0.0">--}}
{{--                                до--}}
{{--                                <input--}}
{{--                                    style="width: 120px"--}}
{{--                                    value="{{ isset($data['norm_phosphorus_to']) ? $data['norm_phosphorus_to'] : null }}"--}}
{{--                                    type="text" name="norm_phosphorus_to"--}}
{{--                                    class="form-control mt-1" id="norm_phosphorus_to" placeholder="0.0">--}}
{{--                            </div>--}}
{{--                            <div class="form-group mr-3" style="flex-basis: 150px">--}}
{{--                                <label for="norm_potassium_from">Норма калия: </label> от--}}
{{--                                <input--}}
{{--                                    style="width: 120px"--}}
{{--                                    value="{{ isset($data['norm_potassium_from']) ? $data['norm_potassium_from'] : null }}"--}}
{{--                                    type="text" name="norm_potassium_from"--}}
{{--                                    class="form-control" id="norm_potassium_from" placeholder="0.0">--}}
{{--                                до--}}
{{--                                <input--}}
{{--                                    style="width: 120px"--}}
{{--                                    value="{{ isset($data['norm_potassium_to']) ? $data['norm_potassium_to'] : null }}"--}}
{{--                                    type="text" name="norm_potassium_to"--}}
{{--                                    class="form-control mt-1" id="norm_potassium_to" placeholder="0.0">--}}
{{--                            </div>--}}
{{--                            <div class="form-group mr-3" style="flex-basis: 150px">--}}
{{--                                <label for="price_from">Цена: </label> от--}}
{{--                                <input--}}
{{--                                    style="width: 120px"--}}
{{--                                    value="{{ isset($data['price_from']) ? $data['price_from'] : null }}"--}}
{{--                                    type="text" name="price_from"--}}
{{--                                    class="form-control" id="price_from" placeholder="0.0">--}}
{{--                                до--}}
{{--                                <input--}}
{{--                                    style="width: 120px"--}}
{{--                                    value="{{ isset($data['price_to']) ? $data['price_to'] : null }}"--}}
{{--                                    type="text" name="price_to"--}}
{{--                                    class="form-control mt-1" id="price_to" placeholder="0.0">--}}
{{--                            </div>--}}

{{--                            <div class="form-group mr-3">--}}
{{--                                <label for="cultures">Культуры:</label>--}}
{{--                                <select multiple class="form-control" id="cultures" name="cultures[]">--}}
{{--                                    @foreach($cultures as $culture)--}}
{{--                                        <option--}}
{{--                                            @if(isset($data['cultures']))--}}
{{--                                            @foreach($data['cultures'] as $culture_id)--}}
{{--                                            {{ $culture_id == $culture->id ? ' selected' : '' }}--}}
{{--                                            @endforeach--}}
{{--                                            @endif--}}
{{--                                            value="{{ $culture->id }}">{{ $culture->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <button type="submit" class="btn btn-info mb-5">Применить фильтр</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


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
    <a href="{{ route('admin.clients_soft_deleted') }}" class="btn btn-secondary ml-3 mb-3">Удалённые клиенты</a>
    </div>
</div>
@endsection
