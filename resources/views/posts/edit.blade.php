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
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('posts.update',$post)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="header">Титул</label>
                        <input type="text" name="header" class="form-control" id="header" placeholder="Титул" value="{{$post->header}}">
                    </div>
                    <div class="form-group">
                        <label for="header2">Титул 2</label>
                        <input type="text" name="header2" class="form-control" id="header2" placeholder="Титул 2" value="{{$post->header2}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Текст</label>
                        <textarea  class="form-control" value="{{$post->description}}" name="description" id="description" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Добавьте рисунок</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <div class="form-group">
                        <label for="uri">URL адресс</label>
                        <input type="text" name="uri" value="{{$post->uri}}" class="form-control" id="uri" placeholder="Здесь только слеш и текст без пробел">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
