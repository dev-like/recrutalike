@extends('pages.base')

@section('metatags')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('theme/css/trabalheconosco.css') }}">
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
@endsection

@section('jslibrary')
    <script src="{{ asset('theme/js/lib/jFlowLabel.js') }}" charset="utf-8"></script>
@endsection

@section('body')

      <section class="trabalheconosco">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-lg-6">
                <div class="box">
                  <h1 class="titulo">RECRUTA LIKE</h1>
                  <form action="/postMail" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <label for="nome">Nome</label>
                        <input id="nome" name="nome" type="text" required>
                        <label for="email">E-Mail</label>
                        <input id="email" name="email" type="email" required>
                        <label for="fone">Telefone</label>
                        <input id="fone" name="fone" type="tel" required>

                        <button type="submit" class="enviar">ENVIAR</button>

                        <div style="clear:both"></div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </section>


@endsection

@section('script')
<script>
  $('button').on('click', function(){
    if( $("#nome").val() != "" && $("#email").val() != "" && $("#fone").val() != "" && $("#curriculo").val() != ""){
      swal({
        text: 'Enviando inscrição ! ',
        imageUrl: "theme/images/loading.gif",
        showCancelButton: false,
        showConfirmButton: false
      })
    }
  });
</script>
    <!-- Chat do Movidesk -->

    <!-- Chat do Movidesk fim -->
    <script src="{{ asset('theme/js/jquery.mask.js') }}" charset="utf-8"></script>
    <script src="{{ asset('theme/js/main.js') }}" charset="utf-8"></script>
    <script src="{{ asset('template/plugins/sweet-alert/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script>
    (function( $ ) {
      $(function() {
        $("#fone").mask("(99) 999999-9999");
      });
    })(jQuery);

        $.jFlowLabel({ 'id':'nome','icolor':'#fff','ocolor':'#fff' });
        $.jFlowLabel({ 'id':'email','icolor':'#fff','ocolor':'#fff' });
        $.jFlowLabel({ 'id':'fone','icolor':'#fff','ocolor':'#fff' });
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if (exist){
        swal(
            {
                title: 'Inscrição realizada com sucesso!',
                type: 'success',
                confirmButtonColor: '#4fa7f3'
            }
        )
      }
    </script>
@endsection
