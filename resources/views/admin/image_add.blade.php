
@extends('layouts.admin')
@section('title','Resim Panel')
@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"></h4>
                            <form class="form-horizontal style-form" role="form" action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                <div class="form-group" >
                                    <label><h4 class="fa fa-angle-right">{{$data -> title}}</h4></label>
                                    @csrf
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-theme02" ><i class="fa fa-check"></i> Resim Ekle</button>
                                <table class="table table-bordered table-striped table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $images as $rs )
                                        <tr class="tr-shadow">
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->title }}</td>
                                            <td>
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-round btn-danger" href="{{route('admin_image_delete',['id'=> $rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Silmek Isteginizden eminmisiniz!!')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div><!-- col-lg-12-->
                </div><!-- /row -->

        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection

