@extends('templates.outs.home')

@section('content')
    {{-- HEADER--}}

    {{-- HEREO SECTION --}}
    <div class="hug hug-hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <center>
                        <h1 style="color:#FFF";>项目协作</h6>
                        <h3 style="color:#FFF";>给您提供全新的工作体验</h3>
                        <a href="{{ route('login') }}" class="btn btn-special">开始使用</a>
                    </center>

                </div>
            </div>
        </div>
    </div>
    
@stop
