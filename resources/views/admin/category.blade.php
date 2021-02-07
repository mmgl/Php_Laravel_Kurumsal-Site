
@extends('layouts.admin')
@section('title','Category Listesi')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Categories </h3>
            <div class="row mt">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="content-panel">
                    <a class="btn btn-round btn-primary" href="{{route('admin_category_add')}}" style="margin: 15px">Add Category</a>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }} <!-- title olabilir.-->
                                    </td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a class="btn btn-round btn-info" href="{{route('admin_category_edit',['id'=>$rs->id])}}"> Edit </a></td>
                                    <td><a class="btn btn-round btn-danger" href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek İsteğinizden eminmisiniz!!')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </section><!--wrapper -->
    </section><!-- /MAIN CONTENT -->
@endsection



