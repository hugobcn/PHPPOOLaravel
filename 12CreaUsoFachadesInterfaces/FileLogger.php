<?php

namespace Styde;

class FileLogger implements Logger
{
    public function info($message)
    {
        file_put_contents(
            __DIR__.'/../storage/log.txt',
            '('.date('Y-m-d H:i:s').') '.$message."\n",
            FILE_APPEND
        );
    }
}

/*
 * FILE_APPEND
 *  Esta función es idéntica que llamar a fopen(), fwrite() y fclose() sucesivamente para escribir información en un fichero.

    Si filename no existe, se crea el fichero. De otro modo, el fichero existente se sobrescribe, a menos que la bandera FILE_APPEND esté establecida. 
 */

