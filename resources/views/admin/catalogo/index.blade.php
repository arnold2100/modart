@extends('layouts.app')
@section('title', 'Catalogo de Productos')
@section('body-class', 'product-page')

<style>
div.catalogo{
    margin: 10px 20px;
    box-shadow: 0 4px 8px 0 lightcoral, 0 6px 20px 0 rgba(0, 0, 0, 0.191);
    float: left;
    width: 350px;
}
div.catalogo img{
    width:20%;
    height: auto;
}

div.pie{
    text-align: center;
    padding:10%;
}
</style>


@section('content')
<div class="header header-filter">
</div>

<div class="main main-raised">
    <div class="container">        
        <div class="col-sm-9 text-center">
            <h2 class="title">Catalogo de Productos</h2>
        </div>

            <div class="catalogo">
                <div class="foto">
                    <img src="/img/p1.jpg" alt="">
                </div>
                <div class="pie">
                    <p class="">Vestido de Verano negro</p>
                </div>
            </div>
            <div class="catalogo">
                <div class="foto">
                    <img src="img/p2.jpg" alt="" class="">
                </div>
                <div class="pie">
                    <p class="">Sacon Deportivo</p>
                </div>
            </div>
            <div class="catalogo">
                <div class="foto">
                    <img src="img/p3.jpg" alt="" class="">
                </div>
                <div class="pie">
                    <p class="">Polera con diseño bordado</p>
                </div>
            </div>
            <div class="catalogo">
                <div class="foto">
                    <img src="img/p4.jpg" alt="" class="">
                </div>
                <div class="pie">
                    <p class="">Sacon deportivo para mujer</p>
                </div>
            </div>
            <div class="catalogo">
                <div class="foto">
                    <img src="img/p5.jpg" alt="" class="">
                </div>
                <div class="pie">
                    <p class="">Bufanda unisex negro</p>
                </div>
            </div>
            <div class="catalogo">
                <div class="foto">
                    <img src="img/p6.jpg" alt="" class="">
                </div>
                <div class="pie">
                    <p class="">Poleras para parejas</p>
                </div>
            </div>
            <div class="catalogo">
                <div class="foto">
                    <img src="img/p7.jpg" alt="" class="">
                </div>
                <div class="pie">
                    <p class="">Bufandas Otoño</p>
                </div>
            </div>
            <div class="catalogo">
                <div class="foto">
                    <img src="img/p8.jpg" alt="" class="">
                </div>
                <div class="pie">
                    <p class="">Chaqueta deportiva</p>
                </div>
            </div>

            <div class="team">
                <div class="row">  
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.footer')
@endsection