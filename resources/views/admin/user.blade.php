
@extends('layouts.admin')
@section('title','Ürün Listesi')

@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Kullanıcılar </h3>
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
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Roles</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $userlist as $rs )
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        @if ($rs->profile_photo_path)
                                            <img src="{{ Storage::url($rs->profile_photo_path) }}" height="50" style="border-radius: 10px"alt="" >
                                        @endif
                                    </td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->address }}</td>
                                    <td>@foreach($rs->roles as $row)
                                            {{ $row->name }}
                                        @endforeach
                                        <a href="{{ route('admin_user_roles', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')">
                                            <i class="nav-icon fas fa-plus-circle"></i>
                                        </a>
                                    </td>
                                    <td><a class="btn btn-round btn-info" href="{{route('admin_user_edit',['id'=> $rs->id])}}"> Edit </a></td>
                                    <td><a class="btn btn-round btn-danger" href="{{route('admin_user_delete',['id'=> $rs->id])}}" onclick="return confirm('Silmek İsteğinizden eminmisiniz!!')">Delete</a></td>
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



