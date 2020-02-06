@include('layouts.defaultHeader')
    @include('headers.header')

    <div class="container">
            <h1 class="row justify-content-center">Some Products - 1</h1>
                <div class="row justify-content-center">
                    @foreach($data as $value)
                        <div class="col-4 text-center" style="border: solid 1px red;">
                            <a href="{{$value->path()}}">
                                <img src="{{$value->images}}" class="img-fluid img-thumbnail" alt="No image">
                            </a>
                        </div>
                    @endforeach
                </div>
            <div class="row justify-content-center">
                {{$data->links()}}
            </div>
    </div>

    @include('footers.footer')
@include('layouts.defaultFooter')
