
mybutton = document.getElementById("myBtn");

window.addEventListener("scroll", function(){
  if (document.documentElement.scrollTop > 200) {
    mybutton.style.bottom = "30px";

  } else {
    mybutton.style.bottom = "-100px";
  }
});

function topFunction() {
    $("html").animate({ scrollTop: "0" }, "600");
}

// let navbar = document.querySelector('.navbar');
// window.addEventListener('scroll', ()=>{
//   if (window.screenY > 120){
//     navbar.style.height = '10%';
//     navbar.style.transition = '5s';
//   }
//   else{
//     navbar.style.height = '15%';
    
//   }
// });
/*const navbar = document.querySelector('.navbar');
window.onscroll = function () {
  const docScrollTop = document.documentElement.scrollTop;

  if (window.innerWidth > 991) {
    if (docScrollTop > 100) {
      document.querySelector("header").classList.add("fixed");
    } else {
      document.querySelector("header").classList.remove("fixed");
    }
  }
}*/

