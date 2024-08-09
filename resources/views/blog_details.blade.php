@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5 mb-5" id="about-banner">
        <div class="container py-5">
            <div class="row align-items-center b-set">

                <div class="d-inline-flex align-items-center">

                    <h2 style="color:white;">{{ $blog->title }}</h2>

                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col mt-2 mt-md-0">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('blogs') }}"
                                class="text-decoration-none">Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"
                                class="text-decoration-none">{{ ucfirst($blog->title) }}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <main class="">
        <section class="gray-simple mx-3">
            <div class="container">
                <!-- row Start -->
                <div class="row justify-content-center g-4">
                    <div class="col-md-9">
                        <div class="blog-body">
                            <h4 class="fw-semibold">{{ ucfirst($blog->title) }}</h4>
                        </div>
                        <div class="blog-thumb">
                            <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid" alt="Alt text" />
                        </div>
                        <div class="blog-body">
                            <p>{{ $blog->description }}</p>

                        </div>
                    </div>

                </div>
            </div>

        </section>
    </main>
@endsection
