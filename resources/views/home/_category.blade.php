@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

    <div class="container">
        <div class="row nomargin">
            <div class="span8">
                <div class="navbar navbar-static-top">
                    <div class="navigation">
                        <nav>
                            <ul class="nav topnav">
                                <li class="dropdown">
                                    <a href="#">Kategori <i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        @foreach($parentCategories as $rs)
                                        <li class="dropdown"><a href="#">{{$rs->title}}<i class="icon-angle-right"></i></a></li>
                                            <ul class="dropdown-menu sub-menu-level1">
                                                @if(count($rs->children))
                                                <li>@include('categorytree',['children'=>$rs->children])</li>
                                                @endif
                                            </ul>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end navigation -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->
