<?php
$login_form = [ 'name' => 'login', 
  'form' => [
    0 => [
        'tag' => '<input type="text" name="user_email">',
        'label' => 'Email',
        'value' => '',
        'validators' => [' noempty'],
        'is_error' => false,
        'msg_error' => 'You must enter valid email'
    ],
    1 => [
        'tag' => '<input type="password" name="user_pass">',
        'label' => 'Password'
    ],
    3 => [
        'tag' => '<input type="checkbox" name="remember">',
        'label' => 'Remember me'
    ],
    4 => [
        'tag' => '<button type="submit" name="submit_login">',
        'label' => 'Remember me'
    ]
  ]
]

