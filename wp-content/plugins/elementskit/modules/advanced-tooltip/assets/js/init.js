!function(t,i){"use strict";var e={init:function(){i.hooks.addAction("frontend/element_ready/widget",e.ready)},ready:function(e){var o=e.data("settings"),_=e.data("model-cid");if(_&&(o=i.config.elements.data[_].attributes),void 0!==o){if("_tippy"in e[0])e[0]._tippy.destroy();if("ekit_adv_tooltip_enable"in o&&"yes"===o.ekit_adv_tooltip_enable&&o.ekit_adv_tooltip_content){var n={content:o.ekit_adv_tooltip_content,placement:o.ekit_adv_tooltip_position,animation:o.ekit_adv_tooltip_animation,arrow:!!o.ekit_adv_tooltip_arrow,trigger:o.ekit_adv_tooltip_trigger,onShow:function(i){t(i.popper).addClass("ekit-tippy ekit-tippy-"+i.reference.dataset.id)}};o.ekit_adv_tooltip_width.size&&(n.maxWidth=o.ekit_adv_tooltip_width.size),n.offset=[0,10],"ekit_adv_tooltip_offset_x"in o&&""!==o.ekit_adv_tooltip_offset_x&&(n.offset[0]=o.ekit_adv_tooltip_offset_x),"ekit_adv_tooltip_offset_y"in o&&""!==o.ekit_adv_tooltip_offset_y&&(n.offset[1]=o.ekit_adv_tooltip_offset_y),tippy(".elementor-element-"+e.data("id"),n)}}}};t(window).on("elementor/frontend/init",e.init)}(jQuery,window.elementorFrontend);