$(".button-collapse").sideNav();
$('.carousel.carousel-slider').carousel({fullWidth: true});

elementProperty.getElement('.tab-item',tabs => {
    if(tabs.classList.contains('s12'))
        return tabs.classList.remove('s12 ')
})

elementProperty.addEventInElement('#open-blog','onclick',function () {
    let that = this;
    $(".button-collapse").sideNav('hide');
    elementProperty.getElement('.tab-navigation',tab => {
        if(tab.classList.contains('active')) {
            tab.classList.remove('active')
            that.classList.add('active')
        }
    })

    elementProperty.getElement('.tab-pages',pages => {
        if(pages.classList.contains('active')) {
            pages.classList.remove('active')
            pages.style.display = 'none';
            elementProperty.getElement('#pageBlog', blog => {
                blog.classList.add('active');
                blog.style.display = '';
            })
        }
    })

})
