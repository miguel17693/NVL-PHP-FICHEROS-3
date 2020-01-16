<?php



// Creamos una función que haga lo preguntado

function modificarArchivo ($archivo){

// si el archivo existe
if (file_exists($archivo)=== true){

//crea la carpeta con la fecha y la hora
mkdir ( date("Y-m-d H.i"));
//copia el archivo dentro con el .modified
$modificado =  date("Y-m-d H.i") . "/$archivo". ".modified" ;
echo "$modificado";
copy("$archivo", "$modificado");
};
};


//llamo a la función
modificarArchivo("el_quijote.txt");
