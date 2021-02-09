@extends('layouts.home')

@section('title', 'Etkinliklerim')
@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside class="left-sidebar">
                        @include('home.usermenu')
                    </aside>
                </div>
                <div class="span8">
                    <div class="content-panel">
                        <article>
                            <div class="row">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <a class="btn btn-round btn-primary" href="{{route('user_product_add')}}" style="margin: 15px">Etkinlik Oluştur</a>
                                        <section id="unseen">
                                            <table class="table table-bordered table-striped table-condensed">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Galeri</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $datalist as $rs )
                                                    <tr>
                                                        <td>{{ $rs->id }}</td>
                                                        <td>
                                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                                                        </td>
                                                        <td>{{ $rs->title }}</td>
                                                        <td>
                                                            @if($rs->image)
                                                                <img src="{{Storage::url($rs->image)}}" height="60" width="60">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a  href="{{ route('user_image_add', ['product_id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=120 left=120 width=640 height=720')"><img height="50" src="{{asset('assets')}}/admin/img/galeri.jpg"></a>
                                                        </td>
                                                        <td>{{ $rs->status }}</td>
                                                        <td><a class="btn btn-round btn-info" href="{{route('user_product_edit',['id'=> $rs->id])}}"> Edit </a></td>
                                                        <td><a class="btn btn-round btn-danger" href="{{route('user_product_delete',['id'=> $rs->id])}}" onclick="return confirm('Silmek İsteğinizden eminmisiniz!!')">Delete</a></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
