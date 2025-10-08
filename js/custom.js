$(window).scroll(function(){
    if ($(this).scrollTop() > 40) {
       $('.header-section').addClass('sticky');
    } else {
       $('.header-section').removeClass('sticky');
    }
});

$('.midd-banner-slider').owlCarousel({
    loop: true,
    margin: 0,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
})

$('.certifications-slider').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
        }
    }
})

$('.opp-slider').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        }
    }
})
$('.OurPartner_slider').owlCarousel({
    loop: true,
    margin: 20,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: false,
    nav: true,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:4,
        }
    }
})

$('.industry-slider').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
})

$('.Certificate_slide').owlCarousel({
    loop: false,
    margin: 50,
	autoplay:false,
	autoplayTimeout:4000,
	autoplayHoverPause:true,
    dots: true,
    nav: true,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:2,
            margin: 20,
        },
        600:{
            items:3,
            margin: 20,
        },
        991:{
            items:4,
            nav: false,
            margin: 30,
        },
        1200:{
            items:6,
        }
    }
})

$(document).ready(function(){
 $(".st-word").each(function() {
  
  // Some Vars
  var elText,
      openSpan = '<span class="first-word">',
      closeSpan = '</span>';
  
  // Make the text into array
  elText = $(this).text().split(" ");
  
  // Adding the open span to the beginning of the array
  elText.unshift(openSpan);
  
  // Adding span closing after the first word in each sentence
  elText.splice(2, 0, closeSpan);
  
  // Make the array into string 
  elText = elText.join(" ");
  
  // Change the html of each element to style it
  $(this).html(elText);
});

if(window.location.href.indexOf("/authorized-partners") > -1) {
    $(".sgpb-popup-builder-content-html .wpcf7-form").addClass("myforms");
    $(".sgpb-popup-builder-content-html .cf7mls_current_fs>div").removeClass("myforms");
    $(".myforms label").css('display', 'block');
    $(".myforms input").removeAttr("placeholder");
    $(".wpcf7-form .fieldset-cf7mls .cf7mls-btns").css("margin-left", "-60px");
}


$('.wpcf7-countrytext').attr('readonly', 'readonly');

// validation for first name contactform7
document.addEventListener('wpcf7submit', function(event) {
    var FirstnameField = document.querySelector('input[name="FirstName"]');
    var FirstnameValue = FirstnameField.value.trim();

    var LastnameField = document.querySelector('input[name="LastName"]');
    var LastnameValue = LastnameField.value.trim();

    // Regular expression pattern for name validation
    var pattern = /^[A-Za-z\s'-]+$/;

    // Check if the name field is empty or contains invalid characters
    if (FirstnameValue != '' && !pattern.test(FirstnameValue)) {
        // Create a new span element for the error message
        var errorMessage = document.createElement('span');
        errorMessage.textContent = 'Please enter a valid name.';
        errorMessage.classList.add('wpcf7-not-valid-tip');
        errorMessage.setAttribute('aria-hidden', 'true');

        // Add the error message span after the name field
        FirstnameField.parentNode.insertBefore(errorMessage, FirstnameField.nextSibling);
        event.preventDefault();
    }
    if (LastnameValue != '' && !pattern.test(LastnameValue)) {
        // Create a new span element for the error message
        var errorMessage = document.createElement('span');
        errorMessage.textContent = 'Please enter a valid name.';
        errorMessage.classList.add('wpcf7-not-valid-tip');
        errorMessage.setAttribute('aria-hidden', 'true');

        // Add the error message span after the name field
        LastnameField.parentNode.insertBefore(errorMessage, LastnameField.nextSibling);
        event.preventDefault();
    }
}, false);
var width = $(window).width();
    if (width <= 768) {
        $(".page-template-trainer-template .esteemed-partners-cnt h2").css("line-height", "normal");
    }
});

/* Test JS - local to server */

$(document).ready(function () {
    // Function to scroll to the target section with additional space
    function scrollToSectionWithPadding(sectionId, padding) {
        var section = $(sectionId);
        if (section.length) {
            $('html, body').animate({
                scrollTop: section.offset().top - padding
            }, 'fast');
        }
    }

    // Event delegation for buttons with class 'scroll-button'
    $('body').on('click', '.indextabs a', function () {
        var targetSectionId = $(this).attr('href');
        //alert(targetSectionId);
        scrollToSectionWithPadding(targetSectionId, 100); // 50px padding
    });
});


jQuery(document).on('gform_post_render', function(e, form_id) {
    if ( jQuery('div.gfield_validation_message').length > 0 ) {
        $(".gfield .gfield_validation_message").css("color", "red");
    }
});


$(function() {
    // Owl Carousel
    var owl = $(".tmlinkedin .owl-carousel");
    owl.owlCarousel({
      items: 2,
      margin: 20,
      loop: false,
      nav: true,
      responsive:{
          0:{
              items:1,
              margin: 10,
          },
          768:{
              items:2,
              margin: 20,
          },
          1024:{
              items:2,
              margin: 20,
          },
          1200:{
              items:3,
              margin: 20,
          },
          1400:{
              items:3,
              margin: 20,
          },
          1600:{
              items:3,
              margin: 20,
          }
      }
    });
  });
  
  
$(function() {
    // Owl Carousel
    var owl = $(".h2_popular_certifications .owl-carousel");
    owl.owlCarousel({
      items: 2,
      margin: 20,
      loop: false,
      nav: true,
     responsive:{
          0:{
              items:1,
              margin: 10,
          },
          768:{
              items:2,
              margin: 20,
          },
          1024:{
              items:3,
              margin: 20,
          },
          1200:{
              items:4,
              margin: 20,
          },
          1400:{
              items:4,
              margin: 20,
          },
          1600:{
              items:5,
              margin: 20,
          }
      }
    });
  });

$(function() {
    // Owl Carousel
    var owl = $(".h2_aicerts_lab .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 40,
      loop: true,
      nav: true,
      responsive:{
          0:{
              items:1,
          },
          768:{
              items:3,
          },
          1024:{
              items:4,
          },
          1200:{
              items:5,
          },
          1600:{
              items:7,
              margin: 0
          }
      }
    });
  });

  $(function() {
    // Owl Carousel
    var owl = $(".h2_partners_logo .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 40,
      loop: true,
      nav: true,
      responsive:{
          0:{
              items:2,
          },
          768:{
              items:3,
          },
          1024:{
              items:4,
          },
          1200:{
              items:7,
              margin: 20
          }
      }
    });
  });

