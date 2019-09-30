/* slider and animated caption */
/*AOS.init();*/

$(document).ready(function() {

    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
        if (scroll > 100) {
          $(".fixed-tab").css("visibility","visible");
        }
        else{
            $(".fixed-tab").css("visibility","hidden");   
        }


        if ($('#trip-overview').position().top){
            $('#trip-overviewlink').css("border-bottom", "2px solid #00489e");
        }
        if ($('#trip-itinerary').position().top){
            $('#trip-itinerarylink').css("border-bottom", "2px solid #00489e");
        }
        if ($('#trip-inc-exc').position().top){
            $('#trip-inc-exclink').css("border-bottom", "2px solid #00489e");
        }
    });
    //TRAVEL-SLIDER
    $('#travel-featured-slider').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"], //we will be using font awesome icon here
        autoplay: true,
        responsive: {
            0: {
                items: 4
            },
            320: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    //SLIDER-CAPTION
    var heroSlider = $('.sliders');
    heroSlider.owlCarousel({
        loop: true,
        items: 1,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeOut: 300, //5sec
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'], //we will be using font awesome icon here
    });
    heroSlider.on("changed.owl.carousel", function(event) {
        // selecting the current active item
        var item = event.item.index - 2;
        // first removing anPimation for all captions
        $('h3').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h3').addClass('animated fadeInUp');
    });
    heroSlider.on("changed.owl.carousel", function(event) {
        // selecting the current active item
        var item = event.item.index - 2;
        // first removing animation for all captions
        $('a').removeClass('animated slideInLeft');
        $('.owl-item').not('.cloned').eq(item).find('a').addClass('animated slideInLeft');
    });
    // No animation in other captions so we need to add animation to owl-item while slide changed.
    $('#testi').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"], //we will be using font awesome icon here
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    $("#myBtn").click(function() {
        $("#myModal").modal();
    });
    $(".card").hover(
        function() {
            $(this).addClass('shadow-lg').css('cursor', 'pointer');
        },
        function() {
            $(this).removeClass('shadow-lg');
        });

    $(document).ready(function() {
        $(".various").fancybox({
            maxWidth: 800,
            maxHeight: 600,
            fitToView: false,
            width: '50%',
            height: '50%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });
    });

    $('#image-gallery').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        thumbItem: 5,
        slideMargin: 0,
        enableDrag: false,
        currentPagerPosition: 'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }
    });

    $(".iti-display").hide();
    $(document).on("click", ".tab-desc-link .show", function() {
        $(this).addClass("hide"), 
        $(this).removeClass("show"), 
        $(this).parent().parent().find(".tab-desc").addClass("open"), 
        $(this).html("View Less")
    }) ;
    $(document).on("click", ".tab-desc-link .hide", function() {
        $(this).addClass("show"),
        $(this).removeClass("hide"), 
        $(this).parent().parent().find(".tab-desc").removeClass("open"), 
        $(this).html("View More")
    }); 
    $(document).on("click", ".data-item h6", function() {
        $(this).addClass("iti-collapse").find("i").removeClass("fa-chevron-down").addClass("fa-chevron-up"),
        $(this).parent().find(".iti-display").slideDown()
    });
    $(document).on("click", ".iti-collapse", function() {
        $(this).removeClass("iti-collapse").find("i").removeClass("fa-chevron-up").addClass("fa-chevron-down"), 
        $(this).parent().find(".iti-display").slideUp()
    }); 
    $(document).on("click", ".expand-all", function() {
        $(this).addClass("collapse-all"), $(".iti-display").slideDown(), $(this).html("Collapse All")
    });
    $(document).on("click", ".collapse-all", function() {
        $(this).removeClass("collapse-all"), $(".iti-display").slideUp(), 
        $(this).html("Expand All")
    });

    // This is a functions that scrolls to #{blah}link
    function goToByScroll(id) {
        // Remove "link" from the ID
        id = id.replace("link", "");
        // Scroll
        $('html,body').animate({
            scrollTop: $("#" + id).offset().top
        }, 'slow');
    }

    $(".scroller > li > a").click(function(e) {
        // Prevent a page reload when a link is pressed
        e.preventDefault();
        // Call the scroll function
        goToByScroll(this.id);
    });


});


function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("Btn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

function groupDiscount() {
    var x = document.getElementById("group-discount");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



function validateForm() {
    var n = document.getElementById('name').value;
    var e = document.getElementById('email').value;
    var s = document.getElementById('subject').value;
    var m = document.getElementById('message').value;
    var onlyLetters = /^[a-zA-Z\s]*$/;
    var onlyEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    if (n == "" || n == null) {
        document.getElementById('nameLabel').innerHTML = ('Please enter your name');
        document.getElementById('name').style.borderColor = "red";
        return false;
    }


    if (!n.match(onlyLetters)) {
        document.getElementById('nameLabel').innerHTML = ('Please enter only letters');
        document.getElementById('name').style.borderColor = "red";
        return false;
    }

    if (e == "" || e == null) {
        document.getElementById('emailLabel').innerHTML = ('Please enter your email');
        document.getElementById('email').style.borderColor = "red";
        return false;
    }

    if (!e.match(onlyEmail)) {
        document.getElementById('emailLabel').innerHTML = ('Please enter a valid email address');
        document.getElementById('email').style.borderColor = "red";
        return false;
    }

    if (s == "" || s == null) {
        document.getElementById('subjectLabel').innerHTML = ('Please enter your subject');
        document.getElementById('subject').style.borderColor = "red";
        return false;
    }

    if (!s.match(onlyLetters)) {
        document.getElementById('subjectLabel').innerHTML = ('Please enter only letters');
        document.getElementById('subject').style.borderColor = "red";
        return false;
    }

    if (m == "" || m == null) {
        document.getElementById('messageLabel').innerHTML = ('Please enter your message');
        document.getElementById('message').style.borderColor = "red";
        return false;
    } else {
        return true;
    }

}

$('.panel-collapse').on('show.bs.collapse', function() {
    $(this).siblings('.panel-heading').addClass('active');
});

$('.panel-collapse').on('hide.bs.collapse', function() {
    $(this).siblings('.panel-heading').removeClass('active');
});
