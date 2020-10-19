$(".button-collapse").sideNav();
$('.carousel.carousel-slider').carousel({fullWidth: true});

elementProperty.getElement('.tab-item',tabs => {
    if(tabs.classList.contains('s12'))
        return tabs.classList.remove('s12 ')
})
