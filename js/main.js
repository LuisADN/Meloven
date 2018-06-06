/* ********************** FORM ACTION CHANGE ********************** */
/* **************************************************************** */
function RadioStateChange(x) {
    var form = document.getElementById('mc-embedded-subscribe-form');
    if ( x == 0) {
        form.action = 'https://meloven.us18.list-manage.com/subscribe/post?u=4d2f69fba82cf20af4f478eb7&amp;id=76c0a7833d';
    }
    else {
        form.action = 'https://meloven.us18.list-manage.com/subscribe/post?u=4d2f69fba82cf20af4f478eb7&amp;id=34470ec719';
    }
}
/* ********************** MUSIC PLAYER ********************** */
/* ********************************************************** */
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
/* ********************** RADIO BUTTON NOTE CHANGE ********************** */
/* ********************************************************************** */
document.getElementById('contactChoice2').addEventListener('click', function (ev) {
    var nullOrNot = document.querySelector('#liChoice2 .check img');
    if( nullOrNot == null){
        var parent = document.querySelector('#liChoice2 .check');
        var sourceTwo = document.createElement('img');
        sourceTwo.setAttribute('src', 'img/note.svg');
        sourceTwo.setAttribute('alt', 'Note');
        parent.append(sourceTwo);

        var removeChoiseOne = document.querySelector('#liChoice1 .check');
        var sourceOne = document.querySelector('#liChoice1 .check img');
        removeChoiseOne.removeChild(sourceOne);
    }
})
document.getElementById('contactChoice1').addEventListener('click', function (ev) {
    var nullOrNot = document.querySelector('#liChoice1 .check img');
    if( nullOrNot == null){
        var parent = document.querySelector('#liChoice1 .check');
        var sourceOne = document.createElement('img');
        sourceOne.setAttribute('src', 'img/note.svg');
        sourceOne.setAttribute('alt', 'Note');
        parent.append(sourceOne);

        var removeChoiseTwo = document.querySelector('#liChoice2 .check');
        var sourceTwo = document.querySelector('#liChoice2 .check img');
        removeChoiseTwo.removeChild(sourceTwo);
    }
})
