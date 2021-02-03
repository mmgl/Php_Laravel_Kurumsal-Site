@extends('layouts.admin')

@section('title','Settings')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Ayarlar</h4>
                            <form action="{{ route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group" >
                                    <input name="id" type="hidden" class="form-control" value="{{ $setting->id }}" data-val="true">
                                </div>
                                <div class="form-group" >
                                    <label class="col-sm-2 col-sm-2 control-label">Title</label>
                                    <input name="title" type="text" class="form-control" value="{{ $setting->title }}" data-val="true">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                                    <input name="keywords" type="text" class="form-control" value="{{ $setting->keywords }}" data-val="true">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                    <input type="text" name="description" value="{{$setting->description}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Company</label>
                                    <input name="company" type="text" class="form-control" value="{{ $setting->company }}" >
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Address</label>
                                    <input name="address" type="text" class="form-control" value="{{ $setting->address }}" >
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Phone</label>
                                    <input name="phone" type="text" class="form-control" value="{{ $setting->phone }}" >
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Fax</label>
                                    <input name="fax" type="text" class="form-control" value="{{ $setting->fax }}" >
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                    <input name="email" type="email" class="form-control" value="{{ $setting->email }}" >
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Smtp Server</label>
                                    <input name="smtpserver" type="text" class="form-control" value="{{ $setting->smtpserver }}" >
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Smtp Email</label>
                                    <input name="smtpemail" type="text" class="form-control" value="{{ $setting->smtpemail }}" >
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Smtp Password</label>
                                    <input name="smtppassword" type="password" class="form-control" value="{{ $setting->smtppassword }}" >
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Smtp Port</label>
                                    <input name="smtpport" type="number" class="form-control" value="{{ $setting->smtpport }}" >
                                </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Facebook</label>
                                        <input name="facebook" type="text" class="form-control" value="{{ $setting->facebook }}" >
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Instagram</label>
                                        <input name="instagram" type="text" class="form-control" value="{{ $setting->instagram }}" >
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Twitter</label>
                                        <input name="twitter" type="text" class="form-control" value="{{ $setting->twitter }}" >
                                    </div>
                                <div class="form-group">
                                    <label>About Us</label>
                                    <textarea class="summernote" name="aboutus" id="aboutus" >{{ $setting->aboutus }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea class="summernote" name="contact" id="contact">{{ $setting->contact }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>References</label>
                                    <textarea class="summernote" name="references" id="references">{{ $setting->references }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected" value="{{$setting->status}}"></option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                </div>
                                <button type="submit" class="btn btn-theme02" ><i class="fa fa-check"></i> Güncelle</button>
                            </form>
                        </div>
                    </div><!-- col-lg-12-->
                </div><!-- /row -->
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
    <!-- include summernote css/js -->
@endsection

