@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Сообщении</h1></div>

                </div>
                <hr>
                <div class="card-body">
                        <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Телефонный номер</th>
                            <th scope="col">Email</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <th scope="row" class="col-md-1">{{$message->id}}</th>
                            <td>{{$message->header}}</td>
                            <td>{{$message->description}}</td>
                            <td>{{$message->viewed}}</td>
                            <td class="col-md-3">
                                <form action="{{ route('messages.destroy',$message->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span>Удалить</button>
                                </form>
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
