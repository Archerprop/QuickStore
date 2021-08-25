const $video = document.querySelector('video');
$video.addEventListener('play',()=>{
    console.log('se reproduce el video')
})
$video.addEventListener('pause',()=>{
    console.log('se pausa el video')
})
const options = {
    //root,
    rootMargin: '0px 0px 0px 0px',
    threshold: .5,
}
function callback(entries,observer) {
    console.log('se llamo al callback');
    if(entries[0].isIntersecting){
        $video.play()
    }else{
        $video.pause()
    }
}
const   observer = new IntersectionObserver(callback, options);
observer.observe($video)