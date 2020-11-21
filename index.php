<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saucero</title>
    <link rel="stylesheet" href="_cdn/styles/boot.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>

<!-- Modal products -->
<div class="row __modal">
    <span class="icon-times icon-notext __btn_close transition"></span>
    <div class="container">
        <div class="row __modal_content">
            <div class="__modal_content_cover">
                <img src="assets/img/pizza-product.png" alt="">
            </div>
            <div class="__modal_content_desc radius">
                <h2>Lorem ipsum dolor.</h2>
                <p class="__price">R$ 99,00</p>
                <div class="__modal_content_desc_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt doloremque earum
                        eum minus molestiae optio provident ullam voluptas voluptates. Aperiam maiores odio rerum sit
                        sunt voluptates! Et, vitae voluptatum.</p>
                    <div class="__modal_content_desc_text_control">
                        <input type="text" class="form-control radius" maxlength="3" value="1">
                        <a class="btn __btn_add_to_cart radius">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal products -->

<header class="__main_header">
    <div class="container">
        <div class="row __main_header_content __desktop">
            <div class="row __main_header_content_contact">
                <div class="icons">
                    <span class="icon-mobile icon-notext"></span>
                </div>
                <div class="contacts">
                    <span class="number">(11)9 4672-0947</span>
                    <span class="hours">9:00 - 17:00</span>
                </div>
            </div>

            <div class="__main_header_content_logo_menu">
                <img src="assets/img/logo.png" alt="Saucero" width="150"/>
                <nav class="nav_list">
                    <ul>
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Features</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div class="row __main_header_content_cart">
                <div class="price_items">
                    <span>R$ 0,00</span>
                    <a href="">0 itens - no carrinho</a>
                </div>
                <div class="cart">
                    <a class="icon-bag"><span class="rounded">0</span></a>
                </div>
            </div>
        </div>

        <button class="__btn_open_menu radius transition j_open_menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="__main_header_mobile">
            <div class="row __main_header_content_cart">
                <div class="cart">
                    <a class="icon-bag"><span class="rounded">0</span></a>
                </div>

                <div class="price_items">
                    <span>R$ 0,00</span>
                    <a href="">0 itens - no carrinho</a>
                </div>
            </div>

            <nav class="nav_list">
                <ul>
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>

            <div class="row __main_header_content_contact">
                <div class="icons">
                    <span class="icon-mobile icon-notext"></span>
                </div>
                <div class="contacts">
                    <span class="number">(11)9 4672-0947</span>
                    <span class="hours">9:00 - 17:00</span>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="__main_slide_show">
        <div class="container">
            <div class="row __main_slide_show_content active">
                <article class="__slide_show_content_title">
                    <h2>Vincent Pizza 1</h2>
                    <h3>making people happy</h3>

                    <footer class="__slide_show_content_title_footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, repellat!</p>
                        <a href="" class="btn radius transition btn_first">Book Now</a>
                        <a href="" class="btn btn_second radius transition">View Menu</a>
                    </footer>
                </article>
                <div class="__slide_show_content_cover">
                    <img src="assets/img/slider-pizza.png" alt="Imagem do banner">
                </div>
            </div>

            <div class="row __main_slide_show_content">
                <article class="__slide_show_content_title">
                    <h2>Vincent Pizza 2</h2>
                    <h3>making people happy</h3>

                    <footer class="__slide_show_content_title_footer">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, repellat!</p>
                        <a href="" class="btn radius transition btn_first">Book Now</a>
                        <a href="" class="btn btn_second btn-yellow radius transition">View Menu</a>
                    </footer>
                </article>
                <div class="__slide_show_content_cover">
                    <img src="assets/img/slider-pizza.png" alt="Imagem do banner">
                </div>
            </div>
        </div>
    </section>

    <section class="__introduction">
        <div class="container ">
            <div class="row __introduction_content">
                <article class="__introduction_content_article">
                    <img src="assets/img/icon_1.png" alt="Quality Foods">
                    <h2>Quality Foods</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nisi?</p>
                </article>
                <article class="__introduction_content_article">
                    <img src="assets/img/icon_2.png" alt="Quality Foods">
                    <h2>Quality Foods</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nisi?</p>
                </article>
                <article class="__introduction_content_article">
                    <img src="assets/img/icon_3.png" alt="Quality Foods">
                    <h2>Quality Foods</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, nisi?</p>
                </article>
            </div>
        </div>
    </section>

    <section class="__product_menu">
        <div class="container">
            <header class="__product_menu_headline">
                <h1>Hot Sales</h1>
            </header>

            <div class="row __product_menu_content active">
                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>
            </div>
        </div>
    </section>

    <section class="__product_menu __product_menu_second">
        <div class="container">
            <header class="__product_menu_headline">
                <h1>Discover our menu</h1>
            </header>
            <ul class="row __product_menu_list">
                <li><a href="" class="active">Burgers</a></li>
                <li><a href="">Desserts</a></li>
                <li><a href="">Drinks</a></li>
                <li><a href="">Pasta</a></li>
            </ul>

            <div class="row __product_menu_content active">
                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>

                <article class="__product_menu_content_article radius">
                    <a href="" class="__add_to_cart">
                        <img src="assets/img/pizza-product.png" alt="">
                    </a>
                    <h2><a href="">Lorem ipsum dolor.</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, iste.</p>
                    <p><span>R$ 20,00</span></p>
                </article>
            </div>
        </div>
    </section>

    <div class="__divider">
        <div class="container">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias aperiam architecto inventore
                nostrum voluptatem!</h3>
        </div>
    </div>

    <section class="__contact">
        <div class="container">
            <header class="__contact_headline">
                <h1>Contact us</h1>
            </header>

            <div class="__contact_form_content">
                <form action="" method="post" enctype="multipart/form-data" class="__main_form">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Seu nome" class="form-control radius">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" placeholder="Seu e-mail" class="form-control radius">
                    </div>

                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Seu telefone" class="form-control radius">
                    </div>

                    <div class="form-group">
                        <textarea name="message" cols="30" rows="10" class="form-control radius"></textarea>
                    </div>

                    <button type="submit" class="btn btn_submit radius transition">Enviar mensagem</button>
                </form>
            </div>
        </div>
    </section>
</main>

<footer class="__main_footer">
    <div class="container">
        <div class="row __main_footer_content">
            <div class="__company">
                <img src="assets/img/logo-rodape.png" alt="Saucero">
                <p>(11)9 4672-0947 - <span>09:00 - 17:00</span></p>
            </div>

            <div class="__menunav">
                <ul class="row __menunav_list __menunav_list_first">
                    <li><a href="">Home</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>

            <div class="__menunav">
                <ul class="row __menunav_list __menunav_list_social">
                    <li><a href="" class="icon-twitter"></a></li>
                    <li><a href="" class="icon-facebook"></a></li>
                    <li><a href="" class="icon-instagram"></a></li>
                </ul>
            </div>
        </div>

        <p class="__main_footer_copy">&copy; 2020 - Todos os direitos reservados</p>
    </div>
</footer>

<div class="__btn_up_content">
    <a href="" title="Subir para o topo" class="btn_up radius transition icon-chevron-up"></a>
</div>
<script src="_cdn/scripts/jquery.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>