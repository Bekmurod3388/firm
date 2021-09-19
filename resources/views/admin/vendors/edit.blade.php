@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Изсменит продукты</h1></div>
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


                    <form action="{{route('admin.products.update',$product)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="header_ru">Титул(Ру)</label>
                        <input type="text" name="head_ru" class="form-control" id="header_ru" placeholder="Титул" value="{{$product->head_ru}}">
                    </div>
                        <div class="form-group">
                            <label for="header2_ru">Титул 2(Ру)</label>
                            <input type="text" name="head2_ru" class="form-control" id="header2_ru" placeholder="Титул" value="{{$product->head2_ru}}">
                        </div>
                    <div class="form-group">
                        <label for="description_ru">Текст (Ру)</label>
                        <textarea  class="form-control"  name="description_ru" id="description_ru" rows="10">{{$product->description_ru}}</textarea>
                    </div>
                        <div class="form-group">
                            <label for="header_en">Титул(En)</label>
                            <input type="text" name="head_en" class="form-control" id="header_en" placeholder="Титул" value="{{$product->head_en}}">
                        </div>
                        <div class="form-group">
                            <label for="header2_en">Титул(En)</label>
                            <input type="text" name="head2_en" class="form-control" id="header2_en" placeholder="Титул" value="{{$product->head2_en}}">
                        </div>
                        <div class="form-group">
                            <label for="description_en">Текст (En)</label>
                            <textarea  class="form-control"  name="description_en" id="description_en" rows="10">{{$product->description_en}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Выберите категория</label>
                            <select class="form-control" name="category_id">
                                <option></option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="img">Добавьте иконок</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                        <div class="form-group">
                            <label for="img2">Добавьте рисунок</label>
                            <input type="file" name="img2" class="form-control" id="img2">
                        </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                    <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
