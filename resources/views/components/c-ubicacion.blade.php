<footer class="footer-section" >
    <div class="footer-top">
        <div class="container">
            <div class="row g-3 justify-content-center g-lg-0">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="http://localhost/EntregableCrystalPass\public\assets/images/footer/footer-top/celular.png" alt="Phone-icon">
                            </div>
                            <div class="lab-content">
                                <span>Celular: +51 996 671 246</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="http://localhost/EntregableCrystalPass\public\assets/images/footer/footer-top/correo.png" alt="email-icon">
                            </div>
                            <div class="lab-content">
                                <span>Correo: CrystalPass@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footer-top-item lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="http://localhost/EntregableCrystalPass\public\assets/images/footer/footer-top/ubicacion.png" alt="location-icon">
                            </div>
                            <div class="lab-content">
                                <span>Dirección: Jr. Lima 433 - Huancayo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle padding-tb">
        <div class="container">
            <div class="row shape-c">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="mb-5 footer-middle-item mb-lg-0">
                            <div class="fm-item-title">
                                <h5>Ubicacion</h5>
                            </div>
                            <div class="fm-item-content">
                                <p class="mb-30">Encuentranos en Jr. Lima 433 - Huancayo</p>

                                <div >
                                        <div id="map" style="height: 300px;" ></div>

                                        <script type="text/javascript" src="https://www.bing.com/api/maps/mapcontrol?key={{ env('BING_MAPS_API_KEY') }}&callback=initMap" async defer></script>

                                        <script>
                                            function initMap() {

                                                var myLatLng = new Microsoft.Maps.Location(-12.070195380835983, -75.21083882326128);
                                                var map = new Microsoft.Maps.Map(document.getElementById('map'), {
                                                    center: myLatLng,
                                                    zoom: 15
                                                });
                                                var pin = new Microsoft.Maps.Pushpin(myLatLng, {
                                                    title: 'Ubicación de Crystal Pass'
                                                });
                                                map.entities.push(pin);
                                            }
                                       </script>                        
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-middle-item-wrapper">
                        <div class="mb-5 footer-middle-item-3 mb-lg-0">
                            <div class="fm-item-title">
                                <h5>ESCRIBENOS</h5>
                            </div>
                            <div class="fm-item-content">
                                <p>Tienes una sugerencia o deseas dejar un mensaje?</p>
                                <form>
                                            <li> <a class="lab-btn" href="/contacto">Conmunicate</a> </li>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>