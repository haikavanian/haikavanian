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
  $('.work-pile__item').each((index, el) => {
    const $el = $(el);
    $el.draggable({
      containment: 'parent',
      stack: '.work-pile__item'
    });
  });
}

$(function() {
  // Give non-hovered work items a class
  $('.work-pile__item').hover(function() {
    const $el = $(this);
    $el.siblings().addClass('work-pile__item--blurred');
  }, function() {
    const $el = $(this);
    $el.siblings().removeClass('work-pile__item--blurred');
  });

  _.delay(function() {
    //spreadItemsRandomly();
    makeItemsDraggable();
  }, 0);
});
