var percent = 0;
function showProgress(){
    $('#pb').css('width', percent + "%")
    percent += 5;
    console.log(percent); //debug
    if (percent != 105)
        setTimeout("showProgress()", 200);
    if (percent == 105) //reset bar
        percent = 0;
}
