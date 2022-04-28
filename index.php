<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprenta SiMiSol</title>
    <link rel="stylesheet" href="../Tienda/css/estilos.css">
    <link rel="stylesheet" href="./c/styles.css?v=2">
    <link rel="icon" type="image/vnd.microsoft.icon" href="../Tienda/css/img/ico.ico" sizes="16x16 32x32">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- font Awasome-->
    <script src="https://kit.fontawesome.com/fb56d1a6d2.js" crossorigin="anonymous"></script>

</head>
<body>
    
    </div>
    <div class="contenedor">
        <!-- Contenido Principal -->
        <div class="container">
            <div class="img">
                <div class=""></div>
                <div class=""><img src="../css/img/logo.png" alt="" srcset=""></div>
                <div class=""></div>
                
            </div>
            <div class="row pt-2">
                <div class="col-md-4">
                    <div class="card">
                        <div class="precioCarrito" id="precioCarrito"></div>
                        <div class="card-body">
                            <form id="form-notes">
                                <div class="form-group">
                                <input type="number" id="paginas" placeholder="Cantidad de paginas del apunte" class="form-control"autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" id="nombreApunte" placeholder="Nombre del apunte (opcional)" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <div class="opc">
                                    <div class="cajas"><input type="radio" name="faz" id="faz" value="doble" checked></div>
                                    <div class="cajas">Doble faz</div>
                                    <div class="cajas"><input type="radio" name="faz" id="faz" value="simple" ></div>
                                    <div class="cajas">Simple faz</div>
                                    <div class="cajas"><input type="radio" name="color" id="color" value="bn" checked></div>
                                    <div class="cajas">bn</div>
                                    <div class="cajas"><input type="radio" name="color" id="color" value="color" ></div>
                                    <div class="cajas">color</div>
                                    <div class="cajas"><input type="radio" name="anillado" id="anillado" value="sinAnillado" checked></div>
                                    <div class="cajas">Sin Anillar</div>
                                    <div class="cajas"><input type="radio" name="anillado" id="anillado" value="anillado" ></div>
                                    <div class="cajas">Anillado</div>
                                    <div class="cajas"><input type="radio" name="dosxCarilla" id="dosxCarilla" value="2" ></div>
                                    <div class="cajas">2 Pags x Carilla</div>
                                    <div class="cajas"><input type="radio" name="dosxCarilla" id="dosxCarilla" value="1" checked></div>
                                    <div class="cajas">Normal</div>
                                </div>
                                <!-- <input type="text" id="fechaEntrega" placeholder="Numero del cliente" class="form-control"autocomplete="off"> -->
                            </div>
                            <button class="btn btn-primary btn-block boton" type="submit">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tabla" id="notas-muro">
                    <div class="apunte">Nombre apunte</div>
                    <div class="paginas">Pags</div>
                    <div class="precio">$</div>
                    <div class="borrar"></div>
                </div>
                <div class="acciones">
                    <div class="wsp"><a href="https://api.whatsapp.com/send?phone=543424416404&text=Hola%20estuve%20presupuestando%20mis%20apuntes%20y%20me%20gustar%C3%ADa%20imprimirlos" target="_blank"><i class="fab fa-whatsapp"></i> Enviar wsp</a></div>
                    <div class="imprimir"><a href="presupuesto.html" target="_blank"><i class="fas fa-print"></i> Imprimir presupuesto</a></div>
                </div>
            </div>
        </div>
    </div>    
