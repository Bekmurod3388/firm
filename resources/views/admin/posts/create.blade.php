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


                    <form action="{{route('admin.posts.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">Титул (Ру)</label>
                            <input type="text" name="header_ru" class="form-control" id="header_ru" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header2_ru">Титул 2 (Ру)</label>
                            <input type="text" name="header2_ru" class="form-control" id="header2_ru"
                                   placeholder="Титул 2">
                        </div>
                        <div class="form-group">
                            <label for="description">Текст (Ру)</label>
                            <textarea class="form-control" name="description_ru" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="header">Титул (Уз)</label>
                            <input type="text" name="header_uz" class="form-control" id="header" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header2">Титул 2 (Уз)</label>
                            <input type="text" name="header2_uz" class="form-control" id="header2"
                                   placeholder="Титул 2">
                        </div>
                        <div class="form-group">
                            <label for="description">Текст (Уз)</label>
                            <textarea class="form-control" name="description_uz" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="header">Титул (En)</label>
                            <input type="text" name="header_en" class="form-control" id="header" placeholder="Титул">
                        </div>
                        <div class="form-group">
                            <label for="header2">Титул 2 (En)</label>
                            <input type="text" name="header2_en" class="form-control" id="header2" placeholder="Титул 2">
                        </div>
                        <div class="form-group">
                            <label for="description">Текст (En)</label>
                            <textarea  class="form-control" name="description_en" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b>РАЗМЕР РИСУНОК:(600x300)</b></label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>



                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
