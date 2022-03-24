/**
 *
 * Author URL - https://twitter.com/ruby_on_tails
 * Plugin source tutorial - http://codetheory.in/image-zoom-magnifying-glass-effect-with-css3-and-jquery/
 * Original source tutorial - http://thecodeplayer.com/walkthrough/magnifying-glass-for-images-using-jquery-and-css3
 * Codepen source code - http://codepen.io/scott23/details/akKqc
 */
 
$(document).ready(function(){

	var native_width = 0;
	var native_height = 0;
  $(".large").css("background","url('" + $(".thumb").attr("src") + "') no-repeat");

	$(".magnify").mousemove(function(e){
		//When the user hovers on the image, the script will first calculate
		//the native dimensions if they don't exist. Only after the native dimensions
		//are available, the script will show the zoomed version.
		if(!native_width && !native_height)
		{
			//This will create a new image object with the same image as that in .small
			//We cannot directly get the dimensions from .small because of the 
			//width specified to 200px in the html. To get the actual dimensions we have
			//created this image object.
			var image_object = new Image();
			image_object.src = $(".thumb").attr("src");
			
			//This code is wrapped in the .load function which is important.
			//width and height of the object would return 0 if accessed before 
			//the image gets loaded.
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			//x/y coordinates of the mouse
			//This is the position of .magnify with respect to the document.
			var magnify_offset = $(this).offset();
			//We will deduct the positions of .magnify from the mouse positions with
			//respect to the document to get the mouse positions with respect to the 
			//container(.magnify)
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			
			//Finally the code to fade out the glass if the mouse is outside the container
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large").fadeIn(100);
			}
			else
			{
				$(".large").fadeOut(100);
			}
			if($(".large").is(":visible"))
			{
				//The background position of .large will be changed according to the position
				//of the mouse over the .small image. So we will get the ratio of the pixel
				//under the mouse pointer with respect to the image and use that to position the 
				//large image inside the magnifying glass
				var rx = Math.round(mx/$(".thumb").width()*native_width - $(".large").width()/2)*-1;
				var ry = Math.round(my/$(".thumb").height()*native_height - $(".large").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				
				//Time to move the magnifying glass with the mouse
				var px = mx - $(".large").width()/2;
				var py = my - $(".large").height()/2;
				
				//Now the glass moves with the mouse
				//The logic is to deduct half of the glass's width and height from the 
				//mouse coordinates to place it with its center at the mouse coordinates
				
				//If you hover on the image now, you should see the magnifying glass in action
				$(".large").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
});






$(document).ready(function(){

	var native_width = 0;
	var native_height = 0;
  $(".large-2").css("background","url('" + $(".thumb-2").attr("src") + "') no-repeat");

	$(".magnify-2").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".thumb-2").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large-2").fadeIn(100);
			}
			else
			{
				$(".large-2").fadeOut(100);
			}
			if($(".large-2").is(":visible"))
			{
				var rx = Math.round(mx/$(".thumb-2").width()*native_width - $(".large-2").width()/2)*-1;
				var ry = Math.round(my/$(".thumb-2").height()*native_height - $(".large-2").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large-2").width()/2;
				var py = my - $(".large-2").height()/2;
				$(".large-2").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
});



$(document).ready(function(){

	var native_width = 0;
	var native_height = 0;
  $(".large-3").css("background","url('" + $(".thumb-3").attr("src") + "') no-repeat");

	$(".magnify-3").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".thumb-3").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large-3").fadeIn(100);
			}
			else
			{
				$(".large-3").fadeOut(100);
			}
			if($(".large-3").is(":visible"))
			{
				var rx = Math.round(mx/$(".thumb-3").width()*native_width - $(".large-3").width()/2)*-1;
				var ry = Math.round(my/$(".thumb-3").height()*native_height - $(".large-3").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large-3").width()/2;
				var py = my - $(".large-3").height()/2;
				$(".large-3").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
});




$(document).ready(function(){

	var native_width = 0;
	var native_height = 0;
  $(".large-4").css("background","url('" + $(".thumb-4").attr("src") + "') no-repeat");

	$(".magnify-4").mousemove(function(e){
		if(!native_width && !native_height)
		{
			var image_object = new Image();
			image_object.src = $(".thumb-4").attr("src");
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			var magnify_offset = $(this).offset();
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large-4").fadeIn(100);
			}
			else
			{
				$(".large-4").fadeOut(100);
			}
			if($(".large-4").is(":visible"))
			{
				var rx = Math.round(mx/$(".thumb-4").width()*native_width - $(".large-4").width()/2)*-1;
				var ry = Math.round(my/$(".thumb-4").height()*native_height - $(".large-4").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".large-4").width()/2;
				var py = my - $(".large-4").height()/2;
				$(".large-4").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
});