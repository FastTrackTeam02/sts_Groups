$(document).ready(function(){
    

    // function readURL(input) {
        
    //     $.each(data.files, function (index, file) {
    //         console.log(file.name);
    //     });

    //     // if (input.files && input.files[0]) {
    //     //     var reader = new FileReader();            
    //     //     reader.onload = function (e) {
    //     //         $('#target').attr('src', e.target.result);
    //     //     }
            
    //     //     reader.readAsDataURL(input.files[0]);
    //     // }
    // }
    
    $("#fileupload").change(function(){
        $('#fileshow').empty();
        // $.each(this.files, function (index, file) {
        //     if (file) {
        //         var reader = new FileReader();            
        //         reader.onload = function (e) {
        //             var img = document.createElement("img");
        //             img.setAttribute("src", e.target.result);
        //             $('#fileshow').append(img);
        //         }
        //         reader.readAsDataURL(file);
        //     }
        // });
    });



    // product
    // show
    $(".js-product-img-detail").on("click", function(e) {
        $(".js-product-img-main").find("img").attr("src", $(this).children("img").attr("src"));
        $(".js-product-img-main").find("a").attr("href", $(this).children("img").attr("src"));
    });

    //zoom image
    // Initialize popup as usual
    $('.image-link').magnificPopup({
        //delegate: 'img',
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
      
        zoom: {
          enabled: true, // By default it's false, so don't forget to enable it
      
          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function
      
          // The "opener" function should return the element from which popup will be zoomed in
          // and to which popup will be scaled down
          // By defailt it looks for an image tag:
          opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
        }
  });
    
 });