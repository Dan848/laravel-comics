@extends("layouts.app")

@section("page_title")

@endsection

@section("main_content")
<div>
    <div class="blue-stripes">
        <div class="container px-5 position-relative h-100">
            <div class="img-box absolute">
                <img class="img-fluid" src="{{$comic["thumb"]}}" alt="">
            </div>
        </div>
    </div>
    <div class="p-5 container">
        <div class="row">
            <div class="col-8">
                <h2>{{$comic["title"]}}</h2>
            </div>
            <div class="col-4">
                <h6 class="text-uppercase text-end">Advertisement</h6>
                <img src="/img/adv.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@include("partials.bridge")
@endsection
