(function($) {
    ({
    init: function() {
      var self = this
      $(function() {
        self.setSmoothScroll()
        self.setUaClass()
        self.feature()
        self.accordion()
        self.download()
        self.readmore()
      })
    },

    setUaClass: function() {
      var self = this
      var ua = navigator.userAgent
      var body = $('body')

      if (typeof window.orientation !== 'undefined') {
        $.isMobile = true
        body.addClass('mobile')
      } else {
        body.addClass('pc');
      }

      if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPad') > 0) {
        body.addClass('ios')
      } else if (ua.indexOf('Android') > 0) {
        body.addClass('android')
      }
    },

    /**
     *  スムーススクロール
     */
    setSmoothScroll: function() {
      var anchors = $('a[href^="#"]');
      var win = $(window);

      if($('.c-stickyBars').length > 0) {
        _sticky = $('.c-stickyBars').outerHeight();
        $(".c-sticky-nav_list").find("a").click(function() {
          $(this).parent().addClass("active").end().parent().siblings().removeClass("active");
        });
      } else _sticky = $('.l-header').outerHeight();

      var jump = function(e) {
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
      $(document).ready(function() {
        if(location.hash) {
          jump();
        }
        $('a[href^="#"]').bind('click', jump)
      })
    },

    feature: function() {
      // Mobile menu
      $('.dropdown').on('show.bs.dropdown', function(){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
      });

      // ADD SLIDEUP ANIMATION TO DROPDOWN
      $('.dropdown').on('hide.bs.dropdown', function(){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(400, function(){
          $('.dropdown').removeClass('open');
          $('.dropdown').find('.dropdown-toggle').attr('aria-expanded','false');
        });
      });

      $('.dropdown-submenu .dropdown-toggle').on("click", function(e){
				$(this).next('.dropdown-menu').first().stop(true, true).slideToggle();
				$(this).parents('.dropdown-submenu').siblings().find('.dropdown-menu').stop(true, true).slideUp();
				e.stopPropagation();
				e.preventDefault();
      });
      
      if($.isMobile) {
				$(document).on("click", function(e) {
					var $trigger = $(".dropdown-toggle");
			        if($trigger !== event.target && !$trigger.has(event.target).length){
			            $trigger.next(".dropdown-menu").slideUp();
			        }
				});
			} else {
				$('.head-menu-items > .dropdown-submenu').hover(function() {
		            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		        }, function() {
		            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		        });
      }

      $('.list-featured').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 2000,
        infinite: false,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
            }
          }
        ]
      });
      
      $(window).on('load resize', function() {
        _height = $(window).height() - 50;
        $('.navMenu > .dropdown-menu').css('max-height', _height + 'px');
      })
    },

    accordion: function() {
      var stop = false;
      $('.accordion').each(function() {
        var _panel = $(this).find('> .panel');
        _panel
          .find('> .panel-content')
          .hide()
        _panel
          .find('> .panel-content.active')
          .show()
      })
      $('.accordion-control').on('click', function(e) {
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
          _this_panel.removeClass('active').slideUp(500, function() {
            stop = false
          })
        } else {
          _this_panel.addClass('active').slideDown(500, function() {
            stop = false
          })
        }
      })
    },

    download: function() {

      $('#contactForm').on('shown.bs.modal', function () {
        $('.wpcf7-response-output').hide();
      })

      $('.form-download').each(function() {
        var _this = $(this);
        _this.find('.btn-downloadall').prop("disabled", true);
        _this.find('input:checkbox').click(function() {
          if ($(this).is(':checked')) {
            _this.find('.btn-downloadall').prop("disabled", false);
          } else {
            if (_this.find('.chk').filter(':checked').length < 1){
              _this.find('.btn-downloadall').attr('disabled',true);
            }
          }
        });
      })

      var type_links = jQuery('.download-tabs-nav li span');
      type_links.on('click', function(e){
        e.preventDefault();
        el = $(this);
        var value = el.attr("data-href");
        if(value !== 'all') {
          $('.files-list li').hide();
          $('.files-list .' + value).show();
        } else {
          $('.files-list li').show();
        }
        $('#all').html(el.html());
        jQuery( "li" ).removeClass( "current" );
        jQuery(this).closest('li').addClass("current");
      });

      // チェックボックス（リスト）生成
      var $docs = $(".files-list input[name^=files]"),
      arrChkId = [],
      arrName = [],
      arrTitle = [],
      $btns = $('.btn-downloadall');
      
      function setCurIds() {
        arrChkId = [];
        // チェック済みID設定
        $docs.each(function () {
            var $chkId = $(this),
                curId = $chkId.val();
            if(curId) {
              if (!arrName[$chkId.val()]) {
                  // IDごとの資料名が無ければ追加（ページ表示時点）
                  arrName[curId] = $chkId.parents('.checkbox').siblings(".file-name").text();
              }
              if ($chkId.prop("checked")) {
                  // チェックIDを保持
                  arrChkId.push(curId);
              }
            }
        });
        if (arrChkId.length < 1) {
            $btns.addClass("disabled");
        } else {
            $btns.removeClass("disabled");
        }
        // console.log(arrChkId);
        return true;
      }
      function setIds(arrIds) {
        var str = "",
          idx = 0,
          c_id = 0;
          arrIds = $.makeArray(arrIds);
        if (arrIds.length < 1) {
            // IDがない
            return false;
        }
        str = "<ul>";
        for (idx in arrIds) {
            if (arrIds.hasOwnProperty(idx)) {
                c_id = arrIds[idx];
                if (arrName[c_id]) {
                    str += "<li><label>";
                    str += '<input type="checkbox" checked="checked" name="selectdoc[]" value="' + c_id + '"/>';
                    str += arrName[c_id] + "</label></li>\n";
                }
            }
        }
        str += "</ul>\n";
        // console.log(str);
        // ポップアップ内チェックボックスを変更
        $("#selectdoc").find(".wpcf7-form-control").html(str);
      }
      // チェックしたチェックボックスをポップアップに表示
      function setAllIds() {
        return setIds(arrChkId);
      }
      function popupChkd() {
        if ($(this).hasClass("disabled")) {
          alert('ダウンロードする資料にチェックを入れてください。');
        } else {
          setAllIds();
          $('#contactForm').modal('show');
        }
        return false;
      }

      setCurIds();
      $docs.on("change", setCurIds);
      $btns.on("click", popupChkd);

      $(".file-url_download").each(function () {
        var $singleBtn = $(this),
            $doc = $singleBtn.parents('.file-url').siblings(".checkbox").find("input[name^=files]"),
            curId = $doc.val();
            singlePopup = function () {
                if (curId) {
                  $('#contactForm').modal('show');
                  setIds(curId);
                } else {
                    // 念のためIDが無ければメッセージ表示
                    alert("申し訳ありませんが、資料ファイルが見つかりません。");
                    return false;
                }
                return false;
            };
        $singleBtn.on("click", singlePopup);
      });
      document.addEventListener( 'wpcf7mailsent', function( event ) {
        $('#contactForm').modal('hide');
      }, false );
    },

    readmore: function() {
        var showChar = 67;
        var ellipsestext = "...";
        var moretext = "続きを読む";
        // var lesstext = "less";

        if($('.moreTxt').length) {
          $('.moreTxt').each(function() {
            var content = $(this).html();
        
            if(content.length > showChar) {
        
              var c = content.substr(0, showChar);
              var h = content.substr(showChar-1, content.length - showChar);
        
              var html = c + '<span class="moreelipses">'+ellipsestext+'</span><span class="morecontent"><span>' + h + '</span><a href="" class="morelink">'+moretext+'</a></span>';
        
              $(this).html(html);
            }
        
          });
        }
      
        $(".morelink").click(function(){
          if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
          } else {
            $(this).addClass("less");
            $(this).hide();
            // $(this).html(lesstext);
          }
          $(this).parent().prev().toggle();
          $(this).prev().toggle();
          return false;
        });
    }

  }.init())
})(jQuery)
