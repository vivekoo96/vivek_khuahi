@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5" id="about-banner">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center">
                    @if (isset($categorey))
                        <h2 style="color:white;">Products / {{ $categorey->name }}</h2>
                    @elseif(isset($brand))
                        <h2 style="color:white;">Products / {{ $brand->name }}</h2>
                    @endif
                </div>


            </div>
        </div>
    </div>

    <div class="col-md-12 my-4" style="background-color: #003F5F;"><br>
        <div class="row  py-5" style="margin-left:15px; margin-right:15px;">
            @forelse($products as $product)
                <div class="col-md-3 tc service_box">
                    <a href="{{ route('product_details', ['slug' => $product->slug]) }}">
                        <img src="{{ asset('storage/' . $product->main_image) }}" width="260" height="200"><br>
                        <br>
                        <h3>{{ $product->name }}</h3>
                        <p>{!! Str::words(strip_tags($product->description), 25, '...') !!}</p>
                        <a href="{{ route('product_details', ['slug' => $product->slug]) }}" class="text-secondary"
                            data-toggle="modal" data-target="#exampleModalCenter">Details</a>

                    </a>
                </div>
            @empty
                <p class="text-center">Not Found</p>
            @endforelse

        </div>
    </div>
@endsection
