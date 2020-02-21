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
            <div class="row justify-content-center">
                <a href="{{url('showCart/'.$data->id)}}"><button type="button" class="btn btn-labeled btn-primary btn-md" aria-label="Left Align">
                    <span class="btn-label"><i class="glyphicon glyphicon-shopping-cart"></i></span>
                    Купить</button>
                </a>
            </div>
        </div>

    @include('footers.footer')
@include('layouts.defaultFooter')
