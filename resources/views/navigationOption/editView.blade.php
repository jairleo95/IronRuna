@extends('app')

@section('content')
    <script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#my_editor',
            plugins: ["image"],
            file_browser_callback: function(field_name, url, type, win) {
                if(type=='image') $('#my_form input').click();
            }
        });

    </script>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Contenido</div>
                <div class="panel-body">
                    <textarea id="my_editor"></textarea>
                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="/upload/" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
                        <input name="image" type="file" onchange="$('#my_form').submit();this.value='';">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection