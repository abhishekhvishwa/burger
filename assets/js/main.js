/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'), /* html ka nav-menu ,nav-toggle link kiya hai */
    navClose = document.getElementById('nav-close')
    
    /* Menu show  also here */
if(navToggle){
    navToggle.addEventListener('click', () =>{
      navMenu.classList.add('show-menu')
    })
}    
    
/* Menu hidden */ /* menu option hidden or reopen ke liye hai */
if(navClose){
    navClose.addEventListener('click', () =>{
         navMenu. classList.remove('show-menu') /* menu option ko close kar ne ke liye navclose use kiya hau */
    })
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link') /* nav__link add kiya hai html se option pe click karenge to same page par redirect karega */

const linkAction = () =>{
     const navMenu = document.getElementById('nav-menu')
     // When we click on each nav __ link, we remove the show-menu cl
     navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== ADD SHADOW HEADER ===============*/
const shadowHeader = () =>{ /* header add from html */
 const header = document.getElementById('header')
    // Add a class if the bottom offset is greater than 50 
this.scrollY >= 50 ? header.classList.add('shadow-header')
            : header.classList.remove('shadow-header')
}
window.addEventListener('scroll', shadowHeader)
    

/*=============== SHOW SCROLL UP ===============*/ 
const scrollup = () =>{
    const scrollup = document.getElementById('scroll-up')
    //when the scroll is higher than 350 viewport height ,add the show-scroll class to the a tag with the scrollup class
    this.scrollY>=350 ? scrollup.classList.add('show-scroll')
                      : scrollup.classList.remove('show-scroll')
    }
    window.addEventListener('scrol',scrollup)


/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/


/*=============== SCROLL REVEAL ANIMATION ===============*/
