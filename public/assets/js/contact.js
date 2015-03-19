/**
 * Created by peter on 3/18/2015.
 */
$(function () {

    //hang on event of form with id=myform
    $("#contactfrm").submit(function (e) {

        //prevent Default functionality
        e.preventDefault();

        //replace form
        $("#contactfrm").fadeOut('slow');
        setTimeout(function () {
            $('#formholder').append('<div class="spinning-thing animated fadeInDown "> <h4 class="text-center"> <i class="fa fa-smile-o fa-5x" style="color: #017ebc"></i> <br/> Your message has been received, I will get back to you as soon as possible </h4> </div>'
            );
        }, 2000);

        //get the action-url of the form
        var actionurl = e.currentTarget.action;

        //do your own request an handle the results
        $.ajax({
            url: actionurl,
            type: 'post',
            dataType: 'json',
            data: $("#contactfrm").serialize(),
            success: function (data) {
                console.log(data);
            }
        });

    });

});
