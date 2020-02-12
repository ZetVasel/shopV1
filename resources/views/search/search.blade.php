@include('layouts.defaultHeader')
    @include('headers.header')



    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            @foreach($data as $value)
                <a href="{{$value->id}}">
                    <h1>{{$value->productName}}</h1>
                </a>
                <h3>{{$value->description}}</h3>
            @endforeach
        </div>
    </div>








    @include('footers.footer')
@include('layouts.defaultFooter')
