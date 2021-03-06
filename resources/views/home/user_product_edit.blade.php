@extends('layouts.home')

@section('title', 'Etkinlik Düzenleme')

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
                    <form action="{{ route('user_product_update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" >
                            <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
                            <div class="col-sm-10">
                                <label >
                                    <select name="category_id" class="form-control">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label class="col-sm-2 col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="title" name="title" class="form-control" value="{{$data->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Keywords</label>
                            <div class="col-sm-10">
                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Detail</label>
                            <div class="col-sm-10">
                                <textarea class="summernote" name="detail" value="{{$data->detail}}" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="description" value="{{$data->description}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control">

                                @if($data -> image)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($data ->image)}}" height="60">
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status">
                                    <option selected="selected" value="{{$data->status}}"></option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" ><i class="fa fa-check"></i> Güncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
