$('document').ready(function(){

        $("#form_submit_button").click(function(){
            console.log("in here");
            var formdata = new FormData(form[0]);
            formdata.append('content', tinyMCE.activeEditor.getContext());
        
            $.ajax({
                url:'createblog.php',
                cache: false,
                method: 'post',
                dataType: 'text',
                processData: false,
                contentType: false,
                data: {textarea_html: editor.getContent()},
                success: function(response){
                    console.log("send successsful");
                }
            }); //end of ajax
        }); //end of click
});//end of ready