<?php
@include 'config.php';
session_start();
if(isset($_SESSION['usermail'])){
    $email=$_SESSION['usermail'];
}else{
    $email="no se ha iniciado sesión";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerveceria la onceva Hora</title>

    <!-- font alink  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css-->
    <link rel="stylesheet" href="css/style.css">
    <!-- custom mailPHP-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#about">Acerca</a>
        <a href="#menu">Menu</a>
        <a href="#products">Productos</a>
        <a href="#review">review</a>
        <a href="#contact">Contacto</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <a href="fas fa-user"><a href="login_form.php"><div class="fas fa-user" id="usr-btn"></div>
        <div class="fas fa-bars" id="menu-btn" ></div>
        <a href="logout.php"><p><span><?php echo $email; ?></span></p>

    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="haz una busqueda...">
        <label for="search-box" class="fas fa-search"></label>
    </div>



    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>Mentada</h3>
                <div class="price">$49.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>Saison</h3>
                <div class="price">$49.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>!Sorprendeme!</h3>
                <div class="price">$44.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-4.png" alt="">
            <div class="content">
                <h3>Six Pack Edition</h3>
                <div class="price">$299.99/-</div>
            </div>
        </div>
        <a href="#" class="btn"onclick="sendBuy()">!Comprar Ahora!</a>
        <script>
              function sendBuy() {
                         alert("!Disponible muy pronto :(!");
              }
            </script>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>VERANO DE AMOR    CON SAISON</h3>
        <p>Esta Saison de 9% de alcohol tiene un
            final seco y a pesar de eso, es muy fresca y llena de
            notas frutales.</p>
        <a href="#" class="btn">!obtén la tuya Ahora!</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>ACERCA</span> DE </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>¿Qué lo hace tan especial?</h3>
            <p>En este estilo predominan
                principalmente el carácter de la levadura, la alta
                atenuación y la efervescencia del gas.
                Deja que los aromas complejos y la sensación sedosa
                en boca refresquen tu día.</p>
            <p>Como cerveceros locales esperamos vayan a conocer
                nuestra propuesta de cerveza artesanal y que disfruten de lo que está hecho por manos de
                guanajuatenses con pasión.</p>
            <a href="#" class="btn">Saber mas</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> NUESTRO <span>MENU</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>Session IPA</h3>
            <div class="price">$49.99 <span>60.99</span></div>
            <a href="#" class="btn">añadir</a>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>Six Pack Edition</h3>
            <div class="price">$299.99 <span>349.99</span></div>
            <a href="#" class="btn">añadir</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>11va Mango</h3>
            <div class="price">$49.99 <span>60.99</span></div>
            <a href="#" class="btn">añadir</a>
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>Saison</h3>
            <div class="price">$49.99 <span>60.99</span></div>
            <a href="#" class="btn">añadir</a>
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>Edición año nuevo</h3>
            <div class="price">$49.99 <span>60.99</span></div>
            <a href="#" class="btn">añadir</a>
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>!Sorprendeme!</h3>
            <div class="price">$44.99 <span>60.99</span></div>
            <a href="#" class="btn">añadir</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> otros <span>productos</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-1.png" alt="">
            </div>
            <div class="content">
                <h3>!Mentada!</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$49.99 <span>$60.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-2.png" alt="">
            </div>
            <div class="content">
                <h3>Saison</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$49.99 <span>$60.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-3.png" alt="">
            </div>
            <div class="content">
                <h3>Mango Deluxe</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$49.99 <span>$60.99</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Muy ricas, jeje.</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>El Paquito</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>muy buenas x2</p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>Francisco Espinoza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>muy buenas x3</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>Daniel Zavala</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->



<section class="contact" id="contact">

    <h1 class="heading"> <span>mas</span> información </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7443.223683711132!2d-101.66229787825667!3d21.128035843778406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbefcf8a7da15%3A0x79cc540592d274bf!2sLa%20Candelaria%2C%20Le%C3%B3n%2C%20Guanajuato!5e0!3m2!1sen!2smx!4v1653080237199!5m2!1sen!2smx" allowfullscreen="" loading="lazy"></iframe>

        <form action="contact_info.php" method="post">
            <h3>!Informate!</h3>
            <?php
         if(isset($error)){
            foreach($error as $error){
             echo '<span class="error-msg">'.$error.'</span>';
            }
              }
                ?>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" name="name_contact" placeholder="nombre">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" name="usermail" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" name="phone_number" placeholder="numero">
            </div>
            <input type="submit" value="contactanos ahora" class="btn" onclick="sendClick()" name="submit" >
            <script>
              function sendClick() {
                         alert("!Pronto te contactaremos!");
              }
            </script>
  
         <!-- mail section starts  -->
        
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading">  <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Nuestro Proceso</a>
                <span>10 de mayo 2021</span>
                <p>!descubre el proceso de la cerveza perfecta!</p>
                <a href="#" class="btn">leer más</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-2.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">¿Como se sirve una cerveza?</a>
                <span>14 de Junio 2021</span>
                <p>Como algo tan sencillo, es muy importante</p>
                <a href="#" class="btn">leer más</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-3.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">¿Qué sabor elegir?</a>
                <span>10 de Abril 2022</span>
                <p>Aunque es recomendado probar todas, deberias empezar con estas recomendaciones!</p>
                <a href="#" class="btn">leer más</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/OnceavaHora/" target="_blank" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/laonceavahora/" target="_blank" class="fab fa-instagram"></a>
    </div>

    <div class="links">
        <a href="#">Inicio</a>
        <a href="#">Acerca</a>
        <a href="#">Menu</a>
        <a href="#">Productos</a>
        <a href="#">review</a>
        <a href="#">Contacto</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit"><span>Cerveceria la onceava hora®</span></div>

</section>

<!-- footer section ends -->







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>