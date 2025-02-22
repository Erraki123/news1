@extends('layouts.header')

@section('content')

<div >
    <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
        <h5 class="small-title mb-2">Best Services</h5>
        <h3 class="title-style">More than 30+ years we provide business consulting</h3>
    </div>

    <section class="home-services py-5" id="services">
        <div class="row justify-content-center">
            @foreach ($annonces as $annonce)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-donate"></i>
                        </div>
                        <h4><a href="#url">{{ $annonce->name }}</a></h4>
                        <p>{{ $annonce->description }}</p>
                        <a href="services.html" class="read">{{ $annonce->date }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="pagination-container">
        <div class="pagination pagination-sm">
            {{ $annonces->links() }}
        </div>
    </div>
</div>

<style>
.pagination {
    display: flex;
    justify-content: center;
    padding: 10px 0;
    list-style: none;
}

.pagination li {
    margin: 0 5px;
}

.pagination li a, .pagination li span {
    padding: 8px 12px;
    text-decoration: none;
    color: #333;
    background: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.pagination li a:hover {
    background: #007bff;
    color: white;
    border-color: #007bff;
}

</style>


  <section class="w3l-content1 py-5">
        <div class="container py-md-5 py-sm-4 py-2">
            <div class="row py-4">
                <div class="col-lg-7">
                    <h3 class="title-style text-white">We manage your business</span></h3>
                    <p class="mt-4 text-light">Lorem ipsum dolor sit amet elit. Velit beatae
                        rem ullam dolore nisi esse quasi. Integer sit amet. Lorem ipsum dolor sit
                        amet elit.</p>
                    <a href="contact.html" class="btn btn-style mt-md-5 mt-4">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <div class="w3l-homeblock3 py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">What we do?</h5>
                <h3 class="title-style">We take care of the Future!</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="top-pic1">
                        <div class="card-body blog-details">
                            <span class="meta-value">Investment</span>
                            <a href="#blog" class="blog-desc">Strength solutions
                            </a>
                            <a href="#blog" class="btn btn-style-primary btn-style text-white mt-4">Read
                                More<i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="top-pic2">
                        <div class="card-body blog-details">
                            <span class="meta-value">Strategy</span>
                            <a href="#blog" class="blog-desc">Business analytics
                            </a>
                            <a href="#blog" class="btn btn-style-primary btn-style text-white mt-4">Read
                                More<i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="top-pic3">
                        <div class="card-body blog-details">
                            <span class="meta-value"> Tax Consulting </span>
                            <a href="#blog" class="blog-desc">Stock investments
                            </a>
                            <a href="#blog" class="btn btn-style-primary btn-style text-white mt-4">Read
                                More<i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
