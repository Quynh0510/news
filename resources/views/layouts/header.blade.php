    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Trang Chủ</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="introduce">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="contact">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search" action="search" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
			        <div class="form-group">
			          <input type="text" class="form-control" name="key" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Tìm</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    @if(!Auth::user())
                        <li>
                            <a href="resign">Đăng ký</a>
                        </li>
                        <li>
                            <a href="sign_in">Đăng nhập</a>
                        </li>
                    @else
                        <li>
                        	<a href="user">
                        		<span class ="glyphicon glyphicon-user"></span>
                        		{{ Auth::user()->name}}
                        	</a>
                        </li>

                        <li>
                        	<a href="sign_out">Đăng xuất</a>
                        </li>
                    @endif
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>