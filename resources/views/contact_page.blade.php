@extends('layouts.general_layout')

@section('page_title', "Contacto")

@section('content')
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <!----- contact-grids ----->
            <div class="contact-grids">
                <div class="col-md-5">
                    <h3>Dirección</h3>
                    <div class="address">
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                            placerat.</p>
                        <p>1351 NW 32nd Ct,
                            <br>Miami, FL 33125</p>
                        <!--<p>Freephone : +1 800 559 6580</p>-->
                        <p>Teléfono : +1 (786) 635-8058</p>
                        <!--<p>FAX : +1 800 889 9898</p>-->
                        <p>E-mail : <a href="mailto:diegoflor@comcast.net">diegoflor@comcast.net</a></p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-map">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>-->
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.5357459729416!2d-80.25020808555051!3d25.7858937138933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b73dc4f73af1%3A0x98b16e86c8b112c4!2sIglesia+Bautists+Buenas+Nuevas!5e0!3m2!1ses!2sus!4v1507517766144" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.5357459729416!2d-80.25020808555051!3d25.7858937138933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b73dc4f73af1%3A0x98b16e86c8b112c4!2sIglesia+Bautists+Buenas+Nuevas!5e0!3m2!1ses!2sus!4v1507517766144"></iframe>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!----- contact-form ------>
                <div class="contact-form">
                    <form>
                        <div class="contact-form-row">
                            <div>
                                <span>Nombre :</span>
                                <input type="text" class="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Nombre';
                                            }">
                            </div>
                            <div>
                                <span>Email :</span>
                                <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Email';
                                            }">
                            </div>
                            <div>
                                <span>Asunto :</span>
                                <input type="text" class="text" value="Asunto" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                this.value = 'Asunto';
                                            }">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="contact-form-row2">
                            <span>Mensaje :</span>
                            <textarea> </textarea>
                        </div>
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Limpiar">
                    </form>
                </div>
                <!----- contact-form ------>
            </div>
            <!----- contact-grids ----->

        </div>
    </div>
    <!-- contact -->
@endsection