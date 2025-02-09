@extends('FE.app')
@section('content')


<!-- Start Content -->
<div class="container py-5">
    <div class="row">

        <div class="col-lg-3">
            <h1 class="h2 pb-4">Danh Mục</h1>
            <ul class="list-unstyled templatemo-accordion">
                <li class="pb-3">
                    <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                        Mẫu Áo Dài
                        <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                    </a>
                    <ul id="collapseThree" class="collapse list-unstyled pl-3">
                        @foreach($protypes as $row)                        
                        <li class="ms-3"><a class="text-decoration-none" href="{{ route('protype', ['id' => $row -> id]) }}">{{$row -> protype_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

        <div class="col-lg-9">
            <div class="row">
                @foreach($products as $key => $row)
                @if($key >= (($pageShop - 1) * 6) && $key < ($pageShop * 6))
                <div class="col-md-4">
                    <div class="card mb-4 product-wap rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="{{ asset('FE/assets/img/' . $row -> image) }}">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                    <li><a class="btn btn-success text-white mt-2" href="{{ route('page', ['page'=>'detail' . $row -> id]) }}"><i class="far fa-eye"></i></a></li>
                                    <li><a class="btn btn-success text-white mt-2" href="#"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a class="text-decoration-none text-white" href="{{ route('page', ['page'=>'detail' . $row -> id]) }}"><h5 class="text-center mt-3 bg-success py-1">{{$row -> name}}</h5></a>
                            <p class="text-center mb-0">{{number_format($row -> price)}}₫</p>
                            <p class="text-center mb-0 mt-1 {{($row -> quantity) > 0 ? '' : 'text-muted'}}">{{($row -> quantity) > 0 ? 'Còn Lại: ' . $row->quantity : 'Đã Bán Hết'}}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    @for($x = 1; $x <= $pages;$x++)
                    @if($x == $pageShop)                    
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">{{$x}}</a>
                        </li>
                    @else                    
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="{{ route('page', ['page'=>'shop' . $x]) }}">{{$x}}</a>
                        </li>
                    @endif
                    @endfor
                </ul>
            </div>
        </div>

    </div>
</div>
<!-- End Content -->

<!-- Start Brands -->
<section class="bg-light py-5">
    <div class="container my-4">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Brands</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
            <div class="col-lg-9 m-auto tempaltemo-carousel">
                <div class="row d-flex flex-row">
                    <!--Controls-->
                    <div class="col-1 align-self-center">
                        <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class="text-light fas fa-chevron-left"></i>
                        </a>
                    </div>
                    <!--End Controls-->

                    <!--Carousel Wrapper-->
                    <div class="col">
                        <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid" src="{{ asset('FE/assets/img/nangtho.jpg') }}" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid" src="{{ asset('FE/assets/img/vceo.jpg') }}" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid" src="{{ asset('FE/assets/img/moclan.jpg') }}" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid" src="{{ asset('FE/assets/img/yenhai.jpg') }}" alt="Brand Logo"></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid" src="{{ asset('FE/assets/img/nangtho.jpg') }}" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid" src="{{ asset('FE/assets/img/vceo.jpg') }}" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid" src="{{ asset('FE/assets/img/moclan.jpg') }}" alt="Brand Logo"></a>
                                        </div>
                                        <div class="col-3 p-md-5">
                                            <a href="#"><img class="img-fluid" src="{{ asset('FE/assets/img/yenhai.jpg') }}" alt="Brand Logo"></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Second slide-->

                            </div>
                            <!--End Slides-->
                        </div>
                    </div>
                    <!--End Carousel Wrapper-->

                    <!--Controls-->
                    <div class="col-1 align-self-center">
                        <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                            <i class="text-light fas fa-chevron-right"></i>
                        </a>
                    </div>
                    <!--End Controls-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brands-->
@endsection