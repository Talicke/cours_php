// récuperer les élement HTML

const nom = document.querySelector('#nom');
const prenom = document.querySelector('#prenom');
const mail = document.querySelector('#mail');
const password = document.querySelector('#password');


function setValueImput(getnom, getprenom, getmail, getpassword) {
    nom.value = getnom;
    prenom.value = getprenom;
    mail.value = getmail;
    password.value = getpassword;
}