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
    video.load();
    document.getElementById('lecteur').style.display = "block";
}