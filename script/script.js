(function() {
    //gallery
    let gallery = document.querySelector('.gallery__holder'),
        prev = gallery.querySelector('.gallery__prev'),
        next = gallery.querySelector('.gallery__next'),
        galleryItem = gallery.querySelectorAll('.gallery__item'),
        dotsHolder = gallery.querySelector('.gallery__dots');

    let currentSlide = 0,
        maxSlides = 0;

    if (galleryItem.length <= 0) {
        maxSlides = 0
    } else {
        maxSlides = galleryItem.length - 1;
    }

    //generate dots
    galleryItem.forEach((item, idx) => {
        let activeClass = '';
        if (item.classList.contains('gallery__item_active')) {
            activeClass = 'gallery__dot_active';
        }
        dotsHolder.innerHTML += `<a href="#!" data-num="${idx}" class="gallery__dot ${activeClass}"></a>`;
    })

    gallery.addEventListener('click', function(e) {
        let current = e.target;
        if (current.classList.contains('gallery__prev')) {
            if ((currentSlide - 1) < 0) {
                currentSlide = maxSlides;
            } else {
                currentSlide--;
            }
            galleryTick(currentSlide);
        }
        if (current.classList.contains('gallery__next')) {
            if ((currentSlide + 1) > maxSlides) {
                currentSlide = 0;
            } else {
                currentSlide++;
            }
            galleryTick(currentSlide);
        }
        if (current.classList.contains('gallery__dot')) {
            let attr = current.dataset.num;
            galleryTick(attr);
        }
    });

    function galleryTick(dataNum) {

        cleanActiveClasses();
        let dotAttr = +dataNum;

        galleryItem[dotAttr].classList.add('gallery__item_active');
        let allDots = document.querySelectorAll('.gallery__dot');
        allDots[dotAttr].classList.add('gallery__dot_active');

        function cleanActiveClasses() {
            let galleryItem = document.querySelectorAll('.gallery__item'),
                galleryDot = document.querySelectorAll('.gallery__dot');
            galleryItem.forEach(item => item.classList.remove('gallery__item_active'))
            galleryDot.forEach(item => item.classList.remove('gallery__dot_active'))
        }

    }

    //get current url window location to utm input
    let utm = document.querySelector('#utm');
    let utmData = window.location.href;
    utm.setAttribute('value', utmData)
        // utm.value = utmData;

    //reg form
    let form = document.forms['reg-form'],
        formStatus = document.querySelector('.form-status'),
        formStatusContainer = document.getElementById('formStatusContainer');
    form.addEventListener('submit', e => {
        e.preventDefault();

        let btn = form.querySelector('button[type="submit"]');
        btn.disabled = true;
        formStatusContainer.hidden = false;
        formStatus.innerHTML = `Перевірка даних...`;

        fetch('php/email.php', {
            method: 'POST',
            body: new FormData(form)
        })
            .then(res=>{
                if (res.ok && (res.status >= 200 && res.status < 300)) {
                    return res.json();
                } else {
                    throw new Error();
                }
            })
            .catch(err=> console.error(err));

        fetch('https://script.google.com/macros/s/AKfycbwOhZnUSi4ACUzamahJ-dkJXsDqB_RgtFnYIrtQ2VVjQj-ee4j9VSLNUNbW15i-eINCig/exec', {
                method: 'POST',
                body: new FormData(form)
            })
            .then(res => {
                if (res.ok && (res.status >= 200 && res.status < 300)) {
                    return res.json();
                } else {
                    throw new Error();
                }
            })
            .then(data => {
                console.log(data);
                formStatusContainer.hidden = false;
                formStatus.innerHTML = `Форму успішно надіслано!`;
                form.reset();
                btn.disabled = false;
                try {
                    fbq('track', 'Lead');
                } catch (e) {}
            })
            .catch(err => {
                formStatusContainer.hidden = false;
                formStatus.innerHTML = `Помилка. Не вдалося надіслати фому.`;
            })
            .finally(final => {
                setTimeout(() => {
                    btn.disabled = false;
                    formStatusContainer.hidden = true;
                    formStatus.innerHTML = ``;
                }, 5000);
            })
    })
})();