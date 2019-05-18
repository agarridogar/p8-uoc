            <div class="row">
                <div class="col-xs-12">

                    
                    <hr />

                    <footer class="text-center well">

                    <p> &copy; Suncoast Boat Booking. <?=date('Y')?>.
                    <?php
                        if(isset($_SESSION["nombre"])){
                            echo " Usuario: ".$_SESSION["nombre"]. " <a href='model/model_cerrarsesion.php'>Cerrar sesión</a>";
                        }else{
                            echo " Sesión no iniciada.";
                        }
                    ?>
                    </p>
                       
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-whatsapp"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>

                    </footer>                
                </div>    
            </div>
        </div>

        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
 
    </body>
</html>