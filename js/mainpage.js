/*
  Theme Name: Edubin - LMS Education HTML Template
  Author: Humayun Ahmed
  Author URL: https://themeforest.net/user/pixelcurve
  Support: humayunahmed82@gmail.com
  Description: Creative  HTML5 template.
  Version: 1.0
*/


$(function() {
    
    "use strict";
    
    //===== Prealoder
    
    $(window).on('load', function(event) {
        $('.preloader').delay(500).fadeOut(500);
    });
    
    
    //===== Search
    
    $('#search').on('click', function(){
        $(".search-box").fadeIn(600);
    });
    $('.closebtn').on('click', function(){
        $(".search-box").fadeOut(600);
    });
    
    
    //===== Sticky
    
    $(window).on('scroll', function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".navigation").removeClass("sticky");
            $(".navigation-3 img").attr("src", "images/mi logo1.png");
        } else{
            $(".navigation").addClass("sticky");
            $(".navigation-3 img").attr("src", "images/mi logo1.png");
        }
    });
    
    
    //===== Mobile Menu
    
    $(".navbar-toggler").on('click', function() {
        $(this).toggleClass("active");
    });
    
    var subMenu = $('.sub-menu-bar .navbar-nav .sub-menu');
    
    if(subMenu.length) {
        subMenu.parent('li').children('a').append(function () {
            return '<button class="sub-nav-toggler"> <i class="fa fa-chevron-down"></i> </button>';
        });
        
        var subMenuToggler = $('.sub-menu-bar .navbar-nav .sub-nav-toggler');
        
        subMenuToggler.on('click', function() {
            $(this).parent().parent().children('.sub-menu').slideToggle();
            return false
        });
        
    }
    
    
    
    //===== Slick Slider
    
        function mainSlider() {
            
        var BasicSlider = $('.slider-active');
            
        BasicSlider.on('init', function(e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
            
        BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
            
        BasicSlider.slick({
            autoplay: true,
            autoplaySpeed: 10000,
            pauseOnHover: false,
            dots: false,
            fade: true,
			arrows: true,
            prevArrow:'<span class="prev"><i class="fa fa-angle-left"></i></span>',
            nextArrow: '<span class="next"><i class="fa fa-angle-right"></i></span>',
            responsive: [
                { breakpoint: 767, settings: { dots: false, arrows: false } }
            ]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function() {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function() {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    mainSlider();
    
    
    //===== Slick Category Slied
    
    $('.category-slied').slick({
        dots: false,
        infinite: false,
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:'<span class="prev"><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="next"><i class="fa fa-angle-right"></i></span>',
        responsive: [
        {
          breakpoint: 922,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    
    
    //===== Slick Course Slied
    
    $('.course-slied').slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow:'<span class="prev"><i class="fa fa-angle-left"></i></span>',
        nextArrow: '<span class="next"><i class="fa fa-angle-right"></i></span>',
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    
    
    //====== Magnific Popup
    
    $('.Video-popup').magnificPopup({
        type: 'iframe'
        // other options
    });
    
    
    //===== Slick testimonial Slied
    
    $('.testimonial-slied').slick({
        dots: true,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    
    
    //===== Slick testimonial Slied
    
    $('.patnar-slied').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 800,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
    });
    
    
    //===== Back to top
    
    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if($(this).scrollTop() > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }
    });
    
    
    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });
    
    
    //===== Counter Up
    
    $('.counter').counterUp({
        delay: 10,
        time: 3000
    });
    
    
    //===== Slick testimonial Slied
    
    $('.student-slied').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
    });
    
    
    
    //===== Nice Select
    
    $('select').niceSelect();
    
    
    
    //===== Count Down
    
    $('[data-countdown]').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<div class="count-down-time"><div class="singel-count"><span class="number">%D :</span><span class="title">Days</span></div><div class="singel-count"><span class="number">%H :</span><span class="title">Hours</span></div><div class="singel-count"><span class="number">%M :</span><span class="title">Minuits</span></div><div class="singel-count"><span class="number">%S</span><span class="title">Seconds</span></div></div>'));
      });
    });
    
    
    //=====  Rating selection
    
    $('.reviews-form').on('click', '.rate-wrapper .rate .rate-item', function() {
        var self = $(this),
            target = self.parent('.rate');
        target.addClass('selected');
        target.find('.rate-item').removeClass('active');
        self.addClass('active');
    });
        
    
    
    //===== Nice Number
    
    $('input[type="number"]').niceNumber({
        // custom button text
        buttonDecrement: "<i class='fa fa-sort-asc' ></i>",
        buttonIncrement: "<i class='fa fa-sort-desc' ></i>",

    });

    
    
    //===== Magnific Popup
    
    $('.shop-items').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });
    

    // index.php

    
        function validateForm() {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phonePattern = /^[0-9]+$/;

            if (!name) {
                alert("Please enter your name.");
                return false;
            }

            if (!email || !emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            if (!phone || !phonePattern.test(phone)) {
                alert("Please enter a valid phone number with digits only.");
                return false;
            }

            alert("Form submitted successfully!");
            return true;
        }
    
    // <!-- select course -->
    
        document.getElementById('search-button').addEventListener('click', function() {
            var selectedCourse = document.getElementById('course-select').value;
            var searchKeyword = document.getElementById('search-keyword').value;

            if (selectedCourse) {
                // Redirect to the selected course page
                window.location.href = selectedCourse + '?search=' + encodeURIComponent(searchKeyword);
            } else {
                alert('Please select a course.');
            }
        });
    
    
        $(document).ready(function() {
            // Show additional info when a course is selected
            $('#course-select').change(function() {
                if ($(this).val()) {
                    $('#additional-info').show(); // Show the additional info div
                } else {
                    $('#additional-info').hide(); // Hide the additional info div if no course is selected
                }
            });

            // Handle search button click
            $('#search-button').click(function() {
                var selectedCourse = $('#course-select').val();
                var searchKeyword = $('#search-keyword').val();

                if (selectedCourse) {
                    // Redirect to the selected course page with the search keyword
                    window.location.href = selectedCourse + '?search=' + encodeURIComponent(searchKeyword);
                } else {
                    // Redirect to home page if no course is selected
                    window.location.href = 'index.php'; // Change 'index.html' to your home page URL
                }
            });
        });


        // Enquiry page

        $(document).ready(function () {
          // Check if the popup should be displayed
          if (!sessionStorage.getItem("enquiry_shown")) {
              $("#popupWrapper").fadeIn();
          } else {
              $("#popupWrapper").hide();
          }
      
          // Close popup and set session storage
          $(".popup-close-btn").click(function () {
              $("#popupWrapper").fadeOut();
              sessionStorage.setItem("enquiry_shown", "true");
              window.location.href = "index.php"; // Redirect after closing
          });
      
          // Handle form submission
          $("#enquiryForm").submit(function (event) {
              event.preventDefault(); // Prevent default form submission
      
              // Get form data
              var formData = $(this).serialize();
      
              $.ajax({
                  type: "POST",
                  url: "submit_enquiry.php", // Change to your PHP file handling form submission
                  data: formData,
                  success: function (response) {
                      if (response.trim() === "success") {
                          sessionStorage.setItem("enquiry_shown", "true"); // Store session data
                          Swal.fire({
                              title: "Success!",
                              text: "Your enquiry has been submitted successfully!",
                              icon: "success"
                          }).then(() => {
                              window.location.href = "thank_you.php"; // Redirect after submission
                          });
                      } else {
                          Swal.fire({
                              title: "Error!",
                              text: response,
                              icon: "error"
                          });
                      }
                  },
                  error: function () {
                      Swal.fire({
                          title: "Error!",
                          text: "Something went wrong. Please try again.",
                          icon: "error"
                      });
                  }
              });
          });
      });
      // enquiry validation
      async function validateForm() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;

        if (name && email && phone) {
            // Prepare form data
            const formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('phone', phone);

            try {
                const response = await fetch('', { // PHP file to handle data
                    method: 'POST',
                    body: formData,
                });

                const result = await response.text();

                if (response.ok) {
                    alert(result);
                    closePopup();
                    window.location.href = 'index.php'; // Redirect to a thank-you page
                } else {
                    alert('Submission failed. Please try again.');
                }
            } catch (error) {
                console.error('Error submitting form:', error);
                alert('An error occurred. Please try again.');
            }
        } else {
            alert('Please fill in all fields.');
        }
    }
    // scrolling page 
    $(document).ready(function () {
      // Smooth scrolling when filling out the form
      $('input, select, textarea').on('focus', function () {
          $('html, body').animate({
              scrollTop: $(this).offset().top - 50
          }, 500);
      });

      // Prevent dropdown from being too long
      $('#course').css('max-height', '40px');
  });
  // redirect fun

  function closePopup() {
    document.getElementById('popupWrapper').style.display = 'none';
    window.location.href = 'index.php'; // Redirect after closing
}
    
   
});