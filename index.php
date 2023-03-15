<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script>
        /*! modernizr 3.6.0 (Custom Build) | MIT *
      * https://modernizr.com/download/?-webp-setclasses !*/
      !function(e,n,A){function o(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function t(e,n){return typeof e===n}function a(){var e,n,A,o,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(o=t(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=o:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=o),s.push((o?"":"no-")+l.join("-"))}}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var t=e.split("."),a=Modernizr[t[0]];if(2==t.length&&(a=a[t[1]]),"undefined"!=typeof a)return Modernizr;n="function"==typeof n?n():n,1==t.length?Modernizr[t[0]]=n:(!Modernizr[t[0]]||Modernizr[t[0]]instanceof Boolean||(Modernizr[t[0]]=new Boolean(Modernizr[t[0]])),Modernizr[t[0]][t[1]]=n),o([(n&&0!=n?"":"no-")+t.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=t(e,"undefined")||t(e.call,"undefined")?function(e,n){return n in e&&t(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),a(),o(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);
    </script>
    <title>KUGOO</title>
  </head>
  <body>
    <header class="header">
      <div class="header-navbar">
          <div class="header-navbar-top">
            <div class="container">
              <div class="navbar-top-wrapper">
                <ul class="navbar-list">
                <li class="navbar-item">
                  <a href="#" class="navbar-link">Сервис</a>
                </li>
                <li class="navbar-item">
                  <a href="#" class="navbar-link">Сотрудничество</a>
                </li>
                <li class="navbar-item">
                <a href="#" class="navbar-link">Заказать звонок</a>
                </li>
                <li class="navbar-item navbar-item-social">
                  <a href="#" class="navbar-link-social">
                    <svg class="social-icon" width="12" height="12">
                      <use href="img/sprite.svg#viber"></use>
                    </svg>
                  </a>
                  <a href="#" class="navbar-link-social">
                    <svg class="social-icon" width="12" height="12">
                      <use href="img/sprite.svg#whatsapp"></use>
                    </svg>
                  </a>
                  <a href="#" class="navbar-link-social">
                    <svg class="social-icon" width="12" height="12">
                      <use href="img/sprite.svg#telegram"></use>
                    </svg>
                  </a>
                </li>
                </ul>
                <div class="header-phone">
                  <a href="tel:+78005055461" class="header-phone-link">+7 (800) 505-54-61</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /.navbar-top -->
          <hr class="header-seporator" />
          <div class="navbar-bottom">
            <div class="container">
              <div class="navbar-bottom-wrapper">
                <a href="./" class="logo-link">
                  <svg class="social-icon" width="116" height="43">
                    <use href="img/sprite.svg#logo"></use>
                  </svg>
                </a>
                <button class="button navbar-button">
                  <div class="navbar-btn">
                      <div class="navbar-btn-line"></div>
                      <div class="navbar-btn-line"></div>
                      <div class="navbar-btn-line"></div>
                  </div>
                  Каталог
                </button>
                <div class="search">
                  <input class="search-line" placeholder="Искать самокат KUGO">
                  <button type="submit" class="search-icon-btn">
                    <svg class="search-icon" width="16" height="16">
                      <use href="img/sprite.svg#lupe"></use>
                    </svg>
                  </button>
                </div>
                <div class="navbar-bottom-icons">
                  <div class="navbar-icons">
                    <a href="#" class="icon-link">
                      <svg class="social-icon" width="20" height="20">
                        <use href="img/sprite.svg#balance"></use>
                      </svg>
                    </a>
                    <a href="#" class="icon-link">
                      <svg class="social-icon" width="20" height="20">
                        <use href="img/sprite.svg#heart"></use>
                      </svg>
                     </a> 
                    <a href="#" class="icon-link">
                      <svg class="social-icon" width="20" height="20">
                        <use href="img/sprite.svg#pannier"></use>
                      </svg>
                      <p class="icon-text">Корзина</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.navbar-bottom -->
        </div>
        <!-- /.header-navbar -->
    </header>
  <section class="section section-image">
      <div class="container-image">
          <div class="section-image-wrapper">
            <div class="container">
            <div class="section-image-content">
              <div class="section-image-location">
                  <svg class="location-icon" width="15" height="15">
                    <use href="img/sprite.svg#location"></use>
                  </svg>
                  <p class="location-text">Восточно-Кругликовская улица, 86 Вт - Сб 10:00 - 20:00</p>
              </div>
                <h3 class="section-image-title">Запишитесь на бесплатный тест-драйв электросамокатов</h3>
                <h4 class="section-image-text">в Москве без ограничения по времени</h4>
                <div class="section-image-box">
                  <div class="section-image-item">
                    <div class="section-image-item-icon">
                      <svg class="section-image-icon" width="16" height="16">
                        <use href="img/sprite.svg#scooter"></use>
                      </svg>
                    </div>
                    <div class="section-image-item-text">Поймете, какая модель вам подходит</div>
                  </div>
                  <div class="section-image-item">
                    <div class="section-image-item-icon">
                      <svg class="section-image-icon" width="16" height="16">
                        <use href="img/sprite.svg#energy"></use>
                      </svg>
                    </div>
                    <div class="section-image-item-text">Проверите лучшие самокаты в деле</div>
                  </div>
                </div>
                <button class="image-button">Записаться</button>
              </div>
            </div>
          </div>
      </div>
  </section>

  <section class="section section-model">
    <div class="container-image">
      <div class="section-model-wrapper">
        <div class="section-model-inner">
            <div class="section-model-content">
            <h3 class="title section-model-title">
              Определите максимально подходящую вам модель <br> не теоретически, а на практике
            </h3>
            <p class="section-model-text">Тест-драйв поможет:</p>
            <ul class="section-model-list">
              <li class="section-model-item">
                <svg class="model-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                Понять подходит ли вам конкретная модель;
              </li>
              <li class="section-model-item">
                <svg class="model-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                Испытать самокат в «реальной жизни»;
              </li>
              <li class="section-model-item">
                <svg class="model-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                Оценить удобство хранения и эксплуатации;
              </li>
              <li class="section-model-item">
                <svg class="model-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                Узнать реальные характеристики и возможности модели.
              </li>
            </ul>
          </div>
        </div>
        <picture>
          <source type="image/webp" srcset="img/scooters.webp">
          <source type="image/jpeg" srcset="img/scooters.png">
          <img src="img/scooters.png" class="section-model-image" width="515" height="422">
        </picture>
      </div>
    </div>
  </section>

  <section class="section section-education">
    <div class="container-image">
      <div class="section-education-wrapper">
        <picture>
          <source type="image/webp" srcset="img/girl.webp">
          <source type="image/jpeg" srcset="img/girl.png">
          <img src="img/girl.png" class="section-education-image" width="515" height="463">
        </picture>
        <div class="section-education-inner">
            <div class="section-education-content">
            <h3 class="title section-education-title">
              Научим правильной <br> и безопасной езде в городе вас или вашего ребенка
            </h3>
            <p class="section-education-text">На обучении специалист расскажет:</p>
            <ul class="section-education-list">
              <li class="section-education-item">
                <svg class="education-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                Как подготовить самокат к поездке;
              </li>
              <li class="section-education-item">
                <svg class="education-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                Как «завести» самокат;
              </li>
              <li class="section-education-item">
                <svg class="education-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                Как вести себя во время поездки и обезопасить себя и окружающих;
              </li>
              <li class="section-education-item">
                <svg class="education-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                  Как складывать и раскладывать электросамокат;
              </li>
              <li class="section-education-item">
                <svg class="education-icon" width="22" height="22">
                  <use href="img/sprite.svg#ok"></use>
                </svg>
                  Как ухаживать за своим девайсом.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-test">
    <div class="container">
      <div class="section-test-wrapper">
        <h3 class="title test-title">
          Сейчас для тест-драйва и обучения <br> доступны следующие модели
        </h3>

        <div class="test-cards-wrapper">
          <div class="test-card">
            <div class="test-card-top">
                <picture>
                  <source type="image/webp" srcset="img/model.webp">
                  <source type="image/jpeg" srcset="img/model.png">
                  <img src="img/model.png" class="card-image" width="242" height="182">
                </picture>
                <div class="card-badge card-badge-red">ХИТ</div>
                <div class="card-top-icon">
                  <svg class="card-icon" width="20" height="20">
                    <use href="img/sprite.svg#balance"></use>
                  </svg>
                </div>
            </div>
            <div class="test-card-bottom">
                <p class="card-bottom-text">Kugoo Kirin M4</p>
                <ul class="card-bottom-list">
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#battery"></use>
                    </svg>
                    2000 mAh
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#speed"></use>
                    </svg>
                    60 км/ч
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#energy-grey"></use>
                    </svg>
                    1,2 л.с.
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#watch"></use>
                    </svg>
                    5 часов
                  </li>
                </ul>
                <div class="card-bottom-buy">
                  <div class="card-bottom-price">
                      <h6 class="price-title">39 900 ₽</h6>
                      <h5 class="price-title-sale">29 900 ₽</h5>
                  </div>
                  <div class="card-bottom-icon">
                    <div class="bottom-icon-box">
                      <svg class="icon-card" width="20" height="20">
                      <use href="img/sprite.svg#pannier"></use>
                    </svg>
                    </div>
                    <div class="bottom-icon-box">
                      <svg class="icon-card" width="20" height="20">
                      <use href="img/sprite.svg#heart2"></use>
                    </svg>
                    </div>
                  </div>
                </div>
                <button class="card-button">Записаться на тест-драйв</button>
            </div>
          </div>
          <div class="test-card">
            <div class="test-card-top">
                <picture>
                  <source type="image/webp" srcset="img/model.webp">
                  <source type="image/jpeg" srcset="img/model.png">
                  <img src="img/model.png" class="card-image" width="242" height="182">
                </picture>
                <div class="card-badge card-badge-green">Новинка</div>
                <div class="card-top-icon">
                  <svg class="card-icon" width="20" height="20">
                    <use href="img/sprite.svg#balance"></use>
                  </svg>
                </div>
            </div>
            <div class="test-card-bottom">
                <p class="card-bottom-text">Kugoo Kirin M4</p>
                <ul class="card-bottom-list">
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#battery"></use>
                    </svg>
                    2000 mAh
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#speed"></use>
                    </svg>
                    60 км/ч
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#energy-grey"></use>
                    </svg>
                    1,2 л.с.
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#watch"></use>
                    </svg>
                    5 часов
                  </li>
                </ul>
                <div class="card-bottom-buy">
                  <div class="card-bottom-price">
                      <h6 class="price-title">39 900 ₽</h6>
                      <h5 class="price-title-sale">29 900 ₽</h5>
                  </div>
                  <div class="card-bottom-icon">
                    <div class="bottom-icon-box">
                      <svg class="icon-card" width="20" height="20">
                        <use href="img/sprite.svg#pannier"></use>
                      </svg>
                    </div>
                    <div class="bottom-icon-box">
                      <svg class="icon-card" width="20" height="20">
                        <use href="img/sprite.svg#heart2"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <button class="card-button">Записаться на тест-драйв</button>
            </div>
          </div>
          <div class="test-card">
            <div class="test-card-top">
                <picture>
                  <source type="image/webp" srcset="img/model.webp">
                  <source type="image/jpeg" srcset="img/model.png">
                  <img src="img/model.png" class="card-image" width="242" height="182">
                </picture>
                <div class="card-badge card-badge-red">ХИТ</div>
                <div class="card-top-icon">
                  <svg class="card-icon" width="20" height="20">
                    <use href="img/sprite.svg#balance"></use>
                  </svg>
                </div>
            </div>
            <div class="test-card-bottom">
                <p class="card-bottom-text">Kugoo Kirin M4</p>
                <ul class="card-bottom-list">
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#battery"></use>
                    </svg>
                    2000 mAh
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#speed"></use>
                    </svg>
                    60 км/ч
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#energy-grey"></use>
                    </svg>
                    1,2 л.с.
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#watch"></use>
                    </svg>
                    5 часов
                  </li>
                </ul>
                <div class="card-bottom-buy">
                  <div class="card-bottom-price">
                      <h6 class="price-title">39 900 ₽</h6>
                      <h5 class="price-title-sale">29 900 ₽</h5>
                  </div>
                  <div class="card-bottom-icon">
                    <div class="bottom-icon-box">
                      <svg class="icon-card" width="20" height="20">
                        <use href="img/sprite.svg#pannier"></use>
                      </svg>
                    </div>
                    <div class="bottom-icon-box">
                      <svg class="icon-card" width="20" height="20">
                        <use href="img/sprite.svg#heart2"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <button class="card-button">Записаться на тест-драйв</button>
            </div>
          </div>
          <div class="test-card">
            <div class="test-card-top">
                <picture>
                  <source type="image/webp" srcset="img/model.webp">
                  <source type="image/jpeg" srcset="img/model.png">
                  <img src="img/model.png" class="card-image" width="242" height="182">
                </picture>
                <div class="card-badge card-badge-green">Новинка</div>
                <div class="card-top-icon">
                  <svg class="card-icon" width="20" height="20">
                    <use href="img/sprite.svg#balance"></use>
                  </svg>
                </div>
            </div>
            <div class="test-card-bottom">
                <p class="card-bottom-text">Kugoo Kirin M4</p>
                <ul class="card-bottom-list">
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#battery"></use>
                    </svg>
                    2000 mAh
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#speed"></use>
                    </svg>
                    60 км/ч
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#energy-grey"></use>
                    </svg>
                    1,2 л.с.
                  </li>
                  <li class="card-bottom-item">
                    <svg class="card-icon" width="18" height="18">
                      <use href="img/sprite.svg#watch"></use>
                    </svg>
                    5 часов
                  </li>
                </ul>
                <div class="card-bottom-buy">
                  <div class="card-bottom-price">
                      <h6 class="price-title">39 900 ₽</h6>
                      <h5 class="price-title-sale">29 900 ₽</h5>
                  </div>
                  <div class="card-bottom-icon">
                    <div class="bottom-icon-box">
                      <svg class="icon-card" width="20" height="20">
                        <use href="img/sprite.svg#pannier"></use>
                      </svg>
                    </div>
                    <div class="bottom-icon-box">
                      <svg class="icon-card" width="20" height="20">
                        <use href="img/sprite.svg#heart2"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <button class="card-button">Записаться на тест-драйв</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section section-feedback">
    <div class="container-image section-feedback-bg">
        <div class="container">
          <div class="section-feedback-wrapper container">
            <form action="handler.php" method="POST" class="feedback-form">
              <div class="section-feedback-inner">
                <h3 class="title feedback-title">Нет нужной модели, которую хотите протестировать?</h3>
                <p class="text feedback-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
                <div class="input-group-wrapper">
                  <div class="input-group">
                    <input id="user-phone" type="tel" name="userphone" class="input input-phone phone-mask" placeholder="+7 (___) __ - __ - __" minlength="10" required>
                  </div>
                  <button type="submit" class="button feedback-form-button">Оставить заявку на тест-драйв</button>
                </div>
                <div class="notify">
                  <svg class="notify-icon" width="16" height="16">
                    <use href="img/sprite.svg#checkbox"></use>
                  </svg>
                  <p class="notify-text">
                    Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и политикой конфиденциальности
                  </p>
                </div>
              </div>
            </form>
            <picture>
              <source type="image/webp" srcset="img/feedback-girl.webp">
              <source type="image/jpeg" srcset="img/feedback-girl.png">
              <img src="img/feedback-girl.png" class="feedback-image" width="410">
            </picture>
          </div>
        </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-top-wrapper">
          <h3 class="title footer-title">Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты</h3>
          <div class="input-group-wrapper">
            <div class="input-group">
              <input id="user-email" type="email" name="usermail" class="input input-email" placeholder="Введите Ваш email" minlength="10" required>
            </div>
            <button type="submit" class="button footer-form-button">Подписаться</button>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="footer-bottom-inner">
          <div class="footer-menu-wrapper">
              <h2 class="footer-menu-title-bottom">
                Каталог товаров
              </h2>
              <ul class="footer-menu-list">
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Электросамокаты</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Электроскутеры</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Электровелосипеды</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Электровелосипеды</a>
                </li>
              </ul>
          </div>
          <div class="footer-menu-wrapper">
              <h2 class="footer-menu-title-bottom">
                Покупателям
              </h2>
              <ul class="footer-menu-list footer-menu-column-2">
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Сервисный центр</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Доставка и оплата</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Рассрочка</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Тест-драйв</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Блог</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Сотрудничество</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Контакты</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-link">Акции</a>
                </li>
              </ul>
          </div>
          <div class="footer-info-wrapper">
            <div class="footer-info-top">
              <h3 class="footer-info-title">Контакты</h3>
              
            </div>
              <div class="footer-info-inner">
                <div class="footer-info">
                  <p class="footer-text">Call-центр</p>
                  <a href="Tel:+78005055461" class="footer-phone">+7 (800) 505-54-61</a>
                  <p class="footer-text footer-text-visit">Пн-Вс 10:00 - 20:00</p>
                </div>
                <div class="footer-info">
                  <p class="footer-text">Сервисный центр</p>
                  <a href="Tel:+74993507692" class="footer-phone">+7 (499) 350-76-92</a>
                  <p class="footer-text footer-text-visit">Пн-Вс 10:00 - 20:00</p>
                </div>
              </div>
          </div>
          <div class="footer-bottom-link">
            <a href="#" class="footer-info-link">Заказать звонок</a>
          </div>
        </div>
        <hr class="footer-seporator">
        <div class="footer-bottom-application">
          <div class="apps-left">
            <a href="./" class="logo-link logo-link-footer">
              <svg class="social-icon" width="116" height="43">
                <use href="img/sprite.svg#logo"></use>
              </svg>
            </a>
            <a class="apps-google">
              <picture>
                <source type="image/webp" srcset="img/google.webp">
                <source type="image/jpeg" srcset="img/google.png">
                <img src="img/google.png" class="apps-image" width="151" height="45">
              </picture>
            </a>
            <a class="apps-google">
              <picture>
                <source type="image/webp" srcset="img/apple.webp">
                <source type="image/jpeg" srcset="img/apple.png">
                <img src="img/apple.png" class="apps-image" width="135" height="45">
              </picture>
            </a>
          </div>
          <div class="apps-right">
                <div class="box box-vk">
                  <svg class="apps-icon" width="20" height="20">
                    <use href="img/sprite.svg#vk"></use>
                  </svg>
                  <div class="box-content">
                    <h6 class="box-title">Вконтакте</h6>
                    <p class="box-text">3 300</p>
                  </div>
                </div>
                <div class="box box-youtube">
                  <svg class="apps-icon" width="20" height="20">
                    <use href="img/sprite.svg#yt"></use>
                  </svg>
                  <div class="box-content">
                    <h6 class="box-title">YouTube</h6>
                    <p class="box-text">3 603</p>
                  </div>
                </div>
                <div class="box box-telegram">
                  <svg class="apps-icon" width="20" height="20">
                    <use href="img/sprite.svg#tg"></use>
                  </svg>
                  <div class="box-content">
                    <h6 class="box-title">Telegram</h6>
                    <p class="box-text">432</p>
                  </div>
                </div>
          </div>
        </div>
        <hr class="footer-seporator">
        <div class="footer-wrapper">
          <div class="footer-legal">
            <a href="#" class="props-link">Реквизиты</a>
            <a href="#" class="footer-policy">
              Политика конфиденциальности
            </a>
          </div>
          <div class="footer-content-right">
            <div class="pay-sistem">
                <div class="pay-sistem-card">
                  <svg class="pay-icon" width="26" height="11">
                    <use href="img/sprite.svg#g-pay"></use>
                  </svg>
                </div>
                <div class="pay-sistem-card">
                  <svg class="pay-icon" width="26" height="11">
                    <use href="img/sprite.svg#apple-pay"></use>
                  </svg>
                </div>
                <div class="pay-sistem-card">
                  <svg class="pay-icon" width="25" height="9">
                    <use href="img/sprite.svg#visa"></use>
                  </svg>
                </div>
                <div class="pay-sistem-card">
                  <svg class="pay-icon" width="23" height="14">
                    <use href="img/sprite.svg#mast-card"></use>
                  </svg>
                </div>
                <div class="pay-sistem-card">
                  <svg class="pay-icon" width="22" height="14">
                    <use href="img/sprite.svg#maestro"></use>
                  </svg>
                </div>
                <div class="pay-sistem-card">
                  <svg class="pay-icon" width="24" height="16">
                    <use href="img/sprite.svg#webmoney"></use>
                  </svg>
                </div>
                <div class="pay-sistem-card">
                  <svg class="pay-icon" width="24" height="16">
                    <use href="img/sprite.svg#qiwi"></use>
                  </svg>
                </div>
            </div>
            <div class="social-media">
              <p class="social-text">
                Online чат:
              </p>
              <div class="footer-social-link">
                <a href="#" class="footer-link-social">
                  <svg class="social-icon" width="16" height="16">
                    <use href="img/sprite.svg#viber"></use>
                  </svg>
                </a>
                <a href="#" class="footer-link-social">
                  <svg class="social-icon" width="16" height="16">
                    <use href="img/sprite.svg#whatsapp"></use>
                  </svg>
                </a>
                <a href="#" class="footer-link-social">
                  <svg class="social-icon" width="16" height="16">
                    <use href="img/sprite.svg#telegram"></use>
                  </svg>
                </a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>

    <script src="js/main.js"></script>
  </body>
</html>