@extends('layouts.app')

@section('content')
    <table id="cart" class="table table-bordered table-hover table-condensed mt-3">
        <thead>
            <tr>
                <th style="width:50%">Продукт</th>
                <th style="width:8%">Количество</th>
                <th style="width:22%" class="text-center">Междинна сума</th>
            </tr>
        </thead>
        <tbody>

            <?php $total = 0; ?>

            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity']; ?>

                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ asset('uploads/' . $details['photo']) }}"
                                        width="50" height="" class="img-responsive" />

                                </div>

                                <div class="col-sm-9">
                                    <p class="nomargin">{{ $details['name'] }}</p>
                                    <a href="#" class="remove-from-cart cart-delete" data-id="{{ $id }}"
                                        title="Delete">Махни</a>
                                </div>
                            </div>
                        </td>
                        <td data-th="Quantity">
                            <input type="number" min="0" value="{{ $details['quantity'] }}"
                                class="form-control quantity" />
                        </td>
                        <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}лв</td>
                    </tr>
                @endforeach
            @endif

        </tbody>
        <tfoot>
            @if (!empty($details))
                <tr class="visible-xs">
                    <td class="text-right" colspan="2"><strong>Общо</strong></td>
                    <td class="text-center"> {{ $total }}лв</td>
                </tr>
            @else
                <tr>
                    <td class="text-center" colspan="3">Количката е празна.....</td>
                <tr>
            @endif
        </tfoot>

    </table>
    <a href="{{ url('http://127.0.0.1:8000/welcome') }}" class="btn shopping-btn btn-warning">Продължи да пазаруваш</a>
    <a href="checkout" class="btn btn-warning check-btn">Премини към плащане</a>
    <a href="clear-cart" class="btn btn-warning check-btn">Изчисти количката</a>
    <div class="container products">

        <div class="row">

            @foreach ($products as $product)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('uploads/' . $product->image) }}" class="card-img-top img-size"
                            alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit(strtolower($product->description), 50) }}
                            </p>
                            <p class="card-text"><strong>Price: </strong> {{ $product->price }}лв</p>
                            <a href="{{ url('add-to-cart/' . $product->id) }}" class="btn btn-warning btn-block text-center"
                                role="button">Добави в количката</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
    <script>
        $(document).ready(function() {
            $(".remove-from-cart").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Сигурен ли си че искаш да махнеш продукта от количката?")) {
                    $.ajax({
                        url: '{{ url('remove-from-cart') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.attr("data-id")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        });
    </script>
@endsection
