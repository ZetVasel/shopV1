@include('layouts.defaultHeader')

    @include('headers.header')
<hr>
<div class="container">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <div class="container-fluid">
                <div class="title m-b-md">
                    <span>Shop A.</span>
                    <div>
                        <img class="img-fluid" src="{{URL('storage/images/new1.jpg')}}" alt="Main image">
                    </div>
                </div>
            </div>
        </div>
    <hr>
        <div class="container">
        @section('mainSlider')
            <div>This is the master sidebar.</div>
            <div class="img-fluid">
                @include('sliders.mainSlider')
            </div>
        @show
        </div>
    <hr>
        @section('slider')
            <div>Slide2 img</div>
            @include('sliders.slider')
        @show
</div>






    @include('footers.footer')
@include('layouts.defaultFooter')