$(function() {
    // Owl Carousel
    var owl = $(".eventsSpeakers .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 40,
      loop: false,
      nav: true,
      responsive:{
          0:{
              items:1,
          },
          768:{
              items:3,
          },
          1024:{
              items:4,
          },
          1200:{
              items:4,
              margin: 30
          }
      }
    });
  });

  $(function() {
    // Owl Carousel
    var owl = $(".UpcomingEvents .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 10,
      loop: false,
      mouseDrag: false, 
      nav: true,
      responsive:{
          0:{
              items:1,
          },
          768:{
              items:2,
          },
          1024:{
              items:3,
          },
          1200:{
              items:3, 
              margin: 10
          }
      }
    });
  });

  $(function() {
    // Owl Carousel
    var owl = $(".UpcomingEvents1 .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 10,
      loop: false,
      mouseDrag: false, 
      nav: true,
      responsive:{
          0:{
              items:1,
          },
          768:{
              items:2,
          },
          1024:{
              items:3,
          },
          1200:{
              items:3, 
              margin: 10
          }
      }
    });
  });

$(function() {
    // Owl Carousel
    var owl = $(".PastEventsHighlights .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 40,
      loop: true,
      nav: true,
      responsive:{
          0:{
              items:1,
          },
          768:{
              items:3,
          },
          1024:{
              items:4,
          },
          1200:{
              items:4,
              margin: 50
          }
      }
    });
  });

  $(function() {
    // Owl Carousel
    var owl = $(".h2_learners .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 40,
      loop: true,
      nav: true,
      responsive:{
          0:{
              items:1,
          },
          768:{
              items:3,
          },
          1024:{
              items:4,
          },
          1200:{
              items:4,
          }
      }
    });
  });
  
$(function() {
    // Owl Carousel
    var owl = $(".h2_why_ai_certs_slider .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 20,
      loop: false,
      nav: true,
      autoHeight: false,
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1400: {
            items: 2
        }
    },
    });
  });
