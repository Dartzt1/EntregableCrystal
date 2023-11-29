@extends("layouts.layout")

<x-c-navegacion></x-c-navegacion>

<section class="shop-single padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 sticky-widget">
                <div class="product-details">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-12">
                            <div class="product-thumb">
                                <div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(-2712px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 442px; margin-right: 10px;">
                                            <div class="shop-item">
                                                <div class="shop-thumb">
                                                    <a href="{{ asset('storage/images/' . $ticket->img_path) }}" target="_blank" class="image-popup-link">
                                                        <img src="{{ asset('storage/images/' . $ticket->img_path) }}" alt="Imagen del Evento" style="max-width: 100%;">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    

                                    <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 442px; margin-right: 10px;">
                                        <div class="shop-item">
                                            <div class="shop-thumb image-popup-link">
                                                <img src="https://scontent.flim18-2.fna.fbcdn.net/v/t39.30808-6/405690428_122122615070082366_8956049067597708816_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=3635dc&_nc_eui2=AeG6MP4vq-ty5Uzd7SilWq-2iYtkTf2fLJeJi2RN_Z8slzV8NGNNvI-9pWbCdbmkfj9BKlnHEqP1ssytQFih1-zE&_nc_ohc=H5sfAAyZe0QAX8llXbk&_nc_ht=scontent.flim18-2.fna&oh=00_AfB1c1o-fajetzP1thRIDw0LY0yPV-gVxHHrLpDWWt1UFQ&oe=656CB7E5" alt="shop-single" style="max-width: 100%;">>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                    

                                    <div class="flex-wrap shop-navigation d-flex">
                                        <div class="shop-nav shop-slider-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fas fa-arrow-left"></i>
                                        </div>
                                        <div class="shop-nav shop-slider-next" tabindex="0" role="button" aria-label="Next slide"><i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                <div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"></div>
                                
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="post-content">
                                <h4>{{ $ticket->nomeven }}</h4>

                            {{-- Stars --}}
                            <div>
                                <div class="rating" data-rating="3">
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                    <i class="star fas fa-star"></i>
                                </div>
                                
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            const stars = document.querySelectorAll('.rating .star');
                                            const ratingValue = parseInt(document.querySelector('.rating').getAttribute('data-rating'));
                                    
                                            stars.forEach((star, index) => {
                                                star.addEventListener('click', function () {
                                                    resetStars();
                                                    highlightStars(index + 1);
                                                });
                                    
                                                star.addEventListener('mouseover', function () {
                                                    resetStars();
                                                    highlightStars(index + 1);
                                                });
                                    
                                                star.addEventListener('mouseout', function () {
                                                    resetStars();
                                                    highlightStars(ratingValue);
                                                });
                                            });
                                    
                                            function resetStars() {
                                                stars.forEach(star => {
                                                    star.classList.remove('fas');
                                                    star.classList.add('far');
                                                });
                                            }
                                    
                                            function highlightStars(count) {
                                                for (let i = 0; i < count; i++) {
                                                    stars[i].classList.remove('far');
                                                    stars[i].classList.add('fas');
                                                }
                                            }
                                    
                                            highlightStars(ratingValue);
                                        });
                                    </script>
                                
                                    <style>
                                        .star {
                                            cursor: pointer;
                                            font-size: 20px;
                                            color: #ffd700; /* color amarillo para las estrellas */
                                        }
                                    
                                        .rating {
                                            display: flex;
                                            align-items: center;
                                        }
                                    
                                        .reviews {
                                            margin-left: 10px;
                                        }
                                    </style>
                            </div>
                                
                               
                            {{-- Precio y Tipo --}}
                            <div>
                                <h4 class="mb-3">
                                    Precio entradas: S/ <span id="precio-seleccionado">{{$ticket->preciovip}}</span>
                                    <span id="tipo-entrada-seleccionado">(Vip)</span>
                                </h4>
                            
                                <h6 id="vip-price" class="mb-3" data-precio="{{$ticket->preciovip}}" style="display: none;">
                                    Entrada Vip: S/ {{$ticket->preciovip}}
                                </h6>
                                <h6 id="oro-price" class="mb-3" data-precio="{{$ticket->preciooro}}" style="display: none;">
                                    Entrada Oro: S/ {{$ticket->preciooro}}
                                </h6>
                                <h6 id="platino-price" class="mb-3" data-precio="{{$ticket->precioplatino}}" style="display: none;">
                                    Entrada Platino: S/ {{$ticket->precioplatino}}
                                </h6>
                            
                                <div>
                                    <style>
                                        /* Estilos para el contenedor del selector y el campo de entrada */
                                        .selector-container {
                                            display: flex;
                                            justify-content: space-between;
                                            width: 100%;
                                            margin-bottom: 20px;
                                        }
                                    
                                        .selector {
                                            position: relative;
                                            width: 48%; /* Puedes ajustar el ancho según tus necesidades */
                                        }
                                    
                                        .selector select {
                                            width: 100%;
                                            padding: 10px;
                                            border: 1px solid #ccc;
                                            border-radius: 5px;
                                            appearance: none;
                                            -webkit-appearance: none;
                                            -moz-appearance: none;
                                            cursor: pointer;
                                        }
                                    
                                        .selector i {
                                            position: absolute;
                                            top: 50%;
                                            right: 10px;
                                            transform: translateY(-50%);
                                            pointer-events: none;
                                        }
                                    
                                        .cart-plus-minus {
                                            width: 48%; /* Puedes ajustar el ancho según tus necesidades */
                                            
                                            justify-content: space-between;
                                            align-items: center; /* Alinea los elementos verticalmente en el centro */
                                        }
                                    
                                        .cart-plus-minus .dec,
                                        .cart-plus-minus .inc {
                                            width: 48px; /* Puedes ajustar el ancho según tus necesidades */
                                            
                                            border: 1px solid #ccc;
                                            border-radius: 5px;
                                            text-align: center;
                                            cursor: pointer;
                                        }
                                    
                                        .cart-plus-minus .cart-plus-minus-box {
                                            width: calc(100% - 96px); /* Ajusta para dejar espacio suficiente para los botones */
                                            padding: 10px;
                                            border: 1px solid #ccc;
                                            border-radius: 5px;
                                            text-align: center;
                                        }
                                    </style>
                                    
                                    <div class="selector-container">
                                        <div class="selector">
                                            <select id="tipo-entrada" onchange="updatePrice()">
                                                <option value="vip">Vip</option>
                                                <option value="oro">Oro</option>
                                                <option value="platino">Platino</option>
                                            </select>
                                            <i style="color: black;" class="fas fa-arrow-down"></i>
                                        </div>
                                    
                                        <div class="cart-plus-minus">
                                            <div class="dec qtybutton" onclick="updateQuantity('decrement')">-</div>
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" id="quantity" readonly>
                                            <div class="inc qtybutton" onclick="updateQuantity('increment')">+</div>
                                        </div>
                                    </div>
                                    
                                
                            
                                <script>
                                    function updatePrice() {
                                        var tipoEntrada = document.getElementById("tipo-entrada").value;
                                        var precioSeleccionado = document.getElementById("precio-seleccionado");
                                        var tipoEntradaSeleccionado = document.getElementById("tipo-entrada-seleccionado");
                                        var precioElement = document.getElementById(tipoEntrada + "-price");
                                
                                        // Obtener el precio del atributo data-precio
                                        var precio = parseFloat(precioElement.getAttribute("data-precio"));
                                
                                        // Actualizar el texto en tiempo real
                                        precioSeleccionado.textContent = precio.toFixed(2);
                                        tipoEntradaSeleccionado.textContent = "(" + tipoEntrada.charAt(0).toUpperCase() + tipoEntrada.slice(1) + ")";
                                
                                        updateTotalPrice(); // Llamar a la función para actualizar el precio total
                                    }
                                
                                    function updateQuantity(action) {
                                        var quantityElement = document.getElementById("quantity");
                                        var currentQuantity = parseInt(quantityElement.value);
                                
                                        if (action === 'increment') {
                                            quantityElement.value = currentQuantity + 1;
                                        } else if (action === 'decrement' && currentQuantity > 1) {
                                            quantityElement.value = currentQuantity - 1;
                                        }
                                
                                        updateTotalPrice(); // Llamar a la función para actualizar el precio total
                                    }
                                
                                    function updateTotalPrice() {
                                        var tipoEntrada = document.getElementById("tipo-entrada").value;
                                        var precioElement = document.getElementById(tipoEntrada + "-price");
                                        var precio = parseFloat(precioElement.getAttribute("data-precio"));
                                        var quantity = parseInt(document.getElementById("quantity").value);
                                
                                        var totalPrice = precio * quantity;
                                
                                        // Actualizar el texto del precio total
                                        document.getElementById("precio-seleccionado").textContent = totalPrice.toFixed(2);
                                    }
                                </script>
                            </div>
                            

                            {{-- Direccion --}}
                            
                            <p style="font-size: 16px; line-height: 1.6; color: #333; margin-bottom: 20px;">
                                {{ $ticket->detalles }}
                            </p>
                                                
                            <h6 class="mb-4">
                                Ubicacion:
                                {{ $ticket->direccion }}
                            </h6>
                            
                            <h5 class="mb-3">
                                Fecha del Evento: {{ $ticket->fecha }}
                            </h5>
                            <div class="discount-code"></div>
                                    <a class="mt-3 btn btn-primary" href="{{ route('pagar', ['id' => $ticket->id])}}">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-c-ubicacion></x-c-ubicacion>
<x-c-creditos></x-c-creditos>
</section>