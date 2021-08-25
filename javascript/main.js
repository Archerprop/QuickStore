const fila = document.querySelector('.container-carousel');
const series = document.querySelectorAll('.serie');
const arrowLeft = document.getElementById('arrow-left');
const arrowRight = document.getElementById('arrow-right');
const fila_new = document.querySelector('.container-carousel-new');
const series_new = document.querySelectorAll('.serie-new');
const arrowLeft_new = document.getElementById('arrow-left-new');
const arrowRight_new = document.getElementById('arrow-right-new');
const container = document.getElementById('container');
const video = document.getElementById('video');
//?--------------------Event Listener arrow right.--------------------
arrowRight.addEventListener('click',()=>{ 
    fila.scrollLeft += fila.offsetWidth;

    const indicatorActive = document.querySelector('.indicadores .active');
    if(indicatorActive.nextSibling){
        indicatorActive.nextSibling.classList.add('active');
        indicatorActive.classList.remove('active');
    }

});
arrowRight_new.addEventListener('click',()=>{ 
    fila_new.scrollLeft += fila_new.offsetWidth;

    const indicatorActive_new = document.querySelector('.indicadores-new .active');
    if(indicatorActive_new.nextSibling){
        indicatorActive_new.nextSibling.classList.add('active');
        indicatorActive_new.classList.remove('active');
    }

});

//?--------------------Event Listener arrow left.--------------------
arrowLeft.addEventListener('click',()=>{ 
    fila.scrollLeft -= fila.offsetWidth;

    const indicatorActive = document.querySelector('.indicadores .active');
    if(indicatorActive.previousSibling){
        indicatorActive.previousSibling.classList.add('active');
        indicatorActive.classList.remove('active');
    }
});
arrowLeft_new.addEventListener('click',()=>{ 
    fila_new.scrollLeft -= fila_new.offsetWidth;

    const indicatorActive_new = document.querySelector('.indicadores-new .active');
    if(indicatorActive_new.previousSibling){
        indicatorActive_new.previousSibling.classList.add('active');
        indicatorActive_new.classList.remove('active');
    }
});


//?--------------------Pagination--------------------
const pageNumber = Math.ceil(series.length / 5);
for(let i = 0; i < pageNumber; i++){
    const indicator = document.createElement('button');

    if(i == 0){
        indicator.classList.add('active');
    }
    document.querySelector('.indicadores').appendChild(indicator);
    indicator.addEventListener('click',(e)=>{
        fila.scrollLeft = i*fila.offsetWidth;

        document.querySelector('.indicadores .active').classList.remove('active');
        e.target.classList.add('active');
    });
}
const pageNumber_new = Math.ceil(series_new.length / 5);
for(let i = 0; i < pageNumber_new; i++){
    const indicator_new = document.createElement('button');

    if(i == 0){
        indicator_new.classList.add('active');
    }
    document.querySelector('.indicadores-new').appendChild(indicator_new);
    indicator_new.addEventListener('click',(e)=>{
        fila_new.scrollLeft = i*fila_new.offsetWidth;

        document.querySelector('.indicadores-new .active').classList.remove('active');
        e.target.classList.add('active');
    });
}

//?--------------------Hover--------------------
series.forEach((serie) =>{
    serie.addEventListener('mouseenter',(e)=>{
        const element = e.currentTarget;
        setTimeout(()=>{
            series.forEach(serie => serie.classList.remove('hover'));
            element.classList.add('hover');
        }, 250);
    });
});

fila.addEventListener('mouseleave',()=>{
    series.forEach(serie => serie.classList.remove('hover'));
});
series_new.forEach((serie_new) =>{
    serie_new.addEventListener('mouseenter',(e)=>{
        const element_new = e.currentTarget;
        setTimeout(()=>{
            series_new.forEach(serie_new => serie_new.classList.remove('hover'));
            element_new.classList.add('hover');
        }, 250);
    });
});

fila_new.addEventListener('mouseleave',()=>{
    series_new.forEach(serie_new => serie_new.classList.remove('hover'));
});
//?--------------------hover serie principal--------------------

container.addEventListener('mouseenter',()=>{
    video.classList.add('opacity');
});

container.addEventListener('mouseleave',()=>{
    video.classList.remove('opacity'); 
});