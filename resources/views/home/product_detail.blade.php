@extends('layouts.home')

@section('title',$data->title)
@section('description', $data->description)
@section('keywords', $data->keywords)

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <h2>{{$data->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <img src="{{ Storage::url($data->image) }}"  style="width: 400px;height: 400px" alt="" />
                    {!! $data->detail !!}
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
    <div class="span8">
        <div class="comment-area">
            <h4>Comments</h4>
            <div>@include('home.message')</div>
            @foreach($reviews as $rs)
            <div class="media">
                <a href="#" class="pull-left"><img src="" alt="" class="img-circle" /></a>
                <div class="media-body">
                    <div class="media-content">
                        <h6><span>{{ $rs->created_at }}</span> {{ $rs->user->name }}</h6>
                        <p>
                            {{ $rs->comment }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            @livewire('review', ['id' => $data->id])
        </div>
    </div>
    </div>
        </div>
    </section>


@endsection

