const menu = document.querySelector('.navbar');

window.addEventListener('scroll' , () =>{
  if(window.scrollY > 120){
      menu.style.background = 'orange';
      menu.style.transition = 'all 3s ease';
      menu.style.top = '0';
      menu.style.padding = '16px';
      menu.style.boxShadow = '2px 3px 8px 1px rgba(0, 0, 0, 0.376);';
  }
  else{
    menu.style.padding = '0px';
    menu.style.transition = 'all 3s ease';
  }

});


window.addEventListener('scroll',animSection);

function animSection(){
    var temoin = document.querySelectorAll('.tem');
    
    for(var i = 0; i<temoin.length; i++){
        var windowInner = window.innerHeight;
        var windowTop = temoin[i].getBoundingClientRect().top;
        var windowPoint = 150;

        if(windowTop < windowInner - windowPoint){
            temoin[i].classList.add('active');
        }
        else{
            temoin[i].classList.remove('active');  
        }

    }
}
const mybutton = document.getElementById('myBtn');
window.addEventListener('scroll',function(){
    if(document.documentElement.scrollTop > 200){
      mybutton.style.bottom = "30px";
    }
    else{
      mybutton.style.bottom = "-100px";
    }
});
function topFunction(){
  $("html").animate({scrollTop:"0"}, "600");
}