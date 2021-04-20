
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login POS Laravel </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('assets')}}/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets')}}/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
        <h1 class="text-center">Aplikasi POS Minimarket KULaku</h1>
          <section class="login_content">
            @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert" style="text-align: left !important;">
                <p><i class="fa fa-exclamation-triangle"></i> Terjadi Kesalahan!</p>
                @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
                @endforeach
            </div>
            @elseif($message = Session::get('error'))
            <div class="alert alert-danger" role="alert" style="text-align: left !important;">
              <i class="fa fa-exclamation-triangle"></i> {{ $message }}
            </div>
            @endif
            <form method="POST" action="{{ url('post-login') }}">
            @csrf
              <h1>Login</h1>
               <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email"/>
              </div>
               <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password"/>
              </div>
              <div>
                <button type="submit" class="btn btn-success btn-block submit"> <i class="fa fa-sign-in"></i> Login</b>
              </div>

              <div class="clearfix"></div>

            </form>
          </section>
        </div>
      </div>

    </div>
  </body>
</html>
<!-- jQuery -->
<script src="{{asset('assets')}}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('assets')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
$(function () {
    setTimeout(function() {
        $('.alert').fadeTo(300, 0).slideUp(300, function () {
            $(this).remove();
        });
    }, 3000);
})
</script>
