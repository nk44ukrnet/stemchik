<?php
if (isset($_POST['name'])
    && isset($_POST['phone'])
    && isset($_POST['email'])
) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From: Stemchyk <noreply@stemchik.com>';
    $to = 'i.artemchuk@ies.org.ua, y.semivolos@ies.org.ua'; //'i.artemchuk@ies.org.ua, y.semivolos@ies.org.ua';  //tsvynakhidnyk@gmail.com

    $body = "
		<b>Ім'я: </b> $name <br>
		<b>Телефон: </b> $phone <br>
		<b>Email: </b> $email <br>";

    $title = 'Заявка з сайту стемчик';

    mail($to, $title, $body, implode("\r\n", $headers));

    //echo 'all is ok';

}
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Франшиза дитячого садочка «СТЕМЧИК». 12+ років успішного бізнесу у STEM-освіті. Дізнайтеся як відрити садочок у вашому місті.">
    <title>Купити франшизу дитячого садочка «СТЕМЧИК». Як відкрити дитячий садочок</title>
    <!--    fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Nunito:wght@400;600;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="style/styles.css?ver=1.0.1">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-12SPQ3DWGT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-12SPQ3DWGT');
    </script>
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '195064785866244');
fbq('track', 'PageView');
</script>
</head>
<body>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=195064785866244&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<div class="site_wrapper">

    <header class="header">
        <div class="tel">
            <div class="tel-inner" style="visibility: hidden;">
                <img src="img/phone.svg" alt="tel"> <a href="tel:+380504561085">+38(050)4561085</a>
            </div>
        </div>
    </header>

    <div class="screen1">
        <div class="top-part">
            <div class="logo-group">
                <div class="logo"></div>
                <div class="text">
                    Мережа інноваційних просторів для дошкільнят, де діти отримують якісні базові знання з допомогою
                    STEM-підходу та конструкторів LEGO.
                </div>
            </div>
            <div class="cubes-holder">
                <div class="cube">наука</div>
                <div class="cube">технологія</div>
                <div class="cube">інженерія</div>
                <div class="cube">математика</div>
            </div>
            <div class="after-cubes">
                <div class="text">
                    STEM-орієнтований підхід до навчання поєднує вивчення природничих наук, технологій, інженерії та
                    математики з вихованням у дітей інтересу до навчання
                    та підготовкою їх до майбутнього.
                </div>
                <div class="btn-holder" data-modalto="#modal1">
                    <a href="#!" class="btn">
                        навчагратись
                    </a>
                </div>
            </div>
        </div>
        <div class="bot-part">
            <h2>ми навчаграємо</h2>
            <div class="bot-part-cubes-holder">
                <div class="bot-part-cube">гарномовити</div>
                <div class="bot-part-cube">творчомислити</div>
                <div class="bot-part-cube">вільнотворити</div>
                <div class="bot-part-cube">гуртодіяти</div>
            </div>
            <div class="time">
                <p>
                       <span class="parts">
                           <small>з</small>
                           <span class="big big-text1" data-text="щодня">08:00</span>
                           <small>до</small>
                           <span class="big big-text2" data-text="години">17:00</span>
                       </span>
                    <span class="parts">
                           <small>з</small>
                           <span class="big" data-text="дітей">3</span>
                           <small>до</small>
                           <span class="big" data-text="років">6</span>
                       </span>
                </p>
            </div>
        </div>
    </div>

    <div class="expect">
        <div class="expect-inner">
            <h2>дитину чекає</h2>

            <div class="expect-cubes-holder">
                <div class="expect-cube">
                    <h3>
                        навчання
                        та розвиток
                    </h3>
                    <p>
                        кожного дня цікаві заняття, створені на основі унікального STEM-підходу.
                    </p>
                </div>
                <div class="expect-cube">
                    <h3>
                        безпека
                        та захист
                    </h3>
                    <p>
                        доступ до відеоспостереження у навчальному кабінеті вашого малюка
                    </p>
                </div>
                <div class="expect-cube">
                    <h3>
                        турбота та увага
                    </h3>
                    <p>
                        індивідуальний підхід до кожної дитини, професійні вихователі
                        з високим рівнем емпатії
                    </p>
                </div>
                <div class="expect-cube">
                    <h3>
                        чистота
                        та санітарія
                    </h3>
                    <p>
                        забезпечення чистоти в усіх приміщенях, дезінфекції іграшок та навчальних матеріалів
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="stem-lessons">
        <div class="stem-lessons-inner">
            <h2>STEM-заняття</h2>
            <div class="afterheading">
                <p class="subhead">у садочку</p>
                <div class="days">пн — пт</div>
            </div>
            <div class="stem-lessons-cubes-container">
                <div class="stem-lessons-cube">
                    <div class="inner">
                        <div class="data">
                            <p>для дітей:</p>
                            <p>3-5</p>
                            <p>років</p>
                        </div>
                        <div class="text">
                            Ейдетика та логоритміка <br>
                            Дослідження довкілля <br>
                            Пізнання STEAM світу <br>
                            Грамота <br>
                            Математика <br>
                            Творче конструювання <br>
                        </div>
                    </div>
                </div>
                <div class="stem-lessons-cube">
                    <div class="inner">
                        <div class="data">
                            <p>для дітей:</p>
                            <p>5-6</p>
                            <p>років</p>
                        </div>
                        <div class="text">
                            Грамота <br>
                            Математика <br>
                            Творче конструювання <br>
                            Ейдетика та логоритміка <br>
                            Арт-простір <br>
                            Експерименти та відкриття <br>
                            Англійська мова <br>
                            Програмування у грі <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="stem-courses">
        <div class="stem-courses-inner">
            <h2>курси з LEGO</h2>
            <p class="days">сб — нд</p>
            <div class="stem-courses-cubes-holder">
                <div class="stem-courses-cube">
                    <div class="heading">
                        <div class="age">
                            <p>вік:</p>
                            <p>3-6</p>
                        </div>
                        <h3>Творче <br> конструювання</h3>
                    </div>
                    <p>
                        Маленькі дослідники вчаться конструювати міські будівлі, тварин, різні види транспорту за
                        показом педагога, граються своїми моделями, вивчають назви деталей та основні технічні прийоми
                        конструювання.
                        <br><br>
                        Діти взаємодіють з однолітками, розвивають мовлення й дрібну моторику, легко адаптуються до
                        колективу та набувають початкових уявлень про колір, величину, форму предметів найближчого
                        довкілля.
                    </p>
                </div>

                <div class="stem-courses-cube">
                    <div class="heading">
                        <div class="age">
                            <p>вік:</p>
                            <p>4-6</p>
                        </div>
                        <h3>Механіка <br> для дітей</h3>
                    </div>
                    <p>
                        Цей курс для дітей, що проявляють цікавість у пізнанні навколишнього світу і розумінні законів
                        його існування. Учні вчяться конструювати прості механізми, які можуть побачити в довкіллі,
                        вивчають принципи їх роботи.
                        <br><br>
                        Діти знайомляться з різними видами рухів (обертальний, коливальний, поступальний) та дізнаються
                        про зубчасту, ремінну, черв’ячну передачі.
                    </p>
                </div>

                <div class="stem-courses-cube">
                    <div class="heading">
                        <div class="age">
                            <p>вік:</p>
                            <p>4-6</p>
                        </div>
                        <h3>Академія <br> цеглинок</h3>
                    </div>
                    <p>
                        Курс для маленьких чомучок та фантазерів, допоможе знайти відповіді на безліч дитячих запитань.
                        На учнів очікують нові відкриття та дослідження оточуючого світу разом з командою
                        супер-цеглинок.
                        <br><br>
                        На заняттях учні виконують завдання на розвиток уваги, пам’яті, мислення, мовлення, творчих
                        здібностей, дрібної моторики із використанням 12 цеглинок LEGO DUPLO.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="inner">
            <div class="logo"></div>
            <div class="contacts">
                <a href="tel:+380503766285"><img src="img/phone.svg" width="50" height="53" alt="phone">
                    <span>+38(050)3766285</span></a>
                <a href="https://www.instagram.com/stemchyk_franchise" title="Instagram"><img
                            src="img/instagram-icon.svg" alt="Instagram"></a>
                <a href="https://www.facebook.com/stemchyk/?ref=pages_you_manage" title="Facebook"><img
                            src="img/facebook-icon.svg" alt="Facebook"></a>
            </div>
            <div class="btn">
                <a href="#!" data-modalto="#modal1" class="offer">франшиза</a>
            </div>
        </div>
    </footer>
