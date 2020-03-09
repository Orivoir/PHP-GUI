<?php

# copy content bin/console.php <=> bin/console

$pathconsole = __DIR__ . '\\console.php' ;

$pathBinConsole = __DIR__ . '\\console' ;

if( file_exists( $pathconsole ) ) {

    if( file_exists( $pathBinConsole ) ) {

        unlink( $pathBinConsole ) ;
    }

    $fBinConsole = fopen( $pathBinConsole , 'a' ) ;

    fwrite( $fBinConsole , file_get_contents( $pathconsole ) ) ;

    fclose( $fBinConsole ) ;

    echo "\n\ttransfer to bin/console success\n\n" ;

} else {

    echo 'not exists' ;

}