
@extends('layouts.admin')
@section('title','Ürün Panel')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Ürünler</h4>
                            <form class="form-horizontal style-form" role="form" action="{{route('admin_product_create')}}" method="post">
                                <div class="form-group" >
                                    <label  class="col-sm-2 col-sm-2 control-label">Ürün</label>
                                    @csrf
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs -> id}}">{{$rs -> title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keywords" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Detail</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="detail" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="descriptions" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slug" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-theme02" ><i class="fa fa-check"></i> Ürün Ekle</button>

                            </form>
                        </div>
                    </div><!-- col-lg-12-->
                </div><!-- /row -->
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection

