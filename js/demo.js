$(document).ready(function() {
  
  //Initiliaze
  var itemList, item, className, thisItem, newOrder, itemDesc, desc;
  
  itemList  = $('#itemlist');
  item      = itemList.children('img');
  
  itemDesc  = $('#itemdescription');
  desc      = itemDesc.children('span');
  
  //Add class name for each item
  item.each(function(index) {
    
    className  = 'item-' + index;
    
    $(this).addClass(className).attr('data-order', index);
    
  });
  
  //Show first item description
  desc.filter(':first-child').fadeIn();
  
  //On clicked fire animation
  item.on('click', function() {
    
    thisItem  = $(this);
    thisOrder = parseInt(thisItem.attr('data-order')) - 1;

    thisItem.addClass('show');
    
    //Reorder item position
    item.on('animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd', function() { 
    
      thisItem.removeClass().addClass('item-0').attr('data-order', '0');
  
      //Show selected item description
      desc.hide();
      desc.filter('[data-for=' + thisItem.attr('id') + ']' ).fadeIn('fast');
    });

    //Move siblings items backward
    window.setTimeout(function () {    
      
      for(var i = thisOrder; i >= 0; i--) {
      
        //Reorder item position
        movedItem = item.filter('[data-order=' + i + ']');
        newOrder  = parseInt(movedItem.attr('data-order')) + 1;
        className = 'item-' + newOrder;
        
        //Move them with transition
        movedItem.removeClass().addClass('transition ' + className).attr('data-order', newOrder);
        
        //Remove their transition
        item.on('transitionend webkitTransitionEnd MSTransitionEnd oTransitionEnd', function() { 
          item.removeClass('transition');
        });
      }  
    }, 500);
  });
});