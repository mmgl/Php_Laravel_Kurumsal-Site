@extends('layouts.admin')

@section('title','Ürün Panel')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Edit User</h4>
                            <form action="{{ route('admin_user_update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" >
                                    <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone" value="{{$data->phone}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Adres</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control">
                                        @if ($data->profile_photo_path)
                                            <img src="{{ Storage::url($data->profile_photo_path) }}" height="200" style="border-radius: 10px" alt="">
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-theme02" ><i class="fa fa-check"></i> Güncelle</button>
                            </form>
                        </div>
                    </div><!-- col-lg-12-->
                </div><!-- /row -->
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection

