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
                            <label for="category">Выберите категория</label>
                            <select class="form-control" name="category_id">
                                <option></option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="links">Ссылки
                                Поместите каждую ссылку в новую строку</label>

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="link">Ссылок</label>
                                    <input type="text" class="form-control" name="link" id="link">
                                </div>
                                <div class="col-md-3">
                                    <label for="header_link">Заголовок</label>
                                    <input type="text" class="form-control" id="header_link" name="link_name">
                                </div>
                                <div class="col-md-3">
                                    <label for="text_link">Текст</label>
                                    <input type="text" class="form-control" id="text_lnk" name="link_text">
                                </div>
                                <div class="col-md-3 mt-4">

                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="gas" class="col mb-5">
                                    <div class="row text-bold">
                                        <div class="col-12">@lang('table.equipment.gas_meter')</div>
                                    </div>
                                </div>
                                <div id="equipments" class="col-12"></div>
                                <input type="hidden" name="equipments" id="equips"
                                       value="{{$model->equipments ?? "[]"}}">
                                <input type="hidden" name="gas_meter" id="gas_meter"
                                       value="{{$model->gas_meter ?? "[]"}}">
                            </div>

                            <div class="card-body col-md-12" id="add_rec">
                                <button type="button" id="add_equip" class="btn btn-block btn-outline-success"
                                        onclick="addEquipment()" data-index="1">
                                    @lang('table.rec.add_equipment') <i class="fas fa-plus-square"></i>
                                </button>
                            </div>


                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