$(function() {
    // Owl Carousel
    var owl = $(".h2_blog_resource_grid .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 45,
      loop: false,
      nav: true,
      autoHeight: false,
      responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        1024: {
            items: 2
        },
        1200: {
            items: 3
        }
    },
    });
  });
  
   $(function() {
    // Owl Carousel
    var owl = $(".Training_Role .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 40,
      loop: true,
      nav: true,
      responsive:{
          0:{
              items:1,
          },
          768:{
              items:3,
          },
          1024:{
              items:4,
          },
          1200:{
              items:4,
          }
      }
    });
  });

$(function() {
    // Owl Carousel
    var owl = $(".hot_certifications_content .owl-carousel");
    owl.owlCarousel({
      items: 1,
      margin: 5,
      loop: false,
      nav: true,
      autoHeight: false
    });
  });



  $('.testimonial-aicerts_slider').owlCarousel({
    loop: true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: false,
    nav: true,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
        }
    }
})
  
  $(function() {
    // Owl Carousel
    var owl = $(".Top-Certi_slider");
    owl.owlCarousel({
      items: 2,
      margin: 20,
      loop: false,
      nav: false,
      responsive:{
          0:{
              items:1,
              margin: 10,
          },
          480:{
            items:2,
            margin: 10,
        },
          768:{
              items:3,
              margin: 20,
          },
          1024:{
              items:4,
              margin: 20,
          },
          1200:{
              items:4,
              margin: 20,
          },
          1400:{
              items:5,
              margin: 20,
          },
          1600:{
              items:6,
              margin: 20,
          }
      }
    });
  });


  $(document).ready(function(){
    
    jQuery(document).ready(function($) {
        $('.hasSubMenu').each(function() {
            var dataTarget = $(this).data('target');
            $(this).find('.subMenu').attr('id', dataTarget.substring(1)); // Remove the '#' from data-target value
        });
    });

    $(".multi-level-menu-wrapper").each(function(index,mlMenu){
      var subMenuItems = $(mlMenu).find(".hasSubMenu");
      console.log("subMenuItems", subMenuItems)
      
      subMenuItems.each(function(i,subMenu){
        $(subMenu).find(".trigger").on("click",function(){
         var target=$(subMenu).attr("data-target");
         $(target).addClass("active");
       });
      });
      
      $(".backTrigger").on("click",function(){
        var _backTrigger = this;
        $(_backTrigger).parent(".subMenu").removeClass("active");
      });
      
    });

    // Create backdrop element if it doesn't exist
    if ($('.backdrop').length === 0) {
        $('<div class="backdrop"></div>').appendTo('body');
    }

    // Toggle the active class on navbar-toggle click
    $('.navbar-toggler').off('click').on('click', function() {
        $('.multi-level-menu-wrapper').toggleClass('active');
        $('.backdrop').toggleClass('active');
    });

    // Remove the active class when the backdrop is clicked
    $('.backdrop').click(function() {
        $(this).removeClass('active');
        $('.multi-level-menu-wrapper').removeClass('active');
    });

    
    // $('.topright-btn').clone().appendTo('.multi-level-menu-wrapper');
    // if($('.multi-level-menu-wrapper').length > 0) {
    //     $('#bs-example-navbar-collapse-1 .topright-btn').remove();
    // }
    $('.gform_required_legend').insertAfter('.gform_footer').css("font-size", "12px").css("margin-top", "10px");
    $('#gform_2 .gform_required_legend').css("display", "none");

});		

