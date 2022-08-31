<?php

/*Copyright (C) 2019 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3. 
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO ARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/-*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola', function () {
    echo "Hola. Primer ejemplo Laravel";;
});

Route::get('user/{nombre}', function($nombre) {
    return "Ud se logueo como " . $nombre;
});

Route::get('usuario/{nombre?}', function($nombre = 'Invitado') {
    return "Ud se logueo como " . $nombre;
});

Route::get('contactanos', function(){
	return "Sección de contactos";
})->name('contacto');

Route::get('ayuda', function(){
	echo "<a href='" . route('contacto') . "'> Ayuda 1 </a><br>";
	echo "<a href='" . route('contacto') . "'> Ayuda 2 </a><br>";
	echo "<a href='" . route('contacto') . "'> Ayuda 3 </a><br>";
	echo "<a href='" . route('contacto') . "'> Ayuda 4 </a><br>";
});

Route::fallback(function () {
	return redirect('/');
});

Route::get('home', function () {
    return view('home', array('nombre' => 'Matias'));

});