</div>

<!--MODALS-->
<div class="modal_bg" id="modal1">
    <div class="modal_content">
        <div class="modal_header">
            <h2>Форма зворотнього зв'язку</h2>
            <a href="#!" class="close_modal">&times;</a>
        </div>
        <form name="modal1">
            <div class="group">
                <input type="text" name="name" placeholder="Ваше ім'я" required>
            </div>
            <div class="group">
                <input type="tel" name="phone" placeholder="Ваш телефон" required>
            </div>
            <div class="group">
                <input type="email" name="email" placeholder="Ваш E-mail" required>
            </div>
            <div class="group">
                <input type="submit" name="submit" value="Надіслати">
            </div>
            <div class="form_result"></div>
        </form>
    </div>
</div>

<script>
    //modals
    let modalBtn = document.querySelectorAll('[data-modalto]');
    modalBtn.forEach(modalItem => {
        modalItem.addEventListener('click', function (e) {
            let itemAttr = modalItem.getAttribute('data-modalto');
            itemAttr = itemAttr.replace('#', '');
            let triggerItemID = document.getElementById(itemAttr);
            triggerItemID.classList.add('modal_bg-active');
        })
    });

    //close modal
    function closeModals() {
        let modalBg = document.querySelectorAll('.modal_bg');
        modalBg.forEach(item => {
            item.classList.remove('modal_bg-active');
        });
    }

    let closeModalBtn = document.querySelectorAll('.close_modal');
    closeModalBtn.forEach(item => {
        item.addEventListener('click', closeModals);
    });
    //modal bg click = remove active class
    let modalBg = document.querySelectorAll('.modal_bg');
    modalBg.forEach(modal => {
        modal.addEventListener('click', function (e) {
            e.stopPropagation();
            if (e.target.classList.contains('modal_bg-active')) {
                e.target.classList.remove('modal_bg-active');
            }
        })
    });

    //sending email
    let modal1 = document.forms['modal1'],
        scriptURL = '<?php echo $_SERVER['PHP_SELF']; ?>',
        formResult = modal1.querySelector('.form_result');
    modal1.addEventListener('submit', function (e) {
        e.preventDefault();
        fetch(scriptURL, {
            method: 'post',
            body: new FormData(modal1)
        })
            .then(res => {
                if (res.ok && (res.status >= 200 && res.status < 300)) {
                    formResult.innerHTML = `Дані успішно надіслано`;
                    modal1.reset();
                    setTimeout(() => {
                        closeModals();
                        formResult.innerHTML = ``;
                    }, 4000);
                    return res;
                } else {
                    throw new Error();
                }
            })
            .catch(error => {
                console.error(error);
                formResult.innerHTML = `Сталася помилка при відправці форми!`;
            });
    });
</script>
</body>
</html>