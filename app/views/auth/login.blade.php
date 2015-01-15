@include('includes.header')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                            {{Form::open(['route'=>'login', 'method'=> 'post','role'=>'form'])}}
                            <fieldset>
                                <div class="form-group">
                                    {{Form::email('email',null,['class'=>'form-control','placeholder'=>'E-mail','autofocus'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::password('password',['class'=>'form-control','placeholder'=>'Password'])}}
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                {{Form::submit('Login',['class'=> 'btn btn-lg btn-success btn-block'])}}
                            </fieldset>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')


</body>

</html>
