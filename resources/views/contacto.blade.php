@extends("Layouts.layout")
@section('title', 'Crystal Pass | Contacto')
<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/Logo Crystal.ico">

<link rel="stylesheet" href="assets/css/style.css">
<x-c-navegacion></x-c-navegacion>

<x-c-nosotrosBaner>
    @section("subtitle", "Contacto")
    @section("name-baner", "Contacto")
</x-c-nosotrosBaner>

    <!-- Contact Us Section Start Here -->
    
    <div class="contact-section">
        <div class="contact-top padding-tb aside-bg padding-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <h4>Dudas?</h4>
                                <p class="mb-5">Comunicate con nosostros para poderte ayudarte. (quejas o sugerencias comunicarse enviando un 
                                    mensaje menete el formulario)
                                </p>
                                <form action="{{ route('enviarcorreo') }}" method="POST" id="commentform" class="comment-form">
                                    @csrf
                                    <input type="text" name="nombre" class="" placeholder="Nombre*">
                                    <input type="email" name="email" class="" placeholder="Email*">
                                    <input type="text" name="asunto" class="" placeholder="Asunto*">
                                    <textarea name="mensaje" id="role" cols="30" rows="9"
                                        placeholder="Mensaje"></textarea>
                                    <button type="submit" class="lab-btn">
                                        <span>Envianos un mensaje</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-title">
                                <h5>Obten mas Informacion</h5>
                                <p>Nuestra información de contacto Detalles y síguenos en las redes sociales.</p>
                            </div>
                            <div class="contact-info-content">
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/ubicacion.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Direccion de nuestra Oficina</span>
                                            <p>JR. Lima 433 - INT. N° 17 - HUANCAYO</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/celular.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Numero de contacto</span>
                                            <p>+51 996 671 246</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/correo.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Correo</span>
                                            <p>crystalpasscor@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/web.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Visitanos en</span>
                                            <p>www.CrystalPass.com.pe</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<x-c-ubicacion></x-c-ubicacion>
<x-c-creditos></x-c-creditos>