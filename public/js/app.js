webpackJsonp([0],[
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */
/***/ (function(module, exports) {

// this module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  scopeId,
  cssModules
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  // inject cssModules
  if (cssModules) {
    var computed = Object.create(options.computed || null)
    Object.keys(cssModules).forEach(function (key) {
      var module = cssModules[key]
      computed[key] = function () { return module }
    })
    options.computed = computed
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),
/* 4 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_buefy__ = __webpack_require__(0);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_buefy___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_buefy__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_buefy_lib_buefy_css__ = __webpack_require__(14);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_buefy_lib_buefy_css___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_buefy_lib_buefy_css__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__components_Flatpickr_vue__ = __webpack_require__(15);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__components_Flatpickr_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__components_Flatpickr_vue__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__components_Select2_vue__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__components_Select2_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3__components_Select2_vue__);

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(8);

$(document).ready(function () {
    // new Flatpickr('.flatpickr', {
    //     enableTime: true,
    // });
    $(".flatpickr").flatpickr({
        enableTime: true,
        altInput: true,
        altFormat: "F j, Y h:i K",
        defaultDate: new Date(),
        enableSeconds: true
    });
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

// Vue.component('example', require('./components/Example.vue'));
//




Vue.component("flatpickr", __WEBPACK_IMPORTED_MODULE_2__components_Flatpickr_vue___default.a);
Vue.component("select2", __WEBPACK_IMPORTED_MODULE_3__components_Select2_vue___default.a);
Vue.use(__WEBPACK_IMPORTED_MODULE_0_buefy___default.a, {
    defaultIconPack: 'fa'
});
var app = new Vue({
    el: '.content',
    methods: {
        createSlug: function createSlug(event) {
            //console.log(event);
            // var slug = document.getElementById("title").value;
            var slug = event.toLowerCase();
            slug = slug.replace(/ /g, "-");
            document.getElementById("slug").value = slug;
        }
    }
});

/***/ }),
/* 5 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 6 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ["name", "default-value"]
});

/***/ }),
/* 7 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: {
        name: String,
        id: String,
        multiple: String
    },

    computed: {
        isMultiple: function isMultiple() {
            if (this.multiple) {
                return this.multiple.toLocaleString().localeCompare("true") ? "multiple" : "";
            }
        }
    }
});

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {


//window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

//window.$ = window.jQuery = require('jquery');
__webpack_require__(9);

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = __webpack_require__(2);
// require('vue-resource');
window.Flatpickr = __webpack_require__(1);

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

// Vue.http.interceptors.push((request, next) => {
//     request.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;
//
//     next();
// });

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

/***/ }),
/* 9 */
/***/ (function(module, exports) {

/*!
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */

if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

+function ($) {
  'use strict';
  var version = $.fn.jquery.split(' ')[0].split('.')
  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 3)) {
    throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4')
  }
}(jQuery);

/* ========================================================================
 * Bootstrap: transition.js v3.3.7
 * http://getbootstrap.com/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      WebkitTransition : 'webkitTransitionEnd',
      MozTransition    : 'transitionend',
      OTransition      : 'oTransitionEnd otransitionend',
      transition       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }

    return false // explicit for ie8 (  ._.)
  }

  // http://blog.alexmaccaw.com/css-transitions
  $.fn.emulateTransitionEnd = function (duration) {
    var called = false
    var $el = this
    $(this).one('bsTransitionEnd', function () { called = true })
    var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  $(function () {
    $.support.transition = transitionEnd()

    if (!$.support.transition) return

    $.event.special.bsTransitionEnd = {
      bindType: $.support.transition.end,
      delegateType: $.support.transition.end,
      handle: function (e) {
        if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
      }
    }
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: alert.js v3.3.7
 * http://getbootstrap.com/javascript/#alerts
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss="alert"]'
  var Alert   = function (el) {
    $(el).on('click', dismiss, this.close)
  }

  Alert.VERSION = '3.3.7'

  Alert.TRANSITION_DURATION = 150

  Alert.prototype.close = function (e) {
    var $this    = $(this)
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = $(selector === '#' ? [] : selector)

    if (e) e.preventDefault()

    if (!$parent.length) {
      $parent = $this.closest('.alert')
    }

    $parent.trigger(e = $.Event('close.bs.alert'))

    if (e.isDefaultPrevented()) return

    $parent.removeClass('in')

    function removeElement() {
      // detach from parent, fire event then clean up data
      $parent.detach().trigger('closed.bs.alert').remove()
    }

    $.support.transition && $parent.hasClass('fade') ?
      $parent
        .one('bsTransitionEnd', removeElement)
        .emulateTransitionEnd(Alert.TRANSITION_DURATION) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.alert')

      if (!data) $this.data('bs.alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.alert

  $.fn.alert             = Plugin
  $.fn.alert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  $.fn.alert.noConflict = function () {
    $.fn.alert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  $(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}(jQuery);

/* ========================================================================
 * Bootstrap: button.js v3.3.7
 * http://getbootstrap.com/javascript/#buttons
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================

  var Button = function (element, options) {
    this.$element  = $(element)
    this.options   = $.extend({}, Button.DEFAULTS, options)
    this.isLoading = false
  }

  Button.VERSION  = '3.3.7'

  Button.DEFAULTS = {
    loadingText: 'loading...'
  }

  Button.prototype.setState = function (state) {
    var d    = 'disabled'
    var $el  = this.$element
    var val  = $el.is('input') ? 'val' : 'html'
    var data = $el.data()

    state += 'Text'

    if (data.resetText == null) $el.data('resetText', $el[val]())

    // push to event loop to allow forms to submit
    setTimeout($.proxy(function () {
      $el[val](data[state] == null ? this.options[state] : data[state])

      if (state == 'loadingText') {
        this.isLoading = true
        $el.addClass(d).attr(d, d).prop(d, true)
      } else if (this.isLoading) {
        this.isLoading = false
        $el.removeClass(d).removeAttr(d).prop(d, false)
      }
    }, this), 0)
  }

  Button.prototype.toggle = function () {
    var changed = true
    var $parent = this.$element.closest('[data-toggle="buttons"]')

    if ($parent.length) {
      var $input = this.$element.find('input')
      if ($input.prop('type') == 'radio') {
        if ($input.prop('checked')) changed = false
        $parent.find('.active').removeClass('active')
        this.$element.addClass('active')
      } else if ($input.prop('type') == 'checkbox') {
        if (($input.prop('checked')) !== this.$element.hasClass('active')) changed = false
        this.$element.toggleClass('active')
      }
      $input.prop('checked', this.$element.hasClass('active'))
      if (changed) $input.trigger('change')
    } else {
      this.$element.attr('aria-pressed', !this.$element.hasClass('active'))
      this.$element.toggleClass('active')
    }
  }


  // BUTTON PLUGIN DEFINITION
  // ========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.button')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.button', (data = new Button(this, options)))

      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  var old = $.fn.button

  $.fn.button             = Plugin
  $.fn.button.Constructor = Button


  // BUTTON NO CONFLICT
  // ==================

  $.fn.button.noConflict = function () {
    $.fn.button = old
    return this
  }


  // BUTTON DATA-API
  // ===============

  $(document)
    .on('click.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      var $btn = $(e.target).closest('.btn')
      Plugin.call($btn, 'toggle')
      if (!($(e.target).is('input[type="radio"], input[type="checkbox"]'))) {
        // Prevent double click on radios, and the double selections (so cancellation) on checkboxes
        e.preventDefault()
        // The target component still receive the focus
        if ($btn.is('input,button')) $btn.trigger('focus')
        else $btn.find('input:visible,button:visible').first().trigger('focus')
      }
    })
    .on('focus.bs.button.data-api blur.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      $(e.target).closest('.btn').toggleClass('focus', /^focus(in)?$/.test(e.type))
    })

}(jQuery);

/* ========================================================================
 * Bootstrap: carousel.js v3.3.7
 * http://getbootstrap.com/javascript/#carousel
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CAROUSEL CLASS DEFINITION
  // =========================

  var Carousel = function (element, options) {
    this.$element    = $(element)
    this.$indicators = this.$element.find('.carousel-indicators')
    this.options     = options
    this.paused      = null
    this.sliding     = null
    this.interval    = null
    this.$active     = null
    this.$items      = null

    this.options.keyboard && this.$element.on('keydown.bs.carousel', $.proxy(this.keydown, this))

    this.options.pause == 'hover' && !('ontouchstart' in document.documentElement) && this.$element
      .on('mouseenter.bs.carousel', $.proxy(this.pause, this))
      .on('mouseleave.bs.carousel', $.proxy(this.cycle, this))
  }

  Carousel.VERSION  = '3.3.7'

  Carousel.TRANSITION_DURATION = 600

  Carousel.DEFAULTS = {
    interval: 5000,
    pause: 'hover',
    wrap: true,
    keyboard: true
  }

  Carousel.prototype.keydown = function (e) {
    if (/input|textarea/i.test(e.target.tagName)) return
    switch (e.which) {
      case 37: this.prev(); break
      case 39: this.next(); break
      default: return
    }

    e.preventDefault()
  }

  Carousel.prototype.cycle = function (e) {
    e || (this.paused = false)

    this.interval && clearInterval(this.interval)

    this.options.interval
      && !this.paused
      && (this.interval = setInterval($.proxy(this.next, this), this.options.interval))

    return this
  }

  Carousel.prototype.getItemIndex = function (item) {
    this.$items = item.parent().children('.item')
    return this.$items.index(item || this.$active)
  }

  Carousel.prototype.getItemForDirection = function (direction, active) {
    var activeIndex = this.getItemIndex(active)
    var willWrap = (direction == 'prev' && activeIndex === 0)
                || (direction == 'next' && activeIndex == (this.$items.length - 1))
    if (willWrap && !this.options.wrap) return active
    var delta = direction == 'prev' ? -1 : 1
    var itemIndex = (activeIndex + delta) % this.$items.length
    return this.$items.eq(itemIndex)
  }

  Carousel.prototype.to = function (pos) {
    var that        = this
    var activeIndex = this.getItemIndex(this.$active = this.$element.find('.item.active'))

    if (pos > (this.$items.length - 1) || pos < 0) return

    if (this.sliding)       return this.$element.one('slid.bs.carousel', function () { that.to(pos) }) // yes, "slid"
    if (activeIndex == pos) return this.pause().cycle()

    return this.slide(pos > activeIndex ? 'next' : 'prev', this.$items.eq(pos))
  }

  Carousel.prototype.pause = function (e) {
    e || (this.paused = true)

    if (this.$element.find('.next, .prev').length && $.support.transition) {
      this.$element.trigger($.support.transition.end)
      this.cycle(true)
    }

    this.interval = clearInterval(this.interval)

    return this
  }

  Carousel.prototype.next = function () {
    if (this.sliding) return
    return this.slide('next')
  }

  Carousel.prototype.prev = function () {
    if (this.sliding) return
    return this.slide('prev')
  }

  Carousel.prototype.slide = function (type, next) {
    var $active   = this.$element.find('.item.active')
    var $next     = next || this.getItemForDirection(type, $active)
    var isCycling = this.interval
    var direction = type == 'next' ? 'left' : 'right'
    var that      = this

    if ($next.hasClass('active')) return (this.sliding = false)

    var relatedTarget = $next[0]
    var slideEvent = $.Event('slide.bs.carousel', {
      relatedTarget: relatedTarget,
      direction: direction
    })
    this.$element.trigger(slideEvent)
    if (slideEvent.isDefaultPrevented()) return

    this.sliding = true

    isCycling && this.pause()

    if (this.$indicators.length) {
      this.$indicators.find('.active').removeClass('active')
      var $nextIndicator = $(this.$indicators.children()[this.getItemIndex($next)])
      $nextIndicator && $nextIndicator.addClass('active')
    }

    var slidEvent = $.Event('slid.bs.carousel', { relatedTarget: relatedTarget, direction: direction }) // yes, "slid"
    if ($.support.transition && this.$element.hasClass('slide')) {
      $next.addClass(type)
      $next[0].offsetWidth // force reflow
      $active.addClass(direction)
      $next.addClass(direction)
      $active
        .one('bsTransitionEnd', function () {
          $next.removeClass([type, direction].join(' ')).addClass('active')
          $active.removeClass(['active', direction].join(' '))
          that.sliding = false
          setTimeout(function () {
            that.$element.trigger(slidEvent)
          }, 0)
        })
        .emulateTransitionEnd(Carousel.TRANSITION_DURATION)
    } else {
      $active.removeClass('active')
      $next.addClass('active')
      this.sliding = false
      this.$element.trigger(slidEvent)
    }

    isCycling && this.cycle()

    return this
  }


  // CAROUSEL PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.carousel')
      var options = $.extend({}, Carousel.DEFAULTS, $this.data(), typeof option == 'object' && option)
      var action  = typeof option == 'string' ? option : options.slide

      if (!data) $this.data('bs.carousel', (data = new Carousel(this, options)))
      if (typeof option == 'number') data.to(option)
      else if (action) data[action]()
      else if (options.interval) data.pause().cycle()
    })
  }

  var old = $.fn.carousel

  $.fn.carousel             = Plugin
  $.fn.carousel.Constructor = Carousel


  // CAROUSEL NO CONFLICT
  // ====================

  $.fn.carousel.noConflict = function () {
    $.fn.carousel = old
    return this
  }


  // CAROUSEL DATA-API
  // =================

  var clickHandler = function (e) {
    var href
    var $this   = $(this)
    var $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) // strip for ie7
    if (!$target.hasClass('carousel')) return
    var options = $.extend({}, $target.data(), $this.data())
    var slideIndex = $this.attr('data-slide-to')
    if (slideIndex) options.interval = false

    Plugin.call($target, options)

    if (slideIndex) {
      $target.data('bs.carousel').to(slideIndex)
    }

    e.preventDefault()
  }

  $(document)
    .on('click.bs.carousel.data-api', '[data-slide]', clickHandler)
    .on('click.bs.carousel.data-api', '[data-slide-to]', clickHandler)

  $(window).on('load', function () {
    $('[data-ride="carousel"]').each(function () {
      var $carousel = $(this)
      Plugin.call($carousel, $carousel.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: collapse.js v3.3.7
 * http://getbootstrap.com/javascript/#collapse
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

/* jshint latedef: false */

+function ($) {
  'use strict';

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================

  var Collapse = function (element, options) {
    this.$element      = $(element)
    this.options       = $.extend({}, Collapse.DEFAULTS, options)
    this.$trigger      = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
                           '[data-toggle="collapse"][data-target="#' + element.id + '"]')
    this.transitioning = null

    if (this.options.parent) {
      this.$parent = this.getParent()
    } else {
      this.addAriaAndCollapsedClass(this.$element, this.$trigger)
    }

    if (this.options.toggle) this.toggle()
  }

  Collapse.VERSION  = '3.3.7'

  Collapse.TRANSITION_DURATION = 350

  Collapse.DEFAULTS = {
    toggle: true
  }

  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass('width')
    return hasWidth ? 'width' : 'height'
  }

  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass('in')) return

    var activesData
    var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

    if (actives && actives.length) {
      activesData = actives.data('bs.collapse')
      if (activesData && activesData.transitioning) return
    }

    var startEvent = $.Event('show.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    if (actives && actives.length) {
      Plugin.call(actives, 'hide')
      activesData || actives.data('bs.collapse', null)
    }

    var dimension = this.dimension()

    this.$element
      .removeClass('collapse')
      .addClass('collapsing')[dimension](0)
      .attr('aria-expanded', true)

    this.$trigger
      .removeClass('collapsed')
      .attr('aria-expanded', true)

    this.transitioning = 1

    var complete = function () {
      this.$element
        .removeClass('collapsing')
        .addClass('collapse in')[dimension]('')
      this.transitioning = 0
      this.$element
        .trigger('shown.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    var scrollSize = $.camelCase(['scroll', dimension].join('-'))

    this.$element
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
  }

  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass('in')) return

    var startEvent = $.Event('hide.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var dimension = this.dimension()

    this.$element[dimension](this.$element[dimension]())[0].offsetHeight

    this.$element
      .addClass('collapsing')
      .removeClass('collapse in')
      .attr('aria-expanded', false)

    this.$trigger
      .addClass('collapsed')
      .attr('aria-expanded', false)

    this.transitioning = 1

    var complete = function () {
      this.transitioning = 0
      this.$element
        .removeClass('collapsing')
        .addClass('collapse')
        .trigger('hidden.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    this.$element
      [dimension](0)
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
  }

  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass('in') ? 'hide' : 'show']()
  }

  Collapse.prototype.getParent = function () {
    return $(this.options.parent)
      .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
      .each($.proxy(function (i, element) {
        var $element = $(element)
        this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
      }, this))
      .end()
  }

  Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
    var isOpen = $element.hasClass('in')

    $element.attr('aria-expanded', isOpen)
    $trigger
      .toggleClass('collapsed', !isOpen)
      .attr('aria-expanded', isOpen)
  }

  function getTargetFromTrigger($trigger) {
    var href
    var target = $trigger.attr('data-target')
      || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

    return $(target)
  }


  // COLLAPSE PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.collapse')
      var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
      if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.collapse

  $.fn.collapse             = Plugin
  $.fn.collapse.Constructor = Collapse


  // COLLAPSE NO CONFLICT
  // ====================

  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old
    return this
  }


  // COLLAPSE DATA-API
  // =================

  $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
    var $this   = $(this)

    if (!$this.attr('data-target')) e.preventDefault()

    var $target = getTargetFromTrigger($this)
    var data    = $target.data('bs.collapse')
    var option  = data ? 'toggle' : $this.data()

    Plugin.call($target, option)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.3.7
 * http://getbootstrap.com/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.dropdown-backdrop'
  var toggle   = '[data-toggle="dropdown"]'
  var Dropdown = function (element) {
    $(element).on('click.bs.dropdown', this.toggle)
  }

  Dropdown.VERSION = '3.3.7'

  function getParent($this) {
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = selector && $(selector)

    return $parent && $parent.length ? $parent : $this.parent()
  }

  function clearMenus(e) {
    if (e && e.which === 3) return
    $(backdrop).remove()
    $(toggle).each(function () {
      var $this         = $(this)
      var $parent       = getParent($this)
      var relatedTarget = { relatedTarget: this }

      if (!$parent.hasClass('open')) return

      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this.attr('aria-expanded', 'false')
      $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
    })
  }

  Dropdown.prototype.toggle = function (e) {
    var $this = $(this)

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div'))
          .addClass('dropdown-backdrop')
          .insertAfter($(this))
          .on('click', clearMenus)
      }

      var relatedTarget = { relatedTarget: this }
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this
        .trigger('focus')
        .attr('aria-expanded', 'true')

      $parent
        .toggleClass('open')
        .trigger($.Event('shown.bs.dropdown', relatedTarget))
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

    var $this = $(this)

    e.preventDefault()
    e.stopPropagation()

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus')
      return $this.trigger('click')
    }

    var desc = ' li:not(.disabled):visible a'
    var $items = $parent.find('.dropdown-menu' + desc)

    if (!$items.length) return

    var index = $items.index(e.target)

    if (e.which == 38 && index > 0)                 index--         // up
    if (e.which == 40 && index < $items.length - 1) index++         // down
    if (!~index)                                    index = 0

    $items.eq(index).trigger('focus')
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.dropdown')

      if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.dropdown

  $.fn.dropdown             = Plugin
  $.fn.dropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document)
    .on('click.bs.dropdown.data-api', clearMenus)
    .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
    .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);