$(document).ready(function () {
    $(".dropdown-menu .menu-item-has-children .dropdown-menu").hover(
    function () {
        //console.log('test');
        $(this).parent().addClass("active");
    }, function () {
        $(this).parent().removeClass("active");
    });
});
/*
jQuery(document).ready(function() {
    if (jQuery(window).width() < 1200) {
        jQuery("#menu-main-menu .menu-item-has-children .menu-item-has-children > a").after().click(function(e){
          e.preventDefault();
       });
    }
 });

document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.More_Certificate');
    const slides = carousel.querySelectorAll('.More_Certificate .owl-stage > div'); // Adjust selector as needed
    //const minSlidesForArrows = window.innerWidth <= 768 ? 3 : 5;
    if(window.innerWidth <= 1200 && window.innerWidth >= 991 ) {
        if (slides.length > 4) {
            //carousel.addClass('show-arrows');
            carousel.className += ' show-arrows-more-certificate';
        }
    }
    else if(window.innerWidth <= 990 && window.innerWidth > 767 ) {
        //var minSlidesForArrows = 2.5;
        if (slides.length > 2.5) {
            //carousel.addClass('show-arrows');
            carousel.className += ' show-arrows-more-certificate';
        }
    }
    else if (window.innerWidth > 1200) {
        //var minSlidesForArrows = 6;
        if (slides.length > 6) {
            //carousel.addClass('show-arrows');
            carousel.className += ' show-arrows-more-certificate';
        }
    }
    else {
        
    }
});
*/
// jQuery(document).ready(function($) {
//     $('#CareerPathsDropdown').change(function() {
//         var careerID = $(this).val();
//         console.log(careerID);
//         $.ajax({
//             url: ajax_object.ajaxurl,
//             type: 'POST',
//             data: {
//                 action: 'fetch_posts_by_category',
//                 career_id: careerID
//             },
//             success: function(response) {
//                 console.log(response);
//                 //$('#postsContainer').html(response);
//             }
//         });
//     });
// });

function careerdropdown(postid) {
    if(postid==0) {
        jQuery(".Recommended_Certi .careerbox").removeClass('d-none');
        jQuery(".essential_certi .careerbox").removeClass('d-none');
        jQuery(".parallel_Certi .list-group-item").removeClass('d-none');
    } else {
        jQuery('.Recommended_Certi .careerbox').addClass('d-none');
        jQuery('.Recommended_Certi .careerbox.heading').removeClass('d-none');
        jQuery('.Recommended_Certi .careerbox.' + postid).removeClass('d-none');

        jQuery('.essential_certi .careerbox').addClass('d-none');
        jQuery('.essential_certi .careerbox.heading').removeClass('d-none');
        jQuery('.essential_certi .careerbox.' + postid).removeClass('d-none');

        jQuery('.parallel_Certi .list-group-item').addClass('d-none');
        jQuery('.parallel_Certi .list-group-item.' + postid).removeClass('d-none'); 
    }
    var count = $('.essential_certi .careerbox:not(.d-none)').length;
    if(count > 0){
        jQuery('#postsContainer2').removeClass('d-none');
    }
    else{
        jQuery('#postsContainer2').addClass('d-none');
    }
    var countpara = $('.parallel_Certi .list-group-item:not(.d-none)').length;
    if(countpara > 0){
        jQuery('#postsContainer3').removeClass('d-none');
    }
    else{
        jQuery('#postsContainer3').addClass('d-none');
    }
}

jQuery('document').ready(function(){
    var postid = jQuery(this).find(':selected').data('postid');
    careerdropdown(postid);
    // jQuery('#CareerPathsDropdown').change(function(){
    //     var postid = jQuery(this).find(':selected').data('postid');
    //     careerdropdown(postid);
    // });
    
    jQuery('.viewall').click(function() {
        var postid = jQuery('#CareerPathsDropdown').find(':selected').data('postid');
        careerdropdown(postid);
    });
});


function highlightNthWord(selector, n) {
    jQuery(selector).each(function() {
        var text = jQuery(this).text();
        var words = text.split(' ');

        if (n <= words.length && n > 0) {
            words[n - 1] = '<span class="primary_color">' + words[n - 1] + '</span>';
            jQuery(this).html(words.join(' '));
        }
    });
}

$('.AIBlockchainExperts').owlCarousel({
    loop: false,
    margin: 60,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        },
        1200:{
            items:4,
        }
    }
})

$('.SupportingCompanies').owlCarousel({
    loop: false,
    margin: 100,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        },
        1200:{
            items:4,
        }
    }
})

$('.ExpertLeaders').owlCarousel({
    loop: false,
    margin: 60,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        },
        1200:{
            items:4,
        }
    }
})

$('.tmv2-carousel').owlCarousel({
    loop: false,
    margin: 60,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },

        1200:{
            items:1,
        }
    }
})

$('.tmv2-tm-small').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        }
    }
})

$('.tmvpost-carousel').owlCarousel({
    loop: true,
    margin: 15,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        }
    }
})

// $(".btn-search-mobile").click(function(){
//   $(".search-form").addClass("active");
//   $(".btn-search-close").addClass("active");
// });

$(".btn-search-mobile").click(function(){
    $(".search-form").toggleClass("active");
    $(".btn-search-close").toggleClass("active");
});
  
