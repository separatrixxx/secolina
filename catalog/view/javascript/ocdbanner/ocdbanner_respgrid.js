/******************************************************************************************
 *** All rights reserved belong to the module, the module developers https://oc-day.ru  *** 
 *** https://oc-day.ru © 2017-2022 All Rights Reserved                                  ***
 *** Distribution, without the author's consent is prohibited                           ***
 *** Commercial license                                                                 ***
 ******************************************************************************************/
function respgrid(obj, settings) {
  var banner_grids = $(obj);
  
  banner_grids.each(function(index, el) {
    var respgrid = this;
      
    $(respgrid).responsivegrid({
      'gutter' : settings.gutter,
	    'itemSelector' : settings.itemclass,
      'breakpoints' : settings.breakpoints,
    });
    
    /*setContainerWidth = function (respgrid) {
	    var w = 0;
	    var gt = parseInt(settings.gutter.replace("px", ""), 0);
	    $(respgrid).find(settings.itemclass).each(function(index, el) {
		    if ($(this).css('top') == '0px') {
		      w += $(this).width()+gt;
	      };
	    });
      $(respgrid).css({'max-width': w-gt});
    } 
		
    $(window).resize(function(event) {
	    $(respgrid).css({'max-width': 'none', 'opacity': 0});
	    $(respgrid).stop().animate({opacity: 1}, 500, function () {
	      setContainerWidth(respgrid);
      });
    });*/
  });
}

// Banner dimensions
window.addEventListener('DOMContentLoaded', function() {
  let module = document.querySelector('.ocdbanner');
  let module_id = module.dataset.ocdbanner;
  let item_selector = document.querySelectorAll('#ocdbanner-' + module_id + ' .item-grid-no-image');
                           
  for (let i = 0; i < item_selector.length; i++) {
    let DOMRect = item_selector[i].getBoundingClientRect();
    let width_item = DOMRect.width;
    
    let width = Math.round(width_item);
    let height = item_selector[i].offsetHeight;

    let div = document.createElement("div");

    item_selector[i].appendChild(div);
    div.innerHTML = width + " x " + height;
  }
});
