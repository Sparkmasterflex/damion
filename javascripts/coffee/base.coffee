$ ->
  $('a[rel=external]').bind 'click', () -> this.target = "_blank"
  $('nav a').click (e) ->
    reset_page()
    $.when(toggle_page($(e.target).attr('class'))).then ->
      $('#content').packery()
    false

  $('.item').click (e) ->
    $el = if $(e.target).parents('.item').length > 0 then $(e.target).parents('.item') else $(e.target)
    unless $el.hasClass 'img-only'
      reset_page()
      $el.find('.white').slideToggle 'fast', () -> $('#content').packery()

  $('.img-only').click (e) ->
    reset_page()
    $el = if $(e.target).parents('.img-only').length > 0 then $(e.target).parents('.img-only') else $(e.target)
    expand_image $el


$(window).load () ->
  $.when(set_dimensions()).then ->
    $.when($('#content').randomize('.item')).then ->
      $('#content').packery
        itemSelector: '.item'
        gutter: 10


toggle_page = (klass) ->
  switch klass
    when 'about'
      $('.item.cartoons, .item.games').fadeOut 'fast'
      $('.item.about').fadeIn('fast').find('.white').slideDown 'fast'
      expand_image $(el) for el in $('.item.about.img-only')
    when 'cartoons'
      $('.item.about, .item.games').fadeOut 'fast'
      $('.item.cartoons').fadeIn('fast').find('.white').slideDown 'fast'
    when 'games'
      $('.item.about, .item.cartoons').fadeOut 'fast'
      $('.item.games').fadeIn('fast').find('.white').slideDown 'fast'
    else
      reset_page()
      $('.item').fadeIn('fast')


set_dimensions = () ->
  $.each $('.item'), (i, el) ->
    unless $(el).hasClass 'img-only'
      $img = $(el).find('img')
      $(el).css
        width: $img.width()
      $(el).find('.white').hide()
    else
      $img = $($(el).find('img'))
      $(el).attr('data-width', $img.width())
      $(el).attr('data-height', $img.height())
      $img.css "width", "200%"


expand_image = ($el) ->
  w = $el.data('width')
  h = $el.data('height')
  $el.animate
    width: "#{w}px"
    height: "#{h}px"
  , 250, () -> 
    $el.find('img').css 'width', '100%'
    $('#content').packery()

reset_page = () ->
  $('.white').slideUp 'fast'
  $('.img-only img').css 'width', '200%'
  $('.img-only').animate {width: "200px", height: "200px"}, 250



$.fn.randomize = (childElem) ->
  this.each () ->
    $this = $(this)
    elems = $this.children(childElem)

    elems.sort () -> (Math.round(Math.random())-0.5)
    $this.remove childElem
    $this.append el for el in elems