$(".btn-search-close").click(function(){
  $(".search-form").removeClass("active");
  $(".btn-search-close").removeClass("active");
});

$('.pv1-carousel').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        }
    }
})

$('.abteam-carousel').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        1024:{
            items:2,
        },
        1400:{
            items:3,
        }
    }
})



$(function() {
  $(".monthtitle").on("click", function(e) {
    // Remove 'active' class from all popups, then add it to the clicked one
    //$(".prog-popovers").removeClass("active");

    var relatedPopup = $(this).next(".prog-popovers");
    
    // Check if the clicked popup is already open (has 'active' class)
    if (relatedPopup.hasClass("active")) {
        // If it's already active, close it by removing the 'active' class
        relatedPopup.removeClass("active");
    } else {
        // If it's not active, close all popups first
        $(".prog-popovers").removeClass("active");
        // Then open the related popup by adding the 'active' class
        relatedPopup.addClass("active");
    }

    e.stopPropagation()
  });
  $(".closepopovers").on("click", function(e) {
    // Remove 'active' class from all popups, then add it to the clicked one
    //$(".prog-popovers").removeClass("active");

    var closepop = $(this).parent(".prog-popovers");
    closepop.removeClass("active");
    
  });
  $(document).on("click", function(e) {
    // if ($(e.target).is(".prog-popovers") === false) {
    //   $(".prog-popovers").removeClass("active");
    // }
    if (!$(e.target).closest('.prog-popovers').length) {
        $(".prog-popovers").removeClass("active");
      }
  });
  // Prevent closing popup when clicking inside
  $('.prog-popovers').click(function(event) {
    event.stopPropagation();
  });
});

$('.market_potential_slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsive: {
        0: {
            items: 1,
            margin: 15,
        },
        768: {
            margin: 15,
            items: 2,
        }
    }

});

$('.testimonial_slider .owl-carousel').owlCarousel({
    items: 1,
            margin: 5,
            loop: true,
            slideBy: 1,
            nav: true, 
            navText: [
            '<i class="fa-solid fa-arrow-left-long"></i></i>',
            '<i class="fa-solid fa-arrow-right-long"></i>'
            ],

});
    
$('.aim-slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,

});


$(function () {
    // Owl Carousel
    var owl = $(".tmlinkedin .owl-carousel");
    owl.owlCarousel({
        items: 1,
        margin: 40,
        loop: false,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1024: {
                items: 2,
            },
            1200: {
                items: 3,
                margin: 70
            }
        }
    });
});


$(document).ready(function() {
    let sourceButton = $('.courses-template-tpl-certification-detail-V5 .cmndupbtnlink');
    
    if (sourceButton.length && sourceButton.attr('href')) {
        let url = sourceButton.attr('href');        
        $('.getcertifiedbtn .btnbounce').attr('href', url);
    }
});

// Owl Carousel
$(".our_certification_team_slider .owl-carousel").owlCarousel({
    items: 1,
    margin: 0,
    loop: true,
    slideBy: 1,
    responsive: {
        0: {
            items: 1,
            margin: 0,
        },
        768: {
            margin: 0,
            items: 1,
        }
    }
});

$(function () {
    // Owl Carousel
    var owl = $(".TeamAdvisors_Carousel");
    owl.owlCarousel({
        items: 1,
        margin: 10,
        loop: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1024: {
                items: 2,
                margin: 20
            },
            1200: {
                items: 3,
                margin: 30
            }
        }
    });
});

jQuery(document).ready(function ($) {
    function initPartnerCertificateSlider() {
        $('.partner_certificate_slide').owlCarousel({
            loop: false,
            margin: 50,
            autoplay:false,
            autoplayTimeout:4000,
            autoplayHoverPause:true,
            dots: true,
            nav: true,
            items: 1,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    margin: 20,
                },
                600:{
                    items:3,
                    margin: 20,
                },
                991:{
                    items:4,
                    nav: false,
                    margin: 30,
                },
                1200:{
                    items:4,
                }
            }
        })
    }
    initPartnerCertificateSlider();
    // Reinitialize Owl Carousel after AJAX success
    $(document).ajaxComplete(function () {
        $(".partner_certificate_slide").trigger('destroy.owl.carousel'); // Destroy old carousel
        $(".partner_certificate_slide").html($(".partner_certificate_slide").html()); // Rebuild the structure
        initPartnerCertificateSlider(); // Reinitialize the carousel
    });
});

