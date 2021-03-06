@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp

<li class="dropdown">
    <a href="#">Haberler <i class="icon-angle-down"></i></a>
    <ul class="dropdown-menu">
        @foreach($parentCategories->sortBy('id') as $rs)
            @if(count($rs->children->where('status','=','True'))==0)
                <li class="dropdown">
                    <a href="{{ route('menu', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}">{{$rs->title}}</a>
                </li>
            @endif
            @if(count($rs->children->where('status','=','True'))!=0))
            <li class="dropdown">
                <a>{{$rs->title}}<i class="icon-angle-right"></i></a>
                <ul class="dropdown-menu sub-menu-level1">
                    @if(count($rs->children->where('status','=','True')))
                        @foreach($rs->children->sortBy('id') as $submenu)
                            <li href="{{ route('menu', ['id'=>$submenu->id, 'slug'=>$submenu->slug]) }}">@include('home.categorytree',['children'=>$rs->children])</li>
                        @endforeach
                    @endif
                </ul>
            </li>
           @endif
       @endforeach
    </ul>
</li>
