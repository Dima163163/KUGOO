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
                  <div class="search-icon-btn">
                    <svg class="search-icon" width="16" height="16">
                      <use href="img/sprite.svg#lupe"></use>
                    </svg>
                  </div>
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
            <h3 class="section-model-title">
              Определите максимально подходящую вам модель не теоретически, а на практике
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


    <script src="js/main.js"></script>
  </body>
</html>