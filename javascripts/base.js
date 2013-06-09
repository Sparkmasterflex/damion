(function() {
  var expand_image, reset_page, set_dimensions, toggle_page;

  $(function() {
    $('a[rel=external]').bind('click', function() {
      return this.target = "_blank";
    });
    $('nav a').click(function(e) {
      reset_page();
      $.when(toggle_page($(e.target).attr('class'))).then(function() {
        return $('#content').packery();
      });
      return false;
    });
    $('.item').click(function(e) {
      var $el;
      $el = $(e.target).parents('.item').length > 0 ? $(e.target).parents('.item') : $(e.target);
      if (!$el.hasClass('img-only')) {
        reset_page();
        return $el.find('.white').slideToggle('fast', function() {
          return $('#content').packery();
        });
      }
    });
    return $('.img-only').click(function(e) {
      var $el;
      reset_page();
      $el = $(e.target).parents('.img-only').length > 0 ? $(e.target).parents('.img-only') : $(e.target);
      return expand_image($el);
    });
  });

  $(window).load(function() {
    return $.when(set_dimensions()).then(function() {
      return $.when($('#content').randomize('.item')).then(function() {
        return $('#content').packery({
          itemSelector: '.item',
          gutter: 10
        });
      });
    });
  });

  toggle_page = function(klass) {
    var el, _i, _len, _ref, _results;
    switch (klass) {
      case 'about':
        $('.item.cartoons, .item.games').fadeOut('fast');
        $('.item.about').fadeIn('fast').find('.white').slideDown('fast');
        _ref = $('.item.about.img-only');
        _results = [];
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
          el = _ref[_i];
          _results.push(expand_image($(el)));
        }
        return _results;
        break;
      case 'cartoons':
        $('.item.about, .item.games').fadeOut('fast');
        return $('.item.cartoons').fadeIn('fast').find('.white').slideDown('fast');
      case 'games':
        $('.item.about, .item.cartoons').fadeOut('fast');
        return $('.item.games').fadeIn('fast').find('.white').slideDown('fast');
      default:
        reset_page();
        return $('.item').fadeIn('fast');
    }
  };

  set_dimensions = function() {
    return $.each($('.item'), function(i, el) {
      var $img;
      if (!$(el).hasClass('img-only')) {
        $img = $(el).find('img');
        $(el).css({
          width: $img.width()
        });
        return $(el).find('.white').hide();
      } else {
        $img = $($(el).find('img'));
        $(el).attr('data-width', $img.width());
        $(el).attr('data-height', $img.height());
        return $img.css("width", "200%");
      }
    });
  };

  expand_image = function($el) {
    var h, w;
    w = $el.data('width');
    h = $el.data('height');
    return $el.animate({
      width: "" + w + "px",
      height: "" + h + "px"
    }, 250, function() {
      $el.find('img').css('width', '100%');
      return $('#content').packery();
    });
  };

  reset_page = function() {
    $('.white').slideUp('fast');
    $('.img-only img').css('width', '200%');
    return $('.img-only').animate({
      width: "200px",
      height: "200px"
    }, 250);
  };

  $.fn.randomize = function(childElem) {
    return this.each(function() {
      var $this, el, elems, _i, _len, _results;
      $this = $(this);
      elems = $this.children(childElem);
      elems.sort(function() {
        return Math.round(Math.random()) - 0.5;
      });
      $this.remove(childElem);
      _results = [];
      for (_i = 0, _len = elems.length; _i < _len; _i++) {
        el = elems[_i];
        _results.push($this.append(el));
      }
      return _results;
    });
  };

}).call(this);
