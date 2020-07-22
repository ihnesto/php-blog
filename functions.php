<?php

function login() {
    echo "/login";
    $form = new Form($login_form);

    if ($form->validate() == true) {
        
        redirect('/');
    } else {
        $twig->render('login.html', [ 'form' => $form]);
    }

}


function register() {
    echo "/register";
}
