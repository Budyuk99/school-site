<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <link type="image/svg+xml" href="/favicon.svg" rel="shortcut icon">

    <title>Главная страница</title>
</head>
<body>
    <?php require_once 'templates/parts/header.php'; ?>

    <section class="slider slider_height">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper_background"></div>
                    <img src="img/photo_2023-02-19_13-37-42.jpg" alt="neyrokorrekciya">
                    <div class="swiper__text-block">
                        <div class="swiper_text_1">
                            <span>ЗАПУСК РЕЧИ У НЕГОВОРЯЩИХ ДЕТЕЙ ОТ НУЛЯ ДО ФРАЗОВОЙ РЕЧИ</span>
                        </div>
                        <div class="swiper_text_2">
                            <span class="swiper_text_2_span">Как понять, что пора обращаться к специалисту?</span>
                        </div>
                        <div class="swiper_more">
                            <a href="zapusk-rechi.php#zapusk-rechi">Узнать</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper_background"></div>
                    <img src="img/photo.jpg" alt="photo">
                    <div class="swiper__text-block">
                        <div class="swiper_text_1">
                            <span>КУРС "Заикание STOP"</span>
                        </div>
                        <div class="swiper_text_2">
                            <span>
                                Ваш ребёнок заикается?<br>
                                Ему сложно выразить свои мысли и общаться со сверстниками?
                            </span>
                        </div>
                        <div class="swiper_more">
                            <a href="stop-zaikanie.php#stop-zaikanie">Подробнее</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper_background"></div>
                    <img src="img/photo_2022-10-20_15-.jpg" alt="photo">
                    <div class="swiper__text-block">
                        <div class="swiper_text_1">
                            <span>LAKELAND ROUTES</span>
                        </div>
                        <div class="swiper_text_2">
                            <span>Explore Helsinki and the Finnish lake on an unforgettable road trip alone or with your loved ones.</span>
                        </div>
                        <div class="swiper_more">
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>

    <?php require_once 'templates/parts/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>
