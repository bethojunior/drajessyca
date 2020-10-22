$('.modal').modal();
elementProperty.addEventInElement('#search-blog','oninput',function () {
    let keys = this.value.toUpperCase();
    elementProperty.getElement('.through-blogs',blogs => {
        let blog = blogs.getAttribute('value').toUpperCase();
        if(!blog.includes(keys))
            return blogs.style.display = 'none';

        return blogs.style.display = '';

    });
})

elementProperty.addEventInElement('.through-blogs','onclick',function () {
    let blog = JSON.parse(this.getAttribute('data'));
    console.log(blog)
    $('#modal-blog').modal('open');
    elementProperty.getElement('#content-blog', these => {
        these.innerHTML = `
            <div class="row col s12 l12">
                <div class="col l12 s12">
                    <label>${Mask.setDateCrazy(blog.created_at,false)}</label>
                </div>
                <div class="col l12 s12">
                    <h5 style="color: #a34863!important">${blog.title}</h5>
                </div>
                <div class="col l4 s12">
                    <img class="" src="/storage/${blog.image}">
                </div>
                <div class="col l8 s12">
                    <p style="color: slategray!important">${blog.content}</p>
                </div>
            </div>
        `;
    })
})
