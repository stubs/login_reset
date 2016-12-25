var percent = 0;
function showProgress(){
    $('#pb').css('width', percent + "%")
    percent += 5;
    console.log(percent);
    if (percent != 105)
        setTimeout("showProgress()", 200);
}
