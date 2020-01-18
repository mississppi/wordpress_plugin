jQuery(document).ready(function($){
    var date = new Date();

    var formatted = `${date.getFullYear()}${("0"+(date.getMonth()+1)).slice(-2)}${("0"+(date.getDate())).slice(-2)}${("0"+(date.getHours())).slice(-2)}${("0"+(date.getMinutes())).slice(-2)}${("0"+(date.getSeconds())).slice(-2)}`.replace(/\n|\r/g, '');

    $('#post_name').val(formatted);
});