
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
                    <h4><i class="fa fa-angle-right"></i>Kategori Listesi</h4>
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
                                    <td>{{ $rs->parent_id }}</td>
                                    <td>{{ $rs->title }}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
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



