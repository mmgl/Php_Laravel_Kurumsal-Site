
@extends('layouts.admin')
@section('title','Edit Category')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Kategori</h4>
                            <form class="form-horizontal style-form" role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                <div class="form-group" >
                                    <label value="0" class="col-sm-2 col-sm-2 control-label">Ana Katagori</label>
                                    @csrf
                                    <div class="col-sm-10">
                                        <select class="form-control" name="parent_id">
                                            <option value="0"></option>
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs -> id}}" @if($rs->id == $data->parent_id) selected="selected" @endif>
                                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" value="{{$data -> title}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keywords" value="{{$data -> keywords}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" value="{{$data -> description}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slug" value="{{$data -> slug}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option selected="selected">{{$data -> status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-theme02" ><i class="fa fa-check"></i> Güncelle </button>

                            </form>
                        </div>
                    </div><!-- col-lg-12-->
                </div><!-- /row -->
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection

