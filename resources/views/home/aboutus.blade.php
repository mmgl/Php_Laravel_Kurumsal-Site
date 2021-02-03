@extends('layouts.home')

@section('title', 'Hakkımızda')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <h2>Hakkımızda</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    {!! $setting->aboutus !!}
                </div>
            </div>
        </div>
    </section>
@endsection

