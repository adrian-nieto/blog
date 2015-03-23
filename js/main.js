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
    mainContent.on('click', 'a', function (e) {
        e.preventDefault();
        var rowID = $(this).attr('data-id');
        
        var blogID = {
            blogid: rowID
        }
        console.log(rowID);
        $.ajax({

            url: 'getblog.php',
            dataType: 'json',
            data: blogID,
            cache: true,
            method: 'POST',
            success: function (response) {

                
                $(".display_container").html(response.html);
                location.hash = 'id='+rowID;
            },
            error: function() {
                console.log("error");
            }
        }); //end of ajax
        
    }); //end of on handler

}); //end of document ready