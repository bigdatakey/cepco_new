@extends('layouts.master')

@section('content')

<div class="main">
    @if(!$stocks->isEmpty())
    <div class="main-slider" id="js-main-slider">
        <div class="swiper-wrapper">
            @foreach($stocks as $stock)
            <div class="swiper-slide">
                <div class="main-slider__slide" style="background-image: url(/{{ $stock['image'] }})">
                    <div class="cont">
                        <div class="main-slider__main">
                            <h2 class="main-slider__title" style="white-space: pre-line;">{{ $stock['title'] }}</h2>
                            <p class="main-slider__txt" style="white-space: pre-line;">{{ $stock['body'] }}</p>
                            <a href="{{ $stock['link'] }}" class="btn btn--white main-slider__btn">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
    @endif

    <div class="main-serv">
        <div class="cont">
            <h2 class="blc-title">Авторизованный сервис по ремонту техники в Москве</h2>
            <div class="main-serv__txt">
                <p>За десятилетия своего существования мы накопили огромный опыт по ремонту техники. Нашу компетенцию и
                    принципы работы ценят не только наши клиенты, но и крупнейшие производители. СЕРСО — авторизованный
                    сервисный центр для большинства мировых брендов электроники.</p>
            </div>
       
            <div class="main-serv__slider-wrap">
                <div class="main-serv__slider" id="js-serv-slider">
                    <div class="swiper-wrapper">
                        @foreach($certificates as $key => $certificate)
                        <div class="swiper-slide">
                            <div class="main-serv__slide">
                                <div class="main-serv__slide-pic">
                                    <img src="/{{ $certificate['logo_image'] }}" alt="logo">
                                </div>
                                <div class="main-serv__slide-txt">
                                    <p style="white-spapce: pre-line;">
                                        {{ $certificate['main_description'] }}
                                    </p>
                                </div>
                                <div class="main-serv__slide-bar">
                                    @if($certificate->image != null)
                                    <a href="/documents?certid={{ $key }}">Подробнее...</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="swiper-slide">
                            <div class="main-serv__slide">
                                <div class="main-serv__slide-pic">
                                    <img src="/img/islider/bslide2.png" alt="logo">
                                </div>
                                <div class="main-serv__slide-txt">
                                    <p style="white-spapce: pre-line;">
                                        Segway — американская компания, производящая легендарные двухколесные сегвеи.
                                    </p>
                                </div>
                                <div class="main-serv__slide-bar">
                                    
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="main-serv__slide">
                                <div class="main-serv__slide-pic">
                                    <img src="/img/islider/bslide3.png" alt="Apple">
                                </div>
                                <div class="main-serv__slide-txt">
                                    <p style="white-spapce: pre-line;">
                                        G-mini — российский производитель китайских видеорегистраторов, экшн-камер и медиа-плееров.
                                    </p>
                                </div>
                                <div class="main-serv__slide-bar">
                                    
                                </div>
                            </div>
                        </div>

                            <div class="swiper-slide">
                                <div class="main-serv__slide">
                                    <div class="main-serv__slide-pic">
                                        <img src="/img/islider/HP_logo.png" alt="HP">
                                    </div>
                                    <div class="main-serv__slide-txt">
                                        <p style="white-spapce: pre-line;">
                                            HP — старейший мировой производитель вычислительной техники с американскими корнями. Выпускает всё, включая принтеры, сервера, программное обеспечение. Провайдер комплексных бизнес-решений.
                                        </p>
                                    </div>
                                    <div class="main-serv__slide-bar">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="main-serv__slide">
                                    <div class="main-serv__slide-pic">
                                        <img src="/img/islider/pro.png" alt="HP">
                                    </div>
                                    <div class="main-serv__slide-txt">
                                        <p style="white-spapce: pre-line;">
                                            PRO Intellect Technology является одним из наиболее весомых игроков в сфере производства устройств по обработке наличности. Миссия компании состоит в интеграции оборудования для ритейла и банковской сферы.
                                        </p>
                                    </div>
                                    <div class="main-serv__slide-bar">

                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
                <button class="btn swiper-button-next main-serv__slider-arrow  main-serv__slider-arrow--prev"
                    title="Назад">Назад</button>
                <button class="btn swiper-button-prev main-serv__slider-arrow  main-serv__slider-arrow--next"
                    title="Вперед">Вперед</button>
            </div>
            
        </div>
    </div>
    <div class="page diagramm">
        <div class="cont">
            <h2 class="blc-title">Отремонтировано</h2>
            <div class="diagramm__wrap" id="js-diagramm">
                <div class="diagramm__main">
                    <svg class="other" viewBox="0 0 319 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="-1" y="0" width="319"
                            height="319">
                            <circle cx="158.881" cy="159.5" r="158.882" fill="#C4C4C4" />
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M158.881 159.5L330 150L321 329H39.9995L158.881 159.5Z" fill="#E2AA69" />
                        </g>
                    </svg>
                    <svg class="camera" viewBox="0 0 319 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="319"
                            height="319">
                            <circle cx="159.881" cy="159.5" r="158.882" fill="#C4C4C4" />
                        </mask>
                        <g mask="url(#mask1)">
                            <path d="M159.881 159.5L321.999 51L343.999 88L354.999 130L159.881 159.5Z" fill="#CD8E8E" />
                        </g>
                    </svg>
                    <svg class="laptop" viewBox="0 0 319 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="319"
                            height="319">
                            <circle cx="159.881" cy="159.5" r="158.882" fill="#C4C4C4" />
                        </mask>
                        <g mask="url(#mask2)">
                            <path d="M-1.00073 46L159.881 159.5L33.9993 303L-12.6194 332L-1.00073 46Z" fill="#8ECD94" />
                        </g>
                    </svg>
                    <svg class="tv" viewBox="0 0 319 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask3" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="319"
                            height="319">
                            <circle cx="159.881" cy="159.5" r="158.882" fill="#C4C4C4" />
                        </mask>
                        <g mask="url(#mask3)">
                            <path d="M167.999 -13L332.381 -13L303.999 42L159.881 159.5L167.999 -13Z" fill="#A68ECD" />
                        </g>
                    </svg>
                    <svg class="phone" viewBox="0 0 319 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask4" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="0" width="317"
                            height="317">
                            <circle cx="159.5" cy="158.5" r="158.5" fill="#C4C4C4" />
                        </mask>
                        <g mask="url(#mask4)">
                            <path d="M-13.001 -13L151.999 -13L159.499 159.5L9.99902 27L-13.001 -13Z" fill="#8EA8CD" />
                        </g>
                    </svg>
                    <svg viewBox="0 0 319 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="159.499" cy="159.5" r="118.5" fill="white" />
                    </svg>
                    <svg viewBox="0 0 319 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="js-d-other" d="M158.881 159.5L330 150L321 329H39.9995L158.881 159.5Z"
                            fill="#E2AA69" />
                        <path class="js-d-camera" d="M159.881 159.5L321.999 51L343.999 88L354.999 130L159.881 159.5Z"
                            fill="#CD8E8E" />
                        <path class="js-d-laptop" d="M-1.00073 46L159.881 159.5L33.9993 303L-12.6194 332L-1.00073 46Z"
                            fill="#8ECD94" />
                        <path class="js-d-tv" d="M167.999 -13L332.381 -13L303.999 42L159.881 159.5L167.999 -13Z"
                            fill="#A68ECD" />
                        <path class="js-d-phone" d="M-13.001 -13L151.999 -13L159.499 159.5L9.99902 27L-13.001 -13Z"
                            fill="#8EA8CD" />
                        <circle cx="159.499" cy="159.5" r="118.5" fill="white" />
                    </svg>
                    <div class="diagramm__txt diagramm__txt--other js-d-other">
                        <b>450 000</b>
                        <span>других устройств</span>
                    </div>
                    <div class="diagramm__txt diagramm__txt--camera js-d-camera">
                        <b>50 000</b>
                        <span>фотоаппаратов</span>
                    </div>
                    <div class="diagramm__txt diagramm__txt--laptop js-d-laptop">
                        <b>300 000</b>
                        <span>ноутбуков</span>
                    </div>
                    <div class="diagramm__txt diagramm__txt--tv js-d-tv">
                        <b>100 000</b>
                        <span>телевизоров</span>
                    </div>
                    <div class="diagramm__txt diagramm__txt--phone js-d-phone">
                        <b>100 000</b>
                        <span>смартфонов</span>
                    </div>
                    <div class="diagramm__txt diagramm__txt--big">
                        <b>1 000 000</b>
                        <span>устройств</span>
                    </div>
                </div>
                <div class="diagramm__pic diagramm__pic--left diagramm__pic-laptop"><img
                        src="img/main-diagramm/laptop.png" alt=""></div>
                <div class="diagramm__pic diagramm__pic--left diagramm__pic-phone"><img
                        src="img/main-diagramm/phone.png" alt=""></div>
                <div class="diagramm__pic diagramm__pic--right diagramm__pic-tv"><img src="img/main-diagramm/tv.png"
                        alt=""></div>
                <div class="diagramm__pic diagramm__pic--right diagramm__pic-other"><img
                        src="img/main-diagramm/watch.png" alt=""></div>
                <div class="diagramm__pic diagramm__pic--right diagramm__pic-camera"><img
                        src="img/main-diagramm/camera.png" alt=""></div>
            </div>
        </div>
    </div>
    {{-- <div class="main-video">
        <div class="cont">
            <h2 class="blc-title">Посмотрите видео о нас</h2>
            <p class="main-video__txt">СЕРСО глазами президента <br>Международной Ассоции Сервисных Центров <br>Алексея
                Виолина</p>
            <div class="main-video__pic">
                <img class="main-video__pic-bg" src="img/main-video/phone.png" alt="">
                <div class="main-video__blind-wrap js-blind" data-href="https://www.youtube.com/embed/GlvKv0_BoQE">
                    <div class="main-video__blind">
                        <img src="img/main-video/blind.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="video-wrapper" id="js-video-vrapper">
        <div class="video-wrapper__overlay js-video-close"></div>
        <div class="video-wrapper__container">
            <button class="btn video-wrapper__close js-video-close" title="Закрыть">Закрыть</button>
            <div class="video-wrapper__blc" id="js-video-container">
                <iframe frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <div class="main-catalog">
            <div class="cont">
                <h2 class="blc-title">Мы ремонтируем</h2>
                <div class="catalog">
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image4.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Телефоны</div>
                            <div class="catalog__item-txt">
                                @foreach($link1 as $link)
                                <a href="/pages/{{ $link['slug'] }}">{{ $link['title'] }}</a>
                                @endforeach
                                <span>И другое</span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image5.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Ноутбуки</div>
                            <div class="catalog__item-txt">
                                    @foreach($link2 as $link)
                                    <a href="/pages/{{ $link['slug'] }}">{{ $link['title'] }}</a>
                                    @endforeach
                                    <span>И другое</span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image2.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Моноблоки</div>
                            <div class="catalog__item-txt">
                                    @foreach($link3 as $link)
                                    <a href="/pages/{{ $link['slug'] }}">{{ $link['title'] }}</a>
                                    @endforeach
                                    <span>И другое</span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image8.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Компьютеры</div>
                            <div class="catalog__item-txt">
                                    @foreach($link4 as $link)
                                    <a href="/pages/{{ $link['slug'] }}">{{ $link['title'] }}</a>
                                    @endforeach
                                    <span>И другое</span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image7.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Планшеты</div>
                            <div class="catalog__item-txt">
                                    @foreach($link5 as $link)
                                    <a href="/pages/{{ $link['slug'] }}">{{ $link['title'] }}</a>
                                    @endforeach
                                    <span>И другое</span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image3.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Фотоаппараты</div>
                            <div class="catalog__item-txt">
                                    @foreach($link6 as $link)
                                    <a href="/pages/{{ $link['slug'] }}">{{ $link['title'] }}</a>
                                    @endforeach
                                    <span>И другое</span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Видеокамеры</div>
                            <div class="catalog__item-txt">
                                    @foreach($link7 as $link)
                                    <a href="/pages/{{ $link['slug'] }}">{{ $link['title'] }}</a>
                                    @endforeach
                                    <span>И другое</span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image9.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Техника Apple</div>
                            <div class="catalog__item-txt">
                                    @foreach($link8 as $link)
                                    <a href="/pages/{{ $link['slug'] }}">{{ $link['title'] }}</a>
                                    @endforeach
                                    <span>И другое</span>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__item-pic"><img src="img/main-catalog/image6.png" alt=""></div>
                        <div class="catalog__item-main">
                            <div class="catalog__item-title">Другое</div>
                            <div class="catalog__item-txt">
                                <a href="#">Ремонт клавиатуры Asus</a>
                                <a href="#">Ремонт мышки HP</a>
                                <a href="#">Ремонт аудиотехники Sony</a>
                                <a href="#">Ремонт сервера DELL</a>
                                <span>И другое</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--<div class="main-calc">
        <div class="cont">
            <h2 class="blc-title">Рассчитать стоимость ремонта</h2>
            <maincalc></maincalc>
        </div>
    </div>-->


    <div class="main-orders">
        <div class="cont">
            <h2 class="blc-title">Закажите ремонт любым удобным вам способом</h2>
            <div class="main-orders__row">
                <a href="/order-page" class="btn btn--white main-orders__btn">Заказать онлайн</a>
                <button class="btn btn--white main-orders__btn js-order-btn" @click="openCallModal">Заказать через
                    звонок</button>
                <div class="contacts__messagers">
                    <div class="contacts__messagers-txt">Связаться через</div>
                    <ul class="contacts__messagers-list">
                        <li><a href="https://wa.me/74959673872" target="_blank"
                                class="contacts__messagers-link contacts__messagers-link--whatsapp"
                                title="WhatsApp">WhatsApp</a></li>
                        <li><a href="http://m.me/newcepco" target="_blank"
                                class="contacts__messagers-link contacts__messagers-link--facebook"
                                title="Facebook">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-article">
        <div class="cont">
            <article class="article">
                <h1>Старейший официальный сервисный центр в Москве</h1>
                <p>Компания СЕРСО была основана в 1992 году командой специалистов в области электроники и
                    программирования. Начав с ремонта телевизоров и видеомагнитофонов, мы выросли в крупнейший в стране
                    сервисный центр по ремонту вычислительной техники, которому доверяют ремонт премиальные компьютерные
                    бренды. Мы поддерживаем сеть наших сервисных субконтракторов в Российских регионах, заключив с ними
                    первые договора еще в 1996 году. С тех пор мы осуществляем их техническую и информационную
                    поддержку.</p>
                <p>За прошедшие с момента основания компании двадцать семь лет были заключены договора о сервисном
                    сотрудничестве с многими западными и восточными, а в последнее время и с отечественными
                    производителями. Их число растет с каждым годом, в результате чего мы способны отремонтировать
                    практически весь спектр консьюмерской электроники. Нашими партнерами являются также крупнейшие
                    торговые сети М-Видео, Эльдорадо, Ф-Центр, ДНС и другие, которые привозят к нам в ремонт
                    оборудование своих клиентов.</p>
                <p>Для удаленной поддержки наших клиентов мы пользуемся курьерскими службами DHL, UPS, Major Express,
                    СПСР, RPC, КСЭ которые доставляют к нам, неисправный аппарат и возвращают нашим клиентам починенный.
                    Для москвичей -минуя московские пробки, а остальным доставляя достойный сервис в самые медвежьи
                    углы.</p>
                <p>Мы освоили технологии компонентного ремонта, ремонтируя, а не заменяя целиком дорогостоящие узлы, а
                    также избегаем дорогостоящих видов рекламы для того, чтобы предложить своим клиентам реально низкие
                    цены, а не рекламные обещания. Мы можем отремонтировать любую неисправность в любом аппарате и
                    ограничением может быть лишь отсутствие в природе нужных запчастей. Двадцать семь лет работы под
                    пристальным контролем строгих контролеров доказывают наше соответствие самым строгим стандартам
                    отрасли. Так, что выбор достаточно очевиден.</p>
            </article>
        </div>
    </div>
</div>

@endsection
