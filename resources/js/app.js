require('./bootstrap');

window.copyToClipboard = function (element) {
    $el = element.querySelector('.content_value .value')
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($($el).text().trim()).select();
    document.execCommand("copy");
    $temp.remove();
}
