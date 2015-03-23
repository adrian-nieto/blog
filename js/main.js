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
    
    var mainContent = $('#mainContent');
    mainContent.on('click', 'a', function(){
        var rowID = $(this).attr('data-id');
        console.log("click is working");
        var blogID = {
            blogid: rowID
        }
        
        $.ajax({
           
            url: 'getblog.php',
            dataType: 'json',
            data: blogID,
            cache: false,
            method: 'POST',
            success: function(response){
                if(response.success){
                    $(".blogpost").html(response.html);   
                }
            }
        }); //end of ajax
    }); //end of on handler
    
}); //end of document ready