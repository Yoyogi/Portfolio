function animateHandler(id) {
    //alert("animate handler " + id);
    launchAnimationOut();
    launchAnimationIn(id);
    setTimeout('resetPos()', 100);
}

function launchAnimationOut() {
    var contentsToDeanimate = document.getElementsByTagName("div");
    
    for (var i = 0; i < contentsToDeanimate.length; i++) {
        if (contentsToDeanimate[i].className == "animateIn") {
            var content = contentsToDeanimate[i];
            content.className = "animateOut";
        }
    }
}

function launchAnimationIn(id) {
    var contentToAnimate = document.getElementById(id + "Content");
    contentToAnimate.className = "animateIn";
}

function resetPos() {
    var contentsToDeanimate = document.getElementsByTagName("div");
    
    for (var i = 0; i < contentsToDeanimate.length; i++) {
        if (contentsToDeanimate[i].className == "animateOut") {
            var content = contentsToDeanimate[i];
            content.className = "resetPos";
        }
    }
}
