@extends('master')
@section('title', 'Товар')
@section('content')

    <div class="starter-template">
        <h1>iPhone X 256GB</h1>
        <h2>{{$product}}</h2>
        <h2>Мобильные телефоны</h2>
        <p>Цена: <b>89990 ₽</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg">
        <p>Отличный продвинутый телефон с памятью на 256 gb</p>

        <form action="http://internet-shop.tmweb.ru/basket/add/2" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="ucSgRQSB8Ud6hHyfrPh15axtgW2XnpXiMJGsKpMY">        </form>
    </div>

@endsection
