
@extends('layouts.admin')
@section('title','Resim Panel')
@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i></h4>
                            <form class="form-horizontal style-form" role="form" action="{{route('admin_image_store')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group" >
                                    <label  class="col-sm-2 col-sm-2 control-label">{{$data -> title}}</label>
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

                            </form>
                        </div>
                    </div><!-- col-lg-12-->
                </div><!-- /row -->
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection

