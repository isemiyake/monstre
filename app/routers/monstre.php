<?php

use App\Controllers\MonstreController;

include '../app/controllers/monstreController.php';
switch ($_GET['monstre']):
    case 'show':
        MonstreController\showAction($connexion, $_GET['id']);
        break;
    default:
        MonstreController\monstreAction($connexion);

        //action monstre
        break;
endswitch;
