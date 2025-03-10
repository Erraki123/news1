@extends('layouts.header')

@section('content')

    <!-- home page service grids -->
    <section class="home-services py-5" id="services">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:700px;">
                <h5 class="small-title mb-2">Best Services</h5>
                <h3 class="title-style">More than 30+ years we provide business consulting</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-donate"></i>
                        </div>
                        <h4 class="number">01</h4>
                        <h4><a href="#url">Financial planing</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-marker"></i>
                        </div>
                        <h4 class="number">02</h4>
                        <h4><a href="#url">Training services</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4 class="number">03</h4>
                        <h4><a href="#url">Marketing services</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h4 class="number">04</h4>
                        <h4><a href="#url">Taxation services</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <h4 class="number">05</h4>
                        <h4><a href="#url">Start Ups</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4">
                    <div class="box-wrap">
                        <div class="icon">
                            <i class="fas fa-edit"></i>
                        </div>
                        <h4 class="number">06</h4>
                        <h4><a href="#url">Business Planning</a></h4>
                        <p>Lorem ipsum dolor sit amet sed consectetur adipisicing elit.
                            doloret quas saepe autem, dolor set.</p>
                        <a href="services.html" class="read">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home page service grids -->
    <div class="row">
    @foreach ($annonces as $annonce)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="box-wrap shadow-sm">
                <div class="image-container mb-3">
                    <img src="{{ asset('storage/' . $annonce->photo) }}" class="annonce-img rounded-3" alt="Annonce">
                </div>
                <div class="text-center">
                    <h4 class="number mb-2">{{ $loop->iteration }}</h4>
                    <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">{{ $annonce->name }}</p>
                    <p class="text-muted">{{ Str::limit($annonce->description, 100) }}</p>
                    <p class="card-date text-muted"><p>Date:</p> {{ \Carbon\Carbon::parse($annonce->date)->format('d/m/Y') }}</p>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#previewModal{{ $annonce->id }}" style="background-color: var(--primary-color); border-radius: 20px;">
                        Voir
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal for each annonce -->
        <div class="modal fade" id="previewModal{{ $annonce->id }}" tabindex="-1" aria-labelledby="previewModalLabel{{ $annonce->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="previewModalLabel{{ $annonce->id }}">Détails de l'annonce</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Image de l'annonce -->
                        <div class="text-center mb-3">
                            <img src="{{ asset('storage/' . $annonce->photo) }}" class="img-fluid rounded-3" alt="Annonce">
                        </div>
                        <!-- Nom de l'annonce -->
                        <h4 class="text-center text-primary">{{ $annonce->name }}</h4>
                        <!-- Description complète -->
                        <p>{{ $annonce->description }}</p>
                        <!-- Date -->
                        <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($annonce->date)->format('d/m/Y') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Action</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Pagination Section -->
<div class="pagination-wrapper d-flex justify-content-center mt-4">
    <div class="custom-pagination">
        {{ $annonces->links() }}
    </div>
</div>
<br>
<br>
<br>


    <!-- //home page service grids -->
<style>
    /* Centrer l'image et donner un effet visuel moderne */
.image-container {
    width: 100%;
    height: 300px; /* Vous pouvez ajuster la hauteur en fonction de vos besoins */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    position: relative;
}.text-dark{
    size: 20px;
}

.annonce-img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Permet à l'image de couvrir entièrement la zone de l'image sans déformer l'image */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px; /* Bord arrondi */
}

/* Effet au survol de l'image */
.box-wrap:hover .annonce-img {
    transform: scale(1.1); /* L'image grandit légèrement */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Ombre douce */
}






</style>
    <!-- content block -->
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
    <!-- //content block -->

    <!-- 3grids with bg-image section -->
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
    <!-- //3grids with bg-image section -->

@endsection
