@include('layouts.defaultHeader')


<table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
        <th style="width:50%">Товар</th>
        <th style="width:10%">Цена</th>
        <th style="width:8%">Количество</th>
        <th style="width:22%" class="text-center">Общяя стоимость</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody>

    <?php $total = 0 ?>

    @if(session('cart'))
        @foreach(session('cart') as $id => $details)

            <?php $total += $details['price'] * $details['quantity'] ?>

    <tr>
        <td data-th="Product">
            <div class="row">
                <div class="col-sm-3 hidden-xs"><img src="{{$details['images']}}" style="width: 100px; height: 100px" alt="картинка товара" class="img-responsive"/></div>
                <div class="col-sm-9">
                    <h4 class="nomargin">Товар: {{$details['productName']}}</h4>
                    <p>Описание товара: {{$details['description']}}</p>
                </div>
            </div>
        </td>
        <td data-th="Price">{{$details['price']}} грн</td>
        <td data-th="Quantity">
            <input type="number" class="form-control text-center" value="{{$details['quantity']}}">
        </td>
        <td data-th="Subtotal" class="text-center">{{$details['price'] * $details['quantity']}} грн</td>
        <td class="actions" data-th="">
            <button class="btn btn-info btn-sm update-cart" data-id="{{$id}}"><i class="fa fa-refresh"></i></button>
            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{$id}}"><i class="fa fa-trash-o"></i></button>
        </td>
    </tr>
        @endforeach
    @endif
    </tbody>
    <tfoot>
    <tr class="visible-xs">
        <td class="text-center"><strong>{{$total}} грн</strong></td>
    </tr>
    <tr>
        <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Продолжить покупки</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Всего: {{$total}} грн</strong></td>
    </tr>
    </tfoot>
</table>


<script type="text/javascript">

    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ url('update-cart') }}',
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>


@include('layouts.defaultFooter')