// Initialize the carousel on page load

// Owl Carousel
$(".tenx_storys_slider .owl-carousel").owlCarousel({
    items: 1,
    margin: 0,
    loop: true,
    slideBy: 1,
    responsive: {
        0: {
            items: 1,
            margin: 0,
        },
        768: {
            margin: 0,
            items: 1,
        }
    }
});

$('.read-fullpublication').click(function(e) {
  e.preventDefault();

  $('.pub-summary').toggleClass('expand-pub-summary');

  var text = $(this).text();
  $(this).text(
    text == "Read Less" ? "Read Full" : "Read Less");
});

jQuery(document).ready(function($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    var owl = $('#AffiliateSuccess').owlCarousel({
        loop: true,
        center: true,
        nav: false,
        items: 3,
        margin: 0,
        autoplay: true, // Activation de l'autoplay
        autoplayTimeout: 30000, // Temps d'attente entre chaque auto-slide (30 secondes)
        autoplayHoverPause: true, // Pause lors du survol avec la souris
        autoplaySpeed: 1000, // Vitesse de transition (1 seconde)
        dots: true,
        smartSpeed: 450, // Vitesse de transition normale
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1170: {
                items: 3
            }
        }
    });

    // Custom Navigation Events
    $('#prev').click(function() {
        owl.trigger('prev.owl.carousel');
    });

    $('#next').click(function() {
        owl.trigger('next.owl.carousel');
    });
});

jQuery(document).ready(function($) {
    function loadBlogResults(page = 1, search = '') {
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'ajax_blog_search',
                search: search,
                paged: page,
            },
            beforeSend: function() {
                $('#ajax-blog-results').html('<p>Loading...</p>');
            },
            success: function(response) {
                $('#ajax-blog-results').html(response);
            }
        });
    }

    // Form submit handler
    $('#blog-search-form').on('submit', function(e) {
        e.preventDefault();
        let search = $('#search-input').val();
        loadBlogResults(1, search);
    });

    // Pagination click handler
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        let href = $(this).attr('href');
        let pageMatch = href.match(/paged=(\d+)/);
        let page = pageMatch ? parseInt(pageMatch[1]) : 1;
        let search = $('#search-input').val();
        loadBlogResults(page, search);
    });
});

jQuery(document).ready(function($) {
    function loadPressReleases(page = 1) {
        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'load_press_releases',
                paged: page
            },
            beforeSend: function() {
                $('#press-release-results').html('<p>Loading...</p>');
            },
            success: function(response) {
                $('#press-release-results').html(response.posts);
                $('.ajax-pagination-wrap').html(response.pagination);
                $('html, body').animate({
                    scrollTop: $('#press-release-results').offset().top - 200
                }, 10);
            }

        });
    }

    if( $('#press-release-results').length) {
        // Load initial press releases 
        loadPressReleases();
    }
    
    // Pagination click
    $(document).on('click', '.ajax-page-link', function(e) {
        e.preventDefault();
        let page = $(this).data('page');
        loadPressReleases(page);
    });
});

/* BoardMemberSlide GridSlider */
let originalItems = [];

function groupItems($items, groupSize) {
  const groups = [];
  for (let i = 0; i < $items.length; i += groupSize) {
    const $group = $('<div class="item-group"></div>');
    for (let j = 0; j < groupSize; j++) {
      if ($items[i + j]) {
        $group.append($items[i + j]);
      }
    }
    groups.push($group);
  }
  return groups;
}

function getGroupSize() {
  const width = window.innerWidth;
  if (width >= 1024) return 6;       // Desktop: 2x3
  if (width >= 768) return 4;        // Tablet: 2x2
  return 1;                          // Mobile: 2x2
}

