<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('frontUI/assets/js/jquery.min.js')}}"></script>
<!--<script-->
<!--  src="https://code.jquery.com/jquery-3.6.0.js"-->
<!--  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="-->
<!--  crossorigin="anonymous"></script>-->
<script src="{{asset('frontUI/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/bootstrap.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('frontUI/assets/js/jquery.meanmenu.js')}}"></script>
<!--<script src="{{asset('frontUI/assets/js/jquery.nice-select.min.js')}}"></script>-->
<script src="{{asset('frontUI/assets/js/slick.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/odometer.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/parallax.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('frontUI/assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('frontUI/assets/js/main.js')}}"></script>


    <script src="{{asset('frontUI/assets/Libs/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('frontUI/assets/Libs/select2/form-advanced.init.js')}}"></script>
    

    		<!-- WYSIWYG Editor js -->
<script src="{{asset('frontUI/assets/Libs/wysiwyag/jquery.richtext.js')}}"></script>
<!-- WYSIWYG Editor js -->
<script>
	$(function(e) {
		$('.content').richText();
		$('.content2').richText();
	});
</script>




<script src="{{asset('frontUI/assets/Libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/%40chenfengyuan/datepicker/datepicker.min.js')}}"></script>

<script type="text/javascript" src="{{asset('frontUI/assets/js/rev-slider.js')}}"></script>

<script>
        $(document).on('click', '#close-preview', function() {
            $('.image-preview').popover('hide');
            // Hover befor close the preview
            $('.image-preview').hover(
                function() {
                    $('.image-preview').popover('show');
                },
                function() {
                    $('.image-preview').popover('hide');
                }
            );
        });

        $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
                type: "button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
            });
            closebtn.attr("class", "close pull-right");
            // Set the popover default content
            $('.image-preview').popover({
                trigger: 'manual',
                html: true,
                title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
                content: "There's no image",
                placement: 'bottom'
            });
            // Clear event
            $('.image-preview-clear').click(function() {
                $('.image-preview').attr("data-content", "").popover('hide');
                $('.image-preview-filename').val("");
                $('.image-preview-clear').hide();
                $('.image-preview-input input:file').val("");
                $(".image-preview-input-title").text("Browse");
            });
            // Create the preview image
            $(".image-preview-input input:file").change(function() {
                var img = $('<img/>', {
                    id: 'dynamic',
                    width: 250,
                    height: 200
                });
                var file = this.files[0];
                var reader = new FileReader();
                // Set preview image into the popover data-content
                reader.onload = function(e) {
                    $(".image-preview-input-title").text("Change");
                    $(".image-preview-clear").show();
                    $(".image-preview-filename").val(file.name);
                    img.attr('src', e.target.result);
                    $(".image-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
                }
                reader.readAsDataURL(file);
            });
        });
    </script>
    
    
    
    
    
    
    
            <script>
        $('.prprprOwl').owlCarousel({
    
            margin:10,
     

            
            
            
            
                  nav:true,
      loop:false,
      autoplay:false,
        autoplayTimeout:2500,
autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
            
            
            
            
        })
    </script>
    
    
    
    
                <script>
        $('.prprprOwlDetals').owlCarousel({
    
            margin:10,
     

            
            
            
            
                  nav:true,
      loop:false,
      autoplay:false,
        autoplayTimeout:2500,
autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
            
            
            
            
        })
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    