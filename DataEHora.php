<?php

Class DataEHora
{
    public static function metodo()
    {
        date_default_timezone_set("America/Sao_Paulo"); // Define o fuso horário para o Brasil
        echo "###########################\n -- ".date("d/m/Y H:i:s")." -- \n###########################\n"; // Exibe no formato: 00/00/0000 00:00:00
    }
}
