@include('includes.header')

    <body>

    <div id="wrapper">
        @include('includes.navBar')
        @include('includes.sideBar')
            <!-- Page Content -->
            <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">

                                @yield('content')
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('includes.footer')


    </body>

</html>