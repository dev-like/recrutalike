@extends('admin.main')

@section('styles')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Sweet Alert css -->
  <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('page-caminho')
Empresa
@endsection

@section('page-title')
Cadastro
@endsection

@section('script-bottom')
<link href="{{ asset('template/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="col-12">
  <div class="card-box">
      @if(!isset($empresa->id))
        <p id="req-cad">
          As informações da empresa ainda não foram cadastradas,
          <a id="cad" class="text-success" href="#"> Cadastre agora.</a>
        </p>
        <div id="form-cad" class="col-sm-12 col-xs-12" style="display:none">
          {{ Form::open(['route' => 'empresa.store']) }}
      @else
          <div id="form-cad" class="col-sm-12 col-xs-12">
          {{ Form::model($empresa, ['route' => ['empresa.update', $empresa->id], 'method' => 'PUT']) }}
      @endif

      <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('nomefantasia', 'Nome Fantasia') }}
            {{ Form::text('nomefantasia', null, array('class' => 'form-control', 'autofocus','maxlength' => '100', 'required')) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('telefone', 'Telefone') }}
            {{ Form::text('telefone', null, array('class' => 'form-control','maxlength' => '30','placeholder' => '(99) 99999-9999')) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, array('class' => 'form-control','maxlength' => '30')) }}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
            {{ Form::label('endereco', 'Endereço') }}
            {{ Form::text('endereco', null, array('class' => 'form-control','maxlength' => '500')) }}
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-3">
            {{ Form::label('instagram', 'Instagram') }}
            {{ Form::url('instagram', null, array('class' => 'form-control','maxlength' => '250')) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('youtube', 'YouTube') }}
            {{ Form::url('youtube', null, array('class' => 'form-control','maxlength' => '250')) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('linkedin', 'LinkedIn') }}
            {{ Form::url('linkedin', null, array('class' => 'form-control','maxlength' => '250')) }}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('facebook', 'Facebook') }}
            {{ Form::url('facebook', null, array('class' => 'form-control','maxlength' => '250')) }}
        </div>
      </div>

      <div class="row" style="margin-top: 20px">
        <div class="col-12">
          <div class="text-center">
            <button class="btn btn-success" type="submit" value="Salvar"><i class="fa fa-save m-r-5"></i> Atualizar</button>
            <a href="{{ route('empresa.index') }}" class="btn btn-danger"><i class="dripicons-cross"></i> Cancelar</a>
          </div>
        </div>
      </div>
  </div>
</div>

{{ Form::close() }}
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('template/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/plugins/tinymce/tinymce.min.js') }}"></script>
<script>
jQuery(function($){
  $("#telefone").mask("(99) 99999-9999");
});
</script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#cad").click(function(event){
      event.preventDefault();
      $("#req-cad").slideUp();
      $("#form-cad").slideDown();
    });
});
</script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea#sobre",
    height:350,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

    tinymce.init(editor_config);
  </script>

@endsection
