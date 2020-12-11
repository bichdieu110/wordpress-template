(function ($) {
  ({
    init: function () {
      var self = this
      $(function () {
        self.setSmoothScroll()
        self.setUaClass()
        self.feature()
        self.accordion()
        self.topSlide()
      })
    },

    setUaClass: function () {
      var self = this
      var ua = navigator.userAgent
      var body = $('body')

      $(window).on('load resize', function () {
        if (typeof window.orientation !== 'undefined') {
          $.isMobile = true
          body.addClass('mobile')
        } else {
          body.addClass('pc');
        }
      });

      if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPad') > 0) {
        body.addClass('ios')
      } else if (ua.indexOf('Android') > 0) {
        body.addClass('android')
      }
    },

    /**
     *  スムーススクロール
     */
    setSmoothScroll: function () {
      var anchors = $('a[href^="#"]');
      var win = $(window);

      if ($('.c-stickyBars').length > 0) {
        _sticky = $('.c-stickyBars').outerHeight();
        $(".c-sticky-nav_list").find("a").click(function () {
          $(this).parent().addClass("active").end().parent().siblings().removeClass("active");
        });
      } else _sticky = $('.l-header').outerHeight();

      var jump = function (e) {
        if (e) {
          e.preventDefault()
          var target = $(this).attr('href')
        } else {
          var target = location.hash
        }
        var hashOffset =
          target === '#' ? { top: 0, left: 0 } : $(target).offset()
        $('html,body').animate({ scrollTop: hashOffset.top - _sticky }, 400, 'swing')
      }
      $(document).ready(function () {
        if (location.hash) {
          jump();
        }
        $('a[href^="#"]').bind('click', jump)
      })
    },

    feature: function () {

      // Mobile menu
      $('.dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
        $('body').addClass('c-menu-open');
      });

      // ADD SLIDEUP ANIMATION TO DROPDOWN
      $('.dropdown').on('hide.bs.dropdown', function () {
        $('body').removeClass('c-menu-open');
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(400, function () {
          $('.dropdown').removeClass('open');
          $('.dropdown').find('.dropdown-toggle').attr('aria-expanded', 'false');
        });
      });

      if ($.isMobile) {
        $(document).on("click", function (e) {
          var $trigger = $(".dropdown-toggle");
          if ($trigger !== event.target && !$trigger.has(event.target).length) {
            $trigger.next(".dropdown-menu").slideUp();
          }
        });
      } else {
        $('.head-menu-items > .dropdown-submenu').hover(function () {
          $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
        }, function () {
          $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
        });
      }

      $(window).on('load resize', function () {
        _height = $(window).height() - 60;
        $('.p-navMenu > .dropdown-menu').css('max-height', _height + 'px');
      })
    },

    accordion: function () {
      var stop = false;
      $('.accordion').each(function () {
        var _panel = $(this).find('> .panel');
        _panel
          .find('> .panel-content')
          .hide()
        _panel
          .find('> .panel-content.active')
          .show()
      })
      $('.accordion-control').on('click', function (e) {
        if (stop) return
        stop = true
        e.preventDefault()
        var _this = $(this).attr('data-target'),
          _this_panel = $(this)
            .closest('.panel')
            .find('> .panel-content')

        if ($(this).hasClass('active')) {
          $(this).removeClass('active')
        } else $(this).addClass('active')

        if (_this_panel.hasClass('active')) {
          _this_panel.removeClass('active').slideUp(500, function () {
            stop = false
          })
        } else {
          _this_panel.addClass('active').slideDown(500, function () {
            stop = false
          })
        }
      })
    },

    topSlide: function () {
      $('.p-mainVisual').slick({
        dots: true,
        // infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '10.5%',
        centerMode: true,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              centerPadding: '0%',
            }
          }
        ]
      });
    },

  }.init())
})(jQuery)
