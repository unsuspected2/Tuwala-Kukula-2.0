@extends('Visitantes.layouts.app')
@section('content')
    <main class="main">

        <!-- Seção Hero -->
        <section id="hero" class="hero section">
            <div class="hero-bg">
                <img src="assets/img/hero-bg-light.webp" alt="">
            </div>
            <div class="container text-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 data-aos="fade-up">Bem-vindo ao <span>Tuwala Kukula</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">Comece seu aprendizado connosco e prepare o palco para o
                        sucesso<br></p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('login') }}" class="btn-get-started">Começar</a>

                        <!--
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="glightbox btn-watch-video d-flex align-items-center"><i
                                        class="bi bi-play-circle"></i><span>Saiba Mais</span></a>
                                    -->

                        <a style="cursor: pointer" class="glightbox btn-watch-video d-flex align-items-center"><span>Saiba
                                Mais</span></a>
                    </div><br>
                    <img src="assets/img/1 (1).jpg" class="img-fluid hero-img" alt="" data-aos="zoom-out"
                        data-aos-delay="300">
                </div>
            </div>
        </section><!-- /Seção Hero -->

        <!-- Seção de Serviços em Destaque -->
        <section id="featured-services" class="featured-services section light-background">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="flex-shrink-0 icon"><i class="bi bi-briefcase"></i></div>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Alunos</a></h4>
                                <p class="description">Interaja com alunos que compartilham as mesmas disciplinas, dúvidas e
                                    dificuldades que você! </p>
                            </div>
                        </div>
                    </div><!-- Fim do item de serviço -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="flex-shrink-0 icon"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Professores</a></h4>
                                <p class="description">Fale com professores especializados em diversas áreas e aprenda com
                                    eles!</p>
                            </div>
                        </div>
                    </div><!-- Fim do item de serviço -->

                    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="flex-shrink-0 icon"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a href="#" class="stretched-link">Comunidades</a></h4>
                                <p class="description">Junte-se a comunidades educacionais e aprenda com diversas pessoas ao
                                    redor do mundo!</p>
                            </div>
                        </div>
                    </div><!-- Fim do item de serviço -->
                </div>
            </div>
        </section><!-- /Seção de Serviços em Destaque -->

        <!-- Seção Sobre -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p class="who-we-are">Quem Nós Somos</p>
                        <h3>Tuwala Kukula: Solte seu Potencial com Criatividade</h3>
                        <p class="fst-italic">
                            O Tuwala Kukula é uma plataforma dedicada para os alunos de ensino médio e para aqueles que
                            desejam ingressar nele. Aqui você encontra:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Escolas de ensino médio especializadas em diversas
                                    áreas.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Materiais didáticos e materias de apoio em formato
                                    digital.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Comunidades inteiras onde o foco é a partilha de
                                    informações relativas ao mundo académico .</span></li>
                        </ul>
                        <a href="#" class="read-more"><span>Saiba Mais </span><i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <!-- Primeira linha -->
                            <div class="col-lg-6">
                                <img src="{{ asset('site/363937550_681659684005029_553746719305288095_n.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('site/professores.jpg') }}" class="img-fluid" alt="">
                            </div>
                    
                            <!-- Segunda linha -->
                            <div class="col-lg-6">
                                <img src="{{ asset('site/286369400_1158502931666002_8668253778537648719_n.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('site/286595585_408987557810924_6464015949374315071_n.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section><br><!-- /Seção Sobre -->

        <!---
                <-- Seção de Clientes ->
                <section id="clients" class="clients section">
                    <div class="container" data-aos="fade-up">
                        <div class="row gy-4">
                            <div class="col-xl-2 col-md-3 col-6 client-logo">
                                <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                            </div><-- Fim do item de cliente ->

                            <div class="col-xl-2 col-md-3 col-6 client-logo">
                                <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                            </div><-- Fim do item de cliente ->

                            <div class="col-xl-2 col-md-3 col-6 client-logo">
                                <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                            </div><-- Fim do item de cliente ->

                            <div class="col-xl-2 col-md-3 col-6 client-logo">
                                <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                            </div><-- Fim do item de cliente ->

                            <div class="col-xl-2 col-md-3 col-6 client-logo">
                                <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                            </div><-- Fim do item de cliente ->

                            <div class="col-xl-2 col-md-3 col-6 client-logo">
                                <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                            </div><-- Fim do item de cliente ->
                        </div>
                    </div>
                </section>
                -->
        <!-- /Seção de Clientes -->

        <!-- Seção de Funcionalidades -->
        <section id="features" class="features section">
            <!-- Título da Seção -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Funcionalidades</h2>
                <p>Acompanhe as funcionalidades que a plataforma oferece. Saiba sobre: </p>
            </div><!-- Fim do Título da Seção -->

            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center">
                        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                    <i class="bi bi-binoculars"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Escolas</h4>
                                        <p>
                                            Descubra quais são as melhores escolas de ensino médio e escolha a ideal para
                                            si!
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                    <i class="bi bi-box-seam"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Máterias Didáticos</h4>
                                        <p>
                                            Esteja a par de conteúdos importantes para a evolução académica e profissional!
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                    <i class="bi bi-brightness-high"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">Experiência Conjunta</h4>
                                        <p>
                                            Embarque connosco neste vasto mar de conhecimento e evolução nunca antes visto e
                                            partilhe a sua experiência académica!
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- Fim da Navegação de Abas -->
                    </div>

                    <div class="col-lg-6">
                        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="tab-pane fade active show" id="features-tab-1">
                                <img src="{{ asset('site/363937550_681659684005029_553746719305288095_n.jpg') }}"
                                    alt="" class="img-fluid">
                            </div><!-- Fim do Conteúdo da Aba -->

                            <div class="tab-pane fade" id="features-tab-2">
                                <img src="{{ asset('site/globe-camera-near-notes-laptop.jpg') }}" alt=""
                                    class="img-fluid">
                            </div><!-- Fim do Conteúdo da Aba -->

                            <div class="tab-pane fade" id="features-tab-3">
                                <img src="{{ asset('/site/IMG_20230419_173610.jpg') }}" alt="" class="img-fluid">
                            </div><!-- Fim do Conteúdo da Aba -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Seção de Funcionalidades -->

        <!-- Seção de Detalhes das Funcionalidades -->
        <section id="features-details" class="features-details section">
            <div class="container">
                <div class="row gy-4 justify-content-between features-item">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('site/iPhone-14-Pro-437.9964599609375x890.989990234375.png') }}"
                            class="img-fluid" alt="" height="600" width="600">
                    </div>

                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Usando a tecnologia de maneira efetiva e dinámica</h3>
                            <p>
                                Imagine ter acesso a uma plataforma onde pode ter diversos contéudos didáticos comprovados
                                por profissionais e aprende-los de forma rápida e eficiente? Tudo isto está apenas à um
                                clique de distância!
                            </p>
                            <a href="#" class="btn more-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div><!-- Item de Funcionalidade -->

                <div class="row gy-4 justify-content-between features-item">
                    <div class="order-2 col-lg-5 d-flex align-items-center order-lg-1" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="content">
                            <h3>Use o seu tempo de maneira razoável</h3>
                            <p>
                                Além dos diversos contéudos didáticos que o ajudarão, também pode ter acesso a:
                            </p>
                            <ul>
                                <li><i class="flex-shrink-0 bi bi-easel"></i> Resumos simples e esquematizados.</li>
                                <li><i class="flex-shrink-0 bi bi-patch-check"></i> Exercícios para testar o seu
                                    aprendizado.</li>
                                <li><i class="flex-shrink-0 bi bi-brightness-high"></i>Simulações de exames práticos e
                                    teóricos .</li>
                            </ul>
                            <a href="#" class="btn more-btn">Saiba Mais</a>
                        </div>
                    </div>

                    <div class="order-1 col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/1 (4).jpg" class="img-fluid" alt="" height="800" width="800">
                    </div>
                </div><!-- Item de Funcionalidade -->
            </div>
        </section><!-- /Seção de Detalhes das Funcionalidades -->

        <!-- Seção de Serviços -->
        <section id="services" class="services section light-background"> <!-- Título da Seção -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Serviços</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- Fim do Título da Seção -->
            <div class="container">
                <div class="row g-5">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <i class="bi bi-activity icon"></i>
                            <div>
                                <h3>Nesciunt Mete</h3>
                                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                    iure perferendis tempore et consequatur.</p>
                                <a href="#" class="read-more stretched-link">Saiba Mais <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Fim do Item de Serviço -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <i class="bi bi-broadcast icon"></i>
                            <div>
                                <h3>Eosle Commodi</h3>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                                    hic non ut nesciunt dolorem.</p>
                                <a href="#" class="read-more stretched-link">Saiba Mais <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Fim do Item de Serviço -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <i class="bi bi-easel icon"></i>
                            <div>
                                <h3>Ledo Markt</h3>
                                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                    voluptas adipisci eos earum corrupti.</p>
                                <a href="#" class="read-more stretched-link">Saiba Mais <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Fim do Item de Serviço -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <i class="bi bi-bounding-box-circles icon"></i>
                            <div>
                                <h3>Asperiores Commodi</h3>
                                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                                    sit provident adipisci neque.</p>
                                <a href="#" class="read-more stretched-link">Saiba Mais <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Fim do Item de Serviço -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <i class="bi bi-calendar4-week icon"></i>
                            <div>
                                <h3>Velit Doloremque.</h3>
                                <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                                    animi at autem alias eius labore.</p>
                                <a href="#" class="read-more stretched-link">Saiba Mais <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Fim do Item de Serviço -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-pink position-relative">
                            <i class="bi bi-chat-square-text icon"></i>
                            <div>
                                <h3>Dolori Architecto</h3>
                                <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                    Corrupti recusandae ducimus enim.</p>
                                <a href="#" class="read-more stretched-link">Saiba Mais <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- Fim do Item de Serviço -->

                </div>
            </div>
        </section><!-- /Seção de Serviços -->




        <!-- Seção FAQ -->
        <section id="faq" class="faq section">

            <!-- Título da Seção -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Perguntas Frequentes</h2>
            </div><!-- Fim Título da Seção -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                        purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- Fim item FAQ-->

                            <div class="faq-item">
                                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- Fim item FAQ-->

                            <div class="faq-item">
                                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- Fim item FAQ-->

                            <div class="faq-item">
                                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- Fim item FAQ-->

                            <div class="faq-item">
                                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                                <div class="faq-content">
                                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- Fim item FAQ-->

                            <div class="faq-item">
                                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                                <div class="faq-content">
                                    <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in
                                        suscipit sequi. Distinctio ipsam dolore et.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- Fim item FAQ-->

                        </div>

                    </div><!-- Fim Coluna FAQ-->

                </div>

            </div>

        </section><!-- /Seção FAQ -->

        <!-- Seção Depoimentos -->
        <section id="testimonials" class="testimonials section light-background">

            <!-- Título da Seção -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Depoimentos</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- Fim Título da Seção -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                            {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 40
                                },
                                "1200": {
                                "slidesPerView": 3,
                                "spaceBetween": 1
                                }
                            }
                            }
                        </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                </p>
                                <div class="mt-auto profile">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Fundador</h4>
                                </div>
                            </div>
                        </div><!-- Fim item depoimento -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                </p>
                                <div class="mt-auto profile">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- Fim item depoimento -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                </p>
                                <div class="mt-auto profile">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Dona de Loja</h4>
                                </div>
                            </div>
                        </div><!-- Fim item depoimento -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                </p>
                                <div class="mt-auto profile">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div><!-- Fim item depoimento -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                </p>
                                <div class="mt-auto profile">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Empreendedor</h4>
                                </div>
                            </div>
                        </div><!-- Fim item depoimento -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Seção Depoimentos -->


        <!-- Seção de Contato -->
        <section id="contact" class="contact section">

            <!-- Título da Seção -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contato</h2>
                <p>Fale connosco e informe-nos do seu estado</p>
            </div><!-- Fim do Título da Seção -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Endereço</h3>
                            <p>Luanda, Angola</p>
                        </div>
                    </div><!-- Fim do Item de Informação -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Ligue para Nós</h3>
                            <p>+244 941 051 108, +244 949 214 333</p>
                        </div>
                    </div><!-- Fim do Item de Informação -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p>tuwalakukula02@gmail.com</p>
                        </div>
                    </div><!-- Fim do Item de Informação -->

                </div>

                <div class="mt-1 row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.6502630966875!2d13.264501374003927!3d-8.818888491234265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f18003d4bac3%3A0x2568aa7432e71445!2sInstituto%20de%20Telecomunica%C3%A7%C3%B5es!5e0!3m2!1spt-PT!2sao!4v1736287834945!5m2!1spt-PT!2sao"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>



                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Seu Nome"
                                        required="">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Seu Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Assunto"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                                </div>

                                <div class="text-center col-md-12">
                                    <div class="loading">Carregando</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>

                                    <button type="submit">Enviar Mensagem</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- Fim do Formulário de Contato -->

                </div>

            </div>

        </section><!-- /Seção de Contato -->

    </main>

    @include('Visitantes.footer.footer')
@endsection
@include('Visitantes.header.headerVisitantes')
