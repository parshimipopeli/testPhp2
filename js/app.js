console.log('hello');



$(function () {


    $.ajax({
        url: '../admin/addCaegorie.php',
        dataType: 'json',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify({"id": $('#id').val(), "lnguage": $('#language').val(), "description": $('#description').$val()}),
        processData: false,
        success: function (data, textStatus, jQxhr) {
            $('#response pre').html(JSON.stringify(data));
        },
        error: function (jqXhr, textStatus, errorThrown) {
            console.log(errorThrown);
        }

    })
});