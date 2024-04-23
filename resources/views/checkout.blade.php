<div class="container">
    <div class="py-5 text-center">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="styles.css">
    </div>
    <style>
        .container {
            max-width: 960px;
        }

        .lh-condensed {
            line-height: 1.25;
        }
    </style>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>

            <ul class="list-group mb-3 sticky-top">
                <?php $total = 0; ?>

                @if (session('cart'))
                    @foreach (session('cart') as $id => $details)
                        <?php $total += $details['price'] * $details['quantity']; ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>

                                <h6 class="my-0">{{ $details['name'] }}</h6>
                                <small class="text-muted"></small>
                            </div>
                            <span class="text-muted">{{ $details['price'] }}лв</span>
                        </li>
                    @endforeach
                @endif


                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (BGN)</span>
                    <strong>{{ $total }}лв</strong>
                </li>
            </ul>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate="" method="POST" action="{{ url('checkoutDone') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Име</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder=""
                            value="" required="">
                        <div class="invalid-feedback"> Нужно е валидно първо име. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Фамилия</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder=""
                            value="" required="">
                        <div class="invalid-feedback"> Нужна е валидна фамилия. </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email<span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="you@example.com" required="">
                    <div class="invalid-feedback"> Моля, въведете валиден имейл адрес.  </div>
                </div>
                <div class="mb-3">
                    <label for="address">Адрес на доставка</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"
                        required="">
                    <div class="invalid-feedback"> Моля въведете адреса за доставка.</div>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Държава</label>
                        <select class="custom-select d-block w-100" id="country" name="country" required="">
                            <option value="">Избери...</option>
                            <option>България</option>
                        </select>
                        <div class="invalid-feedback"> Моля изберете валидна държава. </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Област</label>
                        <select class="custom-select d-block w-100" id="state" name="state" required="">
                            <option value="">Избери...</option>
                            <option>Благоевград</option>
                            <option>Бургас</option>
                            <option>Варна</option>
                            <option>Велико Търново</option>
                            <option>Видин</option>
                            <option>Враца</option>
                            <option>Габрово</option>
                            <option>Добрич</option>
                            <option>Кърджали</option>
                            <option>Кюстендил</option>
                            <option>Ловеч</option>
                            <option>Монтана</option>
                            <option>Пазарджик</option>
                            <option>Перник</option>
                            <option>Плевен</option>
                            <option>Пловдив</option>
                            <option>Разград</option>
                            <option>Русе</option>
                            <option>Силистра</option>
                            <option>Сливен</option>
                            <option>Смолян</option>
                            <option>София</option>
                            <option>София (столица)</option>
                            <option>Стара Загора</option>
                            <option>Търговище</option>
                            <option>Хасково</option>
                            <option>Шумен</option>
                            <option>Ямбол</option>

                        </select>
                        <div class="invalid-feedback"> Моля въведете валидна област. </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" name="zipCode" placeholder=""
                            required="">
                        <div class="invalid-feedback"> Моля въведете zip код. </div>
                    </div>
                </div>
                
                <hr class="mb-4">
        
        
                <button class="btn btn-primary btn-lg btn-block" type="submit">Заплащане</button>
            </form>
        </div>

    
    <script>
        (function() {
            'use strict'

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation')

                // Loop over them and prevent submission
                Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
            }, false);
        }())
    </script>
</div>
