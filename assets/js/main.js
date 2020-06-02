function toogle_burger(){
    const bouton = document.getElementById('burger');
    console.log(bouton);
    bouton.addEventListener('click',function(){
        let menu = document.querySelector('.two');
        let nav = document.querySelector('nav');
        console.log(menu);
        menu.classList.toggle('hide');
        nav.classList.toggle('hide');
    })
}
toogle_burger();

const selectSVG = document.querySelectorAll('svg rect, svg circle, svg line');
console.log(selectSVG);
for(selectS of selectSVG){
    selectS.addEventListener('mouseover',function(e){
        this.classList.toggle('gold')
    })
}

function getRandomColor() {
    // var letters = '0123456789ABCDEF';
    let colors = ['#FEEB31','#166D2F','#000000','#15A1DB','#E44C24','#2BA03C','#F59054','#3EAC8F','#85E6C1', '#E44C24','#006CB8','#2BA03C','#E8C931','#85E6C1'];
    let color='';
    color += colors[Math.floor(Math.random() * 14)];
    return color;
}

function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}


setInterval(function tirer_au_hasard() {
    let test = getRandomInt(15);

    // selectSVG[test].classList.toggle('gold')
    selectSVG[test].style.fill = getRandomColor();
    selectSVG[test].classList.add('gold');
},1000);

window.addEventListener('scroll',function(e){
    let y = window.pageYOffset;
    console.log(y);
    let contain = document.querySelector('.contain');
    let svg = document.getElementById('svg2')
    console.log(contain);
    contain.style.marginTop = - y + 'px';
    svg.style.marginTop = - y + 'px';
});



