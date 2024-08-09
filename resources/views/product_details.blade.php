@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5"
        style="background-image: url('{{ asset('storage/' . $product->main_image) }}');background-size: cover;">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center text-secondary">
                    <h6><span class="section-heading">{{ $product->name }}</span></h6><br><br>
                </div>


            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="text-center text-secondary">


        </div>
    </div>
    <div class="col-md-12 my-4" style="background-color: #003F5F;">

        <div class="menu-item-carousel">
            <div class="col-lg-12">

                <div class="owl-menu-item owl-carousel">
                    @forelse($product->image as $image)
                        <div class="item">
                            <div class='card cards' style="background-image: url('{{ asset('storage/' . $image) }}')">
                                <div class='info'>
                                    <h3 class='title tc'><a href="" data-toggle="modal"
                                            data-target="#exampleModalCenter" class="text-white">Enquire</a></h3>
                                    <p class='description' style="opacity:0;">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing
                                        elit, sedii do eiusmod teme.</p>
                                    <div class="main-text-button" style="opacity:0;">
                                        <div class="scroll-to-section"><a href="#reservation">Make Reservation <i
                                                    class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center text-secondary">
                <h6><span class="section-heading">Product Description</span></h6><br><br>
                <p>{!! $product->description !!}</p>
            </div>
        </div>
    </div>
    </div>
@endsection
