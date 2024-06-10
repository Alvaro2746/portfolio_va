
const images = document.querySelectorAll('.hero_figure');

function triggerAnimation(entries){
    entries.forEach(entry => {
        const image = entry.target.querySelector('img');

        //true
        console.log(entry.isIntersecting);
        image.classList.toggle('unset', entry.isIntersecting);
    });}

const options ={
    root: null,
    rootMargin: "0px",
    threshold: 1
}

const observer = new IntersectionObserver(triggerAnimation, options);

images.forEach(image =>{
    observer.observe(image);
})
//text

const texts = document.querySelectorAll('.text_ani');

function triggerAnimation2(entries){
    entries.forEach(entry => {
        const text = entry.target.querySelector('div');

        //true
        console.log(entry.isIntersecting);
        text.classList.toggle('unset', entry.isIntersecting);
    });}
    const options2 ={
        root: null,
        rootMargin: "0px",
        threshold: 1
    }

    const observer2 = new IntersectionObserver(triggerAnimation2, options2);


    texts.forEach(text =>{
        observer2.observe(text);
    })
    