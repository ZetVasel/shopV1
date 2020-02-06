@include('layouts.defaultHeader')
    @include('headers.header')

        <div class="container">
            <h1 class="row justify-content-center">{{$data->productName}}</h1>
                <div class="row justify-content-center">
                    <img class="img-fluid" src="{{$data->images}}">
                </div>
                <div class="row justify-content-center">
                    {{$data->description}}
                </div>
        </div>

    @include('footers.footer')
@include('layouts.defaultFooter')
