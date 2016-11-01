//MENU HAMBURGER

var bouton = $('#burger'); /*menu hamburger*/
var body = $('body');
var lien = $('#mainMenu a');

bouton.click(function (ev) { //apparition menu
    body.toggleClass('burger');
    ev.preventDefault();
});

lien.click(function (ev) {
    body.toggleClass('burger');
});

//flickity

$('.carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  draggable: false,
  initialIndex: 2
});


//formulaire
var exp = /[a-z]+/;
var expMail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var $nom = $('#nom');
var $prenom = $('#prenom');
var $mail = $('#email');
var $objet = $('#objet');
var $message = $('#message');

function verifNom() {
	if($(this).val().length >=3 && $(this).val().length <=14 && exp.test($(this).val())===true) {
		$(this).addClass('right');
		$(this).removeClass('error');
	} else {
		$(this).addClass('error');
		$(this).removeClass('right');
	}
}

function verifMail() {
	if(expMail.test($mail.val())===true) {
		$(this).addClass('right');
		$(this).removeClass('error');
	} else {
		$(this).addClass('error');
		$(this).removeClass('right');
	}
}

function verifObjet() {
	if($objet.val() !== null) {
		$(this).addClass('right');
		$(this).removeClass('error');
	} else {
		$(this).addClass('error');
		$(this).removeClass('right');
	}
}

function corpsMail() {
    var restant =  400 - $message.val().length;
    
   $('#messageLabel').html("Corps du message : " + restant + " caractère(s) restant(s)") ;
}

$('document').ready(function() {
	$nom.keypress(verifNom);
	$prenom.keypress(verifNom);
	$mail.keypress(verifMail);
	$objet.keypress(verifObjet);
	$message.keypress(corpsMail);
});