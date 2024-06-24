$(document).ready(function(){

    if(document.getElementById("boucle-temoignages")){
        let apiURL = 'http://api-wp/wordpress/wp-json/wp/v2/temoignage';

        $.getJSON(apiURL, function(temoins){
            temoins.forEach(function(element){
                $('#boucle-temoignages').append(blocTemoignage(element));
            });
        });
    }

    function blocTemoignage(elem){
        let bloc = `
        <div class="swiper-slide">
            <div class="testimonial mx-auto">
            <figure class="img-wrap">
                <img src="${elem.Image_en_avant}" alt="Image" class="img-fluid">
            </figure>
            <h3 class="name">${elem.title.rendered}</h3>
            <blockquote>
                <p>
                ${elem.content.rendered}
                </p>
            </blockquote>
            </div>
        </div>
        `;
        return bloc;
    }
});