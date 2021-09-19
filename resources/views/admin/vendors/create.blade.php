@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Добавить вендоры</h1></div>
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


                    <form action="{{route('admin.vendors.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="img">Загрузите логотип</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>

                        <div class="form-group">
                            <label for="description">Текст</label>
                            <textarea class="form-control" name="text" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="files">Загрузите файлы</label>
                            <input type="file" name="files[]" class="form-control" id="files" multiple>
                        </div>
                        <div class="form-group">
                            <label for="links">Ссылки
                                Поместите каждую ссылку в новую строку</label>
                            <textarea class="form-control" name="links" id="Links" rows="5"></textarea>
                        </div>
                        <button type="submit" id="alert" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