/* ========================================================================
 * Bootstrap: modal.js v3.3.7
 * http://getbootstrap.com/javascript/#modals
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // MODAL CLASS DEFINITION
  // ======================

  var Modal = function (element, options) {
    this.options             = options
    this.$body               = $(document.body)
    this.$element            = $(element)
    this.$dialog             = this.$element.find('.modal-dialog')
    this.$backdrop           = null
    this.isShown             = null
    this.originalBodyPad     = null
    this.scrollbarWidth      = 0
    this.ignoreBackdropClick = false

    if (this.options.remote) {
      this.$element
        .find('.modal-content')
        .load(this.options.remote, $.proxy(function () {
          this.$element.trigger('loaded.bs.modal')
        }, this))
    }
  }

  Modal.VERSION  = '3.3.7'

  Modal.TRANSITION_DURATION = 300
  Modal.BACKDROP_TRANSITION_DURATION = 150

  Modal.DEFAULTS = {
    backdrop: true,
    keyboard: true,
    show: true
  }

  Modal.prototype.toggle = function (_relatedTarget) {
    return this.isShown ? this.hide() : this.show(_relatedTarget)
  }

  Modal.prototype.show = function (_relatedTarget) {
    var that = this
    var e    = $.Event('show.bs.modal', { relatedTarget: _relatedTarget })

    this.$element.trigger(e)

    if (this.isShown || e.isDefaultPrevented()) return

    this.isShown = true

    this.checkScrollbar()
    this.setScrollbar()
    this.$body.addClass('modal-open')

    this.escape()
    this.resize()

    this.$element.on('click.dismiss.bs.modal', '[data-dismiss="modal"]', $.proxy(this.hide, this))

    this.$dialog.on('mousedown.dismiss.bs.modal', function () {
      that.$element.one('mouseup.dismiss.bs.modal', function (e) {
        if ($(e.target).is(that.$element)) that.ignoreBackdropClick = true
      })
    })

    this.backdrop(function () {
      var transition = $.support.transition && that.$element.hasClass('fade')

      if (!that.$element.parent().length) {
        that.$element.appendTo(that.$body) // don't move modals dom position
      }

      that.$element
        .show()
        .scrollTop(0)

      that.adjustDialog()

      if (transition) {
        that.$element[0].offsetWidth // force reflow
      }

      that.$element.addClass('in')

      that.enforceFocus()

      var e = $.Event('shown.bs.modal', { relatedTarget: _relatedTarget })

      transition ?
        that.$dialog // wait for modal to slide in
          .one('bsTransitionEnd', function () {
            that.$element.trigger('focus').trigger(e)
          })
          .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
        that.$element.trigger('focus').trigger(e)
    })
  }

  Modal.prototype.hide = function (e) {
    if (e) e.preventDefault()

    e = $.Event('hide.bs.modal')

    this.$element.trigger(e)

    if (!this.isShown || e.isDefaultPrevented()) return

    this.isShown = false

    this.escape()
    this.resize()

    $(document).off('focusin.bs.modal')

    this.$element
      .removeClass('in')
      .off('click.dismiss.bs.modal')
      .off('mouseup.dismiss.bs.modal')

    this.$dialog.off('mousedown.dismiss.bs.modal')

    $.support.transition && this.$element.hasClass('fade') ?
      this.$element
        .one('bsTransitionEnd', $.proxy(this.hideModal, this))
        .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
      this.hideModal()
  }

  Modal.prototype.enforceFocus = function () {
    $(document)
      .off('focusin.bs.modal') // guard against infinite focus loop
      .on('focusin.bs.modal', $.proxy(function (e) {
        if (document !== e.target &&
            this.$element[0] !== e.target &&
            !this.$element.has(e.target).length) {
          this.$element.trigger('focus')
        }
      }, this))
  }

  Modal.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$element.on('keydown.dismiss.bs.modal', $.proxy(function (e) {
        e.which == 27 && this.hide()
      }, this))
    } else if (!this.isShown) {
      this.$element.off('keydown.dismiss.bs.modal')
    }
  }

  Modal.prototype.resize = function () {
    if (this.isShown) {
      $(window).on('resize.bs.modal', $.proxy(this.handleUpdate, this))
    } else {
      $(window).off('resize.bs.modal')
    }
  }

  Modal.prototype.hideModal = function () {
    var that = this
    this.$element.hide()
    this.backdrop(function () {
      that.$body.removeClass('modal-open')
      that.resetAdjustments()
      that.resetScrollbar()
      that.$element.trigger('hidden.bs.modal')
    })
  }

  Modal.prototype.removeBackdrop = function () {
    this.$backdrop && this.$backdrop.remove()
    this.$backdrop = null
  }

  Modal.prototype.backdrop = function (callback) {
    var that = this
    var animate = this.$element.hasClass('fade') ? 'fade' : ''

    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate

      this.$backdrop = $(document.createElement('div'))
        .addClass('modal-backdrop ' + animate)
        .appendTo(this.$body)

      this.$element.on('click.dismiss.bs.modal', $.proxy(function (e) {
        if (this.ignoreBackdropClick) {
          this.ignoreBackdropClick = false
          return
        }
        if (e.target !== e.currentTarget) return
        this.options.backdrop == 'static'
          ? this.$element[0].focus()
          : this.hide()
      }, this))

      if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

      this.$backdrop.addClass('in')

      if (!callback) return

      doAnimate ?
        this.$backdrop
          .one('bsTransitionEnd', callback)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callback()

    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass('in')

      var callbackRemove = function () {
        that.removeBackdrop()
        callback && callback()
      }
      $.support.transition && this.$element.hasClass('fade') ?
        this.$backdrop
          .one('bsTransitionEnd', callbackRemove)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callbackRemove()

    } else if (callback) {
      callback()
    }
  }

  // these following methods are used to handle overflowing modals

  Modal.prototype.handleUpdate = function () {
    this.adjustDialog()
  }

  Modal.prototype.adjustDialog = function () {
    var modalIsOverflowing = this.$element[0].scrollHeight > document.documentElement.clientHeight

    this.$element.css({
      paddingLeft:  !this.bodyIsOverflowing && modalIsOverflowing ? this.scrollbarWidth : '',
      paddingRight: this.bodyIsOverflowing && !modalIsOverflowing ? this.scrollbarWidth : ''
    })
  }

  Modal.prototype.resetAdjustments = function () {
    this.$element.css({
      paddingLeft: '',
      paddingRight: ''
    })
  }

  Modal.prototype.checkScrollbar = function () {
    var fullWindowWidth = window.innerWidth
    if (!fullWindowWidth) { // workaround for missing window.innerWidth in IE8
      var documentElementRect = document.documentElement.getBoundingClientRect()
      fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
    }
    this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth
    this.scrollbarWidth = this.measureScrollbar()
  }

  Modal.prototype.setScrollbar = function () {
    var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10)
    this.originalBodyPad = document.body.style.paddingRight || ''
    if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth)
  }

  Modal.prototype.resetScrollbar = function () {
    this.$body.css('padding-right', this.originalBodyPad)
  }

  Modal.prototype.measureScrollbar = function () { // thx walsh
    var scrollDiv = document.createElement('div')
    scrollDiv.className = 'modal-scrollbar-measure'
    this.$body.append(scrollDiv)
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth
    this.$body[0].removeChild(scrollDiv)
    return scrollbarWidth
  }


  // MODAL PLUGIN DEFINITION
  // =======================

  function Plugin(option, _relatedTarget) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.modal')
      var options = $.extend({}, Modal.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data) $this.data('bs.modal', (data = new Modal(this, options)))
      if (typeof option == 'string') data[option](_relatedTarget)
      else if (options.show) data.show(_relatedTarget)
    })
  }

  var old = $.fn.modal

  $.fn.modal             = Plugin
  $.fn.modal.Constructor = Modal


  // MODAL NO CONFLICT
  // =================

  $.fn.modal.noConflict = function () {
    $.fn.modal = old
    return this
  }


  // MODAL DATA-API
  // ==============

  $(document).on('click.bs.modal.data-api', '[data-toggle="modal"]', function (e) {
    var $this   = $(this)
    var href    = $this.attr('href')
    var $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) // strip for ie7
    var option  = $target.data('bs.modal') ? 'toggle' : $.extend({ remote: !/#/.test(href) && href }, $target.data(), $this.data())

    if ($this.is('a')) e.preventDefault()

    $target.one('show.bs.modal', function (showEvent) {
      if (showEvent.isDefaultPrevented()) return // only register focus restorer if modal will actually get shown
      $target.one('hidden.bs.modal', function () {
        $this.is(':visible') && $this.trigger('focus')
      })
    })
    Plugin.call($target, option, this)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tooltip.js v3.3.7
 * http://getbootstrap.com/javascript/#tooltip
 * Inspired by the original jQuery.tipsy by Jason Frame
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TOOLTIP PUBLIC CLASS DEFINITION
  // ===============================

  var Tooltip = function (element, options) {
    this.type       = null
    this.options    = null
    this.enabled    = null
    this.timeout    = null
    this.hoverState = null
    this.$element   = null
    this.inState    = null

    this.init('tooltip', element, options)
  }

  Tooltip.VERSION  = '3.3.7'

  Tooltip.TRANSITION_DURATION = 150

  Tooltip.DEFAULTS = {
    animation: true,
    placement: 'top',
    selector: false,
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: 'hover focus',
    title: '',
    delay: 0,
    html: false,
    container: false,
    viewport: {
      selector: 'body',
      padding: 0
    }
  }

  Tooltip.prototype.init = function (type, element, options) {
    this.enabled   = true
    this.type      = type
    this.$element  = $(element)
    this.options   = this.getOptions(options)
    this.$viewport = this.options.viewport && $($.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : (this.options.viewport.selector || this.options.viewport))
    this.inState   = { click: false, hover: false, focus: false }

    if (this.$element[0] instanceof document.constructor && !this.options.selector) {
      throw new Error('`selector` option must be specified when initializing ' + this.type + ' on the window.document object!')
    }

    var triggers = this.options.trigger.split(' ')

    for (var i = triggers.length; i--;) {
      var trigger = triggers[i]

      if (trigger == 'click') {
        this.$element.on('click.' + this.type, this.options.selector, $.proxy(this.toggle, this))
      } else if (trigger != 'manual') {
        var eventIn  = trigger == 'hover' ? 'mouseenter' : 'focusin'
        var eventOut = trigger == 'hover' ? 'mouseleave' : 'focusout'

        this.$element.on(eventIn  + '.' + this.type, this.options.selector, $.proxy(this.enter, this))
        this.$element.on(eventOut + '.' + this.type, this.options.selector, $.proxy(this.leave, this))
      }
    }

    this.options.selector ?
      (this._options = $.extend({}, this.options, { trigger: 'manual', selector: '' })) :
      this.fixTitle()
  }

  Tooltip.prototype.getDefaults = function () {
    return Tooltip.DEFAULTS
  }

  Tooltip.prototype.getOptions = function (options) {
    options = $.extend({}, this.getDefaults(), this.$element.data(), options)

    if (options.delay && typeof options.delay == 'number') {
      options.delay = {
        show: options.delay,
        hide: options.delay
      }
    }

    return options
  }

  Tooltip.prototype.getDelegateOptions = function () {
    var options  = {}
    var defaults = this.getDefaults()

    this._options && $.each(this._options, function (key, value) {
      if (defaults[key] != value) options[key] = value
    })

    return options
  }

  Tooltip.prototype.enter = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusin' ? 'focus' : 'hover'] = true
    }

    if (self.tip().hasClass('in') || self.hoverState == 'in') {
      self.hoverState = 'in'
      return
    }

    clearTimeout(self.timeout)

    self.hoverState = 'in'

    if (!self.options.delay || !self.options.delay.show) return self.show()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'in') self.show()
    }, self.options.delay.show)
  }

  Tooltip.prototype.isInStateTrue = function () {
    for (var key in this.inState) {
      if (this.inState[key]) return true
    }

    return false
  }

  Tooltip.prototype.leave = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusout' ? 'focus' : 'hover'] = false
    }

    if (self.isInStateTrue()) return

    clearTimeout(self.timeout)

    self.hoverState = 'out'

    if (!self.options.delay || !self.options.delay.hide) return self.hide()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'out') self.hide()
    }, self.options.delay.hide)
  }

  Tooltip.prototype.show = function () {
    var e = $.Event('show.bs.' + this.type)

    if (this.hasContent() && this.enabled) {
      this.$element.trigger(e)

      var inDom = $.contains(this.$element[0].ownerDocument.documentElement, this.$element[0])
      if (e.isDefaultPrevented() || !inDom) return
      var that = this

      var $tip = this.tip()

      var tipId = this.getUID(this.type)

      this.setContent()
      $tip.attr('id', tipId)
      this.$element.attr('aria-describedby', tipId)

      if (this.options.animation) $tip.addClass('fade')

      var placement = typeof this.options.placement == 'function' ?
        this.options.placement.call(this, $tip[0], this.$element[0]) :
        this.options.placement

      var autoToken = /\s?auto?\s?/i
      var autoPlace = autoToken.test(placement)
      if (autoPlace) placement = placement.replace(autoToken, '') || 'top'

      $tip
        .detach()
        .css({ top: 0, left: 0, display: 'block' })
        .addClass(placement)
        .data('bs.' + this.type, this)

      this.options.container ? $tip.appendTo(this.options.container) : $tip.insertAfter(this.$element)
      this.$element.trigger('inserted.bs.' + this.type)

      var pos          = this.getPosition()
      var actualWidth  = $tip[0].offsetWidth
      var actualHeight = $tip[0].offsetHeight

      if (autoPlace) {
        var orgPlacement = placement
        var viewportDim = this.getPosition(this.$viewport)

        placement = placement == 'bottom' && pos.bottom + actualHeight > viewportDim.bottom ? 'top'    :
                    placement == 'top'    && pos.top    - actualHeight < viewportDim.top    ? 'bottom' :
                    placement == 'right'  && pos.right  + actualWidth  > viewportDim.width  ? 'left'   :
                    placement == 'left'   && pos.left   - actualWidth  < viewportDim.left   ? 'right'  :
                    placement

        $tip
          .removeClass(orgPlacement)
          .addClass(placement)
      }

      var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight)

      this.applyPlacement(calculatedOffset, placement)

      var complete = function () {
        var prevHoverState = that.hoverState
        that.$element.trigger('shown.bs.' + that.type)
        that.hoverState = null

        if (prevHoverState == 'out') that.leave(that)
      }

      $.support.transition && this.$tip.hasClass('fade') ?
        $tip
          .one('bsTransitionEnd', complete)
          .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
        complete()
    }
  }

  Tooltip.prototype.applyPlacement = function (offset, placement) {
    var $tip   = this.tip()
    var width  = $tip[0].offsetWidth
    var height = $tip[0].offsetHeight

    // manually read margins because getBoundingClientRect includes difference
    var marginTop = parseInt($tip.css('margin-top'), 10)
    var marginLeft = parseInt($tip.css('margin-left'), 10)

    // we must check for NaN for ie 8/9
    if (isNaN(marginTop))  marginTop  = 0
    if (isNaN(marginLeft)) marginLeft = 0

    offset.top  += marginTop
    offset.left += marginLeft

    // $.fn.offset doesn't round pixel values
    // so we use setOffset directly with our own function B-0
    $.offset.setOffset($tip[0], $.extend({
      using: function (props) {
        $tip.css({
          top: Math.round(props.top),
          left: Math.round(props.left)
        })
      }
    }, offset), 0)

    $tip.addClass('in')

    // check to see if placing tip in new offset caused the tip to resize itself
    var actualWidth  = $tip[0].offsetWidth
    var actualHeight = $tip[0].offsetHeight

    if (placement == 'top' && actualHeight != height) {
      offset.top = offset.top + height - actualHeight
    }

    var delta = this.getViewportAdjustedDelta(placement, offset, actualWidth, actualHeight)

    if (delta.left) offset.left += delta.left
    else offset.top += delta.top

    var isVertical          = /top|bottom/.test(placement)
    var arrowDelta          = isVertical ? delta.left * 2 - width + actualWidth : delta.top * 2 - height + actualHeight
    var arrowOffsetPosition = isVertical ? 'offsetWidth' : 'offsetHeight'

    $tip.offset(offset)
    this.replaceArrow(arrowDelta, $tip[0][arrowOffsetPosition], isVertical)
  }

  Tooltip.prototype.replaceArrow = function (delta, dimension, isVertical) {
    this.arrow()
      .css(isVertical ? 'left' : 'top', 50 * (1 - delta / dimension) + '%')
      .css(isVertical ? 'top' : 'left', '')
  }

  Tooltip.prototype.setContent = function () {
    var $tip  = this.tip()
    var title = this.getTitle()

    $tip.find('.tooltip-inner')[this.options.html ? 'html' : 'text'](title)
    $tip.removeClass('fade in top bottom left right')
  }

  Tooltip.prototype.hide = function (callback) {
    var that = this
    var $tip = $(this.$tip)
    var e    = $.Event('hide.bs.' + this.type)

    function complete() {
      if (that.hoverState != 'in') $tip.detach()
      if (that.$element) { // TODO: Check whether guarding this code with this `if` is really necessary.
        that.$element
          .removeAttr('aria-describedby')
          .trigger('hidden.bs.' + that.type)
      }
      callback && callback()
    }

    this.$element.trigger(e)

    if (e.isDefaultPrevented()) return

    $tip.removeClass('in')

    $.support.transition && $tip.hasClass('fade') ?
      $tip
        .one('bsTransitionEnd', complete)
        .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
      complete()

    this.hoverState = null

    return this
  }

  Tooltip.prototype.fixTitle = function () {
    var $e = this.$element
    if ($e.attr('title') || typeof $e.attr('data-original-title') != 'string') {
      $e.attr('data-original-title', $e.attr('title') || '').attr('title', '')
    }
  }

  Tooltip.prototype.hasContent = function () {
    return this.getTitle()
  }

  Tooltip.prototype.getPosition = function ($element) {
    $element   = $element || this.$element

    var el     = $element[0]
    var isBody = el.tagName == 'BODY'

    var elRect    = el.getBoundingClientRect()
    if (elRect.width == null) {
      // width and height are missing in IE8, so compute them manually; see https://github.com/twbs/bootstrap/issues/14093
      elRect = $.extend({}, elRect, { width: elRect.right - elRect.left, height: elRect.bottom - elRect.top })
    }
    var isSvg = window.SVGElement && el instanceof window.SVGElement
    // Avoid using $.offset() on SVGs since it gives incorrect results in jQuery 3.
    // See https://github.com/twbs/bootstrap/issues/20280
    var elOffset  = isBody ? { top: 0, left: 0 } : (isSvg ? null : $element.offset())
    var scroll    = { scroll: isBody ? document.documentElement.scrollTop || document.body.scrollTop : $element.scrollTop() }
    var outerDims = isBody ? { width: $(window).width(), height: $(window).height() } : null

    return $.extend({}, elRect, scroll, outerDims, elOffset)
  }

  Tooltip.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
    return placement == 'bottom' ? { top: pos.top + pos.height,   left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'top'    ? { top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'left'   ? { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth } :
        /* placement == 'right' */ { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width }

  }

  Tooltip.prototype.getViewportAdjustedDelta = function (placement, pos, actualWidth, actualHeight) {
    var delta = { top: 0, left: 0 }
    if (!this.$viewport) return delta

    var viewportPadding = this.options.viewport && this.options.viewport.padding || 0
    var viewportDimensions = this.getPosition(this.$viewport)

    if (/right|left/.test(placement)) {
      var topEdgeOffset    = pos.top - viewportPadding - viewportDimensions.scroll
      var bottomEdgeOffset = pos.top + viewportPadding - viewportDimensions.scroll + actualHeight
      if (topEdgeOffset < viewportDimensions.top) { // top overflow
        delta.top = viewportDimensions.top - topEdgeOffset
      } else if (bottomEdgeOffset > viewportDimensions.top + viewportDimensions.height) { // bottom overflow
        delta.top = viewportDimensions.top + viewportDimensions.height - bottomEdgeOffset
      }
    } else {
      var leftEdgeOffset  = pos.left - viewportPadding
      var rightEdgeOffset = pos.left + viewportPadding + actualWidth
      if (leftEdgeOffset < viewportDimensions.left) { // left overflow
        delta.left = viewportDimensions.left - leftEdgeOffset
      } else if (rightEdgeOffset > viewportDimensions.right) { // right overflow
        delta.left = viewportDimensions.left + viewportDimensions.width - rightEdgeOffset
      }
    }

    return delta
  }

  Tooltip.prototype.getTitle = function () {
    var title
    var $e = this.$element
    var o  = this.options

    title = $e.attr('data-original-title')
      || (typeof o.title == 'function' ? o.title.call($e[0]) :  o.title)

    return title
  }

  Tooltip.prototype.getUID = function (prefix) {
    do prefix += ~~(Math.random() * 1000000)
    while (document.getElementById(prefix))
    return prefix
  }

  Tooltip.prototype.tip = function () {
    if (!this.$tip) {
      this.$tip = $(this.options.template)
      if (this.$tip.length != 1) {
        throw new Error(this.type + ' `template` option must consist of exactly 1 top-level element!')
      }
    }
    return this.$tip
  }

  Tooltip.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.tooltip-arrow'))
  }

  Tooltip.prototype.enable = function () {
    this.enabled = true
  }

  Tooltip.prototype.disable = function () {
    this.enabled = false
  }

  Tooltip.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled
  }

  Tooltip.prototype.toggle = function (e) {
    var self = this
    if (e) {
      self = $(e.currentTarget).data('bs.' + this.type)
      if (!self) {
        self = new this.constructor(e.currentTarget, this.getDelegateOptions())
        $(e.currentTarget).data('bs.' + this.type, self)
      }
    }

    if (e) {
      self.inState.click = !self.inState.click
      if (self.isInStateTrue()) self.enter(self)
      else self.leave(self)
    } else {
      self.tip().hasClass('in') ? self.leave(self) : self.enter(self)
    }
  }

  Tooltip.prototype.destroy = function () {
    var that = this
    clearTimeout(this.timeout)
    this.hide(function () {
      that.$element.off('.' + that.type).removeData('bs.' + that.type)
      if (that.$tip) {
        that.$tip.detach()
      }
      that.$tip = null
      that.$arrow = null
      that.$viewport = null
      that.$element = null
    })
  }


  // TOOLTIP PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.tooltip')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.tooltip', (data = new Tooltip(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tooltip

  $.fn.tooltip             = Plugin
  $.fn.tooltip.Constructor = Tooltip


  // TOOLTIP NO CONFLICT
  // ===================

  $.fn.tooltip.noConflict = function () {
    $.fn.tooltip = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: popover.js v3.3.7
 * http://getbootstrap.com/javascript/#popovers
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var Popover = function (element, options) {
    this.init('popover', element, options)
  }

  if (!$.fn.tooltip) throw new Error('Popover requires tooltip.js')

  Popover.VERSION  = '3.3.7'

  Popover.DEFAULTS = $.extend({}, $.fn.tooltip.Constructor.DEFAULTS, {
    placement: 'right',
    trigger: 'click',
    content: '',
    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype)

  Popover.prototype.constructor = Popover

  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS
  }

  Popover.prototype.setContent = function () {
    var $tip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    $tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title)
    $tip.find('.popover-content').children().detach().end()[ // we use append for html objects to maintain js events
      this.options.html ? (typeof content == 'string' ? 'html' : 'append') : 'text'
    ](content)

    $tip.removeClass('fade top bottom left right in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$tip.find('.popover-title').html()) $tip.find('.popover-title').hide()
  }

  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  Popover.prototype.getContent = function () {
    var $e = this.$element
    var o  = this.options

    return $e.attr('data-content')
      || (typeof o.content == 'function' ?
            o.content.call($e[0]) :
            o.content)
  }

  Popover.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.arrow'))
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.popover')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.popover', (data = new Popover(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.popover

  $.fn.popover             = Plugin
  $.fn.popover.Constructor = Popover


  // POPOVER NO CONFLICT
  // ===================

  $.fn.popover.noConflict = function () {
    $.fn.popover = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: scrollspy.js v3.3.7
 * http://getbootstrap.com/javascript/#scrollspy
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    this.$body          = $(document.body)
    this.$scrollElement = $(element).is(document.body) ? $(window) : $(element)
    this.options        = $.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target || '') + ' .nav li > a'
    this.offsets        = []
    this.targets        = []
    this.activeTarget   = null
    this.scrollHeight   = 0

    this.$scrollElement.on('scroll.bs.scrollspy', $.proxy(this.process, this))
    this.refresh()
    this.process()
  }

  ScrollSpy.VERSION  = '3.3.7'

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.getScrollHeight = function () {
    return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
  }

  ScrollSpy.prototype.refresh = function () {
    var that          = this
    var offsetMethod  = 'offset'
    var offsetBase    = 0

    this.offsets      = []
    this.targets      = []
    this.scrollHeight = this.getScrollHeight()

    if (!$.isWindow(this.$scrollElement[0])) {
      offsetMethod = 'position'
      offsetBase   = this.$scrollElement.scrollTop()
    }

    this.$body
      .find(this.selector)
      .map(function () {
        var $el   = $(this)
        var href  = $el.data('target') || $el.attr('href')
        var $href = /^#./.test(href) && $(href)

        return ($href
          && $href.length
          && $href.is(':visible')
          && [[$href[offsetMethod]().top + offsetBase, href]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        that.offsets.push(this[0])
        that.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.getScrollHeight()
    var maxScroll    = this.options.offset + scrollHeight - this.$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (this.scrollHeight != scrollHeight) {
      this.refresh()
    }

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
    }

    if (activeTarget && scrollTop < offsets[0]) {
      this.activeTarget = null
      return this.clear()
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (offsets[i + 1] === undefined || scrollTop < offsets[i + 1])
        && this.activate(targets[i])
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    this.clear()

    var selector = this.selector +
      '[data-target="' + target + '"],' +
      this.selector + '[href="' + target + '"]'

    var active = $(selector)
      .parents('li')
      .addClass('active')

    if (active.parent('.dropdown-menu').length) {
      active = active
        .closest('li.dropdown')
        .addClass('active')
    }

    active.trigger('activate.bs.scrollspy')
  }

  ScrollSpy.prototype.clear = function () {
    $(this.selector)
      .parentsUntil(this.options.target, '.active')
      .removeClass('active')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.scrollspy')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.scrollspy

  $.fn.scrollspy             = Plugin
  $.fn.scrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  $(window).on('load.bs.scrollspy.data-api', function () {
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this)
      Plugin.call($spy, $spy.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tab.js v3.3.7
 * http://getbootstrap.com/javascript/#tabs
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    // jscs:disable requireDollarBeforejQueryAssignment
    this.element = $(element)
    // jscs:enable requireDollarBeforejQueryAssignment
  }

  Tab.VERSION = '3.3.7'

  Tab.TRANSITION_DURATION = 150

  Tab.prototype.show = function () {
    var $this    = this.element
    var $ul      = $this.closest('ul:not(.dropdown-menu)')
    var selector = $this.data('target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    if ($this.parent('li').hasClass('active')) return

    var $previous = $ul.find('.active:last a')
    var hideEvent = $.Event('hide.bs.tab', {
      relatedTarget: $this[0]
    })
    var showEvent = $.Event('show.bs.tab', {
      relatedTarget: $previous[0]
    })

    $previous.trigger(hideEvent)
    $this.trigger(showEvent)

    if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

    var $target = $(selector)

    this.activate($this.closest('li'), $ul)
    this.activate($target, $target.parent(), function () {
      $previous.trigger({
        type: 'hidden.bs.tab',
        relatedTarget: $this[0]
      })
      $this.trigger({
        type: 'shown.bs.tab',
        relatedTarget: $previous[0]
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var $active    = container.find('> .active')
    var transition = callback
      && $.support.transition
      && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

    function next() {
      $active
        .removeClass('active')
        .find('> .dropdown-menu > .active')
          .removeClass('active')
        .end()
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', false)

      element
        .addClass('active')
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', true)

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('in')
      } else {
        element.removeClass('fade')
      }

      if (element.parent('.dropdown-menu').length) {
        element
          .closest('li.dropdown')
            .addClass('active')
          .end()
          .find('[data-toggle="tab"]')
            .attr('aria-expanded', true)
      }

      callback && callback()
    }

    $active.length && transition ?
      $active
        .one('bsTransitionEnd', next)
        .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
      next()

    $active.removeClass('in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.tab')

      if (!data) $this.data('bs.tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tab

  $.fn.tab             = Plugin
  $.fn.tab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  $.fn.tab.noConflict = function () {
    $.fn.tab = old
    return this
  }


  // TAB DATA-API
  // ============

  var clickHandler = function (e) {
    e.preventDefault()
    Plugin.call($(this), 'show')
  }

  $(document)
    .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
    .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)

}(jQuery);

/* ========================================================================
 * Bootstrap: affix.js v3.3.7
 * http://getbootstrap.com/javascript/#affix
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // AFFIX CLASS DEFINITION
  // ======================

  var Affix = function (element, options) {
    this.options = $.extend({}, Affix.DEFAULTS, options)

    this.$target = $(this.options.target)
      .on('scroll.bs.affix.data-api', $.proxy(this.checkPosition, this))
      .on('click.bs.affix.data-api',  $.proxy(this.checkPositionWithEventLoop, this))

    this.$element     = $(element)
    this.affixed      = null
    this.unpin        = null
    this.pinnedOffset = null

    this.checkPosition()
  }

  Affix.VERSION  = '3.3.7'

  Affix.RESET    = 'affix affix-top affix-bottom'

  Affix.DEFAULTS = {
    offset: 0,
    target: window
  }

  Affix.prototype.getState = function (scrollHeight, height, offsetTop, offsetBottom) {
    var scrollTop    = this.$target.scrollTop()
    var position     = this.$element.offset()
    var targetHeight = this.$target.height()

    if (offsetTop != null && this.affixed == 'top') return scrollTop < offsetTop ? 'top' : false

    if (this.affixed == 'bottom') {
      if (offsetTop != null) return (scrollTop + this.unpin <= position.top) ? false : 'bottom'
      return (scrollTop + targetHeight <= scrollHeight - offsetBottom) ? false : 'bottom'
    }

    var initializing   = this.affixed == null
    var colliderTop    = initializing ? scrollTop : position.top
    var colliderHeight = initializing ? targetHeight : height

    if (offsetTop != null && scrollTop <= offsetTop) return 'top'
    if (offsetBottom != null && (colliderTop + colliderHeight >= scrollHeight - offsetBottom)) return 'bottom'

    return false
  }

  Affix.prototype.getPinnedOffset = function () {
    if (this.pinnedOffset) return this.pinnedOffset
    this.$element.removeClass(Affix.RESET).addClass('affix')
    var scrollTop = this.$target.scrollTop()
    var position  = this.$element.offset()
    return (this.pinnedOffset = position.top - scrollTop)
  }

  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout($.proxy(this.checkPosition, this), 1)
  }

  Affix.prototype.checkPosition = function () {
    if (!this.$element.is(':visible')) return

    var height       = this.$element.height()
    var offset       = this.options.offset
    var offsetTop    = offset.top
    var offsetBottom = offset.bottom
    var scrollHeight = Math.max($(document).height(), $(document.body).height())

    if (typeof offset != 'object')         offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function')    offsetTop    = offset.top(this.$element)
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom(this.$element)

    var affix = this.getState(scrollHeight, height, offsetTop, offsetBottom)

    if (this.affixed != affix) {
      if (this.unpin != null) this.$element.css('top', '')

      var affixType = 'affix' + (affix ? '-' + affix : '')
      var e         = $.Event(affixType + '.bs.affix')

      this.$element.trigger(e)

      if (e.isDefaultPrevented()) return

      this.affixed = affix
      this.unpin = affix == 'bottom' ? this.getPinnedOffset() : null

      this.$element
        .removeClass(Affix.RESET)
        .addClass(affixType)
        .trigger(affixType.replace('affix', 'affixed') + '.bs.affix')
    }

    if (affix == 'bottom') {
      this.$element.offset({
        top: scrollHeight - height - offsetBottom
      })
    }
  }


  // AFFIX PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.affix')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.affix

  $.fn.affix             = Plugin
  $.fn.affix.Constructor = Affix


  // AFFIX NO CONFLICT
  // =================

  $.fn.affix.noConflict = function () {
    $.fn.affix = old
    return this
  }


  // AFFIX DATA-API
  // ==============

  $(window).on('load', function () {
    $('[data-spy="affix"]').each(function () {
      var $spy = $(this)
      var data = $spy.data()

      data.offset = data.offset || {}

      if (data.offsetBottom != null) data.offset.bottom = data.offsetBottom
      if (data.offsetTop    != null) data.offset.top    = data.offsetTop

      Plugin.call($spy, data)
    })
  })

}(jQuery);


/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(11)();
exports.push([module.i, "@-webkit-keyframes spinAround {\n  from {\n    -webkit-transform: rotate(0deg);\n            transform: rotate(0deg);\n  }\n  to {\n    -webkit-transform: rotate(359deg);\n            transform: rotate(359deg);\n  }\n}\n\n@keyframes spinAround {\n  from {\n    -webkit-transform: rotate(0deg);\n            transform: rotate(0deg);\n  }\n  to {\n    -webkit-transform: rotate(359deg);\n            transform: rotate(359deg);\n  }\n}\n\n/*! bulma.io v0.4.0 | MIT License | github.com/jgthms/bulma */\n@keyframes spinAround {\n  from {\n    -webkit-transform: rotate(0deg);\n            transform: rotate(0deg);\n  }\n  to {\n    -webkit-transform: rotate(359deg);\n            transform: rotate(359deg);\n  }\n}\n\n/*! minireset.css v0.0.2 | MIT License | github.com/jgthms/minireset.css */\nhtml,\nbody,\np,\nol,\nul,\nli,\ndl,\ndt,\ndd,\nblockquote,\nfigure,\nfieldset,\nlegend,\ntextarea,\npre,\niframe,\nhr,\nh1,\nh2,\nh3,\nh4,\nh5,\nh6 {\n  margin: 0;\n  padding: 0;\n}\n\nh1,\nh2,\nh3,\nh4,\nh5,\nh6 {\n  font-size: 100%;\n  font-weight: normal;\n}\n\nul {\n  list-style: none;\n}\n\nbutton,\ninput,\nselect,\ntextarea {\n  margin: 0;\n}\n\nhtml {\n  box-sizing: border-box;\n}\n\n* {\n  box-sizing: inherit;\n}\n\n*:before, *:after {\n  box-sizing: inherit;\n}\n\nimg,\nembed,\nobject,\naudio,\nvideo {\n  height: auto;\n  max-width: 100%;\n}\n\niframe {\n  border: 0;\n}\n\ntable {\n  border-collapse: collapse;\n  border-spacing: 0;\n}\n\ntd,\nth {\n  padding: 0;\n  text-align: left;\n}\n\nhtml {\n  background-color: white;\n  font-size: 16px;\n  -moz-osx-font-smoothing: grayscale;\n  -webkit-font-smoothing: antialiased;\n  min-width: 300px;\n  overflow-x: hidden;\n  overflow-y: scroll;\n  text-rendering: optimizeLegibility;\n}\n\narticle,\naside,\nfigure,\nfooter,\nheader,\nhgroup,\nsection {\n  display: block;\n}\n\nbody,\nbutton,\ninput,\nselect,\ntextarea {\n  font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", \"Roboto\", \"Oxygen\", \"Ubuntu\", \"Cantarell\", \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", \"Helvetica\", \"Arial\", sans-serif;\n}\n\ncode,\npre {\n  -moz-osx-font-smoothing: auto;\n  -webkit-font-smoothing: auto;\n  font-family: monospace;\n}\n\nbody {\n  color: #4a4a4a;\n  font-size: 1rem;\n  font-weight: 400;\n  line-height: 1.5;\n}\n\na {\n  color: #7957d5;\n  cursor: pointer;\n  text-decoration: none;\n  -webkit-transition: none 86ms ease-out;\n  transition: none 86ms ease-out;\n}\n\na:hover {\n  color: #363636;\n}\n\ncode {\n  background-color: whitesmoke;\n  color: #ff3860;\n  font-size: 0.8em;\n  font-weight: normal;\n  padding: 0.25em 0.5em 0.25em;\n}\n\nhr {\n  background-color: #dbdbdb;\n  border: none;\n  display: block;\n  height: 1px;\n  margin: 1.5rem 0;\n}\n\nimg {\n  max-width: 100%;\n}\n\ninput[type=\"checkbox\"],\ninput[type=\"radio\"] {\n  vertical-align: baseline;\n}\n\nsmall {\n  font-size: 0.8em;\n}\n\nspan {\n  font-style: inherit;\n  font-weight: inherit;\n}\n\nstrong {\n  color: #363636;\n  font-weight: 700;\n}\n\npre {\n  background-color: whitesmoke;\n  color: #4a4a4a;\n  font-size: 0.8em;\n  white-space: pre;\n  word-wrap: normal;\n}\n\npre code {\n  background: none;\n  color: inherit;\n  display: block;\n  font-size: 1em;\n  overflow-x: auto;\n  padding: 1.25rem 1.5rem;\n}\n\ntable {\n  width: 100%;\n}\n\ntable td,\ntable th {\n  text-align: left;\n  vertical-align: top;\n}\n\ntable th {\n  color: #363636;\n}\n\n.is-block {\n  display: block;\n}\n\n@media screen and (max-width: 768px) {\n  .is-block-mobile {\n    display: block !important;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .is-block-tablet {\n    display: block !important;\n  }\n}\n\n@media screen and (min-width: 769px) and (max-width: 999px) {\n  .is-block-tablet-only {\n    display: block !important;\n  }\n}\n\n@media screen and (max-width: 999px) {\n  .is-block-touch {\n    display: block !important;\n  }\n}\n\n@media screen and (min-width: 1000px) {\n  .is-block-desktop {\n    display: block !important;\n  }\n}\n\n@media screen and (min-width: 1000px) and (max-width: 1191px) {\n  .is-block-desktop-only {\n    display: block !important;\n  }\n}\n\n@media screen and (min-width: 1192px) {\n  .is-block-widescreen {\n    display: block !important;\n  }\n}\n\n.is-flex {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n\n@media screen and (max-width: 768px) {\n  .is-flex-mobile {\n    display: -webkit-box !important;\n    display: -ms-flexbox !important;\n    display: flex !important;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .is-flex-tablet {\n    display: -webkit-box !important;\n    display: -ms-flexbox !important;\n    display: flex !important;\n  }\n}\n\n@media screen and (min-width: 769px) and (max-width: 999px) {\n  .is-flex-tablet-only {\n    display: -webkit-box !important;\n    display: -ms-flexbox !important;\n    display: flex !important;\n  }\n}\n\n@media screen and (max-width: 999px) {\n  .is-flex-touch {\n    display: -webkit-box !important;\n    display: -ms-flexbox !important;\n    display: flex !important;\n  }\n}\n\n@media screen and (min-width: 1000px) {\n  .is-flex-desktop {\n    display: -webkit-box !important;\n    display: -ms-flexbox !important;\n    display: flex !important;\n  }\n}\n\n@media screen and (min-width: 1000px) and (max-width: 1191px) {\n  .is-flex-desktop-only {\n    display: -webkit-box !important;\n    display: -ms-flexbox !important;\n    display: flex !important;\n  }\n}\n\n@media screen and (min-width: 1192px) {\n  .is-flex-widescreen {\n    display: -webkit-box !important;\n    display: -ms-flexbox !important;\n    display: flex !important;\n  }\n}\n\n.is-inline {\n  display: inline;\n}\n\n@media screen and (max-width: 768px) {\n  .is-inline-mobile {\n    display: inline !important;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .is-inline-tablet {\n    display: inline !important;\n  }\n}\n\n@media screen and (min-width: 769px) and (max-width: 999px) {\n  .is-inline-tablet-only {\n    display: inline !important;\n  }\n}\n\n@media screen and (max-width: 999px) {\n  .is-inline-touch {\n    display: inline !important;\n  }\n}\n\n@media screen and (min-width: 1000px) {\n  .is-inline-desktop {\n    display: inline !important;\n  }\n}\n\n@media screen and (min-width: 1000px) and (max-width: 1191px) {\n  .is-inline-desktop-only {\n    display: inline !important;\n  }\n}\n\n@media screen and (min-width: 1192px) {\n  .is-inline-widescreen {\n    display: inline !important;\n  }\n}\n\n.is-inline-block {\n  display: inline-block;\n}\n\n@media screen and (max-width: 768px) {\n  .is-inline-block-mobile {\n    display: inline-block !important;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .is-inline-block-tablet {\n    display: inline-block !important;\n  }\n}\n\n@media screen and (min-width: 769px) and (max-width: 999px) {\n  .is-inline-block-tablet-only {\n    display: inline-block !important;\n  }\n}\n\n@media screen and (max-width: 999px) {\n  .is-inline-block-touch {\n    display: inline-block !important;\n  }\n}\n\n@media screen and (min-width: 1000px) {\n  .is-inline-block-desktop {\n    display: inline-block !important;\n  }\n}\n\n@media screen and (min-width: 1000px) and (max-width: 1191px) {\n  .is-inline-block-desktop-only {\n    display: inline-block !important;\n  }\n}\n\n@media screen and (min-width: 1192px) {\n  .is-inline-block-widescreen {\n    display: inline-block !important;\n  }\n}\n\n.is-inline-flex {\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n}\n\n@media screen and (max-width: 768px) {\n  .is-inline-flex-mobile {\n    display: -webkit-inline-box !important;\n    display: -ms-inline-flexbox !important;\n    display: inline-flex !important;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .is-inline-flex-tablet {\n    display: -webkit-inline-box !important;\n    display: -ms-inline-flexbox !important;\n    display: inline-flex !important;\n  }\n}\n\n@media screen and (min-width: 769px) and (max-width: 999px) {\n  .is-inline-flex-tablet-only {\n    display: -webkit-inline-box !important;\n    display: -ms-inline-flexbox !important;\n    display: inline-flex !important;\n  }\n}\n\n@media screen and (max-width: 999px) {\n  .is-inline-flex-touch {\n    display: -webkit-inline-box !important;\n    display: -ms-inline-flexbox !important;\n    display: inline-flex !important;\n  }\n}\n\n@media screen and (min-width: 1000px) {\n  .is-inline-flex-desktop {\n    display: -webkit-inline-box !important;\n    display: -ms-inline-flexbox !important;\n    display: inline-flex !important;\n  }\n}\n\n@media screen and (min-width: 1000px) and (max-width: 1191px) {\n  .is-inline-flex-desktop-only {\n    display: -webkit-inline-box !important;\n    display: -ms-inline-flexbox !important;\n    display: inline-flex !important;\n  }\n}\n\n@media screen and (min-width: 1192px) {\n  .is-inline-flex-widescreen {\n    display: -webkit-inline-box !important;\n    display: -ms-inline-flexbox !important;\n    display: inline-flex !important;\n  }\n}\n\n.is-clearfix:after {\n  clear: both;\n  content: \" \";\n  display: table;\n}\n\n.is-pulled-left {\n  float: left;\n}\n\n.is-pulled-right {\n  float: right;\n}\n\n.is-clipped {\n  overflow: hidden !important;\n}\n\n.is-overlay {\n  bottom: 0;\n  left: 0;\n  position: absolute;\n  right: 0;\n  top: 0;\n}\n\n.has-text-centered {\n  text-align: center;\n}\n\n.has-text-left {\n  text-align: left;\n}\n\n.has-text-right {\n  text-align: right;\n}\n\n.is-hidden {\n  display: none !important;\n}\n\n@media screen and (max-width: 768px) {\n  .is-hidden-mobile {\n    display: none !important;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .is-hidden-tablet {\n    display: none !important;\n  }\n}\n\n@media screen and (min-width: 769px) and (max-width: 999px) {\n  .is-hidden-tablet-only {\n    display: none !important;\n  }\n}\n\n@media screen and (max-width: 999px) {\n  .is-hidden-touch {\n    display: none !important;\n  }\n}\n\n@media screen and (min-width: 1000px) {\n  .is-hidden-desktop {\n    display: none !important;\n  }\n}\n\n@media screen and (min-width: 1000px) and (max-width: 1191px) {\n  .is-hidden-desktop-only {\n    display: none !important;\n  }\n}\n\n@media screen and (min-width: 1192px) {\n  .is-hidden-widescreen {\n    display: none !important;\n  }\n}\n\n.is-disabled {\n  pointer-events: none;\n}\n\n.is-marginless {\n  margin: 0 !important;\n}\n\n.is-paddingless {\n  padding: 0 !important;\n}\n\n.is-unselectable {\n  -webkit-touch-callout: none;\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  -ms-user-select: none;\n  user-select: none;\n}\n\n.box {\n  background-color: white;\n  border-radius: 5px;\n  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);\n  display: block;\n  padding: 1.25rem;\n}\n\n.box:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\na.box:hover, a.box:focus {\n  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px #7957d5;\n}\n\na.box:active {\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2), 0 0 0 1px #7957d5;\n}\n\n.button {\n  -moz-appearance: none;\n  -webkit-appearance: none;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  border: none;\n  border-radius: 3px;\n  box-shadow: none;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  font-size: 1rem;\n  height: 2.25em;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  line-height: 1.25;\n  padding-bottom: 0.5em;\n  padding-left: 0.625em;\n  padding-right: 0.625em;\n  padding-top: 0.5em;\n  position: relative;\n  vertical-align: top;\n  -webkit-touch-callout: none;\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  -ms-user-select: none;\n  user-select: none;\n  background-color: white;\n  border: 1px solid #dbdbdb;\n  color: #363636;\n  cursor: pointer;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  padding-left: 0.75em;\n  padding-right: 0.75em;\n  text-align: center;\n  white-space: nowrap;\n}\n\n.button:focus, .button.is-focused, .button:active, .button.is-active {\n  outline: none;\n}\n\n.button[disabled], .button.is-disabled {\n  pointer-events: none;\n}\n\n.button strong {\n  color: inherit;\n}\n\n.button .icon, .button .icon.is-small, .button .icon.is-medium, .button .icon.is-large {\n  height: 1.5em;\n  width: 1.5em;\n}\n\n.button .icon:first-child:not(:last-child) {\n  margin-left: calc(-0.375em - 1px);\n  margin-right: 0.1875em;\n}\n\n.button .icon:last-child:not(:first-child) {\n  margin-left: 0.1875em;\n  margin-right: calc(-0.375em - 1px);\n}\n\n.button .icon:first-child:last-child {\n  margin-left: calc(-0.375em - 1px);\n  margin-right: calc(-0.375em - 1px);\n}\n\n.button:hover, .button.is-hovered {\n  border-color: #b5b5b5;\n  color: #363636;\n}\n\n.button:focus, .button.is-focused {\n  border-color: #7957d5;\n  box-shadow: 0 0 0.5em rgba(121, 87, 213, 0.25);\n  color: #363636;\n}\n\n.button:active, .button.is-active {\n  border-color: #4a4a4a;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: #363636;\n}\n\n.button.is-link {\n  background-color: transparent;\n  border-color: transparent;\n  color: #4a4a4a;\n  text-decoration: underline;\n}\n\n.button.is-link:hover, .button.is-link.is-hovered, .button.is-link:focus, .button.is-link.is-focused, .button.is-link:active, .button.is-link.is-active {\n  background-color: whitesmoke;\n  color: #363636;\n}\n\n.button.is-white {\n  background-color: white;\n  border-color: transparent;\n  color: #0a0a0a;\n}\n\n.button.is-white:hover, .button.is-white.is-hovered {\n  background-color: #f9f9f9;\n  border-color: transparent;\n  color: #0a0a0a;\n}\n\n.button.is-white:focus, .button.is-white.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(255, 255, 255, 0.25);\n  color: #0a0a0a;\n}\n\n.button.is-white:active, .button.is-white.is-active {\n  background-color: #f2f2f2;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: #0a0a0a;\n}\n\n.button.is-white.is-inverted {\n  background-color: #0a0a0a;\n  color: white;\n}\n\n.button.is-white.is-inverted:hover {\n  background-color: black;\n}\n\n.button.is-white.is-loading:after {\n  border-color: transparent transparent #0a0a0a #0a0a0a !important;\n}\n\n.button.is-white.is-outlined {\n  background-color: transparent;\n  border-color: white;\n  color: white;\n}\n\n.button.is-white.is-outlined:hover, .button.is-white.is-outlined:focus {\n  background-color: white;\n  border-color: white;\n  color: #0a0a0a;\n}\n\n.button.is-white.is-outlined.is-loading:after {\n  border-color: transparent transparent white white !important;\n}\n\n.button.is-white.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: #0a0a0a;\n  color: #0a0a0a;\n}\n\n.button.is-white.is-inverted.is-outlined:hover, .button.is-white.is-inverted.is-outlined:focus {\n  background-color: #0a0a0a;\n  color: white;\n}\n\n.button.is-black {\n  background-color: #0a0a0a;\n  border-color: transparent;\n  color: white;\n}\n\n.button.is-black:hover, .button.is-black.is-hovered {\n  background-color: #040404;\n  border-color: transparent;\n  color: white;\n}\n\n.button.is-black:focus, .button.is-black.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(10, 10, 10, 0.25);\n  color: white;\n}\n\n.button.is-black:active, .button.is-black.is-active {\n  background-color: black;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: white;\n}\n\n.button.is-black.is-inverted {\n  background-color: white;\n  color: #0a0a0a;\n}\n\n.button.is-black.is-inverted:hover {\n  background-color: #f2f2f2;\n}\n\n.button.is-black.is-loading:after {\n  border-color: transparent transparent white white !important;\n}\n\n.button.is-black.is-outlined {\n  background-color: transparent;\n  border-color: #0a0a0a;\n  color: #0a0a0a;\n}\n\n.button.is-black.is-outlined:hover, .button.is-black.is-outlined:focus {\n  background-color: #0a0a0a;\n  border-color: #0a0a0a;\n  color: white;\n}\n\n.button.is-black.is-outlined.is-loading:after {\n  border-color: transparent transparent #0a0a0a #0a0a0a !important;\n}\n\n.button.is-black.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: white;\n  color: white;\n}\n\n.button.is-black.is-inverted.is-outlined:hover, .button.is-black.is-inverted.is-outlined:focus {\n  background-color: white;\n  color: #0a0a0a;\n}\n\n.button.is-light {\n  background-color: whitesmoke;\n  border-color: transparent;\n  color: #363636;\n}\n\n.button.is-light:hover, .button.is-light.is-hovered {\n  background-color: #eeeeee;\n  border-color: transparent;\n  color: #363636;\n}\n\n.button.is-light:focus, .button.is-light.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(245, 245, 245, 0.25);\n  color: #363636;\n}\n\n.button.is-light:active, .button.is-light.is-active {\n  background-color: #e8e8e8;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: #363636;\n}\n\n.button.is-light.is-inverted {\n  background-color: #363636;\n  color: whitesmoke;\n}\n\n.button.is-light.is-inverted:hover {\n  background-color: #292929;\n}\n\n.button.is-light.is-loading:after {\n  border-color: transparent transparent #363636 #363636 !important;\n}\n\n.button.is-light.is-outlined {\n  background-color: transparent;\n  border-color: whitesmoke;\n  color: whitesmoke;\n}\n\n.button.is-light.is-outlined:hover, .button.is-light.is-outlined:focus {\n  background-color: whitesmoke;\n  border-color: whitesmoke;\n  color: #363636;\n}\n\n.button.is-light.is-outlined.is-loading:after {\n  border-color: transparent transparent whitesmoke whitesmoke !important;\n}\n\n.button.is-light.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: #363636;\n  color: #363636;\n}\n\n.button.is-light.is-inverted.is-outlined:hover, .button.is-light.is-inverted.is-outlined:focus {\n  background-color: #363636;\n  color: whitesmoke;\n}\n\n.button.is-dark {\n  background-color: #363636;\n  border-color: transparent;\n  color: whitesmoke;\n}\n\n.button.is-dark:hover, .button.is-dark.is-hovered {\n  background-color: #2f2f2f;\n  border-color: transparent;\n  color: whitesmoke;\n}\n\n.button.is-dark:focus, .button.is-dark.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(54, 54, 54, 0.25);\n  color: whitesmoke;\n}\n\n.button.is-dark:active, .button.is-dark.is-active {\n  background-color: #292929;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: whitesmoke;\n}\n\n.button.is-dark.is-inverted {\n  background-color: whitesmoke;\n  color: #363636;\n}\n\n.button.is-dark.is-inverted:hover {\n  background-color: #e8e8e8;\n}\n\n.button.is-dark.is-loading:after {\n  border-color: transparent transparent whitesmoke whitesmoke !important;\n}\n\n.button.is-dark.is-outlined {\n  background-color: transparent;\n  border-color: #363636;\n  color: #363636;\n}\n\n.button.is-dark.is-outlined:hover, .button.is-dark.is-outlined:focus {\n  background-color: #363636;\n  border-color: #363636;\n  color: whitesmoke;\n}\n\n.button.is-dark.is-outlined.is-loading:after {\n  border-color: transparent transparent #363636 #363636 !important;\n}\n\n.button.is-dark.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: whitesmoke;\n  color: whitesmoke;\n}\n\n.button.is-dark.is-inverted.is-outlined:hover, .button.is-dark.is-inverted.is-outlined:focus {\n  background-color: whitesmoke;\n  color: #363636;\n}\n\n.button.is-primary {\n  background-color: #7957d5;\n  border-color: transparent;\n  color: #fff;\n}\n\n.button.is-primary:hover, .button.is-primary.is-hovered {\n  background-color: #714dd2;\n  border-color: transparent;\n  color: #fff;\n}\n\n.button.is-primary:focus, .button.is-primary.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(121, 87, 213, 0.25);\n  color: #fff;\n}\n\n.button.is-primary:active, .button.is-primary.is-active {\n  background-color: #6943d0;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: #fff;\n}\n\n.button.is-primary.is-inverted {\n  background-color: #fff;\n  color: #7957d5;\n}\n\n.button.is-primary.is-inverted:hover {\n  background-color: #f2f2f2;\n}\n\n.button.is-primary.is-loading:after {\n  border-color: transparent transparent #fff #fff !important;\n}\n\n.button.is-primary.is-outlined {\n  background-color: transparent;\n  border-color: #7957d5;\n  color: #7957d5;\n}\n\n.button.is-primary.is-outlined:hover, .button.is-primary.is-outlined:focus {\n  background-color: #7957d5;\n  border-color: #7957d5;\n  color: #fff;\n}\n\n.button.is-primary.is-outlined.is-loading:after {\n  border-color: transparent transparent #7957d5 #7957d5 !important;\n}\n\n.button.is-primary.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: #fff;\n  color: #fff;\n}\n\n.button.is-primary.is-inverted.is-outlined:hover, .button.is-primary.is-inverted.is-outlined:focus {\n  background-color: #fff;\n  color: #7957d5;\n}\n\n.button.is-info {\n  background-color: #3273dc;\n  border-color: transparent;\n  color: #fff;\n}\n\n.button.is-info:hover, .button.is-info.is-hovered {\n  background-color: #276cda;\n  border-color: transparent;\n  color: #fff;\n}\n\n.button.is-info:focus, .button.is-info.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(50, 115, 220, 0.25);\n  color: #fff;\n}\n\n.button.is-info:active, .button.is-info.is-active {\n  background-color: #2366d1;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: #fff;\n}\n\n.button.is-info.is-inverted {\n  background-color: #fff;\n  color: #3273dc;\n}\n\n.button.is-info.is-inverted:hover {\n  background-color: #f2f2f2;\n}\n\n.button.is-info.is-loading:after {\n  border-color: transparent transparent #fff #fff !important;\n}\n\n.button.is-info.is-outlined {\n  background-color: transparent;\n  border-color: #3273dc;\n  color: #3273dc;\n}\n\n.button.is-info.is-outlined:hover, .button.is-info.is-outlined:focus {\n  background-color: #3273dc;\n  border-color: #3273dc;\n  color: #fff;\n}\n\n.button.is-info.is-outlined.is-loading:after {\n  border-color: transparent transparent #3273dc #3273dc !important;\n}\n\n.button.is-info.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: #fff;\n  color: #fff;\n}\n\n.button.is-info.is-inverted.is-outlined:hover, .button.is-info.is-inverted.is-outlined:focus {\n  background-color: #fff;\n  color: #3273dc;\n}\n\n.button.is-success {\n  background-color: #23d160;\n  border-color: transparent;\n  color: #fff;\n}\n\n.button.is-success:hover, .button.is-success.is-hovered {\n  background-color: #22c65b;\n  border-color: transparent;\n  color: #fff;\n}\n\n.button.is-success:focus, .button.is-success.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(35, 209, 96, 0.25);\n  color: #fff;\n}\n\n.button.is-success:active, .button.is-success.is-active {\n  background-color: #20bc56;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: #fff;\n}\n\n.button.is-success.is-inverted {\n  background-color: #fff;\n  color: #23d160;\n}\n\n.button.is-success.is-inverted:hover {\n  background-color: #f2f2f2;\n}\n\n.button.is-success.is-loading:after {\n  border-color: transparent transparent #fff #fff !important;\n}\n\n.button.is-success.is-outlined {\n  background-color: transparent;\n  border-color: #23d160;\n  color: #23d160;\n}\n\n.button.is-success.is-outlined:hover, .button.is-success.is-outlined:focus {\n  background-color: #23d160;\n  border-color: #23d160;\n  color: #fff;\n}\n\n.button.is-success.is-outlined.is-loading:after {\n  border-color: transparent transparent #23d160 #23d160 !important;\n}\n\n.button.is-success.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: #fff;\n  color: #fff;\n}\n\n.button.is-success.is-inverted.is-outlined:hover, .button.is-success.is-inverted.is-outlined:focus {\n  background-color: #fff;\n  color: #23d160;\n}\n\n.button.is-warning {\n  background-color: #ffdd57;\n  border-color: transparent;\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.button.is-warning:hover, .button.is-warning.is-hovered {\n  background-color: #ffdb4a;\n  border-color: transparent;\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.button.is-warning:focus, .button.is-warning.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(255, 221, 87, 0.25);\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.button.is-warning:active, .button.is-warning.is-active {\n  background-color: #ffd83d;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.button.is-warning.is-inverted {\n  background-color: rgba(0, 0, 0, 0.7);\n  color: #ffdd57;\n}\n\n.button.is-warning.is-inverted:hover {\n  background-color: rgba(0, 0, 0, 0.7);\n}\n\n.button.is-warning.is-loading:after {\n  border-color: transparent transparent rgba(0, 0, 0, 0.7) rgba(0, 0, 0, 0.7) !important;\n}\n\n.button.is-warning.is-outlined {\n  background-color: transparent;\n  border-color: #ffdd57;\n  color: #ffdd57;\n}\n\n.button.is-warning.is-outlined:hover, .button.is-warning.is-outlined:focus {\n  background-color: #ffdd57;\n  border-color: #ffdd57;\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.button.is-warning.is-outlined.is-loading:after {\n  border-color: transparent transparent #ffdd57 #ffdd57 !important;\n}\n\n.button.is-warning.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: rgba(0, 0, 0, 0.7);\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.button.is-warning.is-inverted.is-outlined:hover, .button.is-warning.is-inverted.is-outlined:focus {\n  background-color: rgba(0, 0, 0, 0.7);\n  color: #ffdd57;\n}\n\n.button.is-danger {\n  background-color: #ff3860;\n  border-color: transparent;\n  color: #fff;\n}\n\n.button.is-danger:hover, .button.is-danger.is-hovered {\n  background-color: #ff2b56;\n  border-color: transparent;\n  color: #fff;\n}\n\n.button.is-danger:focus, .button.is-danger.is-focused {\n  border-color: transparent;\n  box-shadow: 0 0 0.5em rgba(255, 56, 96, 0.25);\n  color: #fff;\n}\n\n.button.is-danger:active, .button.is-danger.is-active {\n  background-color: #ff1f4b;\n  border-color: transparent;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n  color: #fff;\n}\n\n.button.is-danger.is-inverted {\n  background-color: #fff;\n  color: #ff3860;\n}\n\n.button.is-danger.is-inverted:hover {\n  background-color: #f2f2f2;\n}\n\n.button.is-danger.is-loading:after {\n  border-color: transparent transparent #fff #fff !important;\n}\n\n.button.is-danger.is-outlined {\n  background-color: transparent;\n  border-color: #ff3860;\n  color: #ff3860;\n}\n\n.button.is-danger.is-outlined:hover, .button.is-danger.is-outlined:focus {\n  background-color: #ff3860;\n  border-color: #ff3860;\n  color: #fff;\n}\n\n.button.is-danger.is-outlined.is-loading:after {\n  border-color: transparent transparent #ff3860 #ff3860 !important;\n}\n\n.button.is-danger.is-inverted.is-outlined {\n  background-color: transparent;\n  border-color: #fff;\n  color: #fff;\n}\n\n.button.is-danger.is-inverted.is-outlined:hover, .button.is-danger.is-inverted.is-outlined:focus {\n  background-color: #fff;\n  color: #ff3860;\n}\n\n.button.is-small {\n  border-radius: 2px;\n  font-size: 0.75rem;\n}\n\n.button.is-medium {\n  font-size: 1.25rem;\n}\n\n.button.is-large {\n  font-size: 1.5rem;\n}\n\n.button[disabled], .button.is-disabled {\n  opacity: 0.5;\n}\n\n.button.is-fullwidth {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  width: 100%;\n}\n\n.button.is-loading {\n  color: transparent !important;\n  pointer-events: none;\n}\n\n.button.is-loading:after {\n  -webkit-animation: spinAround 500ms infinite linear;\n          animation: spinAround 500ms infinite linear;\n  border: 2px solid #dbdbdb;\n  border-radius: 290486px;\n  border-right-color: transparent;\n  border-top-color: transparent;\n  content: \"\";\n  display: block;\n  height: 1em;\n  position: relative;\n  width: 1em;\n  left: 50%;\n  margin-left: -0.5em;\n  margin-top: -0.5em;\n  position: absolute;\n  top: 50%;\n  position: absolute !important;\n}\n\nbutton.button,\ninput[type=\"submit\"].button {\n  line-height: 1;\n  padding-bottom: 0.4em;\n  padding-top: 0.35em;\n}\n\n.content {\n  color: #4a4a4a;\n}\n\n.content:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.content li + li {\n  margin-top: 0.25em;\n}\n\n.content p:not(:last-child),\n.content ol:not(:last-child),\n.content ul:not(:last-child),\n.content blockquote:not(:last-child),\n.content table:not(:last-child) {\n  margin-bottom: 1em;\n}\n\n.content h1,\n.content h2,\n.content h3,\n.content h4,\n.content h5,\n.content h6 {\n  color: #363636;\n  font-weight: 400;\n  line-height: 1.125;\n}\n\n.content h1 {\n  font-size: 2em;\n  margin-bottom: 0.5em;\n}\n\n.content h1:not(:first-child) {\n  margin-top: 1em;\n}\n\n.content h2 {\n  font-size: 1.75em;\n  margin-bottom: 0.5714em;\n}\n\n.content h2:not(:first-child) {\n  margin-top: 1.1428em;\n}\n\n.content h3 {\n  font-size: 1.5em;\n  margin-bottom: 0.6666em;\n}\n\n.content h3:not(:first-child) {\n  margin-top: 1.3333em;\n}\n\n.content h4 {\n  font-size: 1.25em;\n  margin-bottom: 0.8em;\n}\n\n.content h5 {\n  font-size: 1.125em;\n  margin-bottom: 0.8888em;\n}\n\n.content h6 {\n  font-size: 1em;\n  margin-bottom: 1em;\n}\n\n.content blockquote {\n  background-color: whitesmoke;\n  border-left: 5px solid #dbdbdb;\n  padding: 1.25em 1.5em;\n}\n\n.content ol {\n  list-style: decimal outside;\n  margin-left: 2em;\n  margin-right: 2em;\n  margin-top: 1em;\n}\n\n.content ul {\n  list-style: disc outside;\n  margin-left: 2em;\n  margin-right: 2em;\n  margin-top: 1em;\n}\n\n.content ul ul {\n  list-style-type: circle;\n  margin-top: 0.5em;\n}\n\n.content ul ul ul {\n  list-style-type: square;\n}\n\n.content table {\n  width: 100%;\n}\n\n.content table td,\n.content table th {\n  border: 1px solid #dbdbdb;\n  border-width: 0 0 1px;\n  padding: 0.5em 0.75em;\n  vertical-align: top;\n}\n\n.content table th {\n  color: #363636;\n  text-align: left;\n}\n\n.content table tr:hover {\n  background-color: whitesmoke;\n}\n\n.content table thead td,\n.content table thead th {\n  border-width: 0 0 2px;\n  color: #363636;\n}\n\n.content table tfoot td,\n.content table tfoot th {\n  border-width: 2px 0 0;\n  color: #363636;\n}\n\n.content table tbody tr:last-child td,\n.content table tbody tr:last-child th {\n  border-bottom-width: 0;\n}\n\n.content.is-small {\n  font-size: 0.75rem;\n}\n\n.content.is-medium {\n  font-size: 1.25rem;\n}\n\n.content.is-large {\n  font-size: 1.5rem;\n}\n\n.input,\n.textarea {\n  -moz-appearance: none;\n  -webkit-appearance: none;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  border: none;\n  border-radius: 3px;\n  box-shadow: none;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  font-size: 1rem;\n  height: 2.25em;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  line-height: 1.25;\n  padding-bottom: 0.5em;\n  padding-left: 0.625em;\n  padding-right: 0.625em;\n  padding-top: 0.5em;\n  position: relative;\n  vertical-align: top;\n  background-color: white;\n  border: 1px solid #dbdbdb;\n  color: #363636;\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.1);\n  max-width: 100%;\n  width: 100%;\n}\n\n.input:focus, .input.is-focused, .input:active, .input.is-active,\n.textarea:focus,\n.textarea.is-focused,\n.textarea:active,\n.textarea.is-active {\n  outline: none;\n}\n\n.input[disabled], .input.is-disabled,\n.textarea[disabled],\n.textarea.is-disabled {\n  pointer-events: none;\n}\n\n.input:hover, .input.is-hovered,\n.textarea:hover,\n.textarea.is-hovered {\n  border-color: #b5b5b5;\n}\n\n.input:focus, .input.is-focused, .input:active, .input.is-active,\n.textarea:focus,\n.textarea.is-focused,\n.textarea:active,\n.textarea.is-active {\n  border-color: #7957d5;\n}\n\n.input[disabled], .input.is-disabled,\n.textarea[disabled],\n.textarea.is-disabled {\n  background-color: whitesmoke;\n  border-color: whitesmoke;\n  box-shadow: none;\n  color: #7a7a7a;\n}\n\n.input[disabled]::-moz-placeholder, .input.is-disabled::-moz-placeholder,\n.textarea[disabled]::-moz-placeholder,\n.textarea.is-disabled::-moz-placeholder {\n  color: rgba(54, 54, 54, 0.3);\n}\n\n.input[disabled]::-webkit-input-placeholder, .input.is-disabled::-webkit-input-placeholder,\n.textarea[disabled]::-webkit-input-placeholder,\n.textarea.is-disabled::-webkit-input-placeholder {\n  color: rgba(54, 54, 54, 0.3);\n}\n\n.input[disabled]:-moz-placeholder, .input.is-disabled:-moz-placeholder,\n.textarea[disabled]:-moz-placeholder,\n.textarea.is-disabled:-moz-placeholder {\n  color: rgba(54, 54, 54, 0.3);\n}\n\n.input[disabled]:-ms-input-placeholder, .input.is-disabled:-ms-input-placeholder,\n.textarea[disabled]:-ms-input-placeholder,\n.textarea.is-disabled:-ms-input-placeholder {\n  color: rgba(54, 54, 54, 0.3);\n}\n\n.input[type=\"search\"],\n.textarea[type=\"search\"] {\n  border-radius: 290486px;\n}\n\n.input.is-white,\n.textarea.is-white {\n  border-color: white;\n}\n\n.input.is-black,\n.textarea.is-black {\n  border-color: #0a0a0a;\n}\n\n.input.is-light,\n.textarea.is-light {\n  border-color: whitesmoke;\n}\n\n.input.is-dark,\n.textarea.is-dark {\n  border-color: #363636;\n}\n\n.input.is-primary,\n.textarea.is-primary {\n  border-color: #7957d5;\n}\n\n.input.is-info,\n.textarea.is-info {\n  border-color: #3273dc;\n}\n\n.input.is-success,\n.textarea.is-success {\n  border-color: #23d160;\n}\n\n.input.is-warning,\n.textarea.is-warning {\n  border-color: #ffdd57;\n}\n\n.input.is-danger,\n.textarea.is-danger {\n  border-color: #ff3860;\n}\n\n.input.is-small,\n.textarea.is-small {\n  border-radius: 2px;\n  font-size: 0.75rem;\n}\n\n.input.is-medium,\n.textarea.is-medium {\n  font-size: 1.25rem;\n}\n\n.input.is-large,\n.textarea.is-large {\n  font-size: 1.5rem;\n}\n\n.input.is-fullwidth,\n.textarea.is-fullwidth {\n  display: block;\n  width: 100%;\n}\n\n.input.is-inline,\n.textarea.is-inline {\n  display: inline;\n  width: auto;\n}\n\n.textarea {\n  display: block;\n  line-height: 1.25;\n  max-height: 600px;\n  max-width: 100%;\n  min-height: 120px;\n  min-width: 100%;\n  padding: 0.625em;\n  resize: vertical;\n}\n\n.checkbox,\n.radio {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  cursor: pointer;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  -ms-flex-wrap: wrap;\n      flex-wrap: wrap;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  position: relative;\n  vertical-align: top;\n}\n\n.checkbox input,\n.radio input {\n  cursor: pointer;\n  margin-right: 0.5em;\n}\n\n.checkbox:hover,\n.radio:hover {\n  color: #363636;\n}\n\n.checkbox.is-disabled,\n.radio.is-disabled {\n  color: #7a7a7a;\n  pointer-events: none;\n}\n\n.checkbox.is-disabled input,\n.radio.is-disabled input {\n  pointer-events: none;\n}\n\n.radio + .radio {\n  margin-left: 0.5em;\n}\n\n.select {\n  display: inline-block;\n  height: 2.25em;\n  position: relative;\n  vertical-align: top;\n}\n\n.select:after {\n  border: 1px solid #7957d5;\n  border-right: 0;\n  border-top: 0;\n  content: \" \";\n  display: block;\n  height: 0.5em;\n  pointer-events: none;\n  position: absolute;\n  -webkit-transform: rotate(-45deg);\n          transform: rotate(-45deg);\n  width: 0.5em;\n  margin-top: -0.375em;\n  right: 1.125em;\n  top: 50%;\n  z-index: 4;\n}\n\n.select select {\n  -moz-appearance: none;\n  -webkit-appearance: none;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  border: none;\n  border-radius: 3px;\n  box-shadow: none;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  font-size: 1rem;\n  height: 2.25em;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  line-height: 1.25;\n  padding-bottom: 0.5em;\n  padding-left: 0.625em;\n  padding-right: 0.625em;\n  padding-top: 0.5em;\n  position: relative;\n  vertical-align: top;\n  background-color: white;\n  border: 1px solid #dbdbdb;\n  color: #363636;\n  cursor: pointer;\n  display: block;\n  font-size: 1em;\n  outline: none;\n  padding-right: 2.5em;\n}\n\n.select select:focus, .select select.is-focused, .select select:active, .select select.is-active {\n  outline: none;\n}\n\n.select select[disabled], .select select.is-disabled {\n  pointer-events: none;\n}\n\n.select select:hover, .select select.is-hovered {\n  border-color: #b5b5b5;\n}\n\n.select select:focus, .select select.is-focused, .select select:active, .select select.is-active {\n  border-color: #7957d5;\n}\n\n.select select[disabled], .select select.is-disabled {\n  background-color: whitesmoke;\n  border-color: whitesmoke;\n  box-shadow: none;\n  color: #7a7a7a;\n}\n\n.select select[disabled]::-moz-placeholder, .select select.is-disabled::-moz-placeholder {\n  color: rgba(54, 54, 54, 0.3);\n}\n\n.select select[disabled]::-webkit-input-placeholder, .select select.is-disabled::-webkit-input-placeholder {\n  color: rgba(54, 54, 54, 0.3);\n}\n\n.select select[disabled]:-moz-placeholder, .select select.is-disabled:-moz-placeholder {\n  color: rgba(54, 54, 54, 0.3);\n}\n\n.select select[disabled]:-ms-input-placeholder, .select select.is-disabled:-ms-input-placeholder {\n  color: rgba(54, 54, 54, 0.3);\n}\n\n.select select:hover {\n  border-color: #b5b5b5;\n}\n\n.select select::ms-expand {\n  display: none;\n}\n\n.select:hover:after {\n  border-color: #363636;\n}\n\n.select.is-small {\n  border-radius: 2px;\n  font-size: 0.75rem;\n}\n\n.select.is-medium {\n  font-size: 1.25rem;\n}\n\n.select.is-large {\n  font-size: 1.5rem;\n}\n\n.select.is-fullwidth {\n  width: 100%;\n}\n\n.select.is-fullwidth select {\n  width: 100%;\n}\n\n.label {\n  color: #363636;\n  display: block;\n  font-size: 1rem;\n  font-weight: 700;\n}\n\n.label:not(:last-child) {\n  margin-bottom: 0.5em;\n}\n\n.help {\n  display: block;\n  font-size: 0.75rem;\n  margin-top: 0.25rem;\n}\n\n.help.is-white {\n  color: white;\n}\n\n.help.is-black {\n  color: #0a0a0a;\n}\n\n.help.is-light {\n  color: whitesmoke;\n}\n\n.help.is-dark {\n  color: #363636;\n}\n\n.help.is-primary {\n  color: #7957d5;\n}\n\n.help.is-info {\n  color: #3273dc;\n}\n\n.help.is-success {\n  color: #23d160;\n}\n\n.help.is-warning {\n  color: #ffdd57;\n}\n\n.help.is-danger {\n  color: #ff3860;\n}\n\n.select select {\n  line-height: 1;\n}\n\n.field:not(:last-child) {\n  margin-bottom: 0.75rem;\n}\n\n.field.has-addons {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n}\n\n.field.has-addons .control {\n  margin-right: -1px;\n}\n\n.field.has-addons .control:first-child .button,\n.field.has-addons .control:first-child .input,\n.field.has-addons .control:first-child .select select {\n  border-bottom-left-radius: 3px;\n  border-top-left-radius: 3px;\n}\n\n.field.has-addons .control:last-child .button,\n.field.has-addons .control:last-child .input,\n.field.has-addons .control:last-child .select select {\n  border-bottom-right-radius: 3px;\n  border-top-right-radius: 3px;\n}\n\n.field.has-addons .control .button,\n.field.has-addons .control .input,\n.field.has-addons .control .select select {\n  border-radius: 0;\n}\n\n.field.has-addons .control .button:hover,\n.field.has-addons .control .input:hover,\n.field.has-addons .control .select select:hover {\n  z-index: 2;\n}\n\n.field.has-addons .control .button:focus, .field.has-addons .control .button:active,\n.field.has-addons .control .input:focus,\n.field.has-addons .control .input:active,\n.field.has-addons .control .select select:focus,\n.field.has-addons .control .select select:active {\n  z-index: 3;\n}\n\n.field.has-addons .control.is-expanded {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.field.has-addons.has-addons-centered {\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n\n.field.has-addons.has-addons-right {\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n}\n\n.field.has-addons.has-addons-fullwidth .control {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.field.is-grouped {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n}\n\n.field.is-grouped > .control {\n  -ms-flex-preferred-size: 0;\n      flex-basis: 0;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.field.is-grouped > .control:not(:last-child) {\n  margin-bottom: 0;\n  margin-right: 0.75rem;\n}\n\n.field.is-grouped > .control.is-expanded {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 1;\n      flex-shrink: 1;\n}\n\n.field.is-grouped.is-grouped-centered {\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n\n.field.is-grouped.is-grouped-right {\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n}\n\n@media screen and (min-width: 769px) {\n  .field.is-horizontal {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n}\n\n@media screen and (max-width: 768px) {\n  .field-label {\n    margin-bottom: 0.5rem;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .field-label {\n    -ms-flex-preferred-size: 0;\n        flex-basis: 0;\n    -webkit-box-flex: 1;\n        -ms-flex-positive: 1;\n            flex-grow: 1;\n    -ms-flex-negative: 0;\n        flex-shrink: 0;\n    margin-right: 1.5rem;\n    padding-top: 0.375em;\n    text-align: right;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .field-body {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n    -ms-flex-preferred-size: 0;\n        flex-basis: 0;\n    -webkit-box-flex: 5;\n        -ms-flex-positive: 5;\n            flex-grow: 5;\n    -ms-flex-negative: 1;\n        flex-shrink: 1;\n  }\n  .field-body .field {\n    -ms-flex-negative: 1;\n        flex-shrink: 1;\n  }\n  .field-body .field:not(.is-narrow) {\n    -webkit-box-flex: 1;\n        -ms-flex-positive: 1;\n            flex-grow: 1;\n  }\n  .field-body .field:not(:last-child) {\n    margin-bottom: 0;\n    margin-right: 0.75rem;\n  }\n}\n\n.control {\n  font-size: 1rem;\n  position: relative;\n  text-align: left;\n}\n\n.control.has-icon .icon {\n  color: #dbdbdb;\n  height: 2.25em;\n  pointer-events: none;\n  position: absolute;\n  top: 0;\n  width: 2.25em;\n  z-index: 4;\n}\n\n.control.has-icon .input:focus + .icon {\n  color: #7a7a7a;\n}\n\n.control.has-icon .input.is-small + .icon {\n  font-size: 0.75rem;\n}\n\n.control.has-icon .input.is-medium + .icon {\n  font-size: 1.25rem;\n}\n\n.control.has-icon .input.is-large + .icon {\n  font-size: 1.5rem;\n}\n\n.control.has-icon:not(.has-icon-right) .icon {\n  left: 0;\n}\n\n.control.has-icon:not(.has-icon-right) .input {\n  padding-left: 2.25em;\n}\n\n.control.has-icon.has-icon-right .icon {\n  right: 0;\n}\n\n.control.has-icon.has-icon-right .input {\n  padding-right: 2.25em;\n}\n\n.control.is-loading:after {\n  -webkit-animation: spinAround 500ms infinite linear;\n          animation: spinAround 500ms infinite linear;\n  border: 2px solid #dbdbdb;\n  border-radius: 290486px;\n  border-right-color: transparent;\n  border-top-color: transparent;\n  content: \"\";\n  display: block;\n  height: 1em;\n  position: relative;\n  width: 1em;\n  position: absolute !important;\n  right: 0.625em;\n  top: 0.625em;\n}\n\n.icon {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  height: 1.5rem;\n  vertical-align: top;\n  width: 1.5rem;\n}\n\n.icon .fa {\n  font-size: 21px;\n}\n\n.icon.is-small {\n  height: 1rem;\n  width: 1rem;\n}\n\n.icon.is-small .fa {\n  font-size: 14px;\n}\n\n.icon.is-medium {\n  height: 2rem;\n  width: 2rem;\n}\n\n.icon.is-medium .fa {\n  font-size: 28px;\n}\n\n.icon.is-large {\n  height: 3rem;\n  width: 3rem;\n}\n\n.icon.is-large .fa {\n  font-size: 42px;\n}\n\n.image {\n  display: block;\n  position: relative;\n}\n\n.image img {\n  display: block;\n  height: auto;\n  width: 100%;\n}\n\n.image.is-square img, .image.is-1by1 img, .image.is-4by3 img, .image.is-3by2 img, .image.is-16by9 img, .image.is-2by1 img {\n  bottom: 0;\n  left: 0;\n  position: absolute;\n  right: 0;\n  top: 0;\n  height: 100%;\n  width: 100%;\n}\n\n.image.is-square, .image.is-1by1 {\n  padding-top: 100%;\n}\n\n.image.is-4by3 {\n  padding-top: 75%;\n}\n\n.image.is-3by2 {\n  padding-top: 66.6666%;\n}\n\n.image.is-16by9 {\n  padding-top: 56.25%;\n}\n\n.image.is-2by1 {\n  padding-top: 50%;\n}\n\n.image.is-16x16 {\n  height: 16px;\n  width: 16px;\n}\n\n.image.is-24x24 {\n  height: 24px;\n  width: 24px;\n}\n\n.image.is-32x32 {\n  height: 32px;\n  width: 32px;\n}\n\n.image.is-48x48 {\n  height: 48px;\n  width: 48px;\n}\n\n.image.is-64x64 {\n  height: 64px;\n  width: 64px;\n}\n\n.image.is-96x96 {\n  height: 96px;\n  width: 96px;\n}\n\n.image.is-128x128 {\n  height: 128px;\n  width: 128px;\n}\n\n.notification {\n  background-color: whitesmoke;\n  border-radius: 3px;\n  padding: 1.25rem 2.5rem 1.25rem 1.5rem;\n  position: relative;\n}\n\n.notification:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.notification code,\n.notification pre {\n  background: white;\n}\n\n.notification pre code {\n  background: transparent;\n}\n\n.notification .delete {\n  position: absolute;\n  right: 0.5em;\n  top: 0.5em;\n}\n\n.notification .title,\n.notification .subtitle,\n.notification .content {\n  color: inherit;\n}\n\n.notification.is-white {\n  background-color: white;\n  color: #0a0a0a;\n}\n\n.notification.is-black {\n  background-color: #0a0a0a;\n  color: white;\n}\n\n.notification.is-light {\n  background-color: whitesmoke;\n  color: #363636;\n}\n\n.notification.is-dark {\n  background-color: #363636;\n  color: whitesmoke;\n}\n\n.notification.is-primary {\n  background-color: #7957d5;\n  color: #fff;\n}\n\n.notification.is-info {\n  background-color: #3273dc;\n  color: #fff;\n}\n\n.notification.is-success {\n  background-color: #23d160;\n  color: #fff;\n}\n\n.notification.is-warning {\n  background-color: #ffdd57;\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.notification.is-danger {\n  background-color: #ff3860;\n  color: #fff;\n}\n\n.progress {\n  -moz-appearance: none;\n  -webkit-appearance: none;\n  border: none;\n  border-radius: 290486px;\n  display: block;\n  height: 1rem;\n  overflow: hidden;\n  padding: 0;\n  width: 100%;\n}\n\n.progress:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.progress::-webkit-progress-bar {\n  background-color: #dbdbdb;\n}\n\n.progress::-webkit-progress-value {\n  background-color: #4a4a4a;\n}\n\n.progress::-moz-progress-bar {\n  background-color: #4a4a4a;\n}\n\n.progress.is-white::-webkit-progress-value {\n  background-color: white;\n}\n\n.progress.is-white::-moz-progress-bar {\n  background-color: white;\n}\n\n.progress.is-black::-webkit-progress-value {\n  background-color: #0a0a0a;\n}\n\n.progress.is-black::-moz-progress-bar {\n  background-color: #0a0a0a;\n}\n\n.progress.is-light::-webkit-progress-value {\n  background-color: whitesmoke;\n}\n\n.progress.is-light::-moz-progress-bar {\n  background-color: whitesmoke;\n}\n\n.progress.is-dark::-webkit-progress-value {\n  background-color: #363636;\n}\n\n.progress.is-dark::-moz-progress-bar {\n  background-color: #363636;\n}\n\n.progress.is-primary::-webkit-progress-value {\n  background-color: #7957d5;\n}\n\n.progress.is-primary::-moz-progress-bar {\n  background-color: #7957d5;\n}\n\n.progress.is-info::-webkit-progress-value {\n  background-color: #3273dc;\n}\n\n.progress.is-info::-moz-progress-bar {\n  background-color: #3273dc;\n}\n\n.progress.is-success::-webkit-progress-value {\n  background-color: #23d160;\n}\n\n.progress.is-success::-moz-progress-bar {\n  background-color: #23d160;\n}\n\n.progress.is-warning::-webkit-progress-value {\n  background-color: #ffdd57;\n}\n\n.progress.is-warning::-moz-progress-bar {\n  background-color: #ffdd57;\n}\n\n.progress.is-danger::-webkit-progress-value {\n  background-color: #ff3860;\n}\n\n.progress.is-danger::-moz-progress-bar {\n  background-color: #ff3860;\n}\n\n.progress.is-small {\n  height: 0.75rem;\n}\n\n.progress.is-medium {\n  height: 1.25rem;\n}\n\n.progress.is-large {\n  height: 1.5rem;\n}\n\n.table {\n  background-color: white;\n  color: #363636;\n  margin-bottom: 1.5rem;\n  width: 100%;\n}\n\n.table td,\n.table th {\n  border: 1px solid #dbdbdb;\n  border-width: 0 0 1px;\n  padding: 0.5em 0.75em;\n  vertical-align: top;\n}\n\n.table td.is-narrow,\n.table th.is-narrow {\n  white-space: nowrap;\n  width: 1%;\n}\n\n.table th {\n  color: #363636;\n  text-align: left;\n}\n\n.table tr:hover {\n  background-color: #fafafa;\n}\n\n.table thead td,\n.table thead th {\n  border-width: 0 0 2px;\n  color: #7a7a7a;\n}\n\n.table tfoot td,\n.table tfoot th {\n  border-width: 2px 0 0;\n  color: #7a7a7a;\n}\n\n.table tbody tr:last-child td,\n.table tbody tr:last-child th {\n  border-bottom-width: 0;\n}\n\n.table.is-bordered td,\n.table.is-bordered th {\n  border-width: 1px;\n}\n\n.table.is-bordered tr:last-child td,\n.table.is-bordered tr:last-child th {\n  border-bottom-width: 1px;\n}\n\n.table.is-narrow td,\n.table.is-narrow th {\n  padding: 0.25em 0.5em;\n}\n\n.table.is-striped tbody tr:nth-child(even) {\n  background-color: #fafafa;\n}\n\n.table.is-striped tbody tr:nth-child(even):hover {\n  background-color: whitesmoke;\n}\n\n.tag {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  background-color: whitesmoke;\n  border-radius: 290486px;\n  color: #4a4a4a;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  font-size: 0.75rem;\n  height: 2em;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  line-height: 1.5;\n  padding-left: 0.875em;\n  padding-right: 0.875em;\n  vertical-align: top;\n  white-space: nowrap;\n}\n\n.tag .delete {\n  margin-left: 0.25em;\n  margin-right: -0.375em;\n}\n\n.tag.is-white {\n  background-color: white;\n  color: #0a0a0a;\n}\n\n.tag.is-black {\n  background-color: #0a0a0a;\n  color: white;\n}\n\n.tag.is-light {\n  background-color: whitesmoke;\n  color: #363636;\n}\n\n.tag.is-dark {\n  background-color: #363636;\n  color: whitesmoke;\n}\n\n.tag.is-primary {\n  background-color: #7957d5;\n  color: #fff;\n}\n\n.tag.is-info {\n  background-color: #3273dc;\n  color: #fff;\n}\n\n.tag.is-success {\n  background-color: #23d160;\n  color: #fff;\n}\n\n.tag.is-warning {\n  background-color: #ffdd57;\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.tag.is-danger {\n  background-color: #ff3860;\n  color: #fff;\n}\n\n.tag.is-medium {\n  font-size: 1rem;\n}\n\n.tag.is-large {\n  font-size: 1.25rem;\n}\n\n.title,\n.subtitle {\n  word-break: break-word;\n}\n\n.title:not(:last-child),\n.subtitle:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.title em,\n.title span,\n.subtitle em,\n.subtitle span {\n  font-weight: 300;\n}\n\n.title strong,\n.subtitle strong {\n  font-weight: 600;\n}\n\n.title .tag,\n.subtitle .tag {\n  vertical-align: middle;\n}\n\n.title {\n  color: #363636;\n  font-size: 2rem;\n  font-weight: 300;\n  line-height: 1.125;\n}\n\n.title strong {\n  color: inherit;\n}\n\n.title + .highlight {\n  margin-top: -0.75rem;\n}\n\n.title:not(.is-spaced) + .subtitle {\n  margin-top: -1.5rem;\n}\n\n.title.is-1 {\n  font-size: 3rem;\n}\n\n.title.is-2 {\n  font-size: 2.5rem;\n}\n\n.title.is-3 {\n  font-size: 2rem;\n}\n\n.title.is-4 {\n  font-size: 1.5rem;\n}\n\n.title.is-5 {\n  font-size: 1.25rem;\n}\n\n.title.is-6 {\n  font-size: 1rem;\n}\n\n.subtitle {\n  color: #4a4a4a;\n  font-size: 1.25rem;\n  font-weight: 300;\n  line-height: 1.25;\n}\n\n.subtitle strong {\n  color: #363636;\n}\n\n.subtitle:not(.is-spaced) + .title {\n  margin-top: -1.5rem;\n}\n\n.subtitle.is-1 {\n  font-size: 3rem;\n}\n\n.subtitle.is-2 {\n  font-size: 2.5rem;\n}\n\n.subtitle.is-3 {\n  font-size: 2rem;\n}\n\n.subtitle.is-4 {\n  font-size: 1.5rem;\n}\n\n.subtitle.is-5 {\n  font-size: 1.25rem;\n}\n\n.subtitle.is-6 {\n  font-size: 1rem;\n}\n\n.block:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.container {\n  position: relative;\n}\n\n@media screen and (min-width: 1000px) {\n  .container {\n    margin: 0 auto;\n    width: 960px;\n  }\n  .container.is-fluid {\n    margin: 0 20px;\n    max-width: none;\n    width: auto;\n  }\n}\n\n@media screen and (min-width: 1192px) {\n  .container {\n    width: 1152px;\n  }\n}\n\n@media screen and (min-width: 1384px) {\n  .container {\n    width: 1344px;\n  }\n}\n\n.delete {\n  -webkit-touch-callout: none;\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  -ms-user-select: none;\n  user-select: none;\n  -moz-appearance: none;\n  -webkit-appearance: none;\n  background-color: rgba(10, 10, 10, 0.2);\n  border: none;\n  border-radius: 290486px;\n  cursor: pointer;\n  display: inline-block;\n  font-size: 1rem;\n  height: 20px;\n  outline: none;\n  position: relative;\n  vertical-align: top;\n  width: 20px;\n}\n\n.delete:before, .delete:after {\n  background-color: white;\n  content: \"\";\n  display: block;\n  left: 50%;\n  position: absolute;\n  top: 50%;\n  -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);\n          transform: translateX(-50%) translateY(-50%) rotate(45deg);\n  -webkit-transform-origin: center center;\n          transform-origin: center center;\n}\n\n.delete:before {\n  height: 2px;\n  width: 50%;\n}\n\n.delete:after {\n  height: 50%;\n  width: 2px;\n}\n\n.delete:hover, .delete:focus {\n  background-color: rgba(10, 10, 10, 0.3);\n}\n\n.delete:active {\n  background-color: rgba(10, 10, 10, 0.4);\n}\n\n.delete.is-small {\n  height: 16px;\n  width: 16px;\n}\n\n.delete.is-medium {\n  height: 24px;\n  width: 24px;\n}\n\n.delete.is-large {\n  height: 32px;\n  width: 32px;\n}\n\n.fa {\n  font-size: 21px;\n  text-align: center;\n  vertical-align: top;\n}\n\n.heading {\n  display: block;\n  font-size: 11px;\n  letter-spacing: 1px;\n  margin-bottom: 5px;\n  text-transform: uppercase;\n}\n\n.highlight {\n  font-weight: 400;\n  max-width: 100%;\n  overflow: hidden;\n  padding: 0;\n}\n\n.highlight:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.highlight pre {\n  overflow: auto;\n  max-width: 100%;\n}\n\n.loader {\n  -webkit-animation: spinAround 500ms infinite linear;\n          animation: spinAround 500ms infinite linear;\n  border: 2px solid #dbdbdb;\n  border-radius: 290486px;\n  border-right-color: transparent;\n  border-top-color: transparent;\n  content: \"\";\n  display: block;\n  height: 1em;\n  position: relative;\n  width: 1em;\n}\n\n.number {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  background-color: whitesmoke;\n  border-radius: 290486px;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  font-size: 1.25rem;\n  height: 2em;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  margin-right: 1.5rem;\n  min-width: 2.5em;\n  padding: 0.25rem 0.5rem;\n  text-align: center;\n  vertical-align: top;\n}\n\n.card-header {\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  box-shadow: 0 1px 2px rgba(10, 10, 10, 0.1);\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n\n.card-header-title {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  color: #363636;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  font-weight: 700;\n  padding: 0.75rem;\n}\n\n.card-header-icon {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  cursor: pointer;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  padding: 0.75rem;\n}\n\n.card-image {\n  display: block;\n  position: relative;\n}\n\n.card-content {\n  padding: 1.5rem;\n}\n\n.card-footer {\n  border-top: 1px solid #dbdbdb;\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n\n.card-footer-item {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -ms-flex-preferred-size: 0;\n      flex-basis: 0;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  padding: 0.75rem;\n}\n\n.card-footer-item:not(:last-child) {\n  border-right: 1px solid #dbdbdb;\n}\n\n.card {\n  background-color: white;\n  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);\n  color: #4a4a4a;\n  max-width: 100%;\n  position: relative;\n}\n\n.card .media:not(:last-child) {\n  margin-bottom: 0.75rem;\n}\n\n.level-item {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -ms-flex-preferred-size: auto;\n      flex-basis: auto;\n  -webkit-box-flex: 0;\n      -ms-flex-positive: 0;\n          flex-grow: 0;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n\n.level-item .title,\n.level-item .subtitle {\n  margin-bottom: 0;\n}\n\n@media screen and (max-width: 768px) {\n  .level-item:not(:last-child) {\n    margin-bottom: 0.75rem;\n  }\n}\n\n.level-left,\n.level-right {\n  -ms-flex-preferred-size: auto;\n      flex-basis: auto;\n  -webkit-box-flex: 0;\n      -ms-flex-positive: 0;\n          flex-grow: 0;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.level-left .level-item:not(:last-child),\n.level-right .level-item:not(:last-child) {\n  margin-right: 0.75rem;\n}\n\n.level-left .level-item.is-flexible,\n.level-right .level-item.is-flexible {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n}\n\n.level-left {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n}\n\n@media screen and (max-width: 768px) {\n  .level-left + .level-right {\n    margin-top: 1.5rem;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .level-left {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n}\n\n.level-right {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n}\n\n@media screen and (min-width: 769px) {\n  .level-right {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n}\n\n.level {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  -webkit-box-pack: justify;\n      -ms-flex-pack: justify;\n          justify-content: space-between;\n}\n\n.level:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.level code {\n  border-radius: 3px;\n}\n\n.level img {\n  display: inline-block;\n  vertical-align: top;\n}\n\n.level.is-mobile {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n\n.level.is-mobile .level-left,\n.level.is-mobile .level-right {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n\n.level.is-mobile .level-left + .level-right {\n  margin-top: 0;\n}\n\n.level.is-mobile .level-item:not(:last-child) {\n  margin-bottom: 0;\n}\n\n.level.is-mobile .level-item:not(.is-narrow) {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n}\n\n@media screen and (min-width: 769px) {\n  .level {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n  .level > .level-item:not(.is-narrow) {\n    -webkit-box-flex: 1;\n        -ms-flex-positive: 1;\n            flex-grow: 1;\n  }\n}\n\n.media-left,\n.media-right {\n  -ms-flex-preferred-size: auto;\n      flex-basis: auto;\n  -webkit-box-flex: 0;\n      -ms-flex-positive: 0;\n          flex-grow: 0;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.media-left {\n  margin-right: 1rem;\n}\n\n.media-right {\n  margin-left: 1rem;\n}\n\n.media-content {\n  -ms-flex-preferred-size: auto;\n      flex-basis: auto;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 1;\n      flex-shrink: 1;\n  text-align: left;\n}\n\n.media {\n  -webkit-box-align: start;\n      -ms-flex-align: start;\n          align-items: flex-start;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  text-align: left;\n}\n\n.media .content:not(:last-child) {\n  margin-bottom: 0.75rem;\n}\n\n.media .media {\n  border-top: 1px solid rgba(219, 219, 219, 0.5);\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  padding-top: 0.75rem;\n}\n\n.media .media .content:not(:last-child),\n.media .media .control:not(:last-child) {\n  margin-bottom: 0.5rem;\n}\n\n.media .media .media {\n  padding-top: 0.5rem;\n}\n\n.media .media .media + .media {\n  margin-top: 0.5rem;\n}\n\n.media + .media {\n  border-top: 1px solid rgba(219, 219, 219, 0.5);\n  margin-top: 1rem;\n  padding-top: 1rem;\n}\n\n.media.is-large + .media {\n  margin-top: 1.5rem;\n  padding-top: 1.5rem;\n}\n\n.menu {\n  font-size: 1rem;\n}\n\n.menu-list {\n  line-height: 1.25;\n}\n\n.menu-list a {\n  border-radius: 2px;\n  color: #4a4a4a;\n  display: block;\n  padding: 0.5em 0.75em;\n}\n\n.menu-list a:hover {\n  background-color: whitesmoke;\n  color: #7957d5;\n}\n\n.menu-list a.is-active {\n  background-color: #7957d5;\n  color: #fff;\n}\n\n.menu-list li ul {\n  border-left: 1px solid #dbdbdb;\n  margin: 0.75em;\n  padding-left: 0.75em;\n}\n\n.menu-label {\n  color: #7a7a7a;\n  font-size: 0.8em;\n  letter-spacing: 0.1em;\n  text-transform: uppercase;\n}\n\n.menu-label:not(:first-child) {\n  margin-top: 1em;\n}\n\n.menu-label:not(:last-child) {\n  margin-bottom: 1em;\n}\n\n.message {\n  background-color: whitesmoke;\n  border-radius: 3px;\n  font-size: 1rem;\n}\n\n.message:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.message.is-white {\n  background-color: white;\n}\n\n.message.is-white .message-header {\n  background-color: white;\n  color: #0a0a0a;\n}\n\n.message.is-white .message-body {\n  border-color: white;\n  color: #4d4d4d;\n}\n\n.message.is-black {\n  background-color: #fafafa;\n}\n\n.message.is-black .message-header {\n  background-color: #0a0a0a;\n  color: white;\n}\n\n.message.is-black .message-body {\n  border-color: #0a0a0a;\n  color: #090909;\n}\n\n.message.is-light {\n  background-color: #fafafa;\n}\n\n.message.is-light .message-header {\n  background-color: whitesmoke;\n  color: #363636;\n}\n\n.message.is-light .message-body {\n  border-color: whitesmoke;\n  color: #505050;\n}\n\n.message.is-dark {\n  background-color: #fafafa;\n}\n\n.message.is-dark .message-header {\n  background-color: #363636;\n  color: whitesmoke;\n}\n\n.message.is-dark .message-body {\n  border-color: #363636;\n  color: #2a2a2a;\n}\n\n.message.is-primary {\n  background-color: #f8f7fd;\n}\n\n.message.is-primary .message-header {\n  background-color: #7957d5;\n  color: #fff;\n}\n\n.message.is-primary .message-body {\n  border-color: #7957d5;\n  color: #5534ae;\n}\n\n.message.is-info {\n  background-color: #f6f9fe;\n}\n\n.message.is-info .message-header {\n  background-color: #3273dc;\n  color: #fff;\n}\n\n.message.is-info .message-body {\n  border-color: #3273dc;\n  color: #22509a;\n}\n\n.message.is-success {\n  background-color: #f6fef9;\n}\n\n.message.is-success .message-header {\n  background-color: #23d160;\n  color: #fff;\n}\n\n.message.is-success .message-body {\n  border-color: #23d160;\n  color: #0e301a;\n}\n\n.message.is-warning {\n  background-color: #fffdf5;\n}\n\n.message.is-warning .message-header {\n  background-color: #ffdd57;\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.message.is-warning .message-body {\n  border-color: #ffdd57;\n  color: #3b3108;\n}\n\n.message.is-danger {\n  background-color: #fff5f7;\n}\n\n.message.is-danger .message-header {\n  background-color: #ff3860;\n  color: #fff;\n}\n\n.message.is-danger .message-body {\n  border-color: #ff3860;\n  color: #cd0930;\n}\n\n.message-header {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  background-color: #4a4a4a;\n  border-radius: 3px 3px 0 0;\n  color: #fff;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: justify;\n      -ms-flex-pack: justify;\n          justify-content: space-between;\n  line-height: 1.25;\n  padding: 0.5em 0.75em;\n  position: relative;\n}\n\n.message-header a,\n.message-header strong {\n  color: inherit;\n}\n\n.message-header a {\n  text-decoration: underline;\n}\n\n.message-header .delete {\n  -webkit-box-flex: 0;\n      -ms-flex-positive: 0;\n          flex-grow: 0;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  margin-left: 0.75em;\n}\n\n.message-header + .message-body {\n  border-top-left-radius: 0;\n  border-top-right-radius: 0;\n  border-top: none;\n}\n\n.message-body {\n  border: 1px solid #dbdbdb;\n  border-radius: 3px;\n  color: #4a4a4a;\n  padding: 1em 1.25em;\n}\n\n.message-body a,\n.message-body strong {\n  color: inherit;\n}\n\n.message-body a {\n  text-decoration: underline;\n}\n\n.message-body code,\n.message-body pre {\n  background: white;\n}\n\n.message-body pre code {\n  background: transparent;\n}\n\n.modal-background {\n  bottom: 0;\n  left: 0;\n  position: absolute;\n  right: 0;\n  top: 0;\n  background-color: rgba(10, 10, 10, 0.86);\n}\n\n.modal-content,\n.modal-card {\n  margin: 0 20px;\n  max-height: calc(100vh - 160px);\n  overflow: auto;\n  position: relative;\n  width: 100%;\n}\n\n@media screen and (min-width: 769px) {\n  .modal-content,\n  .modal-card {\n    margin: 0 auto;\n    max-height: calc(100vh - 40px);\n    width: 640px;\n  }\n}\n\n.modal-close {\n  -webkit-touch-callout: none;\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  -ms-user-select: none;\n  user-select: none;\n  -moz-appearance: none;\n  -webkit-appearance: none;\n  background-color: rgba(10, 10, 10, 0.2);\n  border: none;\n  border-radius: 290486px;\n  cursor: pointer;\n  display: inline-block;\n  font-size: 1rem;\n  height: 20px;\n  outline: none;\n  position: relative;\n  vertical-align: top;\n  width: 20px;\n  background: none;\n  height: 40px;\n  position: fixed;\n  right: 20px;\n  top: 20px;\n  width: 40px;\n}\n\n.modal-close:before, .modal-close:after {\n  background-color: white;\n  content: \"\";\n  display: block;\n  left: 50%;\n  position: absolute;\n  top: 50%;\n  -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg);\n          transform: translateX(-50%) translateY(-50%) rotate(45deg);\n  -webkit-transform-origin: center center;\n          transform-origin: center center;\n}\n\n.modal-close:before {\n  height: 2px;\n  width: 50%;\n}\n\n.modal-close:after {\n  height: 50%;\n  width: 2px;\n}\n\n.modal-close:hover, .modal-close:focus {\n  background-color: rgba(10, 10, 10, 0.3);\n}\n\n.modal-close:active {\n  background-color: rgba(10, 10, 10, 0.4);\n}\n\n.modal-close.is-small {\n  height: 16px;\n  width: 16px;\n}\n\n.modal-close.is-medium {\n  height: 24px;\n  width: 24px;\n}\n\n.modal-close.is-large {\n  height: 32px;\n  width: 32px;\n}\n\n.modal-card {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: column;\n          flex-direction: column;\n  max-height: calc(100vh - 40px);\n  overflow: hidden;\n}\n\n.modal-card-head,\n.modal-card-foot {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  background-color: whitesmoke;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  padding: 20px;\n  position: relative;\n}\n\n.modal-card-head {\n  border-bottom: 1px solid #dbdbdb;\n  border-top-left-radius: 5px;\n  border-top-right-radius: 5px;\n}\n\n.modal-card-title {\n  color: #363636;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  font-size: 1.5rem;\n  line-height: 1;\n}\n\n.modal-card-foot {\n  border-bottom-left-radius: 5px;\n  border-bottom-right-radius: 5px;\n  border-top: 1px solid #dbdbdb;\n}\n\n.modal-card-foot .button:not(:last-child) {\n  margin-right: 10px;\n}\n\n.modal-card-body {\n  -webkit-overflow-scrolling: touch;\n  background-color: white;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 1;\n      flex-shrink: 1;\n  overflow: auto;\n  padding: 20px;\n}\n\n.modal {\n  bottom: 0;\n  left: 0;\n  position: absolute;\n  right: 0;\n  top: 0;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  display: none;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  overflow: hidden;\n  position: fixed;\n  z-index: 1986;\n}\n\n.modal.is-active {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n\n.nav-toggle {\n  cursor: pointer;\n  display: block;\n  height: 3.25rem;\n  position: relative;\n  width: 3.25rem;\n}\n\n.nav-toggle span {\n  background-color: #4a4a4a;\n  display: block;\n  height: 1px;\n  left: 50%;\n  margin-left: -7px;\n  position: absolute;\n  top: 50%;\n  -webkit-transition: none 86ms ease-out;\n  transition: none 86ms ease-out;\n  -webkit-transition-property: background, left, opacity, -webkit-transform;\n  transition-property: background, left, opacity, -webkit-transform;\n  transition-property: background, left, opacity, transform;\n  transition-property: background, left, opacity, transform, -webkit-transform;\n  width: 15px;\n}\n\n.nav-toggle span:nth-child(1) {\n  margin-top: -6px;\n}\n\n.nav-toggle span:nth-child(2) {\n  margin-top: -1px;\n}\n\n.nav-toggle span:nth-child(3) {\n  margin-top: 4px;\n}\n\n.nav-toggle:hover {\n  background-color: whitesmoke;\n}\n\n.nav-toggle.is-active span {\n  background-color: #7957d5;\n}\n\n.nav-toggle.is-active span:nth-child(1) {\n  margin-left: -5px;\n  -webkit-transform: rotate(45deg);\n          transform: rotate(45deg);\n  -webkit-transform-origin: left top;\n          transform-origin: left top;\n}\n\n.nav-toggle.is-active span:nth-child(2) {\n  opacity: 0;\n}\n\n.nav-toggle.is-active span:nth-child(3) {\n  margin-left: -5px;\n  -webkit-transform: rotate(-45deg);\n          transform: rotate(-45deg);\n  -webkit-transform-origin: left bottom;\n          transform-origin: left bottom;\n}\n\n@media screen and (min-width: 769px) {\n  .nav-toggle {\n    display: none;\n  }\n}\n\n.nav-item {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-flex: 0;\n      -ms-flex-positive: 0;\n          flex-grow: 0;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  font-size: 1rem;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  line-height: 1.5;\n  padding: 0.5rem 0.75rem;\n}\n\n.nav-item a {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.nav-item img {\n  max-height: 1.75rem;\n}\n\n.nav-item .button + .button {\n  margin-left: 0.75rem;\n}\n\n.nav-item .tag:first-child:not(:last-child) {\n  margin-right: 0.5rem;\n}\n\n.nav-item .tag:last-child:not(:first-child) {\n  margin-left: 0.5rem;\n}\n\n@media screen and (max-width: 768px) {\n  .nav-item {\n    -webkit-box-pack: start;\n        -ms-flex-pack: start;\n            justify-content: flex-start;\n  }\n}\n\n.nav-item a,\na.nav-item {\n  color: #7a7a7a;\n}\n\n.nav-item a:hover,\na.nav-item:hover {\n  color: #363636;\n}\n\n.nav-item a.is-active,\na.nav-item.is-active {\n  color: #363636;\n}\n\n.nav-item a.is-tab,\na.nav-item.is-tab {\n  border-bottom: 1px solid transparent;\n  border-top: 1px solid transparent;\n  padding-bottom: calc(0.75rem - 1px);\n  padding-left: 1rem;\n  padding-right: 1rem;\n  padding-top: calc(0.75rem - 1px);\n}\n\n.nav-item a.is-tab:hover,\na.nav-item.is-tab:hover {\n  border-bottom-color: #7957d5;\n  border-top-color: transparent;\n}\n\n.nav-item a.is-tab.is-active,\na.nav-item.is-tab.is-active {\n  border-bottom: 3px solid #7957d5;\n  color: #7957d5;\n  padding-bottom: calc(0.75rem - 3px);\n}\n\n@media screen and (min-width: 1000px) {\n  .nav-item a.is-brand,\n  a.nav-item.is-brand {\n    padding-left: 0;\n  }\n}\n\n@media screen and (max-width: 768px) {\n  .nav-menu {\n    background-color: white;\n    box-shadow: 0 4px 7px rgba(10, 10, 10, 0.1);\n    left: 0;\n    display: none;\n    right: 0;\n    top: 100%;\n    position: absolute;\n  }\n  .nav-menu .nav-item {\n    border-top: 1px solid rgba(219, 219, 219, 0.5);\n    padding: 0.75rem;\n  }\n  .nav-menu.is-active {\n    display: block;\n  }\n}\n\n@media screen and (min-width: 769px) and (max-width: 999px) {\n  .nav-menu {\n    padding-right: 1.5rem;\n  }\n}\n\n.nav-left,\n.nav-right {\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  -ms-flex-preferred-size: 0;\n      flex-basis: 0;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.nav-left {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  overflow: hidden;\n  overflow-x: auto;\n  white-space: nowrap;\n}\n\n.nav-center {\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-flex: 0;\n      -ms-flex-positive: 0;\n          flex-grow: 0;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  margin-left: auto;\n  margin-right: auto;\n}\n\n.nav-right {\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n}\n\n@media screen and (min-width: 769px) {\n  .nav-right {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n}\n\n.nav {\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  background-color: white;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  min-height: 3.25rem;\n  position: relative;\n  text-align: center;\n  z-index: 2;\n}\n\n.nav > .container {\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  min-height: 3.25rem;\n}\n\n.nav.has-shadow {\n  box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1);\n}\n\n@media screen and (max-width: 768px) {\n  .nav > .container {\n    width: 100%;\n  }\n}\n\n.pagination {\n  font-size: 1rem;\n}\n\n.pagination.is-small {\n  font-size: 0.75rem;\n}\n\n.pagination.is-medium {\n  font-size: 1.25rem;\n}\n\n.pagination.is-large {\n  font-size: 1.5rem;\n}\n\n.pagination,\n.pagination-list {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  text-align: center;\n}\n\n.pagination-previous,\n.pagination-next,\n.pagination-link,\n.pagination-ellipsis {\n  -moz-appearance: none;\n  -webkit-appearance: none;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  border: none;\n  border-radius: 3px;\n  box-shadow: none;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  font-size: 1rem;\n  height: 2.25em;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  line-height: 1.25;\n  padding-bottom: 0.5em;\n  padding-left: 0.625em;\n  padding-right: 0.625em;\n  padding-top: 0.5em;\n  position: relative;\n  vertical-align: top;\n  -webkit-touch-callout: none;\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  -ms-user-select: none;\n  user-select: none;\n  font-size: 1em;\n  padding-left: 0.5em;\n  padding-right: 0.5em;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  text-align: center;\n}\n\n.pagination-previous:focus, .pagination-previous.is-focused, .pagination-previous:active, .pagination-previous.is-active,\n.pagination-next:focus,\n.pagination-next.is-focused,\n.pagination-next:active,\n.pagination-next.is-active,\n.pagination-link:focus,\n.pagination-link.is-focused,\n.pagination-link:active,\n.pagination-link.is-active,\n.pagination-ellipsis:focus,\n.pagination-ellipsis.is-focused,\n.pagination-ellipsis:active,\n.pagination-ellipsis.is-active {\n  outline: none;\n}\n\n.pagination-previous[disabled], .pagination-previous.is-disabled,\n.pagination-next[disabled],\n.pagination-next.is-disabled,\n.pagination-link[disabled],\n.pagination-link.is-disabled,\n.pagination-ellipsis[disabled],\n.pagination-ellipsis.is-disabled {\n  pointer-events: none;\n}\n\n.pagination-previous,\n.pagination-next,\n.pagination-link {\n  border: 1px solid #dbdbdb;\n  min-width: 2.25em;\n}\n\n.pagination-previous:hover,\n.pagination-next:hover,\n.pagination-link:hover {\n  border-color: #b5b5b5;\n  color: #363636;\n}\n\n.pagination-previous:focus,\n.pagination-next:focus,\n.pagination-link:focus {\n  border-color: #7957d5;\n}\n\n.pagination-previous:active,\n.pagination-next:active,\n.pagination-link:active {\n  box-shadow: inset 0 1px 2px rgba(10, 10, 10, 0.2);\n}\n\n.pagination-previous[disabled], .pagination-previous.is-disabled,\n.pagination-next[disabled],\n.pagination-next.is-disabled,\n.pagination-link[disabled],\n.pagination-link.is-disabled {\n  background: #dbdbdb;\n  color: #7a7a7a;\n  opacity: 0.5;\n  pointer-events: none;\n}\n\n.pagination-previous,\n.pagination-next {\n  padding-left: 0.75em;\n  padding-right: 0.75em;\n}\n\n.pagination-link.is-current {\n  background-color: #7957d5;\n  border-color: #7957d5;\n  color: #fff;\n}\n\n.pagination-ellipsis {\n  color: #b5b5b5;\n  pointer-events: none;\n}\n\n.pagination-list li:not(:first-child) {\n  margin-left: 0.375rem;\n}\n\n@media screen and (max-width: 768px) {\n  .pagination {\n    -ms-flex-wrap: wrap;\n        flex-wrap: wrap;\n  }\n  .pagination-previous,\n  .pagination-next {\n    -webkit-box-flex: 1;\n        -ms-flex-positive: 1;\n            flex-grow: 1;\n    -ms-flex-negative: 1;\n        flex-shrink: 1;\n    width: calc(50% - 0.375rem);\n  }\n  .pagination-next {\n    margin-left: 0.75rem;\n  }\n  .pagination-list {\n    margin-top: 0.75rem;\n  }\n  .pagination-list li {\n    -webkit-box-flex: 1;\n        -ms-flex-positive: 1;\n            flex-grow: 1;\n    -ms-flex-negative: 1;\n        flex-shrink: 1;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .pagination-list {\n    -webkit-box-flex: 1;\n        -ms-flex-positive: 1;\n            flex-grow: 1;\n    -ms-flex-negative: 1;\n        flex-shrink: 1;\n    -webkit-box-pack: start;\n        -ms-flex-pack: start;\n            justify-content: flex-start;\n    -webkit-box-ordinal-group: 2;\n        -ms-flex-order: 1;\n            order: 1;\n  }\n  .pagination-previous,\n  .pagination-next {\n    margin-left: 0.75rem;\n  }\n  .pagination-previous {\n    -webkit-box-ordinal-group: 3;\n        -ms-flex-order: 2;\n            order: 2;\n  }\n  .pagination-next {\n    -webkit-box-ordinal-group: 4;\n        -ms-flex-order: 3;\n            order: 3;\n  }\n  .pagination {\n    -webkit-box-pack: justify;\n        -ms-flex-pack: justify;\n            justify-content: space-between;\n  }\n  .pagination.is-centered .pagination-previous {\n    margin-left: 0;\n    -webkit-box-ordinal-group: 2;\n        -ms-flex-order: 1;\n            order: 1;\n  }\n  .pagination.is-centered .pagination-list {\n    -webkit-box-pack: center;\n        -ms-flex-pack: center;\n            justify-content: center;\n    -webkit-box-ordinal-group: 3;\n        -ms-flex-order: 2;\n            order: 2;\n  }\n  .pagination.is-centered .pagination-next {\n    -webkit-box-ordinal-group: 4;\n        -ms-flex-order: 3;\n            order: 3;\n  }\n  .pagination.is-right .pagination-previous {\n    margin-left: 0;\n    -webkit-box-ordinal-group: 2;\n        -ms-flex-order: 1;\n            order: 1;\n  }\n  .pagination.is-right .pagination-next {\n    -webkit-box-ordinal-group: 3;\n        -ms-flex-order: 2;\n            order: 2;\n    margin-right: 0.75rem;\n  }\n  .pagination.is-right .pagination-list {\n    -webkit-box-pack: end;\n        -ms-flex-pack: end;\n            justify-content: flex-end;\n    -webkit-box-ordinal-group: 4;\n        -ms-flex-order: 3;\n            order: 3;\n  }\n}\n\n.panel {\n  font-size: 1rem;\n}\n\n.panel:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.panel-heading,\n.panel-tabs,\n.panel-block {\n  border-bottom: 1px solid #dbdbdb;\n  border-left: 1px solid #dbdbdb;\n  border-right: 1px solid #dbdbdb;\n}\n\n.panel-heading:first-child,\n.panel-tabs:first-child,\n.panel-block:first-child {\n  border-top: 1px solid #dbdbdb;\n}\n\n.panel-heading {\n  background-color: whitesmoke;\n  border-radius: 3px 3px 0 0;\n  color: #363636;\n  font-size: 1.25em;\n  font-weight: 300;\n  line-height: 1.25;\n  padding: 0.5em 0.75em;\n}\n\n.panel-tabs {\n  -webkit-box-align: end;\n      -ms-flex-align: end;\n          align-items: flex-end;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  font-size: 0.875em;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n\n.panel-tabs a {\n  border-bottom: 1px solid #dbdbdb;\n  margin-bottom: -1px;\n  padding: 0.5em;\n}\n\n.panel-tabs a.is-active {\n  border-bottom-color: #4a4a4a;\n  color: #363636;\n}\n\n.panel-list a {\n  color: #4a4a4a;\n}\n\n.panel-list a:hover {\n  color: #7957d5;\n}\n\n.panel-block {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  color: #363636;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n  padding: 0.5em 0.75em;\n}\n\n.panel-block input[type=\"checkbox\"] {\n  margin-right: 0.75em;\n}\n\n.panel-block > .control {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 1;\n      flex-shrink: 1;\n  width: 100%;\n}\n\n.panel-block.is-active {\n  border-left-color: #7957d5;\n  color: #363636;\n}\n\n.panel-block.is-active .panel-icon {\n  color: #7957d5;\n}\n\na.panel-block,\nlabel.panel-block {\n  cursor: pointer;\n}\n\na.panel-block:hover,\nlabel.panel-block:hover {\n  background-color: whitesmoke;\n}\n\n.panel-icon {\n  display: inline-block;\n  font-size: 14px;\n  height: 1em;\n  line-height: 1em;\n  text-align: center;\n  vertical-align: top;\n  width: 1em;\n  color: #7a7a7a;\n  margin-right: 0.75em;\n}\n\n.panel-icon .fa {\n  font-size: inherit;\n  line-height: inherit;\n}\n\n.tabs {\n  -webkit-touch-callout: none;\n  -webkit-user-select: none;\n  -moz-user-select: none;\n  -ms-user-select: none;\n  user-select: none;\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  font-size: 1rem;\n  -webkit-box-pack: justify;\n      -ms-flex-pack: justify;\n          justify-content: space-between;\n  overflow: hidden;\n  overflow-x: auto;\n  white-space: nowrap;\n}\n\n.tabs:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.tabs a {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  border-bottom: 1px solid #dbdbdb;\n  color: #4a4a4a;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  margin-bottom: -1px;\n  padding: 0.5em 1em;\n  vertical-align: top;\n}\n\n.tabs a:hover {\n  border-bottom-color: #363636;\n  color: #363636;\n}\n\n.tabs li {\n  display: block;\n}\n\n.tabs li.is-active a {\n  border-bottom-color: #7957d5;\n  color: #7957d5;\n}\n\n.tabs ul {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  border-bottom: 1px solid #dbdbdb;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  -webkit-box-pack: start;\n      -ms-flex-pack: start;\n          justify-content: flex-start;\n}\n\n.tabs ul.is-left {\n  padding-right: 0.75em;\n}\n\n.tabs ul.is-center {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n  padding-left: 0.75em;\n  padding-right: 0.75em;\n}\n\n.tabs ul.is-right {\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n  padding-left: 0.75em;\n}\n\n.tabs .icon:first-child {\n  margin-right: 0.5em;\n}\n\n.tabs .icon:last-child {\n  margin-left: 0.5em;\n}\n\n.tabs.is-centered ul {\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n\n.tabs.is-right ul {\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n}\n\n.tabs.is-boxed a {\n  border: 1px solid transparent;\n  border-radius: 3px 3px 0 0;\n}\n\n.tabs.is-boxed a:hover {\n  background-color: whitesmoke;\n  border-bottom-color: #dbdbdb;\n}\n\n.tabs.is-boxed li.is-active a {\n  background-color: white;\n  border-color: #dbdbdb;\n  border-bottom-color: transparent !important;\n}\n\n.tabs.is-fullwidth li {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.tabs.is-toggle a {\n  border: 1px solid #dbdbdb;\n  margin-bottom: 0;\n  position: relative;\n}\n\n.tabs.is-toggle a:hover {\n  background-color: whitesmoke;\n  border-color: #b5b5b5;\n  z-index: 2;\n}\n\n.tabs.is-toggle li + li {\n  margin-left: -1px;\n}\n\n.tabs.is-toggle li:first-child a {\n  border-radius: 3px 0 0 3px;\n}\n\n.tabs.is-toggle li:last-child a {\n  border-radius: 0 3px 3px 0;\n}\n\n.tabs.is-toggle li.is-active a {\n  background-color: #7957d5;\n  border-color: #7957d5;\n  color: #fff;\n  z-index: 1;\n}\n\n.tabs.is-toggle ul {\n  border-bottom: none;\n}\n\n.tabs.is-small {\n  font-size: 0.75rem;\n}\n\n.tabs.is-medium {\n  font-size: 1.25rem;\n}\n\n.tabs.is-large {\n  font-size: 1.5rem;\n}\n\n.column {\n  display: block;\n  -ms-flex-preferred-size: 0;\n      flex-basis: 0;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 1;\n      flex-shrink: 1;\n  padding: 0.75rem;\n}\n\n.columns.is-mobile > .column.is-narrow {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n}\n\n.columns.is-mobile > .column.is-full {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 100%;\n}\n\n.columns.is-mobile > .column.is-three-quarters {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 75%;\n}\n\n.columns.is-mobile > .column.is-two-thirds {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 66.6666%;\n}\n\n.columns.is-mobile > .column.is-half {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 50%;\n}\n\n.columns.is-mobile > .column.is-one-third {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 33.3333%;\n}\n\n.columns.is-mobile > .column.is-one-quarter {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 25%;\n}\n\n.columns.is-mobile > .column.is-offset-three-quarters {\n  margin-left: 75%;\n}\n\n.columns.is-mobile > .column.is-offset-two-thirds {\n  margin-left: 66.6666%;\n}\n\n.columns.is-mobile > .column.is-offset-half {\n  margin-left: 50%;\n}\n\n.columns.is-mobile > .column.is-offset-one-third {\n  margin-left: 33.3333%;\n}\n\n.columns.is-mobile > .column.is-offset-one-quarter {\n  margin-left: 25%;\n}\n\n.columns.is-mobile > .column.is-1 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 8.33333%;\n}\n\n.columns.is-mobile > .column.is-offset-1 {\n  margin-left: 8.33333%;\n}\n\n.columns.is-mobile > .column.is-2 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 16.66667%;\n}\n\n.columns.is-mobile > .column.is-offset-2 {\n  margin-left: 16.66667%;\n}\n\n.columns.is-mobile > .column.is-3 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 25%;\n}\n\n.columns.is-mobile > .column.is-offset-3 {\n  margin-left: 25%;\n}\n\n.columns.is-mobile > .column.is-4 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 33.33333%;\n}\n\n.columns.is-mobile > .column.is-offset-4 {\n  margin-left: 33.33333%;\n}\n\n.columns.is-mobile > .column.is-5 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 41.66667%;\n}\n\n.columns.is-mobile > .column.is-offset-5 {\n  margin-left: 41.66667%;\n}\n\n.columns.is-mobile > .column.is-6 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 50%;\n}\n\n.columns.is-mobile > .column.is-offset-6 {\n  margin-left: 50%;\n}\n\n.columns.is-mobile > .column.is-7 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 58.33333%;\n}\n\n.columns.is-mobile > .column.is-offset-7 {\n  margin-left: 58.33333%;\n}\n\n.columns.is-mobile > .column.is-8 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 66.66667%;\n}\n\n.columns.is-mobile > .column.is-offset-8 {\n  margin-left: 66.66667%;\n}\n\n.columns.is-mobile > .column.is-9 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 75%;\n}\n\n.columns.is-mobile > .column.is-offset-9 {\n  margin-left: 75%;\n}\n\n.columns.is-mobile > .column.is-10 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 83.33333%;\n}\n\n.columns.is-mobile > .column.is-offset-10 {\n  margin-left: 83.33333%;\n}\n\n.columns.is-mobile > .column.is-11 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 91.66667%;\n}\n\n.columns.is-mobile > .column.is-offset-11 {\n  margin-left: 91.66667%;\n}\n\n.columns.is-mobile > .column.is-12 {\n  -webkit-box-flex: 0;\n      -ms-flex: none;\n          flex: none;\n  width: 100%;\n}\n\n.columns.is-mobile > .column.is-offset-12 {\n  margin-left: 100%;\n}\n\n@media screen and (max-width: 768px) {\n  .column.is-narrow-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n  }\n  .column.is-full-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n  .column.is-three-quarters-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .column.is-two-thirds-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.6666%;\n  }\n  .column.is-half-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .column.is-one-third-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.3333%;\n  }\n  .column.is-one-quarter-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .column.is-offset-three-quarters-mobile {\n    margin-left: 75%;\n  }\n  .column.is-offset-two-thirds-mobile {\n    margin-left: 66.6666%;\n  }\n  .column.is-offset-half-mobile {\n    margin-left: 50%;\n  }\n  .column.is-offset-one-third-mobile {\n    margin-left: 33.3333%;\n  }\n  .column.is-offset-one-quarter-mobile {\n    margin-left: 25%;\n  }\n  .column.is-1-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 8.33333%;\n  }\n  .column.is-offset-1-mobile {\n    margin-left: 8.33333%;\n  }\n  .column.is-2-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 16.66667%;\n  }\n  .column.is-offset-2-mobile {\n    margin-left: 16.66667%;\n  }\n  .column.is-3-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .column.is-offset-3-mobile {\n    margin-left: 25%;\n  }\n  .column.is-4-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.33333%;\n  }\n  .column.is-offset-4-mobile {\n    margin-left: 33.33333%;\n  }\n  .column.is-5-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 41.66667%;\n  }\n  .column.is-offset-5-mobile {\n    margin-left: 41.66667%;\n  }\n  .column.is-6-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .column.is-offset-6-mobile {\n    margin-left: 50%;\n  }\n  .column.is-7-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 58.33333%;\n  }\n  .column.is-offset-7-mobile {\n    margin-left: 58.33333%;\n  }\n  .column.is-8-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.66667%;\n  }\n  .column.is-offset-8-mobile {\n    margin-left: 66.66667%;\n  }\n  .column.is-9-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .column.is-offset-9-mobile {\n    margin-left: 75%;\n  }\n  .column.is-10-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 83.33333%;\n  }\n  .column.is-offset-10-mobile {\n    margin-left: 83.33333%;\n  }\n  .column.is-11-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 91.66667%;\n  }\n  .column.is-offset-11-mobile {\n    margin-left: 91.66667%;\n  }\n  .column.is-12-mobile {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n  .column.is-offset-12-mobile {\n    margin-left: 100%;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .column.is-narrow, .column.is-narrow-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n  }\n  .column.is-full, .column.is-full-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n  .column.is-three-quarters, .column.is-three-quarters-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .column.is-two-thirds, .column.is-two-thirds-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.6666%;\n  }\n  .column.is-half, .column.is-half-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .column.is-one-third, .column.is-one-third-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.3333%;\n  }\n  .column.is-one-quarter, .column.is-one-quarter-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .column.is-offset-three-quarters, .column.is-offset-three-quarters-tablet {\n    margin-left: 75%;\n  }\n  .column.is-offset-two-thirds, .column.is-offset-two-thirds-tablet {\n    margin-left: 66.6666%;\n  }\n  .column.is-offset-half, .column.is-offset-half-tablet {\n    margin-left: 50%;\n  }\n  .column.is-offset-one-third, .column.is-offset-one-third-tablet {\n    margin-left: 33.3333%;\n  }\n  .column.is-offset-one-quarter, .column.is-offset-one-quarter-tablet {\n    margin-left: 25%;\n  }\n  .column.is-1, .column.is-1-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 8.33333%;\n  }\n  .column.is-offset-1, .column.is-offset-1-tablet {\n    margin-left: 8.33333%;\n  }\n  .column.is-2, .column.is-2-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 16.66667%;\n  }\n  .column.is-offset-2, .column.is-offset-2-tablet {\n    margin-left: 16.66667%;\n  }\n  .column.is-3, .column.is-3-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .column.is-offset-3, .column.is-offset-3-tablet {\n    margin-left: 25%;\n  }\n  .column.is-4, .column.is-4-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.33333%;\n  }\n  .column.is-offset-4, .column.is-offset-4-tablet {\n    margin-left: 33.33333%;\n  }\n  .column.is-5, .column.is-5-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 41.66667%;\n  }\n  .column.is-offset-5, .column.is-offset-5-tablet {\n    margin-left: 41.66667%;\n  }\n  .column.is-6, .column.is-6-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .column.is-offset-6, .column.is-offset-6-tablet {\n    margin-left: 50%;\n  }\n  .column.is-7, .column.is-7-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 58.33333%;\n  }\n  .column.is-offset-7, .column.is-offset-7-tablet {\n    margin-left: 58.33333%;\n  }\n  .column.is-8, .column.is-8-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.66667%;\n  }\n  .column.is-offset-8, .column.is-offset-8-tablet {\n    margin-left: 66.66667%;\n  }\n  .column.is-9, .column.is-9-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .column.is-offset-9, .column.is-offset-9-tablet {\n    margin-left: 75%;\n  }\n  .column.is-10, .column.is-10-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 83.33333%;\n  }\n  .column.is-offset-10, .column.is-offset-10-tablet {\n    margin-left: 83.33333%;\n  }\n  .column.is-11, .column.is-11-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 91.66667%;\n  }\n  .column.is-offset-11, .column.is-offset-11-tablet {\n    margin-left: 91.66667%;\n  }\n  .column.is-12, .column.is-12-tablet {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n  .column.is-offset-12, .column.is-offset-12-tablet {\n    margin-left: 100%;\n  }\n}\n\n@media screen and (min-width: 1000px) {\n  .column.is-narrow-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n  }\n  .column.is-full-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n  .column.is-three-quarters-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .column.is-two-thirds-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.6666%;\n  }\n  .column.is-half-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .column.is-one-third-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.3333%;\n  }\n  .column.is-one-quarter-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .column.is-offset-three-quarters-desktop {\n    margin-left: 75%;\n  }\n  .column.is-offset-two-thirds-desktop {\n    margin-left: 66.6666%;\n  }\n  .column.is-offset-half-desktop {\n    margin-left: 50%;\n  }\n  .column.is-offset-one-third-desktop {\n    margin-left: 33.3333%;\n  }\n  .column.is-offset-one-quarter-desktop {\n    margin-left: 25%;\n  }\n  .column.is-1-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 8.33333%;\n  }\n  .column.is-offset-1-desktop {\n    margin-left: 8.33333%;\n  }\n  .column.is-2-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 16.66667%;\n  }\n  .column.is-offset-2-desktop {\n    margin-left: 16.66667%;\n  }\n  .column.is-3-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .column.is-offset-3-desktop {\n    margin-left: 25%;\n  }\n  .column.is-4-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.33333%;\n  }\n  .column.is-offset-4-desktop {\n    margin-left: 33.33333%;\n  }\n  .column.is-5-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 41.66667%;\n  }\n  .column.is-offset-5-desktop {\n    margin-left: 41.66667%;\n  }\n  .column.is-6-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .column.is-offset-6-desktop {\n    margin-left: 50%;\n  }\n  .column.is-7-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 58.33333%;\n  }\n  .column.is-offset-7-desktop {\n    margin-left: 58.33333%;\n  }\n  .column.is-8-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.66667%;\n  }\n  .column.is-offset-8-desktop {\n    margin-left: 66.66667%;\n  }\n  .column.is-9-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .column.is-offset-9-desktop {\n    margin-left: 75%;\n  }\n  .column.is-10-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 83.33333%;\n  }\n  .column.is-offset-10-desktop {\n    margin-left: 83.33333%;\n  }\n  .column.is-11-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 91.66667%;\n  }\n  .column.is-offset-11-desktop {\n    margin-left: 91.66667%;\n  }\n  .column.is-12-desktop {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n  .column.is-offset-12-desktop {\n    margin-left: 100%;\n  }\n}\n\n@media screen and (min-width: 1192px) {\n  .column.is-narrow-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n  }\n  .column.is-full-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n  .column.is-three-quarters-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .column.is-two-thirds-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.6666%;\n  }\n  .column.is-half-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .column.is-one-third-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.3333%;\n  }\n  .column.is-one-quarter-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .column.is-offset-three-quarters-widescreen {\n    margin-left: 75%;\n  }\n  .column.is-offset-two-thirds-widescreen {\n    margin-left: 66.6666%;\n  }\n  .column.is-offset-half-widescreen {\n    margin-left: 50%;\n  }\n  .column.is-offset-one-third-widescreen {\n    margin-left: 33.3333%;\n  }\n  .column.is-offset-one-quarter-widescreen {\n    margin-left: 25%;\n  }\n  .column.is-1-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 8.33333%;\n  }\n  .column.is-offset-1-widescreen {\n    margin-left: 8.33333%;\n  }\n  .column.is-2-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 16.66667%;\n  }\n  .column.is-offset-2-widescreen {\n    margin-left: 16.66667%;\n  }\n  .column.is-3-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .column.is-offset-3-widescreen {\n    margin-left: 25%;\n  }\n  .column.is-4-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.33333%;\n  }\n  .column.is-offset-4-widescreen {\n    margin-left: 33.33333%;\n  }\n  .column.is-5-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 41.66667%;\n  }\n  .column.is-offset-5-widescreen {\n    margin-left: 41.66667%;\n  }\n  .column.is-6-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .column.is-offset-6-widescreen {\n    margin-left: 50%;\n  }\n  .column.is-7-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 58.33333%;\n  }\n  .column.is-offset-7-widescreen {\n    margin-left: 58.33333%;\n  }\n  .column.is-8-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.66667%;\n  }\n  .column.is-offset-8-widescreen {\n    margin-left: 66.66667%;\n  }\n  .column.is-9-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .column.is-offset-9-widescreen {\n    margin-left: 75%;\n  }\n  .column.is-10-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 83.33333%;\n  }\n  .column.is-offset-10-widescreen {\n    margin-left: 83.33333%;\n  }\n  .column.is-11-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 91.66667%;\n  }\n  .column.is-offset-11-widescreen {\n    margin-left: 91.66667%;\n  }\n  .column.is-12-widescreen {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n  .column.is-offset-12-widescreen {\n    margin-left: 100%;\n  }\n}\n\n.columns {\n  margin-left: -0.75rem;\n  margin-right: -0.75rem;\n  margin-top: -0.75rem;\n}\n\n.columns:last-child {\n  margin-bottom: -0.75rem;\n}\n\n.columns:not(:last-child) {\n  margin-bottom: 0.75rem;\n}\n\n.columns.is-centered {\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n\n.columns.is-gapless {\n  margin-left: 0;\n  margin-right: 0;\n  margin-top: 0;\n}\n\n.columns.is-gapless:last-child {\n  margin-bottom: 0;\n}\n\n.columns.is-gapless:not(:last-child) {\n  margin-bottom: 1.5rem;\n}\n\n.columns.is-gapless > .column {\n  margin: 0;\n  padding: 0;\n}\n\n@media screen and (min-width: 769px) {\n  .columns.is-grid {\n    -ms-flex-wrap: wrap;\n        flex-wrap: wrap;\n  }\n  .columns.is-grid > .column {\n    max-width: 33.3333%;\n    padding: 0.75rem;\n    width: 33.3333%;\n  }\n  .columns.is-grid > .column + .column {\n    margin-left: 0;\n  }\n}\n\n.columns.is-mobile {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n\n.columns.is-multiline {\n  -ms-flex-wrap: wrap;\n      flex-wrap: wrap;\n}\n\n.columns.is-vcentered {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n}\n\n@media screen and (min-width: 769px) {\n  .columns:not(.is-desktop) {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n}\n\n@media screen and (min-width: 1000px) {\n  .columns.is-desktop {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n}\n\n.tile {\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  display: block;\n  -ms-flex-preferred-size: 0;\n      flex-basis: 0;\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 1;\n      flex-shrink: 1;\n  min-height: -webkit-min-content;\n  min-height: -moz-min-content;\n  min-height: min-content;\n}\n\n.tile.is-ancestor {\n  margin-left: -0.75rem;\n  margin-right: -0.75rem;\n  margin-top: -0.75rem;\n}\n\n.tile.is-ancestor:last-child {\n  margin-bottom: -0.75rem;\n}\n\n.tile.is-ancestor:not(:last-child) {\n  margin-bottom: 0.75rem;\n}\n\n.tile.is-child {\n  margin: 0 !important;\n}\n\n.tile.is-parent {\n  padding: 0.75rem;\n}\n\n.tile.is-vertical {\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: column;\n          flex-direction: column;\n}\n\n.tile.is-vertical > .tile.is-child:not(:last-child) {\n  margin-bottom: 1.5rem !important;\n}\n\n@media screen and (min-width: 769px) {\n  .tile:not(.is-child) {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n  .tile.is-1 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 8.33333%;\n  }\n  .tile.is-2 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 16.66667%;\n  }\n  .tile.is-3 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 25%;\n  }\n  .tile.is-4 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 33.33333%;\n  }\n  .tile.is-5 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 41.66667%;\n  }\n  .tile.is-6 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 50%;\n  }\n  .tile.is-7 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 58.33333%;\n  }\n  .tile.is-8 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 66.66667%;\n  }\n  .tile.is-9 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 75%;\n  }\n  .tile.is-10 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 83.33333%;\n  }\n  .tile.is-11 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 91.66667%;\n  }\n  .tile.is-12 {\n    -webkit-box-flex: 0;\n        -ms-flex: none;\n            flex: none;\n    width: 100%;\n  }\n}\n\n.hero-video {\n  bottom: 0;\n  left: 0;\n  position: absolute;\n  right: 0;\n  top: 0;\n  overflow: hidden;\n}\n\n.hero-video video {\n  left: 50%;\n  min-height: 100%;\n  min-width: 100%;\n  position: absolute;\n  top: 50%;\n  -webkit-transform: translate3d(-50%, -50%, 0);\n          transform: translate3d(-50%, -50%, 0);\n}\n\n.hero-video.is-transparent {\n  opacity: 0.3;\n}\n\n@media screen and (max-width: 768px) {\n  .hero-video {\n    display: none;\n  }\n}\n\n.hero-buttons {\n  margin-top: 1.5rem;\n}\n\n@media screen and (max-width: 768px) {\n  .hero-buttons .button {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n  }\n  .hero-buttons .button:not(:last-child) {\n    margin-bottom: 0.75rem;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .hero-buttons {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n    -webkit-box-pack: center;\n        -ms-flex-pack: center;\n            justify-content: center;\n  }\n  .hero-buttons .button:not(:last-child) {\n    margin-right: 1.5rem;\n  }\n}\n\n.hero-head,\n.hero-foot {\n  -webkit-box-flex: 0;\n      -ms-flex-positive: 0;\n          flex-grow: 0;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n}\n\n.hero-body {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 0;\n      flex-shrink: 0;\n  padding: 3rem 1.5rem;\n}\n\n@media screen and (min-width: 1192px) {\n  .hero-body {\n    padding-left: 0;\n    padding-right: 0;\n  }\n}\n\n.hero {\n  -webkit-box-align: stretch;\n      -ms-flex-align: stretch;\n          align-items: stretch;\n  background-color: white;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-orient: vertical;\n  -webkit-box-direction: normal;\n      -ms-flex-direction: column;\n          flex-direction: column;\n  -webkit-box-pack: justify;\n      -ms-flex-pack: justify;\n          justify-content: space-between;\n}\n\n.hero .nav {\n  background: none;\n  box-shadow: 0 1px 0 rgba(219, 219, 219, 0.3);\n}\n\n.hero .tabs ul {\n  border-bottom: none;\n}\n\n.hero.is-white {\n  background-color: white;\n  color: #0a0a0a;\n}\n\n.hero.is-white a,\n.hero.is-white strong {\n  color: inherit;\n}\n\n.hero.is-white .title {\n  color: #0a0a0a;\n}\n\n.hero.is-white .subtitle {\n  color: rgba(10, 10, 10, 0.9);\n}\n\n.hero.is-white .subtitle a,\n.hero.is-white .subtitle strong {\n  color: #0a0a0a;\n}\n\n.hero.is-white .nav {\n  box-shadow: 0 1px 0 rgba(10, 10, 10, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-white .nav-menu {\n    background-color: white;\n  }\n}\n\n.hero.is-white a.nav-item,\n.hero.is-white .nav-item a:not(.button) {\n  color: rgba(10, 10, 10, 0.7);\n}\n\n.hero.is-white a.nav-item:hover, .hero.is-white a.nav-item.is-active,\n.hero.is-white .nav-item a:not(.button):hover,\n.hero.is-white .nav-item a:not(.button).is-active {\n  color: #0a0a0a;\n}\n\n.hero.is-white .tabs a {\n  color: #0a0a0a;\n  opacity: 0.9;\n}\n\n.hero.is-white .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-white .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-white .tabs.is-boxed a, .hero.is-white .tabs.is-toggle a {\n  color: #0a0a0a;\n}\n\n.hero.is-white .tabs.is-boxed a:hover, .hero.is-white .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-white .tabs.is-boxed li.is-active a, .hero.is-white .tabs.is-boxed li.is-active a:hover, .hero.is-white .tabs.is-toggle li.is-active a, .hero.is-white .tabs.is-toggle li.is-active a:hover {\n  background-color: #0a0a0a;\n  border-color: #0a0a0a;\n  color: white;\n}\n\n.hero.is-white.is-bold {\n  background-image: -webkit-linear-gradient(309deg, #e6e6e6 0%, white 71%, white 100%);\n  background-image: linear-gradient(141deg, #e6e6e6 0%, white 71%, white 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-white .nav-toggle span {\n    background-color: #0a0a0a;\n  }\n  .hero.is-white .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-white .nav-toggle.is-active span {\n    background-color: #0a0a0a;\n  }\n  .hero.is-white .nav-menu .nav-item {\n    border-top-color: rgba(10, 10, 10, 0.2);\n  }\n}\n\n.hero.is-black {\n  background-color: #0a0a0a;\n  color: white;\n}\n\n.hero.is-black a,\n.hero.is-black strong {\n  color: inherit;\n}\n\n.hero.is-black .title {\n  color: white;\n}\n\n.hero.is-black .subtitle {\n  color: rgba(255, 255, 255, 0.9);\n}\n\n.hero.is-black .subtitle a,\n.hero.is-black .subtitle strong {\n  color: white;\n}\n\n.hero.is-black .nav {\n  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-black .nav-menu {\n    background-color: #0a0a0a;\n  }\n}\n\n.hero.is-black a.nav-item,\n.hero.is-black .nav-item a:not(.button) {\n  color: rgba(255, 255, 255, 0.7);\n}\n\n.hero.is-black a.nav-item:hover, .hero.is-black a.nav-item.is-active,\n.hero.is-black .nav-item a:not(.button):hover,\n.hero.is-black .nav-item a:not(.button).is-active {\n  color: white;\n}\n\n.hero.is-black .tabs a {\n  color: white;\n  opacity: 0.9;\n}\n\n.hero.is-black .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-black .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-black .tabs.is-boxed a, .hero.is-black .tabs.is-toggle a {\n  color: white;\n}\n\n.hero.is-black .tabs.is-boxed a:hover, .hero.is-black .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-black .tabs.is-boxed li.is-active a, .hero.is-black .tabs.is-boxed li.is-active a:hover, .hero.is-black .tabs.is-toggle li.is-active a, .hero.is-black .tabs.is-toggle li.is-active a:hover {\n  background-color: white;\n  border-color: white;\n  color: #0a0a0a;\n}\n\n.hero.is-black.is-bold {\n  background-image: -webkit-linear-gradient(309deg, black 0%, #0a0a0a 71%, #181616 100%);\n  background-image: linear-gradient(141deg, black 0%, #0a0a0a 71%, #181616 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-black .nav-toggle span {\n    background-color: white;\n  }\n  .hero.is-black .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-black .nav-toggle.is-active span {\n    background-color: white;\n  }\n  .hero.is-black .nav-menu .nav-item {\n    border-top-color: rgba(255, 255, 255, 0.2);\n  }\n}\n\n.hero.is-light {\n  background-color: whitesmoke;\n  color: #363636;\n}\n\n.hero.is-light a,\n.hero.is-light strong {\n  color: inherit;\n}\n\n.hero.is-light .title {\n  color: #363636;\n}\n\n.hero.is-light .subtitle {\n  color: rgba(54, 54, 54, 0.9);\n}\n\n.hero.is-light .subtitle a,\n.hero.is-light .subtitle strong {\n  color: #363636;\n}\n\n.hero.is-light .nav {\n  box-shadow: 0 1px 0 rgba(54, 54, 54, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-light .nav-menu {\n    background-color: whitesmoke;\n  }\n}\n\n.hero.is-light a.nav-item,\n.hero.is-light .nav-item a:not(.button) {\n  color: rgba(54, 54, 54, 0.7);\n}\n\n.hero.is-light a.nav-item:hover, .hero.is-light a.nav-item.is-active,\n.hero.is-light .nav-item a:not(.button):hover,\n.hero.is-light .nav-item a:not(.button).is-active {\n  color: #363636;\n}\n\n.hero.is-light .tabs a {\n  color: #363636;\n  opacity: 0.9;\n}\n\n.hero.is-light .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-light .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-light .tabs.is-boxed a, .hero.is-light .tabs.is-toggle a {\n  color: #363636;\n}\n\n.hero.is-light .tabs.is-boxed a:hover, .hero.is-light .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-light .tabs.is-boxed li.is-active a, .hero.is-light .tabs.is-boxed li.is-active a:hover, .hero.is-light .tabs.is-toggle li.is-active a, .hero.is-light .tabs.is-toggle li.is-active a:hover {\n  background-color: #363636;\n  border-color: #363636;\n  color: whitesmoke;\n}\n\n.hero.is-light.is-bold {\n  background-image: -webkit-linear-gradient(309deg, #dfd8d9 0%, whitesmoke 71%, white 100%);\n  background-image: linear-gradient(141deg, #dfd8d9 0%, whitesmoke 71%, white 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-light .nav-toggle span {\n    background-color: #363636;\n  }\n  .hero.is-light .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-light .nav-toggle.is-active span {\n    background-color: #363636;\n  }\n  .hero.is-light .nav-menu .nav-item {\n    border-top-color: rgba(54, 54, 54, 0.2);\n  }\n}\n\n.hero.is-dark {\n  background-color: #363636;\n  color: whitesmoke;\n}\n\n.hero.is-dark a,\n.hero.is-dark strong {\n  color: inherit;\n}\n\n.hero.is-dark .title {\n  color: whitesmoke;\n}\n\n.hero.is-dark .subtitle {\n  color: rgba(245, 245, 245, 0.9);\n}\n\n.hero.is-dark .subtitle a,\n.hero.is-dark .subtitle strong {\n  color: whitesmoke;\n}\n\n.hero.is-dark .nav {\n  box-shadow: 0 1px 0 rgba(245, 245, 245, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-dark .nav-menu {\n    background-color: #363636;\n  }\n}\n\n.hero.is-dark a.nav-item,\n.hero.is-dark .nav-item a:not(.button) {\n  color: rgba(245, 245, 245, 0.7);\n}\n\n.hero.is-dark a.nav-item:hover, .hero.is-dark a.nav-item.is-active,\n.hero.is-dark .nav-item a:not(.button):hover,\n.hero.is-dark .nav-item a:not(.button).is-active {\n  color: whitesmoke;\n}\n\n.hero.is-dark .tabs a {\n  color: whitesmoke;\n  opacity: 0.9;\n}\n\n.hero.is-dark .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-dark .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-dark .tabs.is-boxed a, .hero.is-dark .tabs.is-toggle a {\n  color: whitesmoke;\n}\n\n.hero.is-dark .tabs.is-boxed a:hover, .hero.is-dark .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-dark .tabs.is-boxed li.is-active a, .hero.is-dark .tabs.is-boxed li.is-active a:hover, .hero.is-dark .tabs.is-toggle li.is-active a, .hero.is-dark .tabs.is-toggle li.is-active a:hover {\n  background-color: whitesmoke;\n  border-color: whitesmoke;\n  color: #363636;\n}\n\n.hero.is-dark.is-bold {\n  background-image: -webkit-linear-gradient(309deg, #1f191a 0%, #363636 71%, #46403f 100%);\n  background-image: linear-gradient(141deg, #1f191a 0%, #363636 71%, #46403f 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-dark .nav-toggle span {\n    background-color: whitesmoke;\n  }\n  .hero.is-dark .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-dark .nav-toggle.is-active span {\n    background-color: whitesmoke;\n  }\n  .hero.is-dark .nav-menu .nav-item {\n    border-top-color: rgba(245, 245, 245, 0.2);\n  }\n}\n\n.hero.is-primary {\n  background-color: #7957d5;\n  color: #fff;\n}\n\n.hero.is-primary a,\n.hero.is-primary strong {\n  color: inherit;\n}\n\n.hero.is-primary .title {\n  color: #fff;\n}\n\n.hero.is-primary .subtitle {\n  color: rgba(255, 255, 255, 0.9);\n}\n\n.hero.is-primary .subtitle a,\n.hero.is-primary .subtitle strong {\n  color: #fff;\n}\n\n.hero.is-primary .nav {\n  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-primary .nav-menu {\n    background-color: #7957d5;\n  }\n}\n\n.hero.is-primary a.nav-item,\n.hero.is-primary .nav-item a:not(.button) {\n  color: rgba(255, 255, 255, 0.7);\n}\n\n.hero.is-primary a.nav-item:hover, .hero.is-primary a.nav-item.is-active,\n.hero.is-primary .nav-item a:not(.button):hover,\n.hero.is-primary .nav-item a:not(.button).is-active {\n  color: #fff;\n}\n\n.hero.is-primary .tabs a {\n  color: #fff;\n  opacity: 0.9;\n}\n\n.hero.is-primary .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-primary .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-primary .tabs.is-boxed a, .hero.is-primary .tabs.is-toggle a {\n  color: #fff;\n}\n\n.hero.is-primary .tabs.is-boxed a:hover, .hero.is-primary .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-primary .tabs.is-boxed li.is-active a, .hero.is-primary .tabs.is-boxed li.is-active a:hover, .hero.is-primary .tabs.is-toggle li.is-active a, .hero.is-primary .tabs.is-toggle li.is-active a:hover {\n  background-color: #fff;\n  border-color: #fff;\n  color: #7957d5;\n}\n\n.hero.is-primary.is-bold {\n  background-image: -webkit-linear-gradient(309deg, #3725d4 0%, #7957d5 71%, #9b67df 100%);\n  background-image: linear-gradient(141deg, #3725d4 0%, #7957d5 71%, #9b67df 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-primary .nav-toggle span {\n    background-color: #fff;\n  }\n  .hero.is-primary .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-primary .nav-toggle.is-active span {\n    background-color: #fff;\n  }\n  .hero.is-primary .nav-menu .nav-item {\n    border-top-color: rgba(255, 255, 255, 0.2);\n  }\n}\n\n.hero.is-info {\n  background-color: #3273dc;\n  color: #fff;\n}\n\n.hero.is-info a,\n.hero.is-info strong {\n  color: inherit;\n}\n\n.hero.is-info .title {\n  color: #fff;\n}\n\n.hero.is-info .subtitle {\n  color: rgba(255, 255, 255, 0.9);\n}\n\n.hero.is-info .subtitle a,\n.hero.is-info .subtitle strong {\n  color: #fff;\n}\n\n.hero.is-info .nav {\n  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-info .nav-menu {\n    background-color: #3273dc;\n  }\n}\n\n.hero.is-info a.nav-item,\n.hero.is-info .nav-item a:not(.button) {\n  color: rgba(255, 255, 255, 0.7);\n}\n\n.hero.is-info a.nav-item:hover, .hero.is-info a.nav-item.is-active,\n.hero.is-info .nav-item a:not(.button):hover,\n.hero.is-info .nav-item a:not(.button).is-active {\n  color: #fff;\n}\n\n.hero.is-info .tabs a {\n  color: #fff;\n  opacity: 0.9;\n}\n\n.hero.is-info .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-info .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-info .tabs.is-boxed a, .hero.is-info .tabs.is-toggle a {\n  color: #fff;\n}\n\n.hero.is-info .tabs.is-boxed a:hover, .hero.is-info .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-info .tabs.is-boxed li.is-active a, .hero.is-info .tabs.is-boxed li.is-active a:hover, .hero.is-info .tabs.is-toggle li.is-active a, .hero.is-info .tabs.is-toggle li.is-active a:hover {\n  background-color: #fff;\n  border-color: #fff;\n  color: #3273dc;\n}\n\n.hero.is-info.is-bold {\n  background-image: -webkit-linear-gradient(309deg, #1577c6 0%, #3273dc 71%, #4366e5 100%);\n  background-image: linear-gradient(141deg, #1577c6 0%, #3273dc 71%, #4366e5 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-info .nav-toggle span {\n    background-color: #fff;\n  }\n  .hero.is-info .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-info .nav-toggle.is-active span {\n    background-color: #fff;\n  }\n  .hero.is-info .nav-menu .nav-item {\n    border-top-color: rgba(255, 255, 255, 0.2);\n  }\n}\n\n.hero.is-success {\n  background-color: #23d160;\n  color: #fff;\n}\n\n.hero.is-success a,\n.hero.is-success strong {\n  color: inherit;\n}\n\n.hero.is-success .title {\n  color: #fff;\n}\n\n.hero.is-success .subtitle {\n  color: rgba(255, 255, 255, 0.9);\n}\n\n.hero.is-success .subtitle a,\n.hero.is-success .subtitle strong {\n  color: #fff;\n}\n\n.hero.is-success .nav {\n  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-success .nav-menu {\n    background-color: #23d160;\n  }\n}\n\n.hero.is-success a.nav-item,\n.hero.is-success .nav-item a:not(.button) {\n  color: rgba(255, 255, 255, 0.7);\n}\n\n.hero.is-success a.nav-item:hover, .hero.is-success a.nav-item.is-active,\n.hero.is-success .nav-item a:not(.button):hover,\n.hero.is-success .nav-item a:not(.button).is-active {\n  color: #fff;\n}\n\n.hero.is-success .tabs a {\n  color: #fff;\n  opacity: 0.9;\n}\n\n.hero.is-success .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-success .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-success .tabs.is-boxed a, .hero.is-success .tabs.is-toggle a {\n  color: #fff;\n}\n\n.hero.is-success .tabs.is-boxed a:hover, .hero.is-success .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-success .tabs.is-boxed li.is-active a, .hero.is-success .tabs.is-boxed li.is-active a:hover, .hero.is-success .tabs.is-toggle li.is-active a, .hero.is-success .tabs.is-toggle li.is-active a:hover {\n  background-color: #fff;\n  border-color: #fff;\n  color: #23d160;\n}\n\n.hero.is-success.is-bold {\n  background-image: -webkit-linear-gradient(309deg, #12af2f 0%, #23d160 71%, #2ce28a 100%);\n  background-image: linear-gradient(141deg, #12af2f 0%, #23d160 71%, #2ce28a 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-success .nav-toggle span {\n    background-color: #fff;\n  }\n  .hero.is-success .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-success .nav-toggle.is-active span {\n    background-color: #fff;\n  }\n  .hero.is-success .nav-menu .nav-item {\n    border-top-color: rgba(255, 255, 255, 0.2);\n  }\n}\n\n.hero.is-warning {\n  background-color: #ffdd57;\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.hero.is-warning a,\n.hero.is-warning strong {\n  color: inherit;\n}\n\n.hero.is-warning .title {\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.hero.is-warning .subtitle {\n  color: rgba(0, 0, 0, 0.9);\n}\n\n.hero.is-warning .subtitle a,\n.hero.is-warning .subtitle strong {\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.hero.is-warning .nav {\n  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-warning .nav-menu {\n    background-color: #ffdd57;\n  }\n}\n\n.hero.is-warning a.nav-item,\n.hero.is-warning .nav-item a:not(.button) {\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.hero.is-warning a.nav-item:hover, .hero.is-warning a.nav-item.is-active,\n.hero.is-warning .nav-item a:not(.button):hover,\n.hero.is-warning .nav-item a:not(.button).is-active {\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.hero.is-warning .tabs a {\n  color: rgba(0, 0, 0, 0.7);\n  opacity: 0.9;\n}\n\n.hero.is-warning .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-warning .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-warning .tabs.is-boxed a, .hero.is-warning .tabs.is-toggle a {\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.hero.is-warning .tabs.is-boxed a:hover, .hero.is-warning .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-warning .tabs.is-boxed li.is-active a, .hero.is-warning .tabs.is-boxed li.is-active a:hover, .hero.is-warning .tabs.is-toggle li.is-active a, .hero.is-warning .tabs.is-toggle li.is-active a:hover {\n  background-color: rgba(0, 0, 0, 0.7);\n  border-color: rgba(0, 0, 0, 0.7);\n  color: #ffdd57;\n}\n\n.hero.is-warning.is-bold {\n  background-image: -webkit-linear-gradient(309deg, #ffaf24 0%, #ffdd57 71%, #fffa70 100%);\n  background-image: linear-gradient(141deg, #ffaf24 0%, #ffdd57 71%, #fffa70 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-warning .nav-toggle span {\n    background-color: rgba(0, 0, 0, 0.7);\n  }\n  .hero.is-warning .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-warning .nav-toggle.is-active span {\n    background-color: rgba(0, 0, 0, 0.7);\n  }\n  .hero.is-warning .nav-menu .nav-item {\n    border-top-color: rgba(0, 0, 0, 0.2);\n  }\n}\n\n.hero.is-danger {\n  background-color: #ff3860;\n  color: #fff;\n}\n\n.hero.is-danger a,\n.hero.is-danger strong {\n  color: inherit;\n}\n\n.hero.is-danger .title {\n  color: #fff;\n}\n\n.hero.is-danger .subtitle {\n  color: rgba(255, 255, 255, 0.9);\n}\n\n.hero.is-danger .subtitle a,\n.hero.is-danger .subtitle strong {\n  color: #fff;\n}\n\n.hero.is-danger .nav {\n  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-danger .nav-menu {\n    background-color: #ff3860;\n  }\n}\n\n.hero.is-danger a.nav-item,\n.hero.is-danger .nav-item a:not(.button) {\n  color: rgba(255, 255, 255, 0.7);\n}\n\n.hero.is-danger a.nav-item:hover, .hero.is-danger a.nav-item.is-active,\n.hero.is-danger .nav-item a:not(.button):hover,\n.hero.is-danger .nav-item a:not(.button).is-active {\n  color: #fff;\n}\n\n.hero.is-danger .tabs a {\n  color: #fff;\n  opacity: 0.9;\n}\n\n.hero.is-danger .tabs a:hover {\n  opacity: 1;\n}\n\n.hero.is-danger .tabs li.is-active a {\n  opacity: 1;\n}\n\n.hero.is-danger .tabs.is-boxed a, .hero.is-danger .tabs.is-toggle a {\n  color: #fff;\n}\n\n.hero.is-danger .tabs.is-boxed a:hover, .hero.is-danger .tabs.is-toggle a:hover {\n  background-color: rgba(10, 10, 10, 0.1);\n}\n\n.hero.is-danger .tabs.is-boxed li.is-active a, .hero.is-danger .tabs.is-boxed li.is-active a:hover, .hero.is-danger .tabs.is-toggle li.is-active a, .hero.is-danger .tabs.is-toggle li.is-active a:hover {\n  background-color: #fff;\n  border-color: #fff;\n  color: #ff3860;\n}\n\n.hero.is-danger.is-bold {\n  background-image: -webkit-linear-gradient(309deg, #ff0561 0%, #ff3860 71%, #ff5257 100%);\n  background-image: linear-gradient(141deg, #ff0561 0%, #ff3860 71%, #ff5257 100%);\n}\n\n@media screen and (max-width: 768px) {\n  .hero.is-danger .nav-toggle span {\n    background-color: #fff;\n  }\n  .hero.is-danger .nav-toggle:hover {\n    background-color: rgba(10, 10, 10, 0.1);\n  }\n  .hero.is-danger .nav-toggle.is-active span {\n    background-color: #fff;\n  }\n  .hero.is-danger .nav-menu .nav-item {\n    border-top-color: rgba(255, 255, 255, 0.2);\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .hero.is-medium .hero-body {\n    padding-bottom: 9rem;\n    padding-top: 9rem;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .hero.is-large .hero-body {\n    padding-bottom: 18rem;\n    padding-top: 18rem;\n  }\n}\n\n.hero.is-fullheight {\n  min-height: 100vh;\n}\n\n.hero.is-fullheight .hero-body {\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n}\n\n.hero.is-fullheight .hero-body > .container {\n  -webkit-box-flex: 1;\n      -ms-flex-positive: 1;\n          flex-grow: 1;\n  -ms-flex-negative: 1;\n      flex-shrink: 1;\n}\n\n.section {\n  background-color: white;\n  padding: 3rem 1.5rem;\n}\n\n@media screen and (min-width: 1000px) {\n  .section.is-medium {\n    padding: 9rem 1.5rem;\n  }\n  .section.is-large {\n    padding: 18rem 1.5rem;\n  }\n}\n\n.footer {\n  background-color: whitesmoke;\n  padding: 3rem 1.5rem 6rem;\n}\n\n.animated {\n  -webkit-animation-duration: 250ms;\n          animation-duration: 250ms;\n}\n\n@-webkit-keyframes fadeOut {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n  }\n}\n\n@keyframes fadeOut {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n  }\n}\n\n.fadeOut {\n  -webkit-animation-name: fadeOut;\n          animation-name: fadeOut;\n}\n\n@-webkit-keyframes fadeOutDown {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n    -webkit-transform: translate3d(0, 100%, 0);\n            transform: translate3d(0, 100%, 0);\n  }\n}\n\n@keyframes fadeOutDown {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n    -webkit-transform: translate3d(0, 100%, 0);\n            transform: translate3d(0, 100%, 0);\n  }\n}\n\n.fadeOutDown {\n  -webkit-animation-name: fadeOutDown;\n          animation-name: fadeOutDown;\n}\n\n@-webkit-keyframes fadeOutLeft {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n    -webkit-transform: translate3d(-100%, 0, 0);\n            transform: translate3d(-100%, 0, 0);\n  }\n}\n\n@keyframes fadeOutLeft {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n    -webkit-transform: translate3d(-100%, 0, 0);\n            transform: translate3d(-100%, 0, 0);\n  }\n}\n\n.fadeOutLeft {\n  -webkit-animation-name: fadeOutLeft;\n          animation-name: fadeOutLeft;\n}\n\n@-webkit-keyframes fadeOutRight {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n    -webkit-transform: translate3d(100%, 0, 0);\n            transform: translate3d(100%, 0, 0);\n  }\n}\n\n@keyframes fadeOutRight {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n    -webkit-transform: translate3d(100%, 0, 0);\n            transform: translate3d(100%, 0, 0);\n  }\n}\n\n.fadeOutRight {\n  -webkit-animation-name: fadeOutRight;\n          animation-name: fadeOutRight;\n}\n\n@-webkit-keyframes fadeOutUp {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n    -webkit-transform: translate3d(0, -100%, 0);\n            transform: translate3d(0, -100%, 0);\n  }\n}\n\n@keyframes fadeOutUp {\n  from {\n    opacity: 1;\n  }\n  to {\n    opacity: 0;\n    -webkit-transform: translate3d(0, -100%, 0);\n            transform: translate3d(0, -100%, 0);\n  }\n}\n\n.fadeOutUp {\n  -webkit-animation-name: fadeOutUp;\n          animation-name: fadeOutUp;\n}\n\n@-webkit-keyframes fadeIn {\n  from {\n    opacity: 0;\n  }\n  to {\n    opacity: 1;\n  }\n}\n\n@keyframes fadeIn {\n  from {\n    opacity: 0;\n  }\n  to {\n    opacity: 1;\n  }\n}\n\n.fadeIn {\n  -webkit-animation-name: fadeIn;\n          animation-name: fadeIn;\n}\n\n@-webkit-keyframes fadeInDown {\n  from {\n    opacity: 0;\n    -webkit-transform: translate3d(0, -100%, 0);\n            transform: translate3d(0, -100%, 0);\n  }\n  to {\n    opacity: 1;\n    -webkit-transform: none;\n            transform: none;\n  }\n}\n\n@keyframes fadeInDown {\n  from {\n    opacity: 0;\n    -webkit-transform: translate3d(0, -100%, 0);\n            transform: translate3d(0, -100%, 0);\n  }\n  to {\n    opacity: 1;\n    -webkit-transform: none;\n            transform: none;\n  }\n}\n\n.fadeInDown {\n  -webkit-animation-name: fadeInDown;\n          animation-name: fadeInDown;\n}\n\n@-webkit-keyframes fadeInLeft {\n  from {\n    opacity: 0;\n    -webkit-transform: translate3d(-100%, 0, 0);\n            transform: translate3d(-100%, 0, 0);\n  }\n  to {\n    opacity: 1;\n    -webkit-transform: none;\n            transform: none;\n  }\n}\n\n@keyframes fadeInLeft {\n  from {\n    opacity: 0;\n    -webkit-transform: translate3d(-100%, 0, 0);\n            transform: translate3d(-100%, 0, 0);\n  }\n  to {\n    opacity: 1;\n    -webkit-transform: none;\n            transform: none;\n  }\n}\n\n.fadeInLeft {\n  -webkit-animation-name: fadeInLeft;\n          animation-name: fadeInLeft;\n}\n\n@-webkit-keyframes fadeInRight {\n  from {\n    opacity: 0;\n    -webkit-transform: translate3d(100%, 0, 0);\n            transform: translate3d(100%, 0, 0);\n  }\n  to {\n    opacity: 1;\n    -webkit-transform: none;\n            transform: none;\n  }\n}\n\n@keyframes fadeInRight {\n  from {\n    opacity: 0;\n    -webkit-transform: translate3d(100%, 0, 0);\n            transform: translate3d(100%, 0, 0);\n  }\n  to {\n    opacity: 1;\n    -webkit-transform: none;\n            transform: none;\n  }\n}\n\n.fadeInRight {\n  -webkit-animation-name: fadeInRight;\n          animation-name: fadeInRight;\n}\n\n@-webkit-keyframes fadeInUp {\n  from {\n    opacity: 0;\n    -webkit-transform: translate3d(0, 100%, 0);\n            transform: translate3d(0, 100%, 0);\n  }\n  to {\n    opacity: 1;\n    -webkit-transform: none;\n            transform: none;\n  }\n}\n\n@keyframes fadeInUp {\n  from {\n    opacity: 0;\n    -webkit-transform: translate3d(0, 100%, 0);\n            transform: translate3d(0, 100%, 0);\n  }\n  to {\n    opacity: 1;\n    -webkit-transform: none;\n            transform: none;\n  }\n}\n\n.fadeInUp {\n  -webkit-animation-name: fadeInUp;\n          animation-name: fadeInUp;\n}\n\n@-webkit-keyframes zoomIn {\n  from {\n    opacity: 0;\n    -webkit-transform: scale3d(0.3, 0.3, 0.3);\n            transform: scale3d(0.3, 0.3, 0.3);\n  }\n  90% {\n    opacity: 1;\n  }\n}\n\n@keyframes zoomIn {\n  from {\n    opacity: 0;\n    -webkit-transform: scale3d(0.3, 0.3, 0.3);\n            transform: scale3d(0.3, 0.3, 0.3);\n  }\n  90% {\n    opacity: 1;\n  }\n}\n\n.zoomIn {\n  -webkit-animation-name: zoomIn;\n          animation-name: zoomIn;\n}\n\n@-webkit-keyframes zoomOut {\n  from {\n    opacity: 1;\n  }\n  50% {\n    opacity: 0;\n  }\n  to {\n    -webkit-transform: scale3d(0.3, 0.3, 0.3);\n            transform: scale3d(0.3, 0.3, 0.3);\n    opacity: 0;\n  }\n}\n\n@keyframes zoomOut {\n  from {\n    opacity: 1;\n  }\n  50% {\n    opacity: 0;\n  }\n  to {\n    -webkit-transform: scale3d(0.3, 0.3, 0.3);\n            transform: scale3d(0.3, 0.3, 0.3);\n    opacity: 0;\n  }\n}\n\n.zoomOut {\n  -webkit-animation-name: zoomOut;\n          animation-name: zoomOut;\n}\n\n.checkbox + .checkbox {\n  margin-left: 0.5em;\n}\n\n.checkbox.is-disabled {\n  opacity: 0.5;\n}\n\n.checkbox input[type=checkbox] {\n  display: none;\n}\n\n.checkbox input[type=checkbox] + span {\n  padding-left: 24px;\n  text-align: left;\n}\n\n.checkbox input[type=checkbox] + span:before {\n  content: '';\n  position: absolute;\n  left: 0;\n  top: 50%;\n  -webkit-transform: translate(0, -50%);\n          transform: translate(0, -50%);\n  cursor: pointer;\n  width: 18px;\n  height: 18px;\n  border-radius: 2px;\n  border: 2px solid #7a7a7a;\n  background: none;\n  -webkit-transition: background 250ms ease-out, border-color 86ms ease-out;\n  transition: background 250ms ease-out, border-color 86ms ease-out;\n}\n\n.checkbox input[type=checkbox] + span:hover:before {\n  border-color: #7957d5;\n}\n\n.checkbox input[type=checkbox]:checked + span:before {\n  background: #7957d5 url(\"data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmVyc2lvbj0iMS4xIgogICB2aWV3Qm94PSIwIDAgMSAxIgogICBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWluWU1pbiBtZWV0Ij4KICA8cGF0aAogICAgIGQ9Ik0gMC4wNDAzODA1OSwwLjYyNjc3NjcgMC4xNDY0NDY2MSwwLjUyMDcxMDY4IDAuNDI5Mjg5MzIsMC44MDM1NTMzOSAwLjMyMzIyMzMsMC45MDk2MTk0MSB6IE0gMC4yMTcxNTcyOSwwLjgwMzU1MzM5IDAuODUzNTUzMzksMC4xNjcxNTcyOSAwLjk1OTYxOTQxLDAuMjczMjIzMyAwLjMyMzIyMzMsMC45MDk2MTk0MSB6IgogICAgIGlkPSJyZWN0Mzc4MCIKICAgICBzdHlsZT0iZmlsbDojZmZmZmZmO2ZpbGwtb3BhY2l0eToxO3N0cm9rZTpub25lIiAvPgo8L3N2Zz4K\") no-repeat center center;\n  border-color: #7957d5;\n}\n\n.dialog {\n  -webkit-animation-duration: 250ms;\n          animation-duration: 250ms;\n}\n\n.dialog .modal-card-body .icon {\n  margin-left: -8px;\n  margin-right: 16px;\n}\n\n.dialog .modal-card-body.is-titleless {\n  border-top-left-radius: 5px;\n  border-top-right-radius: 5px;\n}\n\n.dialog .modal-card-body .control {\n  margin-top: 16px;\n}\n\n.dialog .modal-card {\n  min-width: 320px;\n  max-width: 460px;\n  width: auto;\n  -webkit-animation-duration: 250ms;\n          animation-duration: 250ms;\n  will-change: transform;\n}\n\n.dialog .modal-card-title {\n  font-size: 1.25rem;\n  font-weight: 600;\n}\n\n.dialog .modal-card-foot {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n}\n\n.dialog .modal-card-foot .button {\n  min-width: 80px;\n  font-weight: 600;\n}\n\n.input,\n.textarea,\n.select select {\n  padding-bottom: 0.25em;\n  padding-top: 0.25em;\n}\n\n.select select {\n  padding-right: 2.5em;\n}\n\n.control.has-icon.has-both-icon .input {\n  padding-right: 2.25em;\n}\n\n.control.has-icon .icon.is-right {\n  right: 0;\n  left: auto;\n}\n\n.control.has-icon .icon.is-clickable {\n  pointer-events: auto;\n  cursor: pointer;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-white,\n.control.has-icon .input:focus + .icon.is-white {\n  color: white;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-black,\n.control.has-icon .input:focus + .icon.is-black {\n  color: #0a0a0a;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-light,\n.control.has-icon .input:focus + .icon.is-light {\n  color: whitesmoke;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-dark,\n.control.has-icon .input:focus + .icon.is-dark {\n  color: #363636;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-primary,\n.control.has-icon .input:focus + .icon.is-primary {\n  color: #7957d5;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-info,\n.control.has-icon .input:focus + .icon.is-info {\n  color: #3273dc;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-success,\n.control.has-icon .input:focus + .icon.is-success {\n  color: #23d160;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-warning,\n.control.has-icon .input:focus + .icon.is-warning {\n  color: #ffdd57;\n}\n\n.control.has-icon .icon:not(.is-clickable).is-danger,\n.control.has-icon .input:focus + .icon.is-danger {\n  color: #ff3860;\n}\n\n.control .help.counter {\n  float: right;\n  margin-left: 0.5em;\n}\n\n.label {\n  font-weight: 600;\n}\n\n.icon.is-small {\n  height: 1rem;\n  width: 1rem;\n}\n\n.icon.is-small .mdi {\n  font-size: 16px;\n}\n\n.icon.is-medium {\n  height: 2rem;\n  width: 2rem;\n}\n\n.icon.is-medium .mdi {\n  font-size: 32px;\n}\n\n.icon.is-large {\n  height: 3rem;\n  width: 3rem;\n}\n\n.icon.is-large .mdi {\n  font-size: 48px;\n}\n\n.icon.is-white {\n  color: white;\n}\n\n.icon.is-black {\n  color: #0a0a0a;\n}\n\n.icon.is-light {\n  color: whitesmoke;\n}\n\n.icon.is-dark {\n  color: #363636;\n}\n\n.icon.is-primary {\n  color: #7957d5;\n}\n\n.icon.is-info {\n  color: #3273dc;\n}\n\n.icon.is-success {\n  color: #23d160;\n}\n\n.icon.is-warning {\n  color: #ffdd57;\n}\n\n.icon.is-danger {\n  color: #ff3860;\n}\n\n.mdi {\n  font-family: 'Material Icons';\n  font-weight: normal;\n  font-style: normal;\n  font-size: 24px;\n  display: inline-block;\n  line-height: 1;\n  text-transform: none;\n  letter-spacing: normal;\n  word-wrap: normal;\n  white-space: nowrap;\n  direction: ltr;\n  vertical-align: middle;\n  cursor: inherit;\n  /* Support for all WebKit browsers. */\n  -webkit-font-smoothing: antialiased;\n  /* Support for Safari and Chrome. */\n  text-rendering: optimizeLegibility;\n  /* Support for Firefox. */\n  -moz-osx-font-smoothing: grayscale;\n  /* Support for IE. */\n  -webkit-font-feature-settings: 'liga';\n          font-feature-settings: 'liga';\n}\n\n.notices {\n  position: fixed;\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  top: 0;\n  left: 0;\n  right: 0;\n  z-index: 1000;\n  pointer-events: none;\n}\n\n.notices.top {\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n\n.notices.top-right {\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n}\n\n.notices.bottom {\n  top: auto;\n  bottom: 0;\n  -webkit-box-pack: center;\n      -ms-flex-pack: center;\n          justify-content: center;\n}\n\n.notices.bottom-left {\n  top: auto;\n  bottom: 0;\n}\n\n.notices.bottom-right {\n  top: auto;\n  bottom: 0;\n  -webkit-box-pack: end;\n      -ms-flex-pack: end;\n          justify-content: flex-end;\n}\n\n.notices.is-toast {\n  opacity: 0.92;\n}\n\n.notices .toast {\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n  -webkit-animation-duration: 250ms;\n          animation-duration: 250ms;\n  margin: 24px 8px;\n  text-align: center;\n  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.12), 0 0 6px rgba(0, 0, 0, 0.04);\n  border-radius: 28px;\n  padding: 12px 24px;\n  pointer-events: auto;\n}\n\n.notices .toast.is-white {\n  color: #0a0a0a;\n  background: white;\n}\n\n.notices .toast.is-black {\n  color: white;\n  background: #0a0a0a;\n}\n\n.notices .toast.is-light {\n  color: #363636;\n  background: whitesmoke;\n}\n\n.notices .toast.is-dark {\n  color: whitesmoke;\n  background: #363636;\n}\n\n.notices .toast.is-primary {\n  color: #fff;\n  background: #7957d5;\n}\n\n.notices .toast.is-info {\n  color: #fff;\n  background: #3273dc;\n}\n\n.notices .toast.is-success {\n  color: #fff;\n  background: #23d160;\n}\n\n.notices .toast.is-warning {\n  color: rgba(0, 0, 0, 0.7);\n  background: #ffdd57;\n}\n\n.notices .toast.is-danger {\n  color: #fff;\n  background: #ff3860;\n}\n\n.notices .snackbar {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n  -ms-flex-pack: distribute;\n      justify-content: space-around;\n  -webkit-animation-duration: 250ms;\n          animation-duration: 250ms;\n  margin: 8px;\n  text-align: center;\n  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.12), 0 0 6px rgba(0, 0, 0, 0.04);\n  border-radius: 2px;\n  padding: 6px 8px 6px 24px;\n  pointer-events: auto;\n  background: #363636;\n  color: whitesmoke;\n}\n\n.notices .snackbar .text {\n  text-align: left;\n}\n\n@media screen and (max-width: 768px) {\n  .notices .snackbar {\n    width: 100%;\n    margin: 0;\n    border-radius: 0;\n  }\n}\n\n@media screen and (min-width: 769px) {\n  .notices .snackbar {\n    min-width: 350px;\n    max-width: 600px;\n    overflow: hidden;\n  }\n}\n\n.notices .snackbar .action {\n  margin-left: auto;\n  padding-left: 8px;\n}\n\n.notices .snackbar .action.is-white .button {\n  color: white;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notices .snackbar .action.is-black .button {\n  color: #0a0a0a;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notices .snackbar .action.is-light .button {\n  color: whitesmoke;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notices .snackbar .action.is-dark .button {\n  color: #363636;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notices .snackbar .action.is-primary .button {\n  color: #7957d5;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notices .snackbar .action.is-info .button {\n  color: #3273dc;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notices .snackbar .action.is-success .button {\n  color: #23d160;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notices .snackbar .action.is-warning .button {\n  color: #ffdd57;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notices .snackbar .action.is-danger .button {\n  color: #ff3860;\n  font-weight: 600;\n  text-transform: uppercase;\n}\n\n.notification,\n.message .message-body {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n}\n\n.notification .icon,\n.message .message-body .icon {\n  margin-right: 8px;\n  margin-left: -8px;\n}\n\n.pagination .pagination-next,\n.pagination .pagination-previous {\n  padding-left: 0.25em;\n  padding-right: 0.25em;\n}\n\n.pagination.is-simple {\n  -webkit-box-pack: normal;\n      -ms-flex-pack: normal;\n          justify-content: normal;\n}\n\n.radio.is-disabled {\n  opacity: 0.5;\n}\n\n.radio input[type=radio] {\n  display: none;\n}\n\n.radio input[type=radio] + span {\n  position: relative;\n  display: inline-block;\n  padding-left: 24px;\n  text-align: left;\n}\n\n.radio input[type=radio] + span:before, .radio input[type=radio] + span:after {\n  content: '';\n  position: absolute;\n  border-radius: 50%;\n}\n\n.radio input[type=radio] + span:before {\n  left: 0;\n  top: 50%;\n  -webkit-transform: translate(0, -50%);\n          transform: translate(0, -50%);\n  cursor: pointer;\n  width: 20px;\n  height: 20px;\n  border: 2px solid #7a7a7a;\n  background: none;\n  -webkit-transition: border-color 86ms ease-out;\n  transition: border-color 86ms ease-out;\n}\n\n.radio input[type=radio] + span:after {\n  left: 5px;\n  top: 7px;\n  width: 10px;\n  height: 10px;\n  background: #7957d5;\n  -webkit-transform: scale(0);\n          transform: scale(0);\n  -webkit-transition: -webkit-transform 86ms ease-out;\n  transition: -webkit-transform 86ms ease-out;\n  transition: transform 86ms ease-out;\n  transition: transform 86ms ease-out, -webkit-transform 86ms ease-out;\n}\n\n.radio input[type=radio] + span:hover:before {\n  border-color: #7957d5;\n}\n\n.radio input[type=radio]:checked + span:before {\n  border-color: #7957d5;\n}\n\n.radio input[type=radio]:checked + span:after {\n  -webkit-transform: scale(1);\n          transform: scale(1);\n}\n\n.switch + .switch {\n  margin-left: 0.5em;\n}\n\n.switch.is-disabled {\n  opacity: 0.5;\n}\n\n.switch input[type=\"checkbox\"] {\n  display: none;\n}\n\n.switch input[type=\"checkbox\"] + span {\n  position: relative;\n  display: inline-block;\n  cursor: pointer;\n  text-align: left;\n  padding-left: 44px;\n}\n\n.switch input[type=\"checkbox\"] + span:before, .switch input[type=\"checkbox\"] + span:after {\n  content: '';\n  cursor: pointer;\n  position: absolute;\n  top: 50%;\n  -webkit-transform: translate(0, -50%);\n          transform: translate(0, -50%);\n  -webkit-transition: all 86ms ease-out;\n  transition: all 86ms ease-out;\n}\n\n.switch input[type=\"checkbox\"] + span:before {\n  left: 0;\n  width: 36px;\n  height: 14px;\n  background-color: #b5b5b5;\n  border-radius: 8px;\n}\n\n.switch input[type=\"checkbox\"] + span:after {\n  left: 0;\n  width: 20px;\n  height: 20px;\n  background-color: whitesmoke;\n  border-radius: 50%;\n  box-shadow: 0 3px 1px -2px rgba(0, 0, 0, 0.14), 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 1px 5px 0 rgba(0, 0, 0, 0.08);\n}\n\n.switch input[type=\"checkbox\"]:checked + span:before {\n  background-color: #c7b9ed;\n}\n\n.switch input[type=\"checkbox\"]:checked + span:after {\n  background-color: #7957d5;\n  -webkit-transform: translate(80%, -50%);\n          transform: translate(80%, -50%);\n}\n\n.switch input[type=\"checkbox\"].is-on-off + span:before {\n  background-color: #ffb3c2;\n}\n\n.switch input[type=\"checkbox\"].is-on-off + span:after {\n  background-color: #ff3860;\n}\n\n.switch input[type=\"checkbox\"].is-on-off:checked + span:before {\n  background-color: #85eaa8;\n}\n\n.switch input[type=\"checkbox\"].is-on-off:checked + span:after {\n  background-color: #23d160;\n}\n\n.b-table .table.is-fixed thead,\n.b-table .table.is-fixed tbody {\n  display: block;\n}\n\n.b-table .table.is-fixed tbody {\n  overflow: auto;\n}\n\n.b-table .table th {\n  font-weight: 600;\n}\n\n.b-table .table th.is-current-sort {\n  border-color: #7a7a7a;\n  font-weight: 700;\n}\n\n.b-table .table th.is-sortable:hover {\n  border-color: #7a7a7a;\n}\n\n.b-table .table th.is-sortable,\n.b-table .table th.is-sortable .th-wrap {\n  cursor: pointer;\n}\n\n.b-table .table th .th-wrap {\n  display: -webkit-box;\n  display: -ms-flexbox;\n  display: flex;\n  -webkit-box-align: center;\n      -ms-flex-align: center;\n          align-items: center;\n}\n\n.b-table .table th .th-wrap.is-numeric {\n  -webkit-box-orient: horizontal;\n  -webkit-box-direction: reverse;\n      -ms-flex-direction: row-reverse;\n          flex-direction: row-reverse;\n}\n\n.b-table .table th .th-wrap.is-numeric .icon {\n  margin-left: 0;\n  margin-right: 8px;\n}\n\n.b-table .table th .th-wrap .icon {\n  margin-left: 8px;\n  margin-right: 0;\n  font-size: 16px;\n  -webkit-transition: opacity 86ms ease-out, -webkit-transform 250ms ease-out;\n  transition: opacity 86ms ease-out, -webkit-transform 250ms ease-out;\n  transition: transform 250ms ease-out, opacity 86ms ease-out;\n  transition: transform 250ms ease-out, opacity 86ms ease-out, -webkit-transform 250ms ease-out;\n  opacity: 0;\n}\n\n.b-table .table th .th-wrap .icon.is-desc {\n  -webkit-transform: rotate(180deg);\n          transform: rotate(180deg);\n}\n\n.b-table .table th .th-wrap .icon.is-visible {\n  opacity: 1;\n}\n\n.b-table .table tr.is-selected, .b-table .table tr.is-selected:hover {\n  background: #7957d5 !important;\n  color: #fff;\n}\n\n.b-table .table tr.is-selected .checkbox input:not(:checked) + span:before, .b-table .table tr.is-selected:hover .checkbox input:not(:checked) + span:before {\n  border-color: #fff;\n}\n\n.b-table .table .checkbox-cell {\n  width: 40px;\n}\n\n.b-table .table .checkbox-cell .checkbox {\n  vertical-align: middle;\n}\n\n@media screen and (max-width: 768px) {\n  .b-table .table.has-mobile-cards thead {\n    display: none;\n  }\n  .b-table .table.has-mobile-cards tr {\n    display: block;\n    background-color: white;\n    box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1), 0 0 0 1px rgba(10, 10, 10, 0.1);\n    max-width: 100%;\n    position: relative;\n  }\n  .b-table .table.has-mobile-cards tr:not(:last-child) {\n    margin-bottom: 16px;\n  }\n  .b-table .table.has-mobile-cards tr:nth-child(even) {\n    background: inherit;\n  }\n  .b-table .table.has-mobile-cards tr:nth-child(even):hover {\n    background-color: inherit;\n  }\n  .b-table .table.has-mobile-cards tr td {\n    display: -webkit-box;\n    display: -ms-flexbox;\n    display: flex;\n    border: 0;\n    width: auto;\n    -webkit-box-pack: end;\n        -ms-flex-pack: end;\n            justify-content: flex-end;\n    text-align: right;\n    border-bottom: 1px solid whitesmoke;\n  }\n  .b-table .table.has-mobile-cards tr td:last-child {\n    border-bottom: 0;\n  }\n  .b-table .table.has-mobile-cards tr td:before {\n    content: attr(data-label);\n    font-weight: 600;\n    margin-right: auto;\n    text-align: left;\n  }\n  .b-table .table.has-mobile-cards tr td span {\n    margin-left: 8px;\n  }\n  .b-table .table.has-mobile-cards tr td.checkbox-cell {\n    display: inherit;\n  }\n}\n\n.b-table .level {\n  padding-bottom: 16px;\n}\n\n@media screen and (min-width: 769px) {\n  .b-table .level .level-left {\n    padding-left: 16px;\n  }\n  .b-table .level .level-right {\n    padding-right: 16px;\n  }\n}\n\n.b-table .pagination .info {\n  padding-right: 8px;\n}\n\n.tooltip {\n  position: relative;\n  display: -webkit-inline-box;\n  display: -ms-inline-flexbox;\n  display: inline-flex;\n}\n\n.tooltip:before, .tooltip:after {\n  position: absolute;\n  content: '';\n  opacity: 0;\n  visibility: hidden;\n  pointer-events: none;\n}\n\n.tooltip:before {\n  z-index: 889;\n}\n\n.tooltip:after {\n  content: attr(data-label);\n  width: auto;\n  padding: 4px 8px;\n  background: #7957d5;\n  border-radius: 2px;\n  font-size: 12px;\n  font-weight: 400;\n  color: #fff;\n  box-shadow: 0px 1px 2px 1px rgba(0, 1, 0, 0.2);\n  z-index: 888;\n  white-space: nowrap;\n}\n\n.tooltip:not([data-label=\"\"]):hover:before, .tooltip:not([data-label=\"\"]):hover:after {\n  opacity: 1;\n  visibility: visible;\n}\n\n.tooltip.is-white:after {\n  background: white;\n  color: #0a0a0a;\n}\n\n.tooltip.is-black:after {\n  background: #0a0a0a;\n  color: white;\n}\n\n.tooltip.is-light:after {\n  background: whitesmoke;\n  color: #363636;\n}\n\n.tooltip.is-dark:after {\n  background: #363636;\n  color: whitesmoke;\n}\n\n.tooltip.is-primary:after {\n  background: #7957d5;\n  color: #fff;\n}\n\n.tooltip.is-info:after {\n  background: #3273dc;\n  color: #fff;\n}\n\n.tooltip.is-success:after {\n  background: #23d160;\n  color: #fff;\n}\n\n.tooltip.is-warning:after {\n  background: #ffdd57;\n  color: rgba(0, 0, 0, 0.7);\n}\n\n.tooltip.is-danger:after {\n  background: #ff3860;\n  color: #fff;\n}\n\n.tooltip.is-multiline:after {\n  display: flex-block;\n  text-align: center;\n  white-space: normal;\n}\n\n.tooltip.is-dashed {\n  border-bottom: 1px dashed #b5b5b5;\n  cursor: default;\n}\n\n.tooltip:not([data-label=\"\"]).is-always:before, .tooltip:not([data-label=\"\"]).is-always:after {\n  opacity: 1;\n  visibility: visible;\n}\n\n.tooltip.is-square:after {\n  border-radius: 0;\n}\n\n.tooltip.is-animated:before, .tooltip.is-animated:after {\n  -webkit-transition: opacity 86ms ease-out, visibility 86ms ease-out;\n  transition: opacity 86ms ease-out, visibility 86ms ease-out;\n}\n\n.tooltip.is-top:before, .tooltip.is-top:after {\n  top: auto;\n  right: auto;\n  bottom: calc(100% + 6px + 2px);\n  left: 50%;\n  -webkit-transform: translateX(-50%);\n          transform: translateX(-50%);\n}\n\n.tooltip.is-top.is-white:before {\n  border-top: 6px solid white;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-black:before {\n  border-top: 6px solid #0a0a0a;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-light:before {\n  border-top: 6px solid whitesmoke;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-dark:before {\n  border-top: 6px solid #363636;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-primary:before {\n  border-top: 6px solid #7957d5;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-info:before {\n  border-top: 6px solid #3273dc;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-success:before {\n  border-top: 6px solid #23d160;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-warning:before {\n  border-top: 6px solid #ffdd57;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-danger:before {\n  border-top: 6px solid #ff3860;\n  border-right: 6px solid transparent;\n  border-left: 6px solid transparent;\n  bottom: calc(100% + 2px);\n}\n\n.tooltip.is-top.is-multiline.is-small:after {\n  width: 180px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-top.is-multiline.is-medium:after {\n  width: 240px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-top.is-multiline.is-large:after {\n  width: 300px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-right:before, .tooltip.is-right:after {\n  top: 50%;\n  right: auto;\n  bottom: auto;\n  left: calc(100% + 6px + 2px);\n  -webkit-transform: translateY(-50%);\n          transform: translateY(-50%);\n}\n\n.tooltip.is-right.is-white:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid white;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-black:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid #0a0a0a;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-light:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid whitesmoke;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-dark:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid #363636;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-primary:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid #7957d5;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-info:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid #3273dc;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-success:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid #23d160;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-warning:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid #ffdd57;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-danger:before {\n  border-top: 6px solid transparent;\n  border-right: 6px solid #ff3860;\n  border-bottom: 6px solid transparent;\n  left: calc(100% + 2px);\n}\n\n.tooltip.is-right.is-multiline.is-small:after {\n  width: 180px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-right.is-multiline.is-medium:after {\n  width: 240px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-right.is-multiline.is-large:after {\n  width: 300px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-bottom:before, .tooltip.is-bottom:after {\n  top: calc(100% + 6px + 2px);\n  right: auto;\n  bottom: auto;\n  left: 50%;\n  -webkit-transform: translateX(-50%);\n          transform: translateX(-50%);\n}\n\n.tooltip.is-bottom.is-white:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid white;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-black:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid #0a0a0a;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-light:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid whitesmoke;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-dark:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid #363636;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-primary:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid #7957d5;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-info:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid #3273dc;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-success:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid #23d160;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-warning:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid #ffdd57;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-danger:before {\n  border-right: 6px solid transparent;\n  border-bottom: 6px solid #ff3860;\n  border-left: 6px solid transparent;\n  top: calc(100% + 2px);\n}\n\n.tooltip.is-bottom.is-multiline.is-small:after {\n  width: 180px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-bottom.is-multiline.is-medium:after {\n  width: 240px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-bottom.is-multiline.is-large:after {\n  width: 300px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-left:before, .tooltip.is-left:after {\n  top: 50%;\n  right: calc(100% + 6px + 2px);\n  bottom: auto;\n  left: auto;\n  -webkit-transform: translateY(-50%);\n          transform: translateY(-50%);\n}\n\n.tooltip.is-left.is-white:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid white;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-black:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid #0a0a0a;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-light:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid whitesmoke;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-dark:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid #363636;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-primary:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid #7957d5;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-info:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid #3273dc;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-success:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid #23d160;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-warning:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid #ffdd57;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-danger:before {\n  border-top: 6px solid transparent;\n  border-bottom: 6px solid transparent;\n  border-left: 6px solid #ff3860;\n  right: calc(100% + 2px);\n}\n\n.tooltip.is-left.is-multiline.is-small:after {\n  width: 180px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-left.is-multiline.is-medium:after {\n  width: 240px;\n  margin-left: -calc($size / 2px);\n}\n\n.tooltip.is-left.is-multiline.is-large:after {\n  width: 300px;\n  margin-left: -calc($size / 2px);\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL3V0aWxpdGllcy9taXhpbnMuc2FzcyIsImJ1ZWZ5LmNzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9idWxtYS5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvYmFzZS9taW5pcmVzZXQuc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2Jhc2UvZ2VuZXJpYy5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvdXRpbGl0aWVzL3ZhcmlhYmxlcy5zYXNzIiwiLi4vc3JjL3Njc3MvdXRpbHMvX3RoZW1lLXZhcmlhYmxlcy5zY3NzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvYmFzZS9oZWxwZXJzLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9lbGVtZW50cy9ib3guc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2VsZW1lbnRzL2J1dHRvbi5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvdXRpbGl0aWVzL2NvbnRyb2xzLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy91dGlsaXRpZXMvZnVuY3Rpb25zLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9lbGVtZW50cy9jb250ZW50LnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9lbGVtZW50cy9mb3JtLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9lbGVtZW50cy9pY29uLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9lbGVtZW50cy9pbWFnZS5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvZWxlbWVudHMvbm90aWZpY2F0aW9uLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9lbGVtZW50cy9wcm9ncmVzcy5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvZWxlbWVudHMvdGFibGUuc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2VsZW1lbnRzL3RhZy5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvZWxlbWVudHMvdGl0bGUuc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2VsZW1lbnRzL290aGVyLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9jb21wb25lbnRzL2NhcmQuc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2NvbXBvbmVudHMvbGV2ZWwuc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2NvbXBvbmVudHMvbWVkaWEuc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2NvbXBvbmVudHMvbWVudS5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvY29tcG9uZW50cy9tZXNzYWdlLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9jb21wb25lbnRzL21vZGFsLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9jb21wb25lbnRzL25hdi5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvY29tcG9uZW50cy9wYWdpbmF0aW9uLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9jb21wb25lbnRzL3BhbmVsLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9jb21wb25lbnRzL3RhYnMuc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2dyaWQvY29sdW1ucy5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvZ3JpZC90aWxlcy5zYXNzIiwiLi4vbm9kZV9tb2R1bGVzL2J1bG1hL3Nhc3MvbGF5b3V0L2hlcm8uc2FzcyIsIi4uL25vZGVfbW9kdWxlcy9idWxtYS9zYXNzL2xheW91dC9zZWN0aW9uLnNhc3MiLCIuLi9ub2RlX21vZHVsZXMvYnVsbWEvc2Fzcy9sYXlvdXQvZm9vdGVyLnNhc3MiLCIuLi9zcmMvc2Nzcy91dGlscy9fYW5pbWF0aW9ucy5zY3NzIiwiLi4vc3JjL3Njc3MvdXRpbHMvX3ZhcmlhYmxlcy5zY3NzIiwiLi4vc3JjL3Njc3MvY29tcG9uZW50cy9fY2hlY2tib3guc2NzcyIsIi4uL3NyYy9zY3NzL2NvbXBvbmVudHMvX2RpYWxvZy5zY3NzIiwiLi4vc3JjL3Njc3MvY29tcG9uZW50cy9fZm9ybS5zY3NzIiwiLi4vc3JjL3Njc3MvY29tcG9uZW50cy9faWNvbi5zY3NzIiwiLi4vc3JjL3Njc3MvY29tcG9uZW50cy9fbm90aWNlcy5zY3NzIiwiLi4vc3JjL3Njc3MvY29tcG9uZW50cy9fbm90aWZpY2F0aW9uLnNjc3MiLCIuLi9zcmMvc2Nzcy9jb21wb25lbnRzL19wYWdpbmF0aW9uLnNjc3MiLCIuLi9zcmMvc2Nzcy9jb21wb25lbnRzL19yYWRpby5zY3NzIiwiLi4vc3JjL3Njc3MvY29tcG9uZW50cy9fc3dpdGNoLnNjc3MiLCIuLi9zcmMvc2Nzcy9jb21wb25lbnRzL190YWJsZS5zY3NzIiwiLi4vc3JjL3Njc3MvY29tcG9uZW50cy9fdG9vbHRpcC5zY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQTZIQTtFQUNFO0lBQ0UsZ0NBQXVCO1lBQXZCLHdCQUF1QjtHQzVIeEI7RUQ2SEQ7SUFDRSxrQ0FBeUI7WUFBekIsMEJBQXlCO0dDM0gxQjtDQUNGOztBRHNIRDtFQUNFO0lBQ0UsZ0NBQXVCO1lBQXZCLHdCQUF1QjtHQzVIeEI7RUQ2SEQ7SUFDRSxrQ0FBeUI7WUFBekIsMEJBQXlCO0dDM0gxQjtDQUNGOztBQ1BELDhEQUE4RDtBRjZIOUQ7RUFDRTtJQUNFLGdDQUF1QjtZQUF2Qix3QkFBdUI7R0NsSHhCO0VEbUhEO0lBQ0Usa0NBQXlCO1lBQXpCLDBCQUF5QjtHQ2pIMUI7Q0FDRjs7QUVqQkQsMkVBQTJFO0FBRTNFOzs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztFQXVCRSxVQUFTO0VBQ1QsV0FBVTtDQUFJOztBQUdoQjs7Ozs7O0VBTUUsZ0JBQWU7RUFD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OEJRLDZDN0JoRXVCO0M2QmdFd0I7O0FsQ2dHckQ7RWtDOUhGO0lBaUNVLDBCN0IvRW1CO0c2QitFVTtDakNnL0p0Qzs7QWlDamhLRDs7RUFvQ1EsZ0M3QnRFdUI7QzZCeUVJOztBQXZDbkM7OztFQXVDVSxhN0J6RXFCO0M2QnlFRTs7QUF2Q2pDO0VBMENVLGE3QjVFcUI7RTZCNkVyQixhQUFZO0NBRU07O0FBN0M1QjtFQTZDWSxXQUFVO0NBQUk7O0FBN0MxQjtFQWdEWSxXQUFVO0NBQUk7O0FBaEQxQjtFQW9EWSxhN0J0Rm1CO0M2QndGdUI7O0FBdER0RDtFQXNEYyx3QzdCcEdlO0M2Qm9HdUI7O0FBdERwRDtFQTBEYyx3QjdCNUZpQjtFNkI2RmpCLG9CN0I3RmlCO0U2QjhGakIsZTdCMUdlO0M2QjBHQzs7QUE1RDlCO0VBaUVRLHVGQUF5RztFQUF6RywrRUFBeUc7Q0FBRzs7QWxDNkRsSDtFa0M5SEY7SUFzRVksd0I3QnhHbUI7RzZCd0dlO0VBdEU5QztJQXdFWSx3QzdCdEhpQjtHNkJzSHFCO0VBeEVsRDtJQTJFYyx3QjdCN0dpQjtHNkI2R2lCO0VBM0VoRDtJQThFWSwyQzdCaEhtQjtHNkJnSDBCO0NqQzQvSnhEOztBaUMxa0tEO0VBaUJNLDZCN0JyRHdCO0U2QnNEeEIsZTdCNUR3QjtDNkJ3SGlDOztBQTlFL0Q7O0VBcUJRLGVBQWM7Q0FBSTs7QUFyQjFCO0VBdUJRLGU3QmpFc0I7QzZCaUVDOztBQXZCL0I7RUF5QlEsNkI3Qm5Fc0I7QzZCc0VLOztBQTVCbkM7O0VBNEJVLGU3QnRFb0I7QzZCc0VHOztBQTVCakM7RUE4QlEsMEM3QnhFc0I7QzZCd0V5Qjs7QWxDZ0dyRDtFa0M5SEY7SUFpQ1UsNkI3QnJFb0I7RzZCcUVTO0NqQzBrS3RDOztBaUMzbUtEOztFQW9DUSw2QjdCOUVzQjtDNkJpRks7O0FBdkNuQzs7O0VBdUNVLGU3QmpGb0I7QzZCaUZHOztBQXZDakM7RUEwQ1UsZTdCcEZvQjtFNkJxRnBCLGFBQVk7Q0FFTTs7QUE3QzVCO0VBNkNZLFdBQVU7Q0FBSTs7QUE3QzFCO0VBZ0RZLFdB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RFE7Q3VCb0RtQjs7QUE1Qm5DOztFQTRCVSxZdkJwRE07Q3VCb0RpQjs7QUE1QmpDO0VBOEJRLDZDdkJ0RFE7Q3VCc0R1Qzs7QWxDZ0dyRDtFa0M5SEY7SUFpQ1UsMEI3QjdEd0I7RzZCNkRLO0NqQ3cxS3RDOztBaUN6M0tEOztFQW9DUSxnQ3ZCNURRO0N1QitEbUI7O0FBdkNuQzs7O0VBdUNVLFl2Qi9ETTtDdUIrRGlCOztBQXZDakM7RUEwQ1UsWXZCbEVNO0V1Qm1FTixhQUFZO0NBRU07O0FBN0M1QjtFQTZDWSxXQUFVO0NBQUk7O0FBN0MxQjtFQWdEWSxXQUFVO0NBQUk7O0FBaEQxQjtFQW9EWSxZdkI1RUk7Q3VCOEVzQzs7QUF0RHREO0VBc0RjLHdDN0JwR2U7QzZCb0d1Qjs7QUF0RHBEO0VBMERjLHVCdkJsRkU7RXVCbUZGLG1CdkJuRkU7RXVCb0ZGLGU3QnhGb0I7QzZCd0ZKOztBQTVEOUI7RUFpRVEseUZBQXlHO0VBQXpHLGlGQUF5RztDQUFHOztBbEM2RGxIO0VrQzlIRjtJQXNFWSx1QnZCOUZJO0d1QjhGOEI7RUF0RTlDO0lBd0VZLHdDN0J0SGlCO0c2QnNIcUI7RUF4RWxEO0lBMkVjLHVCdkJuR0U7R3VCbUdnQztFQTNFaEQ7SUE4RVksMkN2QnRHSTtHdUJzR3lDO0NqQ28yS3hEOztBaUNsN0tEO0VBaUJNLDBCN0IvQzRCO0U2QmdENUIsWXZCMUNVO0N1QnNHK0M7O0FBOUUvRDs7RUFxQlEsZUFBYztDQUFJOztBQXJCMUI7RUF1QlEsWXZCL0NRO0N1QitDZTs7QUF2Qi9CO0VBeUJRLGdDdkJqRFE7Q3VCb0RtQjs7QUE1Qm5DOztFQTRCVSxZdkJwRE07Q3VCb0RpQjs7QUE1QmpDO0VBOEJRLDZDdkJ0RFE7Q3VCc0R1Qzs7QWxDZ0dyRDtFa0M5SEY7SUFpQ1UsMEI3Qi9Ed0I7RzZCK0RLO0NqQ2s3S3RDOztBaUNuOUtEOztFQW9DUSxnQ3ZCNURRO0N1QitEbUI7O0FBdkNuQzs7O0VBdUNVLFl2Qi9ETTtDdUIrRGlCOztBQXZDakM7RUEwQ1UsWXZCbEVNO0V1Qm1FTixhQUFZO0NBRU07O0FB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O0VBQzFDLHNCQUFrQztDQWdEN0I7O0FBRkQ7RUFqREosb0NBQTJDO0VBQzNDLGlDNUNJMEI7RTRDSDFCLG1DQUEwQztFQUMxQyxzQkFBa0M7Q0FnRDdCOztBQUZEO0VBakRKLG9DQUEyQztFQUMzQyxpQzVDRzBCO0U0Q0YxQixtQ0FBMEM7RUFDMUMsc0JBQWtDO0NBZ0Q3Qjs7QUFGRDtFQWpESixvQ0FBMkM7RUFDM0MsaUM1Q1EwQjtFNENQMUIsbUNBQTBDO0VBQzFDLHNCQUFrQztDQWdEN0I7O0FBSUc7RUFDSSxhQXBFSjtFQXFFSSxnQ0FBZ0M7Q0FDbkM7O0FBSEQ7RUFDSSxhQW5FSDtFQW9FRyxnQ0FBZ0M7Q0FDbkM7O0FBSEQ7RUFDSSxhQWxFSjtFQW1FSSxnQ0FBZ0M7Q0FDbkM7O0FBdkNUO0VBcUJRLFNBQVE7RUFDUiw4QkFBcUQ7RUFDckQsYUFBWTtFQUNaLFdBQVU7RUFDVixvQ0FBMkI7VUFBM0IsNEJBQTJCO0NBRWxDOztBQUdHO0VBdkNKLGtDQUF5QztFQUN6QyxxQ0FBNEM7RUFDNUMsNkI1Q1h1QjtFNENZdkIsd0JBQW9DO0NBc0MvQjs7QUFGRDtFQXZDSixrQ0FBeUM7RUFDekMscUNBQTRDO0VBQzVDLCtCNUN2QnFCO0U0Q3dCckIsd0JBQW9DO0NBc0MvQjs7QUFGRDtFQXZDSixrQ0FBeUM7RUFDekMscUNBQTRDO0VBQzVDLGtDNUNic0I7RTRDY3RCLHdCQUFvQztDQXNDL0I7O0FBRkQ7RUF2Q0osa0NBQXlDO0VBQ3pDLHFDQUE0QztFQUM1QywrQjVDbkJzQjtFNENvQnRCLHdCQUFvQztDQXNDL0I7O0FBRkQ7RUF2Q0osa0NBQXlDO0VBQ3pDLHFDQUE0QztFQUM1QywrQjNDM0JTO0UyQzRCVCx3QkFBb0M7Q0FzQy9COztBQUZEO0VBdkNKLGtDQUF5QztFQUN6QyxxQ0FBNEM7RUFDNUMsK0I1Q0wwQjtFNENNMUIsd0JBQW9DO0NBc0MvQjs7QUFGRDtFQXZDSixrQ0FBeUM7RUFDekMscUNBQTRDO0VBQzVDLCtCNUNQMEI7RTRDUTFCLHdCQUFvQztDQXNDL0I7O0FBRkQ7RUF2Q0osa0NBQXlDO0VBQ3pDLHFDQUE0QztFQUM1QywrQjVDUjBCO0U0Q1MxQix3QkFBb0M7Q0FzQy9COztBQUZEO0VBdkNKLGtDQUF5QztFQUN6QyxxQ0FBNEM7RUFDNUMsK0I1Q0gwQjtFNENJMUIsd0JBQW9DO0NBc0MvQjs7QUFJRztFQUNJLGFBcEVKO0VBcUVJLGdDQUFnQztDQUNuQzs7QUFIRDtFQUNJLGFBbkVIO0VBb0VHLGdDQUFnQztDQUNuQzs7QUFIRDtFQUNJLGFBbEVKO0VBbUVJLGdDQUFnQztDQUNuQyIsImZpbGUiOiJidWVmeS5jc3MifQ== */", ""]);

/***/ }),
/* 11 */
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function() {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		var result = [];
		for(var i = 0; i < this.length; i++) {
			var item = this[i];
			if(item[2]) {
				result.push("@media " + item[2] + "{" + item[1] + "}");
			} else {
				result.push(item[1]);
			}
		}
		return result.join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};


/***/ }),
/* 12 */,
/* 13 */
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
var stylesInDom = {},
	memoize = function(fn) {
		var memo;
		return function () {
			if (typeof memo === "undefined") memo = fn.apply(this, arguments);
			return memo;
		};
	},
	isOldIE = memoize(function() {
		return /msie [6-9]\b/.test(self.navigator.userAgent.toLowerCase());
	}),
	getHeadElement = memoize(function () {
		return document.head || document.getElementsByTagName("head")[0];
	}),
	singletonElement = null,
	singletonCounter = 0,
	styleElementsInsertedAtTop = [];

module.exports = function(list, options) {
	if(typeof DEBUG !== "undefined" && DEBUG) {
		if(typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};
	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (typeof options.singleton === "undefined") options.singleton = isOldIE();

	// By default, add <style> tags to the bottom of <head>.
	if (typeof options.insertAt === "undefined") options.insertAt = "bottom";

	var styles = listToStyles(list);
	addStylesToDom(styles, options);

	return function update(newList) {
		var mayRemove = [];
		for(var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];
			domStyle.refs--;
			mayRemove.push(domStyle);
		}
		if(newList) {
			var newStyles = listToStyles(newList);
			addStylesToDom(newStyles, options);
		}
		for(var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];
			if(domStyle.refs === 0) {
				for(var j = 0; j < domStyle.parts.length; j++)
					domStyle.parts[j]();
				delete stylesInDom[domStyle.id];
			}
		}
	};
}

function addStylesToDom(styles, options) {
	for(var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];
		if(domStyle) {
			domStyle.refs++;
			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}
			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];
			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}
			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles(list) {
	var styles = [];
	var newStyles = {};
	for(var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};
		if(!newStyles[id])
			styles.push(newStyles[id] = {id: id, parts: [part]});
		else
			newStyles[id].parts.push(part);
	}
	return styles;
}

function insertStyleElement(options, styleElement) {
	var head = getHeadElement();
	var lastStyleElementInsertedAtTop = styleElementsInsertedAtTop[styleElementsInsertedAtTop.length - 1];
	if (options.insertAt === "top") {
		if(!lastStyleElementInsertedAtTop) {
			head.insertBefore(styleElement, head.firstChild);
		} else if(lastStyleElementInsertedAtTop.nextSibling) {
			head.insertBefore(styleElement, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			head.appendChild(styleElement);
		}
		styleElementsInsertedAtTop.push(styleElement);
	} else if (options.insertAt === "bottom") {
		head.appendChild(styleElement);
	} else {
		throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");
	}
}

function removeStyleElement(styleElement) {
	styleElement.parentNode.removeChild(styleElement);
	var idx = styleElementsInsertedAtTop.indexOf(styleElement);
	if(idx >= 0) {
		styleElementsInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement(options) {
	var styleElement = document.createElement("style");
	styleElement.type = "text/css";
	insertStyleElement(options, styleElement);
	return styleElement;
}

function createLinkElement(options) {
	var linkElement = document.createElement("link");
	linkElement.rel = "stylesheet";
	insertStyleElement(options, linkElement);
	return linkElement;
}

function addStyle(obj, options) {
	var styleElement, update, remove;

	if (options.singleton) {
		var styleIndex = singletonCounter++;
		styleElement = singletonElement || (singletonElement = createStyleElement(options));
		update = applyToSingletonTag.bind(null, styleElement, styleIndex, false);
		remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true);
	} else if(obj.sourceMap &&
		typeof URL === "function" &&
		typeof URL.createObjectURL === "function" &&
		typeof URL.revokeObjectURL === "function" &&
		typeof Blob === "function" &&
		typeof btoa === "function") {
		styleElement = createLinkElement(options);
		update = updateLink.bind(null, styleElement);
		remove = function() {
			removeStyleElement(styleElement);
			if(styleElement.href)
				URL.revokeObjectURL(styleElement.href);
		};
	} else {
		styleElement = createStyleElement(options);
		update = applyToTag.bind(null, styleElement);
		remove = function() {
			removeStyleElement(styleElement);
		};
	}

	update(obj);

	return function updateStyle(newObj) {
		if(newObj) {
			if(newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap)
				return;
			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;
		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag(styleElement, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (styleElement.styleSheet) {
		styleElement.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = styleElement.childNodes;
		if (childNodes[index]) styleElement.removeChild(childNodes[index]);
		if (childNodes.length) {
			styleElement.insertBefore(cssNode, childNodes[index]);
		} else {
			styleElement.appendChild(cssNode);
		}
	}
}

function applyToTag(styleElement, obj) {
	var css = obj.css;
	var media = obj.media;

	if(media) {
		styleElement.setAttribute("media", media)
	}

	if(styleElement.styleSheet) {
		styleElement.styleSheet.cssText = css;
	} else {
		while(styleElement.firstChild) {
			styleElement.removeChild(styleElement.firstChild);
		}
		styleElement.appendChild(document.createTextNode(css));
	}
}

function updateLink(linkElement, obj) {
	var css = obj.css;
	var sourceMap = obj.sourceMap;

	if(sourceMap) {
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	var blob = new Blob([css], { type: "text/css" });

	var oldSrc = linkElement.href;

	linkElement.href = URL.createObjectURL(blob);

	if(oldSrc)
		URL.revokeObjectURL(oldSrc);
}


/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(10);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(13)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!../../css-loader/index.js!./buefy.css", function() {
			var newContent = require("!!../../css-loader/index.js!./buefy.css");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(3)(
  /* script */
  __webpack_require__(6),
  /* template */
  __webpack_require__(17),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/Michael/Documents/Development/The-Maneater-CMS/maneater-cms/resources/assets/js/components/Flatpickr.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Flatpickr.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-12e7c426", Component.options)
  } else {
    hotAPI.reload("data-v-12e7c426", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(3)(
  /* script */
  __webpack_require__(7),
  /* template */
  __webpack_require__(18),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/Michael/Documents/Development/The-Maneater-CMS/maneater-cms/resources/assets/js/components/Select2.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Select2.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-869ae76a", Component.options)
  } else {
    hotAPI.reload("data-v-869ae76a", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('p', {
    staticClass: "control"
  }, [_c('input', {
    staticClass: "input flatpickr",
    attrs: {
      "type": "text",
      "name": this.name,
      "id": this.name,
      "data-default-date": this.defaultValue
    }
  })])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-12e7c426", module.exports)
  }
}

/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('p', {
    staticClass: "control"
  }, [_c('select', {
    staticClass: "select",
    attrs: {
      "name": this.name,
      "id": this.id,
      "multiple": this.isMultiple
    }
  }, [_vm._t("default")], 2)])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-869ae76a", module.exports)
  }
}

/***/ }),
/* 19 */,
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(4);
module.exports = __webpack_require__(5);


/***/ })
],[20]);