@include ('layouts.defaultHeader')

    @include('headers.header')
<div class="container">
    <div class="row">
        <div id="sidebar-container" class="sidebar-expanded col-2 d-none d-md-block">

                @include('sidebar.sidebar')


        </div>
        <div class="row justify-content-center">
            @foreach($data as $value)
                <div class="col-md-5" style="border: solid red 5px; margin: 1% 1% 1% 1%;">
                    {{$value->productName}}
                </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
        {{$data->links()}}
    </div>

<!--
        <div class="container">

            <div class="row justify-content-center">
            @foreach($data as $value)
                <div class="col-md-2" style="border: solid red 5px">
                {{$value->productName}}
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                {{$data->links()}}
            </div>
        </div>
-->
        <div class="container">
            <div class="row justify-content-center">
                @foreach($recital as $value)
                    <div>
                        {{$value->pagesRecital}}
                    </div>
                @endforeach
            </div>
        </div>
</div>

    @include('footers.footer')

@include('layouts.defaultFooter')
