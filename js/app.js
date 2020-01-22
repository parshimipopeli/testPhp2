$(function () {


    $.ajax({
        url: 'ajax/categorie.json',
        method: 'GET'
    }).done(function (data) {
        $("#categorie").append("<ul id=\'cat\'></ul>");
        for (let i = 0; i <= data.length - 1; i++) {
            $("#cat").append("<li> <p class=\"text-center display-5\">" + data[i].id  + "</p>" + "<p class=\"text-center display-5\">" + data[i].lieu + "</p>" +
                "<p class=\"text-center\">" + data[i].language + "</li>");
        }
    });