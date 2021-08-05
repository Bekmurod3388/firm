@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Новости</h1></div>
                    <div class="col-2">
                        <a class="btn btn-primary" href="{{route('posts.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить новости
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Титул</th>
                            <th scope="col">Текст</th>
                            <th scope="col">Просмотрено</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row" class="col-md-1">{{$post->id}}</th>
                            <td>{{$post->header}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->viewed}}</td>
                            <td class="col-md-3">
                                <a class="btn btn-warning" href="#">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>
                                    Изменить
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span>
                                    Удалить
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
