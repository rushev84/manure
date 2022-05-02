@extends('layouts.admin')

@section('content')

    <div class="mb-3">
        <a href="{{ route('admin.manure.create') }}" class="btn btn-primary">Добавить удобрение</a>
        <a href="{{ route('admin.manures_soft_deleted') }}" class="btn btn-secondary ml-3">Удалённые удобрения</a>


    </div>






    <div id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                       aria-controls="collapseOne">
                        Фильтр по удобрениям
                    </a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block pt-2 pl-3">
                    <form action="{{ route('admin.manure.index') }}" method="get">
                        {{--                        @csrf--}}
                        <div class="form-group">
                            <label for="name">Название удобрения</label>
                            <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="name"
                                   placeholder="Название удобрения">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="norm_nitrogen_from">Норма азота: от</label>
                            <input value="{{ old('norm_nitrogen_from') }}" type="text" name="norm_nitrogen_from"
                                   class="form-control" id="norm_nitrogen_from" placeholder="0.0">
                            @error('norm_nitrogen_from')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cultures">Культуры:</label>
                            <select multiple class="form-control" id="cultures" name="cultures[]">
                                @foreach($cultures as $culture)
                                    <option value="{{ $culture->id }}">{{ $culture->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info mb-5">Применить фильтр</button>
                    </form>
                </div>
            </div>
        </div>


        {{--        <div class="card">--}}
        {{--            <div class="card-header" role="tab" id="headingTwo">--}}
        {{--                <h5 class="mb-0">--}}
        {{--                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"--}}
        {{--                       aria-expanded="false" aria-controls="collapseTwo">--}}
        {{--                        Фильтр по удобрениям--}}
        {{--                    </a>--}}
        {{--                </h5>--}}
        {{--            </div>--}}
        {{--            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">--}}
        {{--                <div class="card-block pt-2 pl-3">--}}
        {{--                    <form action="" method="post">--}}
        {{--                        @csrf--}}
        {{--                        <div class="form-group">--}}
        {{--                            <label for="name">Название удобрения</label>--}}
        {{--                            <input value="{{ old('name') }}" type="text" name="name" class="form-control" id="name"--}}
        {{--                                   placeholder="Название удобрения">--}}
        {{--                            @error('name')--}}
        {{--                            <p class="text-danger">{{ $message }}</p>--}}
        {{--                            @enderror--}}
        {{--                        </div>--}}

        {{--                        <button type="submit" class="btn btn-primary mb-5">Применить фильтр</button>--}}
        {{--                    </form>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название удобрения</th>
            <th scope="col">Культура</th>
            <th scope="col">Район</th>
            <th scope="col">Стоимость</th>
        </tr>
        </thead>
        <tbody>
        @foreach($manures as $manure)

            <tr>
                <th scope="row">{{ $manure->id }}</th>
                <td><a href="{{ route('admin.manure.show', $manure->id) }}">{{ $manure->name }}</a></td>
                <td>{{ $manure->culture->name }}</td>
                <td>{{ $manure->district }}</td>
                <td>{{ $manure->price }}</td>
            </tr>

        @endforeach

        </tbody>
    </table>

    <div>
        {{ $manures->withQueryString()->links() }}
    </div>
@endsection
