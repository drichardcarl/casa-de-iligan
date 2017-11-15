<div class="header">
    <div class="container">
        <div class="header-grid">
            <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                <ul>
                    <li>
                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        <a href="mailto:info@example.com">admin@casadeiligan.com</a>
                    </li>
                    <li>
                        <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0912 345 6789
                    </li>
                </ul>
            </div>
            <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s" style="float:right">
                <ul>
                    @auth
                        <div styel="float:right">
                        <li role="presentation" class="dropdown">
							<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">{{Auth::user()->name}} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
								<li>
                                    <a href="/logout-customer">
                                        <i class="glyphicon glyphicon-log-out" aria-hidden="true"></i>
                                        Logout
                                    </a>
                                </li>
							</ul>
						</li>
                        </div>
                    @else
                        <li>
                            <i class="glyphicon glyphicon-log-in" aria-hidden="true"></i>
                            <a href="/login">Login</a>
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-book" aria-hidden="true"></i>
                            <a href="/register">Register</a>
                        </li>
                        <li>
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                            <a href="/owner-login">Owner?</a>
                        </li>
                    @endauth
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="logo-nav">
            <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                <h1>
                    <a href="/">{{config('app.name', 'Casa de Iligan')}}
                        <span>We find Homes</span>
                    </a>
                </h1>
            </div>
            <div class="logo-nav-left1">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Find
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu columns-3">
                                    <div class="row">
                                        <div class="dropdown">
                                            <ul class="multi-column-dropdown">
                                                <h6>Houses</h6>
                                                <li>
                                                    <a href="products.html">Apartments</a>
                                                </li>
                                                <li>
                                                    <a href="products.html">Dorms</a>
                                                </li>
                                                <li>
                                                    <a href="products.html">Boarding Houses</a>
                                                </li>
                                                <li>
                                                    <a href="products.html">Bed Spacers</a>
                                                </li>
                                                <li>
                                                    <a href="products.html">Transient Homes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li>
                                <a href="mail.html">Mail Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>