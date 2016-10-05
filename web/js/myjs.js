//document.addEventListener('DOMContentLoaded', function(){ });  //END document.addEventListener
jQuery(document).ready(function(){

    var heightScreen = 0;
    heightScreen = document.body.clientHeight; //Height of window client's browser  //763
//-----------------------------------------------------------------------------------------

    /** Remove message "You have successfully signed up!" in Home page, after registration User */
    setTimeout( function() {  $("p.flash_msg").remove().fadeOut("slow"); }, 3000);


    /** 1.Click to mini-image of "Gallery" - give the data clicked image to "Modal window"
        2.Centered Modal window by height screen client's browser
    */
    $('img[class^="img-gallery-"]').bind("click", function(){  //console.log( $(this) );

    //1.Click to mini-image of "Gallery" - give the data clicked image to "Modal window"
        var $current_src = $(this).attr('src'); //srs clicked(current) image
        $("#myModalGall > div > div > div.modal-body > img.popup_img").attr('src', $current_src); //get $current_src to image of "Modal window"

        var $current_alt = $(this).attr('alt'); //alt clicked(current) image
        $("#myModalGall > div > div > div.modal-body > img.popup_img").attr('alt', $current_alt); //get $current_alt to image of "Modal window"
        $("#myModalGall > div > div > div.modal-header > h4#myModalLabel > span.descript").text($current_alt); //get $current_alt to <h4 class="modal-title" id="myModalLabel"></h4> of "Modal window" like description for image

        var $current_datacreate = $(this).parent().data('create'); //date create clicked image
        $("#myModalGall > div > div > div.modal-footer > span.data_create_img").text($current_datacreate);

    //2.Centered Modal window by height screen client's browser
        var interval = setInterval(function() {
            var heightModalWindowContent = $('#myModalGall > div > div.modal-content');  //Height of Modal window content with photo from Gallery
            var heightModalWindowContent = heightModalWindowContent[0].clientHeight;  //get height 'div.modal-content'

            if( heightModalWindowContent !== 0 ){
                clearInterval(interval);  //clear var interval

                console.log(heightModalWindowContent);

                var centeredHeightModalWindow = Math.floor( (heightScreen/2) - (heightModalWindowContent/2) ); //console.log(centeredHeightModalWindow);
                $('#myModalGall > div > div.modal-content').css({ 'margin-top':centeredHeightModalWindow+'px' });
            }
        }, 100); /*1000 - это 1  сек.*/



    });


    /** Event chance <input type="file" id="album-file" name="Album[file]"> & give this value to inputs:
        <input type="hidden" id="album-src"> & <input type="text" id="album-src_fake">
    */
    $('input#album-file').change(function(){
        var linkPath = $('input#album-file').val(); console.log(linkPath);  //C:\fakepath\original.jpg
        regex = /W?\w+[.]\D{2,4}/gi; //regex = /\w+[.]\D{2,4}/gi;
        linkPath=linkPath.match(regex); console.log(linkPath);  //my_image.jpg

        $('#album-src_fake').val(linkPath); //give linkPath <input type="hidden" id="album-src">
        $('#album-src').val(linkPath);  //give linkPath <input type="text" id="album-src_fake">
    });


    /** ############################################ */






}); //__/(document).ready
