@extends('layouts.home')

@section('title', 'Etkinlik Ekleme')

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
                    <form class="form-horizontal style-form" role="form" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label  class="col-sm-2 col-sm-2 control-label">Ürün</label>
                            @csrf
                            <div class="col-sm-10">
                                <label>
                                    <select class="form-control" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs -> id}}">
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs-> title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" id="title" name="title" class="form-control">
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
                                <textarea class="summernote" name="detail"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" name="descriptions" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control">
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
                        <button type="submit" class="btn btn-success" ><i class="fa fa-check"></i> Ürün Ekle</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
