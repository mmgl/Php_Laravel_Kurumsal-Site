@extends('layouts.home')

@section('title', $menu->title)
@section('description', $menu->description)
@section('keywords', $menu->keywords)

@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h2>{{ $menu->title }} </h2>
                    <div class="clearfix"></div>
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="grid cs-style-4 portfolio">
                            @foreach($data as $rs)
                                <!-- Item Project and Filter Name -->
                                    <li class="item-thumbs span4 design" data-id="id-0" data-type="web">
                                        <div class="item">
                                            <figure>
                                                <div><img src="{{ Storage::url($rs->image) }}" style="height: 200px;width: 200px" alt="" /></div>
                                                <figcaption>
                                                    <div>
                            <span>
											<a href="{{ Storage::url($rs->image) }}" data-pretty="prettyPhoto[gallery1]"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
											</span>
                                                        <span>
											<a href="{{ route('product', ['id'=>$rs->id, 'slug'=>$rs->slug]) }}"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
											</span>

                                                    </div>
                                                </figcaption>
                                            </figure>
                                            <h2 class="card-title">{{ $rs->title }}</h2>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

