@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Добавить новости</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>ОЙ!</strong> С вашим вводом возникли некоторые проблемы.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.category.update',$category)}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="name">Наименование</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Наименование" value="{{$category->name}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
