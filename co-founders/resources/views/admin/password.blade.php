<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Co Founders</title>

        <head>
            <title>Login</title>

            <!-- Boostrap CSS -->
            <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

            <!-- Login CSS -->
            <link rel="stylesheet" type="text/css" href="{{asset('resources/css/login.css')}}">

        </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Forgot password</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="register-form" action="{{url('/password')}}" method="post" role="form">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Send">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery-->
    <script src="{{asset('resources/js/jquery.js')}}"></script>

    <!-- Bootstrap-->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            //register
            $("#register-form").submit(function(){
                var email=$("#email").val();
                if(""==email){
                    alert('Email not be empty!');
                    return false;
                }
            });
        });
    </script>

    </body>
</html>