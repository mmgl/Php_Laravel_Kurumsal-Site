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

@endsection

