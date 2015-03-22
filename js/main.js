$('document').ready(function () {
   
$.ajax({
    url: 'get.php', //get our data from the get.php file
    dataType: 'json', //expect json data back from get.php
    cache: false, //do not cache the result
    method: 'POST', //use the post method
    success: function (response) { //do something when we get data back 
        if (response.success) {
            $(".display_container").html(response.html); //take the html object of the data object, and put it into the display container
            }
        }
    }); //end of ajax get.php
    
}); //end of document ready







/*$('document').ready(function(){

        $("#form_submit_button").click(function(){
            
            var form = $('#textareaform');
            var formdata = new FormData(form[0]);
            formdata.append('content', tinyMCE.activeEditor.getContent());
        
            $.ajax({
                url:'createblog.php',
                cache: false,
                method: 'post',
                dataType: 'text',
                processData: false,
                contentType: false,
                data: formdata,
                success: function(response){
                    console.log("send successsful");
                }
            }); //end of ajax
        }); //end of click
});//end of ready*/