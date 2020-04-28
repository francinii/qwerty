(function() {

    'use strict';
  
    // define variables
    var items = document.querySelectorAll(".timeline li");
    var itemsToAnimate = document.querySelectorAll(".element-fade-in");
    var itemsZoomIn = document.querySelectorAll(".element-zoom-in");
    var itemsFadeRight = document.querySelectorAll(".element-fade-right");
    var itemsFadeLeft = document.querySelectorAll(".element-fade-left");
    // check if an element is in viewport
    // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  
    function callbackFunc() {
      for (var i = 0; i < items.length; i++) {
        if (isElementInViewport(items[i])) {
          items[i].classList.add("in-view");
        }
      }
      for (var i = 0; i < itemsToAnimate.length; i++) {
        if (isElementInViewport(itemsToAnimate[i])) {
          itemsToAnimate[i].classList.add("in-view", 'animated','fadeInUp');
        }
      }
      for (var i = 0; i < itemsZoomIn.length; i++) {
        if (isElementInViewport(itemsZoomIn[i])) {
          itemsZoomIn[i].classList.add("in-view", 'animated','zoomIn');
        }
      }
      for (var i = 0; i < itemsFadeRight.length; i++) {
        if (isElementInViewport(itemsFadeRight[i])) {
          itemsFadeRight[i].classList.add("in-view", 'animated','fadeInRight');
        }
      }
      for (var i = 0; i < itemsFadeLeft.length; i++) {
        if (isElementInViewport(itemsFadeLeft[i])) {
          itemsFadeLeft[i].classList.add("in-view", 'animated','fadeInLeft');
        }
      }
    }
  
    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
  
  })();
  
  