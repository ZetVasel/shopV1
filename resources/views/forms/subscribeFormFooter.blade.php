<div class="row justify-content-center" style="background-color: honeydew;">
    <form class="form-inline" method="post" action="/">
        {{csrf_field()}}
        <div class="form-group row">
            <div class="col-md-6">
                <p class="text-center">УЗНАВАЙТЕ ПЕРВЫМИ О РАСПРОДАЖАХ И НОВИНКАХ</p>
            </div>
            <div class="col-md-6">
                <input type="email" name="email" class="form-control" id="Email" placeholder="Email">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-2">ПОДПИСАТЬСЯ</button>
    </form>
</div>
