'use strict';

(function($) {
  $(function() {
    if (wooac_vars.style === 'notiny') {
      $.notiny.addTheme('wooac', {
        notification_class: 'notiny-theme-wooac',
      });
    }
  });

  $(document.body).on('added_to_cart', function(e) {
    if (wooac_vars.style === 'default') {
      wooac_hide();
    }

    setTimeout(function() {
      wooac_show();
    }, parseInt(wooac_vars.delay));
  });

  $(document).on('click touch', '#wooac-continue', function(e) {
    e.preventDefault();

    wooac_hide();

    var url = $(this).attr('data-url');

    if (url !== '') {
      window.location.href = url;
    }
  });

  $(document).on('click touch', '.wooac-popup .woosq-btn', function(e) {
    e.preventDefault();

    wooac_hide();
  });

  $(document.body).on('wc_fragments_refreshed', function() {
    if (wooac_vars.added_to_cart === 'yes') {
      setTimeout(function() {
        wooac_show();
      }, parseInt(wooac_vars.delay));
    }
  });
})(jQuery);

function wooac_show() {
  if (jQuery.trim(jQuery('.wooac-wrapper').html()).length) {
    jQuery('body').addClass('wooac-show');

    if (wooac_vars.style === 'notiny') {
      let notiny_image = jQuery('.wooac-notiny img').attr('src');
      let notiny_text = jQuery('.wooac-notiny').text();

      jQuery.notiny({
        theme: 'wooac',
        position: wooac_vars.notiny_position,
        image: notiny_image,
        text: notiny_text,
      });
    } else {
      jQuery.magnificPopup.open({
        items: {
          src: jQuery('.wooac-popup'), type: 'inline',
        }, mainClass: 'mfp-wooac', callbacks: {
          beforeOpen: function() {
            this.st.mainClass = 'mfp-wooac ' + wooac_vars.effect;
          }, afterClose: function() {
            jQuery('body').removeClass('wooac-show');
          },
        },
      });
    }

    jQuery(document.body).trigger('wooac_show');
  }
}

function wooac_hide() {
  jQuery('body').removeClass('wooac-show');
  jQuery.magnificPopup.close();
  jQuery(document.body).trigger('wooac_hide');
}
