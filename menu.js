/* Sélection des éléments HTML */
let link = document.getElementById('link')
let burger = document.getElementById('burger')
let ul = document.querySelector('ul')

/* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
link.addEventListener('click', function (e) {
  e.preventDefault()
  burger.classList.toggle('open')
  ul.classList.toggle('open')
})


//fonction hover sur le noir
let article = document.querySelectorAll('.article');
console.log(article);
for (let i = 0; i < article.length; i++) {
  article[i].addEventListener('mouseover', function (e) {
       article[i].style.color = 'black';
       article[i].style.background = 'white';
       article[i].style.transition = '1s ease';
       
  article[i].addEventListener('mouseleave', function (e) {
        article[i].style.color = 'white';
        article[i].style.background = 'black';
        article[i].style.transition = '1s ease';
  })
})}