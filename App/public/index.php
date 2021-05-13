<?php

switch ($_SERVER['PATH-INFO']) :
    case '/form-cadastro':
        require 'form-cadastro.html';
        break;
    default:
        echo 'NOT FOUND, CABRON!';
endswitch;
