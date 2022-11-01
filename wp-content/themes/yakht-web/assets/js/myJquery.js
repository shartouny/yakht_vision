$(document).ready(function() {
    $('#items-content').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('#products-content').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('#news-content').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        autoHeight: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // $('.brand:nth-child(odd)').attr('data-aos', 'fade-left');
    // $('.brand:nth-child(even)').attr('data-aos', 'fade-right');
    // AOS.init({
    //     offset: 100,
    //     duration: 1000
    // });
    $('.scroll-to').click(function() {
        var getElement = $(this).attr('href');
        if ($(getElement).length) {
            var getOffset = $(getElement).offset().top;
            $('html,body').animate({
                scrollTop: getOffset - 50
            }, 500);
        }
        return false;
    });
    
   var newsOwlHeight = $('#latest-news-section .owl-stage-outer ' ).height();
    $('#latest-news-section .item').height(newsOwlHeight); 
});
