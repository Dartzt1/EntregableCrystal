@extends("layouts.layout")
@section('title', 'Crystal Pass | Compra')

<link rel="shortcut icon" type="image/x-icon" href="http://localhost/EntregableCrystalPass\public\assets/images/x-icon/Logo Crystal.ico">

<link rel="stylesheet" href="http://localhost/EntregableCrystalPass\public\assets/css/all.min.css">
<link rel="stylesheet" href="http://localhost/EntregableCrystalPass\public\assets/css/animate.css">
    <link rel="stylesheet" href="http://localhost/EntregableCrystalPass\public\assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/EntregableCrystalPass\public\assets/css/jCirclize.min.css">
    <link rel="stylesheet" href="http://localhost/EntregableCrystalPass\public\assets/css/icofont.min.css">
    <link rel="stylesheet" href="http://localhost/EntregableCrystalPass\public\assets/css/lightcase.css">
    <link rel="stylesheet" href="http://localhost/EntregableCrystalPass\public\assets/css/swiper.min.css">
    <link rel="stylesheet" href="http://localhost/EntregableCrystalPass\public\assets\css\style.css">

    
<x-c-navegacion></x-c-navegacion>


@section('content')
<section class="shop-single padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 sticky-widget">
                <div class="product-details">
                    <div class="row align-items-center">
                        <div class="col-md-6 ">
                            <div class="product-thumb">
                                <div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(-2712px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="4" style="width: 442px; margin-right: 10px;">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <a href="{{ asset('storage/images/' . $ticket->img_path) }}" target="_blank" class="image-popup-link">
                                                        <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento" style="max-width: 50px;">
                                                    </a>
                                                </div>
                                            </div>
                                        <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 442px; margin-right: 10px;">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/cumbia.jpg" alt="shop-single">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="1" style="width: 442px; margin-right: 10px;">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/cumbia.jpg" alt="shop-single">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="2" style="width: 442px; margin-right: 10px;">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/cumbia.jpg" alt="shop-single">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="3" style="width: 442px; margin-right: 10px;">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/cumbia.jpg" alt="shop-single">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="4" style="width: 442px; margin-right: 10px;">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/cumbia.jpg" alt="shop-single">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" style="width: 500px; margin-right: 10px;">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <img src="assets/images/product/cumbia.jpg" alt="shop-single">
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="flex-wrap shop-navigation d-flex">
                                            <div class="shop-nav shop-slider-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="icofont-simple-left"></i>
                                            </div>
                                            <div class="shop-nav shop-slider-next" tabindex="0" role="button" aria-label="Next slide"><i class="icofont-simple-right"></i>
                                            </div>
                                        </div>

                                        
                                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                        </div>
                                            <div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                                    
                                        
                                                
                                                
                                            </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                    </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="post-content">
                                <h4>{{ $ticket->nomeven }}</h4>
                                <p class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    (3 review)
                                </p>
                                <h4 class="mb-3">
                                    Precio entradas:
                                </h4>

                                <h6 class="mb-3">
                                    Entrada Vip: {{$ticket->preciovip }}
                                </h6>
                                <h6 class="mb-3">
                                    Entrada Oro: {{$ticket->preciooro }}
                                </h6>
                                <h6 class="mb-3">
                                    Entrada Platino: {{$ticket->precioplatino }}
                                </h6>
                                
                                
                                <p>
                                    {{ $ticket->detalles }}
                                </p>

                                <h6 class="mb-4">
                                    Ubicacion:
                                     {{ $ticket->direccion }}
                                </h6>

                                <h5 class="mb-3">
                                    Fecha del Evento: {{ $ticket->fecha }}
                                </h5>
                                <form>
                                    <div class="select-product size">
                                        <select>
                                            <option>Selecione lugar</option>
                                            <option>Vip</option>
                                            <option>Oro</option>
                                            <option>Platino</option>
                                        </select>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    
                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        <div class="inc qtybutton">+</div>
                                    <div class="inc qtybutton">+</div></div>
                                    <div class="discount-code">
                                      
                                    </div>
                                    <button type="submit" class="lab-btn">Comprar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="review">
                    <div class="review-content review-content-show">
                        <div class="review-showing">
                            <ul class="agri-ul content">
                                <li>
                                    <div class="post-thumb">
                                        <img src="http://localhost/EntregableCrystalPass\public\assets/images/team/06.jpg" alt="shop">
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="posted-on">
                                                <a href="#">Britney Doe</a>
                                                <p>Posted on December 25, 2017 at 6:57 am</p>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact
                                                awesome theme seo psd porta monetize covalent leadership after
                                                without resource.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <img src="http://localhost/EntregableCrystalPass\public\assets/images/team/05.jpg" alt="shop">
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="posted-on">
                                                <a href="#">Jonathan Doe</a>
                                                <p>Posted on December 25, 2017 at 6:57 am</p>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact
                                                awesome theme seo psd porta monetize covalent leadership after
                                                without resource.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <img src="http://localhost/EntregableCrystalPass\public\assets/images/team/06.jpg" alt="shop">
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="posted-on">
                                                <a href="#">Mack Zucky</a>
                                                <p>Posted on December 25, 2017 at 6:57 am</p>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact
                                                awesome theme seo psd porta monetize covalent leadership after
                                                without resource.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <img src="http://localhost/EntregableCrystalPass\public\assets/images/team/05.jpg" alt="shop">
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta">
                                            <div class="posted-on">
                                                <a href="#">Jordi Albae</a>
                                                <p>Posted on December 25, 2017 at 6:57 am</p>
                                            </div>
                                            <div class="rating">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p>Enthusiast build innovativ initiatives before lonterm high-impact
                                                awesome theme seo psd porta monetize covalent leadership after
                                                without resource.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
     
    </div>
</section>



<x-c-ubicacion></x-c-ubicacion>
<x-c-creditos></x-c-creditos>

<script src="http://localhost/EntregableCrystalPass\public\assets/js/jquery.js"></script>
<script src="http://localhost/EntregableCrystalPass\public\assets/js/fontawesome.min.js"></script>
<script src="http://localhost/EntregableCrystalPass\public\assets/js/waypoints.min.js"></script>
<script src="http://localhost/EntregableCrystalPass\public\assets/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/EntregableCrystalPass\public\assets/js/swiper.min.js"></script>
<script src="http://localhost/EntregableCrystalPass\public\assets/js/circularProgressBar.min.js"></script>
<script src="http://localhost/EntregableCrystalPass\public\assets/js/isotope.pkgd.min.js"></script>
<script src="http://localhost/EntregableCrystalPass\public\assets/js/lightcase.js"></script>
<script src="http://localhost/EntregableCrystalPass\public\assets/js/functions.js"></script>

@stop