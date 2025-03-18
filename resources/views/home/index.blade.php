@extends('layouts.front')

@section('content')
<main>

    <!-- Carousel Section -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- Carousel Item 1 -->
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Welcome to Our Store</h1>
                        <p class="opacity-75">Discover the latest products and trends at unbeatable prices.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Shop Now</a></p>
                    </div>
                </div>
            </div>
            <!-- Carousel Item 2 -->
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
                </svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Special Offers Just for You</h1>
                        <p>Exclusive deals and discounts on our best-selling items.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Check Offers</a></p>
                    </div>
                </div>
            </div>
            <!-- Carousel Item 3 -->
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
                </svg>
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>New Arrivals</h1>
                        <p>Explore the fresh collection of products that just arrived.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Explore Now</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Category Filter Section -->
    <div class="container mt-5">
        <h3 class="text-center mb-4">Filter by Category</h3>
        <form method="GET" action="{{ route('home.index') }}">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control form-control-lg" name="category_id" onchange="this.form.submit()">
                            <option value="">All Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Products Section -->
    <div class="container marketing mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-lg-4 mb-4">
                    <div class="card shadow-lg border-light rounded">
                        <div class="card-img-top placeholder" style="height: 200px; background-color: #777;">
                            <span class="text-white d-flex justify-content-center align-items-center" style="height: 100%;">Product Image</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $product->name }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($product->description, 100) }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-warning">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

 <!-- Featurette Section -->
<div class="row featurette mt-5">
    <div class="col-md-6">
        <div class="featurette-text">
            <h2 class="featurette-heading text-dark">Why Choose Us?</h2>
            <p class="lead text-muted">We offer a wide range of products with unbeatable quality, fast shipping, and excellent customer service. Our team is dedicated to ensuring you have the best shopping experience possible!</p>
        </div>
    </div>
    <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div class="featurette-image" style="width: 80%; height: 350px; background-color: #e1e1e1; border-radius: 10px;">
            <span class="text-center text-white" style="line-height: 350px;">Featurette Image</span>
        </div>
    </div>
</div>
<hr class="featurette-divider">


</main>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

@endsection
