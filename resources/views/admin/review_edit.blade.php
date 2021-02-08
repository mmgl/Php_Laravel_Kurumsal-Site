@extends('layouts.admin')

@section('title','Yorum Düzenleme')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i>Yorumlar</h4>
                            <form action="{{ route('admin_review_update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" >
                                    <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="title" name="title" class="form-control" value="{{$data->user->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Çözüm</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keywords" value="{{$data->product->title}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Yorum</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keywords" value="{{$data->comment}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Subject</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" value="{{$data->subject}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">IP</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" value="{{$data->IP}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Created Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" value="{{$data->created_at}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Updated Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" value="{{$data->updated_at}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div style="margin-bottom: 15px;" id="success">@include('home.message')</div>

                                <button type="submit" class="btn btn-theme02" ><i class="fa fa-check"></i> Güncelle</button>
                            </form>
                        </div>
                    </div><!-- col-lg-12-->
                </div><!-- /row -->
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection

