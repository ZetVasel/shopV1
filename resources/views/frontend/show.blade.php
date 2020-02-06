@include ('layouts.defaultHeader')

    @include('headers.header')
<div class="container">
    <div class="row">
        <div class="col-md-4">.col-md-4
            @include('sidebar.sidebar')
        </div>
        <div class="col-md-8">.col-md-8
            @foreach($data as $value)
                <div style="border: solid red 5px; margin: 1% 1% 1% 1%;">
                    <a href="{{URL::to('frontend.showImage')}}">
                    <img class="img-fluid" src="{{$value->productName}}">
                    </a>
                    <p>Name: {{$value->productName}}</p>
                    <br>
                    <p>Description: {{$value->description}}</p>
                    <br>
                    <p>ID: {{$value->productId}}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row justify-content-center">
        {{$data->links()}}
    </div>
<hr>

        <div class="container">
            <div class="row justify-content-center">
                @foreach($recital as $value)
                    <div>
                        {{$value->pagesRecital}}
                    </div>
                @endforeach
            </div>
        </div>
    <hr>
    <div class="container" style="border: solid green 2px">
        {{$t}}
    </div>
    <hr>
</div>

    @include('footers.footer')

@include('layouts.defaultFooter')
