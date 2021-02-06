
@extends('layouts.admin')
@section('title','İletişim Mesaj Listesi')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Mesajlar </h3>
            <div class="row mt">
                <div class="col-lg-12">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="content-panel">
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>İsim</th>
                                <th>Email</th>
                                <th>Telefon</th>
                                <th>Konu</th>
                                <th>Mesaj</th>
                                <th>Admin note</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $datalist->sortBy('id') as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->subject }}</td>
                                    <td>{{ $rs->message }}</td>
                                    <td>{!! $rs->note !!}</td>
                                    <td>{{ $rs->status }}</td>
                                    <td><a class="btn btn-round btn-info" href="{{route('admin_message_edit',['id'=> $rs->id])}}"> Edit </a></td>
                                    <td><a class="btn btn-round btn-danger" href="{{route('admin_message_delete',['id'=> $rs->id])}}" onclick="return confirm('Silmek İsteğinizden eminmisiniz!!')">Delete</a></td>
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



