<?php

    function trataNome($nome){

        $nome = strtolower($nome);

        $nome = ucwords($nome);

        return $nome;
    }


?>