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


    
 });