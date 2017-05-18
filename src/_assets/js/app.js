import _ from 'lodash';
import $ from 'jquery';
import 'jquery-ui';

function spreadItemsRandomly() {
  const $container = $('.work-pile__items');
  const containerWidth = $container.width();
  const containerHeight = $container.height();
  $('.work-pile__item').each((index, el) => {
    const $el = $(el);
    const posX = Math.round(Math.random() * (containerWidth - $el.width()));
    const posY = Math.round(Math.random() * (containerHeight - $el.height()));
    $el.css({
      left: posX,
      top: posY
    });
  });
}

function makeItemsDraggable() {
  const canvasWidth = $('.work-pile__items').width();
  const canvasHeight = $('.work-pile__items').height();
  $('.work-pile__item').each((index, el) => {
    const $el = $(el);
    const width = $el.width();
    const height = $el.height();
    const left = parseFloat($el.attr('data-start-x'), 10);
    const top = parseFloat($el.attr('data-start-y'), 10);
    $el.css({
      left: (left * canvasWidth) - (left * width),
      top: (top * canvasHeight) - (top * height)
    }).draggable({
      containment: 'parent',
      stack: '.work-pile__item'
    }).fadeIn(250);
  });
}

$(function() {
  let $title = $('.site-headline__title h1');
  let $excerpt = $('.site-headline__caption p');
  const origTitle = $title.text();
  const origExcerpt = $excerpt.text();
  // Give non-hovered work items a class
  $('.work-pile__item').hover(function() {
    const $el = $(this);
    $el.siblings().addClass('work-pile__item--blurred');
    $title.text($el.attr('data-title'));
    $excerpt.text($el.attr('data-excerpt'));
  }, function() {
    const $el = $(this);
    $el.siblings().removeClass('work-pile__item--blurred');
    $title.text(origTitle);
    $excerpt.text(origExcerpt);
  });

  _.delay(function() {
    //spreadItemsRandomly();
    makeItemsDraggable();
  }, 0);
});
