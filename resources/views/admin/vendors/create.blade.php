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
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
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
                                <div id="links-part" class="col-12"></div>
                                <input type="hidden" name="links" id="links" value="{{"[]"}}">

                                <div class="col-12">
                                    <button type="button" onclick="addEquipment()" class="btn btn-block btn-outline-info text-bold">
                                        <i class="fas fa-plus"></i>
                                        <span>Добавить</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>


@section('script')
    <script>
        function ajax(url, callback) {
            $.ajax({
                url: url,
                dataType: 'json',
                success: function(data) {
                    callback(data);
                }
            });
        }

        // You must rewrite this code!
        let count = 0;
        let equips = $('#links');
        let submit = $('#submit');
        let links = [];
        class Links {
            constructor() {
                this.path = '';
                this.header = '';
                this.text = '';
            }
        }

        function addEquipment(update_data = new Links()) { // update_data - for select necessary options and input fields
            submit.attr('disabled', false);
            create({}, update_data);
        }

        function create(data, update_data) {
            links.push(new Links());
            let equipment_part = $('#links-part');
            let row = document.createElement('div');
            let row2 = document.createElement('div');
            let col = document.createElement('div');
            let col2 = document.createElement('div');
            let equipment = document.createElement('input');
            let type = document.createElement('input');
            let number = document.createElement('input');
            let btn = document.createElement('button');

            append(row2, equipment, 'path', "Ссылок");
            append(row2, type, 'header', "Заголовок");
            append(row2, number, 'text', "Текст");
            append(col2, btn, '', '', 'btn btn-danger');


            count ++;
            row.id = `row-${count}`;
            row.classList.add('row', 'align-items-end', 'mb-3');
            row.style.display = "none";
            col.classList.add('col-11');
            col2.classList.add('col-1');
            row2.classList.add('row');
            row.append(col, col2);
            col.append(row2);
            equipment_part.append(row);
            $(`#row-${count}`).show(300);

            function append(root, element, name, label, classes = 'form-control') {
                let div = document.createElement('div');

                setProperty(element, name, update_data);

                if (label) {
                    div.classList.add('col-4');
                    let l = document.createElement('label');
                    l.textContent = label;
                    l.htmlFor = name;
                    div.append(l);
                }

                for (let cls of classes.split(' ')) {
                    element.classList.add(cls);
                }

                div.append(element);
                root.append(div);
            }
        }

        function setProperty(element, name, data = {}) {
            if (name) {
                element.type = 'text';
                element.id = name + '_' + (count + 1);
                element.name = name;
                element.hint = count;
                links[element.hint][name] = data[name];
                // element.value = data[name];
                element.onkeyup = function() {
                    links[element.hint][name] = element.value;
                    Stringify(links);
                }

                // element.onchange = function() {
                //     links[element.hint][name] = parseInt(element.value);
                //     Stringify(links);
                // }

                return;
            }

            element.type = 'button';
            element.id = count + 1;
            element.innerHTML = '<i class="fas fa-minus"></i>';
            element.title = "Elashtirmang";
            element.onclick = function() {
                if (count === parseInt(element.id)) {
                    $(`#row-${element.id}`).hide(300, function() {
                        $(this).remove();
                        links.pop();
                        count --;
                    });
                } else {
                    Swal.fire({
                       icon: 'warning',
                       title: "Hay",
                       confirmButtonText: "<i class='fas fa-check'></i>"
                    });
                }

                if (count === 1) {
                    submit.attr('disabled', true);
                }
            }
        }

        function changeEquips() {
            let data = JSON.parse(equips.val());
            data.forEach(equip => {
                addEquipment(equip);
            });
            if (data.length) {
                submit.attr('disabled', false);
            }
        }

        function Stringify(data) {
            equips.val(JSON.stringify(data));
        }
    </script>
@stop
@endsection
