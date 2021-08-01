<?php
if(!function_exists('onglet_active')){
    function onglet_active(string $lien, string $titre):string
    {
        $classe='nav-link';

        if(basename($_SERVER['SCRIPT_NAME'])===$lien){
            $classe.=' active';
        };

        return '<li class="nav-item">
            <a class="'.$classe.'" aria-current="page" href="'.$lien.'">'.$titre.'</a>
        </li>';
    };
}

?>