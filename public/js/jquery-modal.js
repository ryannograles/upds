
$(document).ready(function () {

    $(".change").hide();
    $("#submit").hide();


    $('#edit').on('click', function () {

        $(".change").show();
        $("#submit").show();
        $("#edit").hide();
    });

    $('#submit').on('click', function () {



        $("#edit").show();
        $("#submit").hide();
    });
});
