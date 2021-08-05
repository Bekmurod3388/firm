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
                    <form action="{{route('posts.store')}}" method="POST">
                    <div class="form-group">
                        <label for="header">Титул</label>
                        <input type="text" class="form-control" id="header" placeholder="Титул">
                    </div>
                    <div class="form-group">
                        <label for="header2">Титул 2</label>
                        <input type="text" class="form-control" id="header2" placeholder="Титул 2">
                    </div>
                    <div class="form-group">
                        <label for="description">Текст</label>
                        <textarea  class="form-control" id="description" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Добавьте рисунок</label>
                        <input type="file" class="form-control" id="img">
                    </div>
                    <div class="form-group">
                        <label for="uri">URL адресс</label>
                        <input type="text" class="form-control" id="uri" placeholder="Здесь только слеш и текст без пробел">
                    </div>
                    <input type="submit" class="btn btn-success" value="Сохранить">
                    <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
