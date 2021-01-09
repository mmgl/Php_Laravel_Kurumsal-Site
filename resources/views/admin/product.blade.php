
@extends('layouts.admin')
@section('title','Ürün Listesi')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Ürünler </h3>
            <div class="row mt">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="content-panel">
                    <a class="btn btn-round btn-primary" href="{{route('admin_product_add')}}" style="margin: 15px">Ürün Ekleme</a>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->category_id }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="60" width="60">
                                        @endif
                                    </td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a class="btn btn-round btn-info" href="{{route('admin_product_edit',['id'=>$rs->id])}}"> Edit </a></td>
                                    <td><a class="btn btn-round btn-danger" href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek İsteğinizden eminmisiniz!!')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div
                </section>
            </div>
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection



