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


                    <form action="{{route('admin.posts.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="header">Титул</label>
                        <input type="text" name="header" class="form-control" id="header" placeholder="Титул">
                    </div>
                    <div class="form-group">
                        <label for="header2">Титул 2</label>
                        <input type="text" name="header2" class="form-control" id="header2" placeholder="Титул 2">
                    </div>
                    <div class="form-group">
                        <label for="description">Текст</label>
                        <textarea  class="form-control" name="description" id="description" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Добавьте рисунок</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <div class="form-group">
                        <label for="uri">URL адресс</label>
                        <input type="text" name="uri" class="form-control" id="uri" placeholder="Здесь только слеш и текст без пробел">
                    </div>
                    <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                    <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>
{{$message = \Illuminate\Support\Facades\Session::get('success')}}
    <script>
        //== Class definition
        var SweetAlert2Demo = function() {

            //== Demos
            var initDemos = function() {

                $('alert').click(function(e) {
                    swal({
                        title: "{{$message}}",
                        text: "You clicked the button!",
                        icon: "success",
                        buttons: {
                            confirm: {
                                text: "OK",
                                value: true,
                                visible: true,
                                className: "btn btn-success",
                                closeModal: true
                            }
                        }
                    });
                });};

            return {
                //== Init
                init: function() {
                    initDemos();
                },
            };
        }();

        //== Class Initialization
        jQuery(document).ready(function() {
            SweetAlert2Demo.init();
        });
    </script>

@endsection
