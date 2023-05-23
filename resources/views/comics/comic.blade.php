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
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">{{$comic["title"]}}</h2>
                <div class="container price-checker py-3 mt-1 my-3">
                    <div class="row">
                        <div class="col d-flex justify-content-between fw-bold px-4">
                            <div>
                                <span class="opacity-75">U.S. Price:</span>
                                {{$comic["price"]}}
                            </div>
                           <div class="text-uppercase">available</div>
                        </div>
                        <div class="col-auto px-4 border-start">
                            Check Availability
                        </div>
                    </div>
                </div>
                <p class="">
                    {{$comic["description"]}}
                </p>
            </div>
            <div class="col-auto text-end">
                <h6 class="text-uppercase text-end">Advertisement</h6>
                <img src="/img/publ.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@include("partials.bridge")
@endsection
