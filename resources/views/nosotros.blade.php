@extends("Layouts.layout")
@section('title', 'Crystal Pass | Nosotros')

<x-c-navegacion></x-c-navegacion>

<x-c-nosotrosBaner>
    @section("subtitle", "Mas sobre Nosotros")
    @section("name-baner", "Nosotros")
</x-c-nosotrosBaner>


<!-- Blog Section Start Here -->
<div class="blog-section blog-page padding-tb aside-bg">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center pb-15">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="post-item-2">
                            <div class="post-inner">
                                <div class="post-thumb rounded">
                                    <img src="assets/images/blog/nosotros.jpg" alt="blog">
                                </div>
                                <div class="post-content">
                                    <h3>Un poco de nosotros</h3>
                                    <p>Somos dos amigos de la carrera de Ingeneria de Sotfware de SENATI apasionados por la tecnología 
                                         y la innovación, decidimos tomar esta idea y convertirla en realidad. 
                                         Nuestra principal motivación es agilizar el proceso de compra de entradas 
                                         para los huéspedes de Casa del Artesano brindándoles una plataforma en 
                                         línea conveniente y eficiente.
                                    </p>
                                
                                    <P>Al observar los desafíos asociados con la adquisición de boletos en las instalaciones físicas, 
                                        vimos la oportunidad de brindar a los usuarios una alternativa digital que simplificara el 
                                        proceso y redujera el tiempo de espera.</P>

                                    <p>Con "Crystal Pass", no solo buscamos facilitar la 
                                        compra de entradas, sino también proporcionar una solución que permitiera un seguimiento en 
                                        tiempo real del inventario, generación de informes de ventas. En última instancia, 
                                        esperamos que esta plataforma mejore la experiencia del cliente y la eficiencia operativa 
                                        en la Casa del Artesano, contribuyendo a su éxito continuo y la satisfacción de los visitantes. 
                                        Con esto, hemos demostrado que la tecnología y la innovación pueden desempeñar un papel fundamental 
                                        en la resolución de problemas en el mundo real y mejorar la calidad de vida de las personas.</p>

                                    <div class="post-thumb mb-30 rounded">
                                        <img src="assets/images/blog/huancayo-1.jpg" alt="blog">
                                    </div>
                                   
                                    <div class="tags-area">
                                        <ul class="tags lab-ul justify-content-center">
                                            <li>
                                                <a href="/">Inicio</a>
                                            </li>
                                            <li>
                                                <a href="nosotros" class="active">Nosotros</a>
                                            </li>
                                            <li>
                                                <a href="contacto">Contacto</a>
                                            </li>

                                        </ul>
                                        <ul class="share lab-ul justify-content-center">
                                            <li>
                                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="authors rounded">
                            <div class="author-thumb">
                                <img src="assets/images/blog/Dart.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <h6>Brayan Solis</h6>
                                <p>Como estudiante de ingeniería de software con especialización en inteligencia 
                                    artificial, mi formación en SENATI me ha brindado una sólida base para 
                                    explorar el fascinante mundo de la tecnología y la IA. Estoy comprometido 
                                    con el aprendizaje continuo y el desarrollo de soluciones innovadoras que 
                                    puedan transformar industrias y mejorar la vida de las personas.</p>
                                <div class="social-media">
                                    <a href="https://www.instagram.com/mixayuzuka_/" class="instagram"><i class="icofont-instagram"></i></a>
                                    <a href="https://www.facebook.com/brayan.dlr10/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="authors rounded">
                            <div class="author-thumb">
                                <img src="assets/images/blog/Shyper.jpg" alt="author">
                            </div>
                            <div class="author-content">
                                <h6>Adriel Pilpa</h6>
                                <p>Al estudiar Ingeniería de Software con especialización en Inteligencia Artificial 
                                    en el SENATI, estoy constantemente aprendiendo a comprender y aplicar las últimas 
                                    tecnologías en el campo de la Inteligencia Artificial. Mi objetivo es convertirme 
                                    en un profesional altamente calificado y contribuir al desarrollo de la tecnología 
                                    creando soluciones inteligentes y efectivas.
                                </p>
                                <div class="social-media">
                                    <a href="https://www.instagram.com/adrl_shypr/" class="instagram"><i class="icofont-instagram"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=61552470986221" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                        </div>                        
                    </article>
                </div>

                
                <div class="col-lg-4 col-md-7 col-12">
                    <aside class="ps-lg-4">
                        

                        <div class="widget widget-category">
                            <div class="widget-header">
                                <h5>Categoria de eventos</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper list-bg-none">
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Música en Vivo</span><span>18</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Festivales de Música</span><span>20</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Teatro y Artes Escénicas</span><span>25</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Eventos Deportivos</span><span>30</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Ferias y Exposiciones</span><span>28</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Eventos Culturales</span><span>20</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-rounded-double-right"></i>Eventos Gastronómicos</span><span>26</span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5>Proximos eventos</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper">
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb rounded">
                                        <a href="blog-single.html"><img src="assets/images/product/karol.jpg"
                                                alt="product"></a>
                                    </div>
                                    <div class="post-content ps-3">
                                        <a href="blog-single.html">
                                            <h6>KAROL G - MAÑANA SERA BONITO</h6>
                                        </a>
                                        <p>04 February 2024</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb rounded">
                                        <a href="blog-single.html"><img src="assets/images/product/romeo.jpg"
                                                alt="product"></a>
                                    </div>
                                    <div class="post-content ps-3">
                                        <a href="blog-single.html">
                                            <h6>ROMEO SANTOS FORMULAR - LA GIRA </h6>
                                        </a>
                                        <p>04 February 2024</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb rounded">
                                        <a href="blog-single.html"><img src="assets/images/product/enjambre.jpg"
                                                alt="product"></a>
                                    </div>
                                    <div class="post-content ps-3">
                                        <a href="blog-single.html">
                                            <h6>ENJAMBRE - LIMA</h6>
                                        </a>
                                        <p>04 February 2024</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb rounded">
                                        <a href="blog-single.html"><img src="assets/images/product/cumbia.jpg"
                                                alt="product"></a>
                                    </div>
                                    <div class="post-content ps-3">
                                        <a href="blog-single.html">
                                            <h6>FESTIVALPURA CUMBA - LIMA</h6>
                                        </a>
                                        <p>04 February 2024</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget-instagram">
                            <div class="widget-header">
                                <h5>Instagram</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper d-flex flex-wrap justify-content-center">
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/01.jpg"
                                            alt="gallery-img"></a></li>
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/02.jpg"
                                            alt="gallery-img"></a></li>
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/03.jpg"
                                            alt="gallery-img"></a></li>
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/04.jpg"
                                            alt="gallery-img"></a></li>
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/05.jpg"
                                            alt="gallery-img"></a></li>
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/06.jpg"
                                            alt="gallery-img"></a></li>
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/07.jpg"
                                            alt="gallery-img"></a></li>
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/08.jpg"
                                            alt="gallery-img"></a></li>
                                <li><a class="rounded" href="#"><img src="assets/images/gallery/09.jpg"
                                            alt="gallery-img"></a></li>
                            </ul>
                        </div>

                        <div class="widget widget-archive">
                            <div class="widget-header">
                                <h5>Calendario de eventos</h5>
                            </div>
                            <ul class="lab-ul widget-wrapper list-bg-none">
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-ui-calendar"></i>Enero</span><span>2024</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-ui-calendar"></i>Febero</span><span>2024</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-ui-calendar"></i>Marzo</span><span>2024</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-ui-calendar"></i>Agosto</span><span>2024</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-ui-calendar"></i>Setiembre</span><span>2024</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-ui-calendar"></i>Octubre</span><span>2024</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-ui-calendar"></i>Noviembre</span><span>2024</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-ui-calendar"></i>Dcibre</span><span>2024</span></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>





<x-c-ubicacion></x-c-ubicacion>
<x-c-creditos></x-c-creditos>