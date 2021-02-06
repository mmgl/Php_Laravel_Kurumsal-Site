@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp
                                <li class="dropdown">
                                    <a href="#">Çözümler<i class="icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        @foreach($parentCategories as $rs)
                                            @if(count($rs->children->where('status','=','True'))==0)
                                                <li class="dropdown"><a href="{{ route('menu', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}">{{$rs->title}}</a></li>
                                            @endif
                                                 <ul class="dropdown-menu sub-menu-level1">
                                                    @if(count($rs->children->where('status','=','True'))==0))
                                                     @foreach($rs->children->sortBy('id') as $submenu)
                                                        <li>@include('home.categorytree',['children'=>$rs->children])</li>
                                                     @endforeach
                                                    @endif

                                                 </ul>
                                        @endforeach
                                    </ul>
                                </li>

