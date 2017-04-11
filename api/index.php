<?php 
session_start();
require('vendor/autoload.php');
include('bootstrap.php');

use Establecimientos\Models\Actividad;
use Establecimientos\Models\Autorizacion;
use Establecimientos\Models\Categoria;
use Establecimientos\Models\Categoriavive;
use Establecimientos\Models\Detalledesclub;
use Establecimientos\Models\Estado;
use Establecimientos\Models\Lead;
use Establecimientos\Models\Marca;
use Establecimientos\Models\Promocion;
use Establecimientos\Models\Proyecto;
use Establecimientos\Models\Sucursal;
use Establecimientos\Models\Tipodecomida;
use Establecimientos\Models\Usuario;
use Establecimientos\Models\Zona;

use Establecimientos\Middleware\Logging as EstablecimientosLogging;
use Establecimientos\Middleware\Authentication as EstablecimientosAuth;
use Establecimientos\Middleware\FileFilter;
use Establecimientos\Middleware\FileFilter2;

$app = new \Slim\App();
$app->add(new EstablecimientosLogging());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// LOGIN //////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->post('/login', function ($request, $response, $args) {
    $_user = $request->getParsedBodyParam('usr', '');
    $_pass = md5($request->getParsedBodyParam('psw', ''));
    echo $_user;
    echo $_pass;
    $user = new Usuario();
    $users = $user::where('email', $_user)->where('password', $_pass)->get();
    print_r($users[0]->id);
    if($users->count() >= 1){
    	$_SESSION['aut'] = true;
    	$_SESSION['email'] = $users[0]->email;
    	$_SESSION['id'] = $users[0]->id;
        return $response->withStatus(200)->withHeader('Location', '../inicio.php');
    }else{
    	return $response->withStatus(401)->withHeader('Location', '../index.php?m='.base64_encode('No autorizado'));
    }
});


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// CATEGORÍAS /////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/categorias', function($request, $response, $args){
	$_categoria = new Categoria();
	$categorias = $_categoria->all();

	$payload = [];
	foreach($categorias as $cat){
		array_push($payload, $cat);
	}
	return $response->withStatus(200)->withJson($payload);
});
$app->get('/categorias/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_categoria = new Categoria();
	$categorias = $_categoria->find($_id);
	if(!empty($categorias)){
       	return $response->withStatus(200)->withJson($categorias);
	}else{
		return $response->withStatus(404);
	}
});
$app->post('/insert/categorias', function($request, $response, $args){
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$categoria = new Categoria();
	$categoria->nombre = $_nombre;
    $categoria->save();
    if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../categorias.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());
$app->post('/update/categorias', function($request, $response, $args){
	$_id = $request->getParsedBodyParam('id', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$categoria = Categoria::find($_id);
	$categoria->nombre = $_nombre;
    $categoria->save();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../editar-categorias.php?id='.$_id );
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());

$app->get('/delete/categorias/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$categoria = Categoria::find($_id);
	$categoria->delete();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../../categorias.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// CATEGORÍASVIVE /////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/categoriasvive', function($request, $response, $args){
	$_categoria = new Categoriavive();
	$categorias = $_categoria->all();

	$payload = [];
	foreach($categorias as $cat){
		array_push($payload, $cat);
	}
	return $response->withStatus(200)->withJson($payload);
});
$app->get('/categoriasvive/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_categoria = new Categoriavive();
	$categorias = $_categoria->find($_id);
	if(!empty($categorias)){
       	return $response->withStatus(200)->withJson($categorias);
	}else{
		return $response->withStatus(404);
	}
});
$app->post('/insert/categoriasvive', function($request, $response, $args){
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$categoria = new Categoriavive();
	$categoria->nombre = $_nombre;
    $categoria->save();
    if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../categoriasvive.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());
$app->post('/update/categoriasvive', function($request, $response, $args){
	$_id = $request->getParsedBodyParam('id', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$categoria = Categoriavive::find($_id);
	$categoria->nombre = $_nombre;
    $categoria->save();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../editar-categoriasvive.php?id='.$_id );
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());

$app->get('/delete/categoriasvive/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$categoria = Categoriavive::find($_id);
	$categoria->delete();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../../categoriasvive.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// PROYECTOS //////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/proyectos', function($request, $response, $args){
	$_categoria = new Proyecto();
	$categorias = $_categoria->all();

	$payload = [];
	foreach($categorias as $cat){
		array_push($payload, $cat);
	}
	return $response->withStatus(200)->withJson($payload);
});
$app->get('/proyectos/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_categoria = new Proyecto();
	$categorias = $_categoria->find($_id);
	if(!empty($categorias)){
       	return $response->withStatus(200)->withJson($categorias);
	}else{
		return $response->withStatus(404);
	}
});
$app->post('/insert/proyectos', function($request, $response, $args){
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$categoria = new Proyecto();
	$categoria->nombre = $_nombre;
    $categoria->save();
    if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../proyectos.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());
$app->post('/update/proyectos', function($request, $response, $args){
	$_id = $request->getParsedBodyParam('id', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$categoria = Proyecto::find($_id);
	$categoria->nombre = $_nombre;
    $categoria->save();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../editar-proyectos.php?id='.$_id );
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());

$app->get('/delete/proyectos/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$categoria = Proyecto::find($_id);
	$categoria->delete();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../../proyectos.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// TIPOS DE COMIDA ////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/tiposdecomida', function($request, $response, $args){
	$_categoria = new Tipodecomida();
	$categorias = $_categoria->all();

	$payload = [];
	foreach($categorias as $cat){
		array_push($payload, $cat);
	}
	return $response->withStatus(200)->withJson($payload);
});
$app->get('/tiposdecomida/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_categoria = new Tipodecomida();
	$categorias = $_categoria->find($_id);
	if(!empty($categorias)){
       	return $response->withStatus(200)->withJson($categorias);
	}else{
		return $response->withStatus(404);
	}
});
$app->post('/insert/tiposdecomida', function($request, $response, $args){
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$categoria = new Tipodecomida();
	$categoria->nombre = $_nombre;
    $categoria->save();
    if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../tiposdecomida.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());
$app->post('/update/tiposdecomida', function($request, $response, $args){
	$_id = $request->getParsedBodyParam('id', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$categoria = Tipodecomida::find($_id);
	$categoria->nombre = $_nombre;
    $categoria->save();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../editar-tiposdecomida.php?id='.$_id );
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());

$app->get('/delete/tiposdecomida/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$categoria = Tipodecomida::find($_id);
	$categoria->delete();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../../tiposdecomida.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ZONA////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/zonas', function($request, $response, $args){
	$_categoria = new Zona();
	$categorias = $_categoria->all();

	$payload = [];
	foreach($categorias as $cat){
		array_push($payload, $cat);
	}
	return $response->withStatus(200)->withJson($payload);
});
$app->get('/zonas/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_categoria = new Zona();
	$categorias = $_categoria->find($_id);
	if(!empty($categorias)){
       	return $response->withStatus(200)->withJson($categorias);
	}else{
		return $response->withStatus(404);
	}
});
$app->post('/insert/zonas', function($request, $response, $args){
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$_id_estado = $request->getParsedBodyParam('id_estado', '');
	$categoria = new Zona();
	$categoria->nombre = $_nombre;
	$categoria->id_estado = $_id_estado;
    $categoria->save();
    if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../zonas.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());
$app->post('/update/zonas', function($request, $response, $args){
	$_id = $request->getParsedBodyParam('id', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$_id_estado = $request->getParsedBodyParam('id_estado', '');
	$categoria = Zona::find($_id);
	$categoria->nombre = $_nombre;
	$categoria->id_estado = $_id_estado;
    $categoria->save();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../editar-zonas.php?id='.$_id );
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());

$app->get('/delete/zonas/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$categoria = Zona::find($_id);
	$categoria->delete();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../../zonas.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ESTADOS/////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/estados', function($request, $response, $args){
	$_categoria = new Estado();
	$categorias = $_categoria->all();

	$payload = [];
	foreach($categorias as $cat){
		array_push($payload, $cat);
	}
	return $response->withStatus(200)->withJson($payload);
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// MARCAS /////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/marcas', function($request, $response, $args){
	$_marca = new Marca();
	$marcas = $_marca->all();

	$payload = [];
	foreach($marcas as $m){
		array_push($payload, $m);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->get('/marcasaprobadas', function($request, $response, $args){
	$_marca = new Marca();
	$marcas = $_marca::where('autorizadaLead', true)->get();
	$payload = [];
	foreach($marcas as $m){
		array_push($payload, $m);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->get('/marcassinaprobar', function($request, $response, $args){
	$_marca = new Marca();
	$marcas = $_marca::where('autorizadaLead', false)->get();
	$payload = [];
	foreach($marcas as $m){
		array_push($payload, $m);
	}
	return $response->withStatus(200)->withJson($payload);
});


$app->get('/aprobarmarca/{id_autorizacion}', function($request, $response, $args){
	$_autorizacion = new Autorizacion();
	$_id_autorizacion = $args['id_autorizacion'];
	$autorizacion = $_autorizacion->find($_id_autorizacion);
	$_id_marca = $autorizacion->id_marca;
	$autorizacion->delete();
	$_marca = new Marca();
	$marcas = $_marca->find($_id_marca);
	$marcas->autorizadaLead = true;
	$marcas->save();
	return $response->withStatus(302)->withHeader('Location', '../../leads.php');
});

$app->get('/marcas/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_marca = new Marca();
	$marcas = $_marca->find($_id);
	if(!empty($marcas)){
       	return $response->withStatus(200)->withJson($marcas);
	}else{
		return $response->withStatus(404);
	}
});


$filter = new FileFilter();
$app->post('/insert/marcas', function($request, $response, $args){
	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['imagen'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/".$uploadFilename);
		$imagepath = "assets/images/".$uploadFilename;
	}

	$imagepath2 = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['logoDesclub'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/".$uploadFilename);
		$imagepath2 = "assets/images/".$uploadFilename;
	}

	$_nombre = $request->getParsedBodyParam('nombre', '');
	$_web = $request->getParsedBodyParam('web', '');
	$_resena = $request->getParsedBodyParam('resena', '');
	$_extracto = $request->getParsedBodyParam('extracto', '');
	$_imagen = $request->getParsedBodyParam('imagen', '');
	$_autor = $request->getParsedBodyParam('autor', '');
	$_friendlyUrl = $request->getParsedBodyParam('friendlyUrl', '');
	$_especial = $request->getParsedBodyParam('especial', '');
	$_vimeo = $request->getParsedBodyParam('vimeo', '');
	$_logoDesclub = $request->getParsedBodyParam('logoDesclub', '');
	$_autorizadaLead = $request->getParsedBodyParam('autorizadaLead', '');
	$_id_categoria = $request->getParsedBodyParam('id_categoria', '');
	$_id_categoria_vive = $request->getParsedBodyParam('id_categoria_vive', '');
	$_id_proyecto = $request->getParsedBodyParam('id_proyecto', '');
	$_id_tipoDeComida = $request->getParsedBodyParam('id_tipoDeComida', '');
	$marca = new Marca();
	$marca->nombre = $_nombre;
	$marca->web=$_web;
	$marca->resena=$_resena;
	$marca->extracto=$_extracto;
	$marca->imagen=$imagepath;
	$marca->autor=$_autor;
	$marca->friendlyUrl=$_friendlyUrl;
	$marca->especial=$_especial;
	$marca->vimeo=$_vimeo;
	$marca->logoDesclub=$imagepath2;
	$marca->autorizadaLead=$_autorizadaLead;
	$marca->id_categoria=$_id_categoria;
	$marca->id_categoria_vive=$_id_categoria_vive;
	$marca->id_proyecto=$_id_proyecto;
	$marca->id_tipoDeComida=$_id_tipoDeComida;
	$marca->save();
    if ($marca->id) {
        return $response->withStatus(302)->withHeader('Location', '../../marcas.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth())->add($filter);


$app->post('/update/marcas', function($request, $response, $args){
	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['imagen'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/".$uploadFilename);
		$imagepath = "assets/images/".$uploadFilename;
	}
	$imagepath2 = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['logoDesclub'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/".$uploadFilename);
		$imagepath2 = "assets/images/".$uploadFilename;
	}

	$_id = $request->getParsedBodyParam('id', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$_web = $request->getParsedBodyParam('web', '');
	$_resena = $request->getParsedBodyParam('resena', '');
	$_extracto = $request->getParsedBodyParam('extracto', '');
	$_imagen = $request->getParsedBodyParam('imagen', '');
	$_autor = $request->getParsedBodyParam('autor', '');
	$_friendlyUrl = $request->getParsedBodyParam('friendlyUrl', '');
	$_especial = $request->getParsedBodyParam('especial', '');
	$_vimeo = $request->getParsedBodyParam('vimeo', '');
	$_logoDesclub = $request->getParsedBodyParam('logoDesclub', '');
	$_autorizadaLead = $request->getParsedBodyParam('autorizadaLead', '');
	$_id_categoria = $request->getParsedBodyParam('id_categoria', '');
	$_id_categoria_vive = $request->getParsedBodyParam('id_categoria_vive', '');
	$_id_proyecto = $request->getParsedBodyParam('id_proyecto', '');
	$_id_tipoDeComida = $request->getParsedBodyParam('id_tipoDeComida', '');
	$marca = Marca::find($_id);
	$marca->nombre = $_nombre;
	$marca->web=$_web;
	$marca->resena=$_resena;
	$marca->extracto=$_extracto;
	if(!empty($imagepath)){
	$marca->imagen=$imagepath;
	}
	$marca->autor=$_autor;
	$marca->friendlyUrl=$_friendlyUrl;
	$marca->especial=$_especial;
	$marca->vimeo=$_vimeo;
	if(!empty($imagepath2)){
	$marca->logoDesclub=$imagepath2;
	}
	$marca->autorizadaLead=$_autorizadaLead;
	$marca->id_categoria=$_id_categoria;
	$marca->id_categoria_vive=$_id_categoria_vive;
	$marca->id_proyecto=$_id_proyecto;
	$marca->id_tipoDeComida=$_id_tipoDeComida;
	$marca->save();
    if ($marca->id) {
        return $response->withStatus(302)->withHeader('Location', '../../editar-marcas.php?id='.$marca->id);
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth())->add($filter);

$app->get('/delete/marcas/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$categoria = Marca::find($_id);
	$categoria->delete();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../../marcas.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// SUCURSALES /////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/sucursales', function($request, $response, $args){
	$_marca = new Sucursal();
	$marcas = $_marca->all();

	$payload = [];
	foreach($marcas as $m){
		array_push($payload, $m);
	}
	return $response->withStatus(200)->withJson($payload);
	
});
$app->get('/sucursales/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_marca = new Sucursal();
	$marcas = $_marca->find($_id);
	if(!empty($marcas)){
       	return $response->withStatus(200)->withJson($marcas);
	}else{
		return $response->withStatus(404);
	}
});

$app->get('/sucursales_pormarca/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_marca = new Sucursal();
	$marcas = $_marca::where('id_marca',$_id)->get();
	if(!empty($marcas)){
       	return $response->withStatus(200)->withJson($marcas);
	}else{
		return $response->withStatus(404);
	}
});


$filter = new FileFilter2();
$app->post('/insert/sucursales', function($request, $response, $args){
	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['fachada'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/".$uploadFilename);
		$imagepath = "assets/images/".$uploadFilename;
	}
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$_telefono = $request->getParsedBodyParam('telefono', '');
	$_latitud = $request->getParsedBodyParam('latitud', '');
	$_longitud = $request->getParsedBodyParam('longitud', '');
	$_calle = $request->getParsedBodyParam('calle', '');
	$_no_ext = $request->getParsedBodyParam('no_ext', '');
	$_no_int = $request->getParsedBodyParam('no_int', '');
	$_horarios = $request->getParsedBodyParam('horarios', '');
	$_fachada = $request->getParsedBodyParam('fachada', '');
	$_id_estado = $request->getParsedBodyParam('id_estado', '');
	$_id_zona = $request->getParsedBodyParam('id_zona', '');
	$_restorando = $request->getParsedBodyParam('restorando', '');
	$_restaurantes = $request->getParsedBodyParam('restaurantes', '');
	
	$sucursal = new Sucursal();
	$sucursal->id_marca = $_id_marca;
	$sucursal->nombre = $_nombre;
	$sucursal->telefono = $_telefono;
	$sucursal->latitud = $_latitud;
	$sucursal->longitud = $_longitud;
	$sucursal->calle = $_calle;
	$sucursal->no_ext = $_no_ext;
	$sucursal->no_int = $_no_int;
	$sucursal->horarios = $_horarios;
	$sucursal->fachada = $imagepath;
	$sucursal->id_estado = $_id_estado;
	$sucursal->id_zona = $_id_zona;
	$sucursal->restorando = $_restorando;
	$sucursal->restaurantes = $_restaurantes;
	
	$sucursal->save();

    if ($sucursal->id) {
        return $response->withStatus(302)->withHeader('Location', '../../sucursales.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth())->add($filter);

$app->get('/delete/sucursales/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$categoria = Sucursal::find($_id);
	$categoria->delete();
     if ($categoria->id) {
        return $response->withStatus(302)->withHeader('Location', '../../../sucursales.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());


$app->post('/update/sucursales', function($request, $response, $args){

	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['fachada'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/".$uploadFilename);
		$imagepath = "assets/images/".$uploadFilename;
	}
	$_id = $request->getParsedBodyParam('id', '');
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$_telefono = $request->getParsedBodyParam('telefono', '');
	$_latitud = $request->getParsedBodyParam('latitud', '');
	$_longitud = $request->getParsedBodyParam('longitud', '');
	$_calle = $request->getParsedBodyParam('calle', '');
	$_no_ext = $request->getParsedBodyParam('no_ext', '');
	$_no_int = $request->getParsedBodyParam('no_int', '');
	$_horarios = $request->getParsedBodyParam('horarios', '');
	$_fachada = $request->getParsedBodyParam('fachada', '');
	$_id_estado = $request->getParsedBodyParam('id_estado', '');
	$_id_zona = $request->getParsedBodyParam('id_zona', '');
	$_restorando = $request->getParsedBodyParam('restorando', '');
	$_restaurantes = $request->getParsedBodyParam('restaurantes', '');
	$sucursal = Sucursal::find($_id);
	$sucursal->id_marca = $_id_marca;
	$sucursal->nombre = $_nombre;
	$sucursal->telefono = $_telefono;
	$sucursal->latitud = $_latitud;
	$sucursal->longitud = $_longitud;
	$sucursal->calle = $_calle;
	$sucursal->no_ext = $_no_ext;
	$sucursal->no_int = $_no_int;
	$sucursal->horarios = $_horarios;
	if(!empty($imagepath)){
	$sucursal->fachada = $imagepath;
	}
	$sucursal->id_estado = $_id_estado;
	$sucursal->id_zona = $_id_zona;
	$sucursal->restorando = $_restorando;
	$sucursal->restaurantes = $_restaurantes;
	
	$sucursal->save();

    if ($sucursal->id) {
        return $response->withStatus(302)->withHeader('Location', '../../editar-sucursales.php?id='.$sucursal->id);
    } else {
        return $response->withStatus(400);
    }

})->add(new EstablecimientosAuth());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Autorizaciones /////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/autorizaciones/{id_usuario}', function($request, $response, $args){
	$_id_usuario = $args['id_usuario'];
	$_autorizacion = new Autorizacion();
	$autorizaciones = $_autorizacion::where('id_usuario',$_id_usuario)->get();
	
	$payload = [];
	foreach($autorizaciones as $a){
		$_marca = new Marca();
		$marca = $_marca->find($a->id_marca);

		$_usuario = new Usuario();
		$usuario = $_usuario::select('id','email')->find($a->id_usuario);
		$array = array(
			'id'=>$a->id,
			'marca' => $marca,
			'id_usuario' => $a->id_usuario,
			'usuario' => $usuario
		);
		//print_r($marca->nombre);
		array_push($payload, $array);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->get('/autorizaciones', function($request, $response, $args){
	$_autorizacion = new Autorizacion();
	$autorizaciones = $_autorizacion->all();
	$payload = [];
	foreach($autorizaciones as $a){
		$_marca = new Marca();
		$marca = $_marca->find($a->id_marca);

		$_usuario = new Usuario();
		$usuario = $_usuario::select('id','email')->find($a->id_usuario);
		$array = array(
			'id'=>$a->id,
			'marca' => $marca,
			'id_usuario' => $a->id_usuario,
			'usuario' => $usuario
		);
		//print_r($marca->nombre);
		array_push($payload, $array);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->post('/insert/autorizacion', function($request, $response, $args){
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_id_usuario = $request->getParsedBodyParam('id_usuario', '');
	$autorizacion = new Autorizacion();
	$autorizacion->id_marca = $_id_marca;
	$autorizacion->id_usuario = $_id_usuario;
    $autorizacion->save();
    if ($autorizacion->id) {
        return $response->withStatus(302)->withHeader('Location', '../../autorizaciones.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Leads //////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/leads', function($request, $response, $args){
	$_lead = new Lead();
	$leads = $_lead->all();
	$payload = [];
	foreach($leads as $l){
		$_marca = new Marca();
		$marca = $_marca->find($l->id_marca);
		$_usuario = new Usuario();
		$usuario = $_usuario::select('id','email')->find($l->id_usuario);
		$array = array(
			'id'=>$l->id,
			'nombre'=>$l->nombre,
			'marca' => $marca,
			'no_sucursales' => $l->numero_sucursales,
			'status' => $l->status,
			'usuario' => $usuario,
			'tiene_contacto'=>$l->tiene_contacto,
			'tiene_registro'=>$l->tiene_registro,
			'created_at' => $l->created_at,
			'updated_at' => $l->updated_at
		);
		array_push($payload, $array);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->get('/leadssinfinalizar', function($request, $response, $args){
	$_lead = new Lead();
	$leads = $_lead::where('status','<>', '9')->get();
	$payload = [];
	foreach($leads as $l){
		$_marca = new Marca();
		$marca = $_marca->find($l->id_marca);
		$_usuario = new Usuario();
		$usuario = $_usuario::select('id','email')->find($l->id_usuario);
		$array = array(
			'id'=>$l->id,
			'nombre'=>$l->nombre,
			'marca' => $marca,
			'no_sucursales' => $l->numero_sucursales,
			'status' => $l->status,
			'usuario' => $usuario,
			'tiene_contacto'=>$l->tiene_contacto,
			'tiene_registro'=>$l->tiene_registro,
			'created_at' => $l->created_at,
			'updated_at' => $l->updated_at
		);
		array_push($payload, $array);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->get('/leadsfinalizados', function($request, $response, $args){
	$_lead = new Lead();
	$leads = $_lead::where('status', '9')->get();
	$payload = [];
	foreach($leads as $l){
		$_marca = new Marca();
		$marca = $_marca->find($l->id_marca);
		$_usuario = new Usuario();
		$usuario = $_usuario::select('id','email')->find($l->id_usuario);
		$array = array(
			'id'=>$l->id,
			'nombre'=>$l->nombre,
			'marca' => $marca,
			'no_sucursales' => $l->numero_sucursales,
			'status' => $l->status,
			'usuario' => $usuario,
			'tiene_contacto'=>$l->tiene_contacto,
			'tiene_registro'=>$l->tiene_registro,
			'created_at' => $l->created_at,
			'updated_at' => $l->updated_at
		);
		array_push($payload, $array);
	}
	return $response->withStatus(200)->withJson($payload);
});
$app->post('/insert/leads', function($request, $response, $args){
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_id_usuario = $request->getParsedBodyParam('id_usuario', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$_numero_de_sucursales = $request->getParsedBodyParam('numero_de_sucursales', '');

	$lead = new Lead();
	$lead->id_marca = $_id_marca;
	$lead->id_usuario = $_id_usuario;
	$lead->nombre = $_nombre;
	$lead->numero_sucursales = $_numero_de_sucursales;
	$lead->status = '1';
	try {
		$lead->save();
	} catch (Exception $e) {
		return $response->withStatus(302)->withHeader('Location', '../../leads.php?m='.base64_encode('Ya fue registrada esa empresa'));
	}
    /* insertar registro de datos de desclub */
    $detalledesclub = new Detalledesclub();
    $detalledesclub->id_marca = $_id_marca;
    $detalledesclub->id_lead = $lead->id;
    $detalledesclub->save();
    if ($lead->id) {
        return $response->withStatus(302)->withHeader('Location', '../../leads.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());
$app->get('/aprobarlead/{id_lead}', function($request, $response, $args){
	$_lead = new Lead();
	$_id_lead = $args['id_lead'];
	$lead = $_lead->find($_id_lead);
	$lead->status = '3';
	$lead->save();
	return $response->withStatus(302)->withHeader('Location', '../../leads.php');
});
$app->get('/rechazarlead/{id_lead}', function($request, $response, $args){
	$_lead = new Lead();
	$_id_lead = $args['id_lead'];
	$lead = $_lead->find($_id_lead);
	$lead->status = '2';
	$lead->save();
	return $response->withStatus(302)->withHeader('Location', '../../leads.php');
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Actividades sobre lead /////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$app->get('/actividades/{id_lead}', function($request, $response, $args){
	$_actividad = new Actividad();
	$actividades = $_actividad::where('id_lead', $args['id_lead'])->get();
	return $response->withStatus(200)->withJson($actividades);
});


$app->post('/insert/actividades', function($request, $response, $args){
	$_id_lead = $request->getParsedBodyParam('id_lead', '');
	$_que_hice = $request->getParsedBodyParam('que_hice', '');
	$_comentarios = $request->getParsedBodyParam('comentarios', '');
	$_que_hare = $request->getParsedBodyParam('que_hare', '');
	$_fecha_futura = $request->getParsedBodyParam('fecha_futura', '');
	$_hora_futura = $request->getParsedBodyParam('hora_futura', '');
	$_comentarios_futura = $request->getParsedBodyParam('comentarios_futura', '');
	$_status_lead= $request->getParsedBodyParam('status_lead', '');

	$actividad = new Actividad();
	$actividad->id_lead = $_id_lead;
	$actividad->que_hice = $_que_hice;
	$actividad->comentarios = $_comentarios;
	$actividad->que_hare = $_que_hare;
	$actividad->fecha_futura = $_fecha_futura.' '.str_replace(" ","",$_hora_futura);  //2017-04-05 00:00:00
	$actividad->comentarios_futura = $_comentarios_futura;
	$actividad->save();


	$_lead = new Lead();
	$lead = $_lead->find($_id_lead);
	$lead->status = $_status_lead;
	$lead->save();

	if ($actividad->id) {
        return $response->withStatus(302)->withHeader('Location', '../../seguimiento-leads.php');
    } else {
        return $response->withStatus(400);
    }

})->add(new EstablecimientosAuth());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// DETALLES DESCLUB ///////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/detallesdesclub/{id_marca}', function($request, $response, $args){
	$_detallesdesclub = new Detalledesclub();
	$detalles = $_detallesdesclub::where('id_marca', $args['id_marca'])->get();
	return $response->withStatus(200)->withJson($detalles);
});

$app->post('/detallesdesclub', function($request, $response, $args){
	$_id_lead = $request->getParsedBodyParam('id_lead', '');
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_razon_social = $request->getParsedBodyParam('razon_social', '');
	$_rfc = $request->getParsedBodyParam('rfc', '');
	$_contacto = $request->getParsedBodyParam('contacto', '');
	$_puesto = $request->getParsedBodyParam('puesto', '');
	$_tel1 = $request->getParsedBodyParam('tel1', '');
	$_tel2 = $request->getParsedBodyParam('tel2', '');
	$_email = $request->getParsedBodyParam('email', '');

	// REGISTRO 
	$_calle = $request->getParsedBodyParam('calle', '');
	$_no_exterior = $request->getParsedBodyParam('no_exterior', '');
	$_no_interior = $request->getParsedBodyParam('no_interior', '');
	$_referencia = $request->getParsedBodyParam('referencia', '');
	$_latitud = $request->getParsedBodyParam('latitud', '');
	$_longitud = $request->getParsedBodyParam('longitud', '');
	$_tiene_actividad_calidad = $request->getParsedBodyParam('tiene_actividad_calidad', '');
	$_actividad_de_calidad = $request->getParsedBodyParam('actividad_de_calidad', '');
	$_es_celular_1 = $request->getParsedBodyParam('es_celular_1', '');
	$_es_celular_2 = $request->getParsedBodyParam('es_celular_2', '');
	$_comentarios = $request->getParsedBodyParam('comentarios', '');
	


	$_detallesdesclub = new Detalledesclub();
	$detalles = $_detallesdesclub::where('id_marca', $_id_marca )->where('id_lead', $_id_lead)->get();
	$detalles[0]->razon_social = $_razon_social;
	$detalles[0]->RFC = $_rfc;
	$detalles[0]->contacto = $_contacto;
	$detalles[0]->puesto = $_puesto;
	$detalles[0]->telefono_1 = $_tel1;
	$detalles[0]->telefono_2 = $_tel2;
	$detalles[0]->email = $_email;

	//REGISTROç

	$detalles[0]->es_celular_1 = $_es_celular_1;
	$detalles[0]->es_celular_2 = $_es_celular_2;
	$detalles[0]->calle = $_calle;
	$detalles[0]->no_exterior = $_no_exterior;
	$detalles[0]->no_interior = $_no_interior;
	$detalles[0]->referencia = $_referencia;
	$detalles[0]->latitud = $_latitud;
	$detalles[0]->longitud = $_longitud;
	$detalles[0]->tiene_actividad_calidad = $_tiene_actividad_calidad;
	$detalles[0]->actividad_de_calidad = $_actividad_de_calidad;
	$detalles[0]->comentarios = $_comentarios;


	$detalles[0]->save();
	if(!empty($_razon_social) and !empty($_rfc) and !empty($_contacto) and !empty($_puesto) and !empty($_tel1) and !empty($_tel2) and !empty($_email)){
		$_lead = new Lead();
		$lead = $_lead->find($_id_lead);
		$lead->tiene_contacto = true;
		$lead->save();
	}
	return $response->withStatus(302)->withHeader('Location', '../seguimiento-leads.php');
})->add(new EstablecimientosAuth());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// PROMOCIÓN //////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->post('/insert/promocion', function($request, $response, $args){
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_id_proyecto = $request->getParsedBodyParam('id_proyecto', '');
	$_efectivo = $request->getParsedBodyParam('efectivo', '');
	$_tarjeta = $request->getParsedBodyParam('tarjeta', '');
	$_promo = $request->getParsedBodyParam('promo', '');
	$_detalle_promo = $request->getParsedBodyParam('detalle_promo', '');
	$_restricciones = $request->getParsedBodyParam('restricciones', '');
	$_fecha_inicio = $request->getParsedBodyParam('fecha_inicio', '');
	$_fecha_fin = $request->getParsedBodyParam('fecha_fin', '');
	$promocion = new Promocion();
	$promocion->id_marca = $_id_marca;
	$promocion->id_proyecto = $_id_proyecto;
	$promocion->efectivo = $_efectivo;
	$promocion->tarjeta = $_tarjeta;
	$promocion->promo = $_promo;;
	$promocion->detalle_promocion = $_detalle_promo;
	$promocion->restricciones = $_restricciones;
	$promocion->inicio_actividades = $_fecha_inicio;
	$promocion->fin_actividades = $_fecha_fin;
	try {
		$promocion->save();
		if ($promocion->id) {
	        return $response->withStatus(302)->withHeader('Location', '../../editar-promocion.php?id='.$_id_marca);
	    } else {
	        return $response->withStatus(400);
	    }
	} catch (Exception $e) {
		return $response->withStatus(302)->withHeader('Location', '../../editar-promocion.php?id='.$_id_marca.'m='.base64_encode('Error: Ya fue registrada esa promoción con ese proyecto'));
	}
    $promocion->save();
    
})->add(new EstablecimientosAuth());

$app->get('/promociones/{id_marca}', function($request, $response, $args){
	$_promociones = new Promocion();
	$promociones = $_promociones::where('id_marca', $args['id_marca'])->get();
	$payload = array();
	foreach($promociones as $p){
		$marca = new Marca();
		$marca = $marca::select('id','nombre')->find($args['id_marca']);

		$proyecto = new Proyecto();
		$proyecto = $proyecto::select('id','nombre')->find($p->id_proyecto);
		$valor = array(
			'id' => $p->id,
			'marca' => $marca,
			'proyecto' => $proyecto,
			'efectivo' => $p->efectivo,
			'tarjeta' => $p->tarjeta,
			'promo' => $p->promo,
			'detalle_promo' => $p->detalle_promocion,
			'restricciones' => $p->inicio_actividades,
			'inicio_actividades' => $p->inicio_actividades,
			'fin_actividades' => $p->fin_actividades
		);
		array_push($payload, $valor);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->run();

?>