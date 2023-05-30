var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
  this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
  this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 200 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
  delta = this.period;
  this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
  this.isDeleting = false;
  this.loopNum++;
  delta = 500;
  }

  setTimeout(function() {
  that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('typewrite');
  for (var i=0; i<elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-type');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtType(elements[i], JSON.parse(toRotate), period);
      }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
};




// ---
const hamMenuBtn = document.querySelector('.header__main-ham-menu-cont')
const smallMenu = document.querySelector('.header__sm-menu')
const headerHamMenuBtn = document.querySelector('.header__main-ham-menu')
const headerHamMenuCloseBtn = document.querySelector(
  '.header__main-ham-menu-close'
)
const headerSmallMenuLinks = document.querySelectorAll('.header__sm-menu-link')

hamMenuBtn.addEventListener('click', () => {
  if (smallMenu.classList.contains('header__sm-menu--active')) {
    smallMenu.classList.remove('header__sm-menu--active')
  } else {
    smallMenu.classList.add('header__sm-menu--active')
  }
  if (headerHamMenuBtn.classList.contains('d-none')) {
    headerHamMenuBtn.classList.remove('d-none')
    headerHamMenuCloseBtn.classList.add('d-none')
  } else {
    headerHamMenuBtn.classList.add('d-none')
    headerHamMenuCloseBtn.classList.remove('d-none')
  }
})

for (let i = 0; i < headerSmallMenuLinks.length; i++) {
  headerSmallMenuLinks[i].addEventListener('click', () => {
    smallMenu.classList.remove('header__sm-menu--active')
    headerHamMenuBtn.classList.remove('d-none')
    headerHamMenuCloseBtn.classList.add('d-none')
  })
}

// ---
const headerLogoConatiner = document.querySelector('.header__logo-container')

headerLogoConatiner.addEventListener('click', () => {
  location.href = './index.php'
})


function my$(id) {
  return document.getElementById(id);
}

var box=my$("box");
var inner=box.children[0];
var ulObj=inner.children[0];
var list=ulObj.children;
var olObj=inner.children[1];
var arr=my$("arr");
var imgWidth=inner.offsetWidth;
var right=my$("right");
var pic=0;
//créer les boutons selon le nombre d'éléments
for(var i=0;i<list.length;i++){
  var liObj=document.createElement("li");

  olObj.appendChild(liObj);
  liObj.innerText=(i+1);
  liObj.setAttribute("index",i);

  liObj.onmouseover=function () {
    //Effacer d'abord les styles de tous les boutons
    for (var j=0;j<olObj.children.length;j++){
      olObj.children[j].removeAttribute("class");
    }
    this.className="current";
    pic=this.getAttribute("index");
    animate(ulObj,-pic*imgWidth);
  }
}

//Définir le premier li dans ol pour avoir une couleur d'arrière-plan
olObj.children[0].className = "current";
//Cloner le premier li dans un ul, et l'ajouter au dernier dans ul
ulObj.appendChild(ulObj.children[0].cloneNode(true));

var timeId=setInterval(onmouseclickHandle,2000);
//Mise au point à gauche et à droite pour obtenir la fonction de cliquer pour changer d'image
box.onmouseover=function () {
  arr.style.display="block";
  clearInterval(timeId);
};
box.onmouseout=function () {
  arr.style.display="none";
  timeId=setInterval(onmouseclickHandle,2000);
};

right.onclick=onmouseclickHandle;
function onmouseclickHandle() {
  //Si la valeur de pic est 5, qui se trouve être la valeur du nombre de li dans ul-1, la page affiche la sixième image et l'utilisateur pensera que c'est la première image.
  //Donc, si l'utilisateur clique à nouveau sur le bouton, l'utilisateur devrait voir la deuxième image
  if (pic == list.length - 1) {
    //Comment passer de la 6e image à la première image
    pic = 0;
    ulObj.style.left = 0 + "px";//Rétablir la position de ul à la position par défaut au début
  }
  pic++;//Rendre immédiatement la photo plus 1, puis l'utilisateur verra la deuxième image à ce moment
  animate(ulObj, -pic * imgWidth);//Après pic plus 1, la valeur de pic est 1, puis ul déplace une image
  //Si pic == 5, la sixième image est affichée à ce moment (le contenu est la première image) et le premier petit bouton a une couleur.
  if (pic == list.length - 1) {
    //La couleur de cinquième bouton disparait
    olObj.children[olObj.children.length - 1].className = "";
    //Le premier bouton a la couleur
    olObj.children[0].className = "current";
  } else {
    //Enlever la couleur de fond de tous les petits boutons
    for (var i = 0; i < olObj.children.length; i++) {
      olObj.children[i].removeAttribute("class");
    }
    olObj.children[pic].className = "current";
  }
}
left.onclick=function () {
  if (pic==0){
    pic=list.length-1;
    ulObj.style.left=-pic*imgWidth+"px";
  }
  pic--;
  animate(ulObj,-pic*imgWidth);
  for (var i = 0; i < olObj.children.length; i++) {
    olObj.children[i].removeAttribute("class");
  }
  //couleur du bouton
  olObj.children[pic].className = "current";
};

//Définir n'importe quel élément et se déplacer vers la position ciblée
function animate(element, target) {
  clearInterval(element.timeId);
  //La valeur id de la timer est stockée dans un attribut de l'objet
  element.timeId = setInterval(function () {
    //Obtenir la position actuelle de l'élément
    var current = element.offsetLeft;
    //Distance de déplacement à chaque fois
    var step = 10;
    step = current < target ? step : -step;
    current += step;
    if (Math.abs(current - target) > Math.abs(step)) {
      element.style.left = current + "px";
    } else {
      //Effacer timer
      clearInterval(element.timeId);
      //Aller directement au but
      element.style.left = target + "px";
    }
  }, 10);
}
