(function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'file';

    this.on('click', function(e) {
       
       debugger       
             		
      var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager/';
      var target_input = $('#' + $(this).data('input'));
	    var target_preview = $('#' + $(this).data('preview'));
      
      debugger
      
	  window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');
      
	  window.SetUrl = function (items) {
       
       debugger
       
	   var file_path = items.map(function (item) {
               
      	var imgurl = item.url.split("storage").pop();
        item.url = '/storage'+imgurl;

        
          return item.url;
        }).join(',');

	    
          
        // set the value of the desired input to image url
        target_input.val('').val(file_path).trigger('change');
         
		 
        // clear previous preview
        target_preview.html('');

        // set or change the preview image src
        items.forEach(function (item) {
			
          target_preview.append(
            $('<img>').css('height', '5rem').attr('src', item.thumb_url)
          );
        });

        // trigger change event
        target_preview.trigger('change');
      };
	  
      return false;
    });
  }

})(jQuery);