function initOwlCarousel() {
  const $carousel = $('#BoardMemberSlide');
  const groupSize = getGroupSize();

  if ($carousel.hasClass('owl-loaded')) {
    $carousel.trigger('destroy.owl.carousel');
    $carousel.removeClass('owl-loaded');
    $carousel.find('.owl-stage-outer').children().unwrap();
  }

  $carousel.empty();

  const grouped = groupItems(originalItems.map(i => i.clone()), groupSize);
  $carousel.append(grouped);

  $carousel.owlCarousel({
    items: 1,
    nav: true,
    dots: true,
    margin: 10
  });

  // Setup custom nav
  $('#custom-prev').off('click').on('click', () => {
    $carousel.trigger('prev.owl.carousel');
  });

  $('#custom-next').off('click').on('click', () => {
    $carousel.trigger('next.owl.carousel');
  });

  // Custom Dots
  const $dots = $('.custom-dots');
  $dots.empty();

  for (let i = 0; i < grouped.length; i++) {
    const $dot = $(`<button class="dot" data-slide="${i}">${i + 1}</button>`);
    $dots.append($dot);
  }

  // Dot click
  $('.custom-dots .dot').off('click').on('click', function () {
    const index = $(this).data('slide');
    $carousel.trigger('to.owl.carousel', [index, 300]);
  });

  // Active dot sync
  $carousel.on('changed.owl.carousel', function (event) {
    const index = event.item.index;
    $('.custom-dots .dot').removeClass('active');
    $('.custom-dots .dot').eq(index).addClass('active');
  });

  // Initial active dot
  $('.custom-dots .dot').eq(0).addClass('active');

}

$(document).ready(function () {
  originalItems = $('#BoardMemberSlide .item').toArray().map(el => $(el).clone());

  initOwlCarousel();

  let resizeTimer;
  $(window).on('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(initOwlCarousel, 300);
  });
});


/* MoreMemberSlide */
jQuery(document).ready(function ($) {
  "use strict";

  // Initialize Owl Carousel
  var $carousel = $('#MoreMemberSlide').owlCarousel({
    loop: true,
    center: true,
    nav: false,
    items: 3,
    margin: 0,
    autoplay: false,
    autoplayTimeout: 30000,
    autoplayHoverPause: true,
    autoplaySpeed: 1000,
    dots: false, // Disable Owl's default dots
    smartSpeed: 450,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      1170: { items: 3 }
    }
  });

  // Custom Navigation Buttons
  $('#more-prev').off('click').on('click', function () {
    $carousel.trigger('prev.owl.carousel');
  });

  $('#more-next').off('click').on('click', function () {
    $carousel.trigger('next.owl.carousel');
  });

  // Custom Dots
  const $dots = $('#more-dots');
  $dots.empty();

  const slideCount = $carousel.find('.owl-item:not(.cloned)').length;

  for (let i = 0; i < slideCount; i++) {
    const $dot = $(`<button class="dot" data-slide="${i}">${i + 1}</button>`);
    $dots.append($dot);
  }

  // Dot Click Handler
  $dots.on('click', '.dot', function () {
    const index = $(this).data('slide');
    $carousel.trigger('to.owl.carousel', [index, 300]);
  });

  // Sync Active Dot
  $carousel.on('changed.owl.carousel', function (event) {
    const index = event.item.index - event.relatedTarget._clones.length / 2;
    const realIndex = ((index % slideCount) + slideCount) % slideCount; // Normalize index
    $dots.find('.dot').removeClass('active');
    $dots.find('.dot').eq(realIndex).addClass('active');
  });

  // Set Initial Dot Active
  $dots.find('.dot').eq(0).addClass('active');
});

/* ======== HomeNewSlideShow ======== */
jQuery(document).ready(function($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    var owl = $('#HomeV4Slider').owlCarousel({
        loop: true,
        center: true,
        nav: false,
        items: 3,
        margin: 0,
        autoplay: true, // Activation de l'autoplay
        autoplayTimeout: 30000, // Temps d'attente entre chaque auto-slide (30 secondes)
        autoplayHoverPause: true, // Pause lors du survol avec la souris
        autoplaySpeed: 1000, // Vitesse de transition (1 seconde)
        dots: true,
        smartSpeed: 450, // Vitesse de transition normale
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1170: {
                items: 1
            }
        }
    });

});


$('.SuccessStories').owlCarousel({
    loop: true,
    margin: 30,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        }
    }
})

$('.TestimonialsSlider').owlCarousel({
    loop: true,
    margin: 20,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
            margin: 30,
        },
        1024:{
            items:3,
            margin: 50,
        }
    }
})

$('.RealTools').owlCarousel({
    loop: true,
    margin: 5,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    dots: true,
    nav: false,
    items: 1,
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        }
    }
})