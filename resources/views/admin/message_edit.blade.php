@extends('layouts.admin')

@section('title','Mesaj Düzenleme')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i>Mesajlarr</h4>
                            <form action="{{ route('admin_message_update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" >
                                    <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="title" name="title" class="form-control" value="{{$data->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">E-Mail</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keywords" value="{{$data->email}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="keywords" value="{{$data->phone}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Subject</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" value="{{$data->subject}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Message</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" value="{{$data->message}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Admin Note</label>
                                    <textarea class="summernote" name="note" id="note" >{{ $data->note }}</textarea>
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