</div>

    <div class="volverInicio">
        <a href="../">
            <i class="fas fa-arrow-circle-left"></i>
        </a>
    </div>
    <br><br>
    <div class="visitaTienda">
        <h1>Visita nuestra nueva tienda para estudiantes!</h1>
    </div>
        <?php
        $productos[0] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/1.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Caja de clips N5</div>
            <div class="description">
                <div class="text">Clips sujeta papeles x100 unidades de 39mm de largo.</div>
                <div class="price">$65</div>
            </div>
        </div>
    </div>';
        $productos[1] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/2.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Taco multicolor</div>
            <div class="description">
                <div class="text">Talonario de diversos colores x400 hojas de 9x9cm.</div>
                <div class="price">$200</div>
            </div>
        </div>
    </div>';
        $productos[2] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/3.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Resaltador pastel</div>
            <div class="description">
                <div class="text">Resaltadores color pastel marca Simball.</div>
                <div class="price">$65</div>
            </div>
        </div>
    </div>';
        $productos[3] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/3.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Set x6 Resaltadores pastel</div>
            <div class="description">
                <div class="text">Set x6 de colores pastel marca Simball.</div>
                <div class="price">$375</div>
            </div>
        </div>
    </div>';
        $productos[4] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/4.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Boli-mini</div>
            <div class="description">
                <div class="text">Bolígrafo miniatura, punta media 1mm.</div>
                <div class="price">$28</div>
            </div>
        </div>
    </div>';
        $productos[5] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/4.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Set x10 Boli-mini</div>
            <div class="description">
                <div class="text">Blister de 10 bolígrafos en miniatura.</div>
                <div class="price">$250</div>
            </div>
        </div>
    </div>';
        $productos[6] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/5.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Lapiceras BIC de colores</div>
            <div class="description">
                <div class="text">Lapiceras punta media 1.2mm.</div>
                <div class="price">$50</div>
            </div>
        </div>
    </div>';
        $productos[7] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/5.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Set x10 BIC de colores</div>
            <div class="description">
                <div class="text">s8 de punta media 1.2mm y 2 de punta gruesa 1.6mm.</div>
                <div class="price">$450</div>
            </div>
        </div>
    </div>';
        $productos[8] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/6.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Abrochadora</div>
            <div class="description">
                <div class="text">Set de abrochadora + juego de repuestos.</div>
                <div class="price">$200</div>
            </div>
        </div>
    </div>';
        $productos[9] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/8.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Notas adhesivas 100x75mm</div>
            <div class="description">
                <div class="text">x100 notas adhesivas 100x75mm.</div>
                <div class="price">$120</div>
            </div>
        </div>
    </div>';
        $productos[10] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/9.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Notas adhesivas 75x75mm</div>
            <div class="description">
                <div class="text">x100 notas adhesivas 75x75mm.</div>
                <div class="price">$100</div>
            </div>
        </div>
    </div>';
        $productos[11] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/10.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Notas adhesivas 50x75mm</div>
            <div class="description">
                <div class="text">x100 notas adhesivas 50x75mm.</div>
                <div class="price">$80</div>
            </div>
        </div>
    </div>';
        $productos[12] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/11.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Señaladores clásicos</div>
            <div class="description">
                <div class="text">x7 cintas señaladoras adhesivas.</div>
                <div class="price">$120</div>
            </div>
        </div>
    </div>';
        $productos[13] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/13.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Señaladores + regla</div>
            <div class="description">
                <div class="text">x8 cintas + regla incorporada.</div>
                <div class="price">$140</div>
            </div>
        </div>
    </div>';
        $productos[14] = '<div class="articulo">
        <div class="img"><img src="../Tienda/img/12.jpg" alt=""></div>
        <div class="caja">
            <div class="tittle">Señaladores punta flecha</div>
            <div class="description">
                <div class="text">x10 cintas sealadoras adhesivas.</div>
                <div class="price">$160</div>
            </div>
        </div>
    </div>';

    $aux = '';

    for($i = 0; $i < 6; $i++){
        $aux .= $productos[rand(0, 14)];
    }
    ?> 
    <div class="tienda">
        <?= $aux ?>
    </div>
    <div class="volverInicio irTienda">
        <a href="../Tienda/">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
<footer>
    <div class="derechos">
        © Imprenta Si Mi Sol - 2021       <br>
        <i class="fab fa-instagram"></i><a target="_blank" href="https://www.instagram.com/si_mi_sol">Instagram</a>    |
        <i class="fab fa-whatsapp"></i><a target="_blank" href="https://wa.me/5493424416404">Whatsapp</a>     |
        <i class="fas fa-exclamation-triangle"></i><a target="_blank" href="https://wa.me/5493424416404">Reportar un error</a>
    </div>
    <div class="creditos">Desarrollado por Jorge Emiliano Maldonado.</div>    
</footer>

<!-- Scripts -->
<script src="./c/script.js?v=4"></script>
</body>
</html>