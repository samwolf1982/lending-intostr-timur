$(document).ready(function(){
 
    // $('ul.tabs').tabs({'swipeable':true});
    $('ul.tabs').tabs({'onShow':function(){ 
            google.maps.event.trigger(map, 'resize');
    }});

        


});