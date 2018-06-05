function RadioStateChange(x) {
    let form = document.getElementById('mc-embedded-subscribe-form');
    if ( x == 0) {
        form.action = 'https://meloven.us18.list-manage.com/subscribe/post?u=4d2f69fba82cf20af4f478eb7&amp;id=76c0a7833d';
    }
    else {
        form.action = 'https://meloven.us18.list-manage.com/subscribe/post?u=4d2f69fba82cf20af4f478eb7&amp;id=34470ec719';
    }
}

document.getElementById('lecteur').addEventListener('click', function (ev) {
    document.getElementById('video').play();
    document.getElementById('lecteur').style.display = "none";
});


document.getElementById('video').addEventListener('ended',restartPlayer,false);
function restartPlayer(e) {
    videoPlayer.load();
    document.getElementById('lecteur').style.display = "block";
}

var videoPlayer = document.getElementById('video')
videoPlayer.addEventListener('click', function () {
    if (videoPlayer.paused == false) {
        videoPlayer.pause();
        videoPlayer.firstChild.nodeValue = 'Play';
        document.getElementById('lecteur').style.display = "block";
    } else {
        videoPlayer.play();
        videoPlayer.firstChild.nodeValue = 'Pause';
        document.getElementById('lecteur').style.display = "none";
    }
});