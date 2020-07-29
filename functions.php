<?php

require __BLOG_WORK_DIR__ . '/inc/form/Form.php';

function home() {


}

function login() {
    
    global $twig;

    echo "/login";
    $form = new Form("login");
    //var_dump($form->getForm());
    if ($form->validate() == True) {
        $router->redirect('/');
    } else {
        echo $twig->render('login.html', ['form' => $form->getForm()] );
    }
        

    // $form = new Form($login_form);

    // if ($form->validate() == true) {
        
    //     redirect('/');
    // } else {
    //     $twig->render('login.html', [ 'form' => $form]);
    // }

}


function register() {
    echo "/register";
}
