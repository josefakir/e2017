<?php 
session_start();
require('vendor/autoload.php');
include('bootstrap.php');
include('../funciones.php');

use Illuminate\Database\Capsule\Manager as Capsule;

use Establecimientos\Models\Actividad;
use Establecimientos\Models\Autorizacion;
use Establecimientos\Models\Categoria;
use Establecimientos\Models\Categoriavive;
use Establecimientos\Models\Detalledesclub;
use Establecimientos\Models\Estado;
use Establecimientos\Models\Etapauno;
use Establecimientos\Models\Etapados;
use Establecimientos\Models\Etapatres;
use Establecimientos\Models\Lead;
use Establecimientos\Models\Llamada;
use Establecimientos\Models\Marca;
use Establecimientos\Models\Mistery;
use Establecimientos\Models\Promocion;
use Establecimientos\Models\Proyecto;
use Establecimientos\Models\Reservacion;
use Establecimientos\Models\Ruta;
use Establecimientos\Models\Seguimiento;
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
    	$_SESSION['rol'] = $users[0]->rol;
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
$app->get('/zonas_estado/{id_estado}', function($request, $response, $args){
	$_id_estado = $args['id_estado'];
	$_categoria = new Zona();
	$categorias = $_categoria->where('id_estado',$_id_estado)->get();
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

$app->get('/marcasiniciooperaciones', function($request, $response, $args){
	$_marca = new Marca();
	$marcas = $_marca::where('inicio_operaciones', true)->get();
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

$app->get('/rechazarmarca/{id_autorizacion}', function($request, $response, $args){
	$_autorizacion = new Autorizacion();
	$_id_autorizacion = $args['id_autorizacion'];
	$autorizacion = $_autorizacion->find($_id_autorizacion);
	$autorizacion->delete();
	return $response->withStatus(302)->withHeader('Location', '../../autorizaciones.php');
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
	$_taxonomias = $request->getParsedBodyParam('taxonomias', '');
	//$_id_proyecto = $request->getParsedBodyParam('id_proyecto', '');
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
	$marca->taxonomias=$_taxonomias;
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
	$_taxonomias = $request->getParsedBodyParam('taxonomias', '');
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
	$marca->taxonomias=$_taxonomias;
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


$app->get('/sucursales_inicio_operaciones', function($request, $response, $args){
	$_marca = new Marca();
	$marcas = $_marca::where('inicio_operaciones',true)->get();
	$payload = [];
	foreach($marcas as $m){
		//print_r($m);
		$_sucursal = new Sucursal();
		$sucursales = $_sucursal::where('geolocalicacion_revisada',false)->where('id_marca',$m->id)->get();
		foreach($sucursales as $s){
			$_estado = new Estado();
			$_estado = $_estado::where('id',$s->id_estado)->get();
			$objeto = array(
				'id_marca' => $m->id,
				'id_sucursal' => $s->id,
				'marca' => $m->nombre,
				'sucursal' => $s->nombre,
				'telefono' => $s->telefono,
				'id_estado' => $s->id_estado,
				'estado' => $_estado[0]->nombre,
				'tuvo_llamada_bienvenida' => $s->tuvo_llamada_bienvenida
			);
			array_push($payload, $objeto);
		}
	}
	return $response->withStatus(200)->withJson($payload);
	
});

/* LAS SUCURSALES PARA CALIDAD SON LAS QUE YA TIENEN LAS BANDERAS GEOLOCALIZACION_REVISADA Y TUVO_LLAMADA_BIENVENIDA EN TRUE TAMBIÉN SE MEZCLAN CON ID_PROYECTO */
$app->get('/sucursales_para_calidad/{id_estado}/{id_zona}/{id_proyecto}/{tipo_ruta}', function($request, $response, $args){
	$_id_estado = $args['id_estado'];
	$_id_zona = $args['id_zona'];
	$_id_proyecto = $args['id_proyecto'];
	$_tipo_ruta = $args['tipo_ruta'];
	
	$sucursales = Capsule::table('marcas')
            ->join('sucursals', 'marcas.id', '=', 'sucursals.id_marca')
            ->join('promocions', 'marcas.id', '=', 'promocions.id_marca')
            ->join('proyectos', 'proyectos.id', '=', 'promocions.id_proyecto')
            ->select("marcas.id as id_marca",
				"marcas.nombre  as marca",
				"sucursals.id  as id_sucursal",
				"sucursals.nombre as sucursal",
				"promocions.efectivo", 
				"promocions.tarjeta", 
				"promocions.promo", 
				"promocions.restricciones",
				"proyectos.id  as id_proyecto",
				"proyectos.nombre  as proyecto",
				"sucursals.tuvo_llamada_bienvenida",
				"sucursals.geolocalicacion_revisada",
				"sucursals.id_estado",
				"sucursals.id_zona"
	)->where('promocions.id_proyecto',$_id_proyecto)->where('sucursals.id_estado',$_id_estado)->where('sucursals.id_zona',$_id_zona)->where('marcas.importancia',$_tipo_ruta)->get();
    return $response->withStatus(200)->withJson($sucursales);
});


$app->get('/ruta_calidad/{id_ruta}', function($request, $response, $args){
	$_id_ruta = $args['id_ruta'];
	$ruta = new Ruta();
	$ruta = $ruta->find($_id_ruta);
	$_id_sucursal = $ruta->id_sucursal;
	$sucursal = new Sucursal();
	$sucursal = $sucursal->find($_id_sucursal);
	$_referencia = $sucursal->referencia;
	$_id_marca = $sucursal->id_marca;
	$promocion = new Promocion();
	$payload = [];
	$promociones = $promocion::where('id_marca',$_id_marca)->get();
	//echo "<pre>";
	foreach($promociones as $p){
		$proyecto = new Proyecto();
		$proyecto = $proyecto->find($p->id_proyecto);
		$array = array (
			'efectivo' => $p->efectivo,
			'tarjeta' => $p->tarjeta,
			'promo' => $p->promo,
			'restricciones' => $p->restricciones,
			'inicio_actividades' => $p->inicio_actividades,
			'fin_actividades' => $p->fin_actividades,
			'referencia' => $_referencia,
			'proyecto' => $proyecto
		);
		array_push($payload, $array);
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
	$_referencia = $request->getParsedBodyParam('referencia', '');
	$_calle = $request->getParsedBodyParam('calle', '');
	$_colonia = $request->getParsedBodyParam('colonia', '');
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
	$sucursal->referencia = $_referencia;
	$sucursal->calle = $_calle;
	$sucursal->colonia = $_colonia;
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
	$_colonia = $request->getParsedBodyParam('colonia', '');
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
	$sucursal->colonia = $_colonia;
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
	$leads = $_lead::where('status','=', '1')->get();
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
			'inicio_operaciones'=>$l->inicio_operaciones,
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
			'inicio_operaciones'=>$l->inicio_operaciones,
			'created_at' => $l->created_at,
			'updated_at' => $l->updated_at
		);
		array_push($payload, $array);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->get('/leadsfinalizados', function($request, $response, $args){
	$_lead = new Lead();
	$leads = $_lead::where('status', '9')->where('inicio_operaciones',0)->get();
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
			'inicio_operaciones'=>$l->inicio_operaciones,
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
$app->post('/update/aprobarlead', function($request, $response, $args){
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_id_categoria = $request->getParsedBodyParam('id_categoria', '');
	$_importancia = $request->getParsedBodyParam('importancia', '');
	$_presencia = $request->getParsedBodyParam('presencia', '');
	$_comentarios = $request->getParsedBodyParam('comentarios', '');
	$_id_lead = $request->getParsedBodyParam('id_lead', '');
	$marca = new Marca();
	$marca = $marca->find($_id_marca);
	$marca->importancia = $_importancia;
	$marca->presencia = $_presencia;
	$marca->comentarios = $_comentarios;
	$marca->save();


	$_lead = new Lead();
	$lead = $_lead->find($_id_lead);
	$lead->status = '3';
	$lead->save();

	return $response->withStatus(302)->withHeader('Location', '../../leads.php');
})->add(new EstablecimientosAuth());

$app->post('/update/rechazarlead', function($request, $response, $args){

	$_comentarios = $request->getParsedBodyParam('comentarios', '');
	$_id_lead = $request->getParsedBodyParam('id_lead', '');
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_motivo = $request->getParsedBodyParam('motivo', '');
	$_lead = new Lead();
	$lead = $_lead->find($_id_lead);
	$lead->status = '2';
	$lead->save();
	$marca = new Marca();
	$marca = $marca->find($_id_marca);
	$nombremarca = $marca->nombre;
	// PARA USUARIO
		$from = new SendGrid\Email(null, "CRM@desclub.com.mx");
		$subject = "Lead Rechazado";
		$to = new SendGrid\Email(null, 'antonio.becerra@grupomedios.com');
		$nombremarca = new Marca();
		$nombremarca = $nombremarca->find($_id_marca);
		$nombremarca = $nombremarca->nombre;
		$content = new SendGrid\Content("text/html", "
			<h1>Hola, tu lead ha sido rechazado</h1>
			<p>La marca es: <strong>$nombremarca</strong> </p>
			<p>El motivo es: <strong>$_motivo</strong></p>
			<p>Comentarios: <strong>$_comentarios</strong></p>
		");
		$mail = new SendGrid\Mail($from, $subject, $to, $content);
		$apiKey = ('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');
		$sg = new \SendGrid($apiKey);
		$sg->client->mail()->send()->post($mail);
	return $response->withStatus(302)->withHeader('Location', '../../leads.php');
})->add(new EstablecimientosAuth());


/* 
$_lead = new Lead();
	$_id_lead = $args['id_lead'];
	$lead = $_lead->find($_id_lead);
	$lead->status = '2';
	$lead->save();
	return $response->withStatus(302)->withHeader('Location', '../../leads.php');
*/

$app->get('/rechazarlead/{id_lead}', function($request, $response, $args){
	$_lead = new Lead();
	$_id_lead = $args['id_lead'];
	$lead = $_lead->find($_id_lead);
	$lead->status = '2';
	$lead->save();
	return $response->withStatus(302)->withHeader('Location', '../../leads.php');
});

/* STATUS DE LOS LEADS:

	1) pendiente
	2) rechazado
	3) aprobado sin contacto
	4) contactado
	5) en proceso
	6) Sí le interesa
	7) Afiliado
	8) Finalizado
	9) No interesado
	10) Contacto completo
 	11) Registro completo
 */



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


	$_SESSION['que_hare'] = $_que_hare;
	$_SESSION['comentarios_futura'] = $comentarios_futura;
	$_SESSION['fecha_futura'] = $_fecha_futura." ".str_replace(" ","",$_hora_futura.":00");


    /* GOOGLE API */
    $client = new Google_Client();
	$client->setAuthConfigFile('client_secret.json');  //file downloaded earlier
 	$client->addScope("https://www.googleapis.com/auth/calendar");
 	$auth_url = $client->createAuthUrl();
 	echo '<script>window.location.href = "'.filter_var($auth_url, FILTER_SANITIZE_URL).'";</script>';

})->add(new EstablecimientosAuth());



$app->get('/agendar_google', function($request, $response, $args){
	$client = new Google_Client();
	$client->setAuthConfigFile('client_secret.json');  //file downloaded earlier
	$client->addScope("https://www.googleapis.com/auth/calendar");
	$client->authenticate($_GET['code']);
	$service = new Google_Service_Calendar($client);
	$access_token = $client->getAccessToken();
	$fecha = $_SESSION['fecha_futura'];
	$nuevafecha = strtotime ( '+1 hour' , strtotime ( $fecha ) ) ;
	$nuevafecha = date("Y-m-d H:i:s",$nuevafecha);
	$objDateTime = new DateTime($fecha);
	$fecha = $objDateTime->format(DateTime::ISO8601);
	$objDateTime = new DateTime($nuevafecha);
	$fecha2 = $objDateTime->format(DateTime::ISO8601);
	echo $fecha."<br>".$fecha2;
	$event = new Google_Service_Calendar_Event(array(
	  'summary' => $_SESSION['que_hare'],
	  'description' => $_SESSION['comentarios_futura'],
	  'start' => array(
	    'dateTime' => $fecha,
	    'timeZone' => 'America/Mexico_City',
	  ),
	  'end' => array(
	    'dateTime' => $fecha2,
	    'timeZone' => 'America/Mexico_City',
	  ),
	));
	$calendarId = 'primary';
	$event = $service->events->insert($calendarId, $event);
	return $response->withStatus(302)->withHeader('Location', '../seguimiento-leads.php');
});



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
	$_id_lead = $request->getParsedBodyParam('id_lead', '');
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
	        return $response->withStatus(302)->withHeader('Location', '../../editar-promociones.php?id='.$_id_marca."&id_lead=".$_id_lead);
	    } else {
	        return $response->withStatus(400);
	    }
	} catch (Exception $e) {
		return $response->withStatus(302)->withHeader('Location', '../../editar-promociones.php?id='.$_id_marca."&id_lead=".$_id_lead.'&m='.base64_encode('Error: Ya fue registrada esa promoción con ese proyecto'));
	}
    $promocion->save();
    
})->add(new EstablecimientosAuth());


$app->post('/update/promocion', function($request, $response, $args){
	$_id_promocion = $request->getParsedBodyParam('id_promocion', '');
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_id_lead = $request->getParsedBodyParam('id_lead', '');
	$_id_proyecto = $request->getParsedBodyParam('id_proyecto', '');
	$_efectivo = $request->getParsedBodyParam('efectivo', '');
	$_tarjeta = $request->getParsedBodyParam('tarjeta', '');
	$_promo = $request->getParsedBodyParam('promo', '');
	$_detalle_promo = $request->getParsedBodyParam('detalle_promo', '');
	$_restricciones = $request->getParsedBodyParam('restricciones', '');
	$_fecha_inicio = $request->getParsedBodyParam('fecha_inicio', '');
	$_fecha_fin = $request->getParsedBodyParam('fecha_fin', '');
	$promocion = new Promocion();
	$promocion = $promocion->find($_id_promocion);
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
	        return $response->withStatus(302)->withHeader('Location', '../../editar-promociones.php?id='.$_id_marca.'&id_lead='.$_id_lead);
	    } else {
	        return $response->withStatus(400);
	    }
	} catch (Exception $e) {
		return $response->withStatus(302)->withHeader('Location', '../../editar-promocion.php?id='.$_id_marca.'&id_lead='.$_id_lead.'&m='.base64_encode('Error: Ya fue registrada esa promoción con ese proyecto'));
	}
    $promocion->save();
    
})->add(new EstablecimientosAuth());

$app->get('/delete/promocion/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$promocion = Promocion::find($_id);
	$id_marca = $promocion->id_marca;
	$id_lead = $promocion->id_lead;
	$promocion->delete();
     if ($promocion->id) {
        return $response->withStatus(302)->withHeader('Location', '../../../editar-promociones.php?id='.$id_marca.'&id_lead='.$id_lead);
    } else {
        return $response->withStatus(400);
    }
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

$app->get('/promocion/{id}', function($request, $response, $args){
	$_promociones = new Promocion();
	$promociones = $_promociones::where('id', $args['id'])->get();
	
	return $response->withStatus(200)->withJson($promociones);
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// INICIAR OPERACIONES ////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/iniciar_operaciones/{id_marca}/{id_lead}', function($request, $response, $args){
	$_id_marca = $args['id_marca'];
	$_id_lead = $args['id_lead'];
	$marca = new Marca();
	$marca = $marca->find($_id_marca);
	$marca->inicio_operaciones=1;
	$marca->save();
	$lead = new Lead();
	$lead = $lead->find($_id_lead);
	$lead->inicio_operaciones=1;
	$lead->save();
	return $response->withStatus(302)->withHeader('Location', '../../../marcas-operativas.php');
});


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// LLAMADA BIENVENIDA /////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$app->post('/llamada_bienvenida', function($request, $response, $args){
	$_id_sucursal = $request->getParsedBodyParam('id_sucursal', '');
	$_detalle_llamada = $request->getParsedBodyParam('detalle_llamada', '');
	$_conoce_vb = $request->getParsedBodyParam('conoce_vb', '');
	if($_conoce_vb=="Sí"){
		$_conoce_vb = true;
	}else{
		$_conoce_vb = true;
	}
	$_escala_info = $request->getParsedBodyParam('escala_info', '');
	if($_escala_info=="Sí"){
		$_escala_info = true;
	}else{
		$_escala_info = true;
	}
	$_motivo_desconoce = $request->getParsedBodyParam('motivo_desconoce', '');
	$_reforzo_informacion = $request->getParsedBodyParam('reforzo_informacion', '');
	if($_reforzo_informacion=="Sí"){
		$_reforzo_informacion = true;
	}else{
		$_reforzo_informacion = true;
	}
	$_material_pop = $request->getParsedBodyParam('material_pop', '');
	if($_material_pop=="Sí"){
		$_material_pop = true;
	}else{
		$_material_pop = true;
	}

	$_calcomanias = $request->getParsedBodyParam('calcomanias', '');
	$_acrilicos = $request->getParsedBodyParam('acrilicos', '');
	$_comunicados_desclub = $request->getParsedBodyParam('comunicados_desclub', '');
	$_comunicados_bbva = $request->getParsedBodyParam('comunicados_bbva', '');
	$_reloj_colgante = $request->getParsedBodyParam('reloj_colgante', '');
	$_calcomanias_desclub = $request->getParsedBodyParam('calcomanias_desclub', '');
	$_tarjetas_desclub = $request->getParsedBodyParam('tarjetas_desclub', '');
	$_nombre_atendio = $request->getParsedBodyParam('nombre_atendio', '');
	$_cargo_atendio = $request->getParsedBodyParam('cargo_atendio', '');


	$sucursal = new Sucursal();
	$sucursal = $sucursal->find($_id_sucursal);
	$sucursal->detalle_llamada = $_detalle_llamada;
	$sucursal->conoce_vb = $_conoce_vb;
	$sucursal->escala_info = $_escala_info;
	$sucursal->motivo_desconoce = $_motivo_desconoce;
	$sucursal->reforzo_info = $_reforzo_informacion;
	$sucursal->material_pop = $_material_pop;
	$sucursal->calcomanias = $_calcomanias;
	$sucursal->acrilicos = $_acrilicos;
	$sucursal->comunicados_desclub = $_comunicados_desclub;
	$sucursal->comunicados_bbva = $_comunicados_bbva;
	$sucursal->reloj_colgante = $_reloj_colgante;
	$sucursal->calcomanias_desclub = $_calcomanias_desclub;
	$sucursal->tarjetas_desclub = $_tarjetas_desclub;
	$sucursal->nombre_atendio = $_nombre_atendio;
	$sucursal->cargo_atendio = $_cargo_atendio;
	$sucursal->tuvo_llamada_bienvenida = true;
	$sucursal->save();

    if ($sucursal->id) {
        return $response->withStatus(302)->withHeader('Location', '../llamada-de-bienvenida.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());


$app->post('/revisar_geolocalizacion', function($request, $response, $args){
	$_id_sucursal = $request->getParsedBodyParam('id_sucursal', '');
	$_id_zona = $request->getParsedBodyParam('id_zona', '');
	$_latitud = $request->getParsedBodyParam('latitud', '');
	$_longitud = $request->getParsedBodyParam('longitud', '');
	$_referencia = $request->getParsedBodyParam('referencia', '');
	$sucursal = new Sucursal();
	$sucursal = $sucursal->find($_id_sucursal);
	$sucursal->id_zona = $_id_zona;
	$sucursal->latitud = $_latitud;
	$sucursal->longitud = $_longitud;
	$sucursal->referencia = $_referencia;
	$sucursal->geolocalicacion_revisada = true;
	$sucursal->save();

    if ($sucursal->id) {
        return $response->withStatus(302)->withHeader('Location', '../llamada-de-bienvenida.php');
    } else {
        return $response->withStatus(400);
    }
})->add(new EstablecimientosAuth());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// LLAMADAS ///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/llamadas', function($request, $response, $args){
	$_llamada = new Llamada();
	$llamadas = $_llamada::where('status','<>', '3')->get();
	if(!empty($llamadas)){
       	return $response->withStatus(200)->withJson($llamadas);
	}else{
		return $response->withStatus(404);
	}
});

$app->get('/llamadas/{id}', function($request, $response, $args){
	$_id = $args['id'];
	$_llamada = new Llamada();
	$llamadas = $_llamada::where('id', $_id)->get();
	if(!empty($llamadas)){
       	return $response->withStatus(200)->withJson($llamadas);
	}else{
		return $response->withStatus(404);
	}
});

$app->get('/siguienteFolio', function($request, $response, $args){
	$_llamada = new Llamada();
	$llamadas = $_llamada->max('id')+1;
	if(!empty($llamadas)){
       	return $response->withStatus(200)->withJson($llamadas);
	}else{
		return $response->withStatus(404);
	}
});

$app->post('/insert/llamadas', function($request, $response, $args){
	$_id_proyecto = $request->getParsedBodyParam('id_proyecto', '');
	$_tipo = $request->getParsedBodyParam('tipo', '');
	$_nombre = $request->getParsedBodyParam('nombre', '');
	$_paterno = $request->getParsedBodyParam('paterno', '');
	$_materno = $request->getParsedBodyParam('materno', '');
	$_tipo_tarjeta_seguro = $request->getParsedBodyParam('tipo_tarjeta_seguro', '');
	$_calle = $request->getParsedBodyParam('calle', '');
	$_no_ext = $request->getParsedBodyParam('no_ext', '');
	$_no_int = $request->getParsedBodyParam('no_int', '');
	$_cp = $request->getParsedBodyParam('cp', '');
	$_referencia = $request->getParsedBodyParam('referencia', '');
	$_tipo_tel_1 = $request->getParsedBodyParam('tipo_tel_1', '');
	$_tel_1 = $request->getParsedBodyParam('tel_1', '');
	$_tipo_tel_2 = $request->getParsedBodyParam('tipo_tel_2', '');
	$_tel_2 = $request->getParsedBodyParam('tel_2', '');
	$_email = $request->getParsedBodyParam('email', '');
	$_marca = $request->getParsedBodyParam('marca', '');
	$_sucursal = $request->getParsedBodyParam('sucursal', '');
	$_id_marca = $request->getParsedBodyParam('id_marca', '');
	$_id_categoria = $request->getParsedBodyParam('id_categoria', '');
	$_comentarios = $request->getParsedBodyParam('comentarios', '');
	$_fecha_visita = $request->getParsedBodyParam('fecha_visita', '');
	$_donde_viste = $request->getParsedBodyParam('donde_viste', '');
	if($_tipo=='Queja Establecimiento'){
		$_status = '1';
	}else{
		$_status = '0';
	}
	$llamada = new Llamada();
	$llamada->id_proyecto = $_id_proyecto;
	$llamada->tipo = $_tipo;
	$llamada->nombre = $_nombre;
	$llamada->paterno = $_paterno;
	$llamada->materno = $_materno;
	$llamada->tipo_tarjeta_seguro = $_tipo_tarjeta_seguro;
	$llamada->calle = $_calle;
	$llamada->no_ext = $_no_ext;
	$llamada->no_int = $_no_int;
	$llamada->cp = $_cp;
	$llamada->referencia = $_referencia;
	$llamada->tipo_tel_1 = $_tipo_tel_1;
	$llamada->tel_1 = $_tel_1;
	$llamada->tipo_tel_2 = $_tipo_tel_2;
	$llamada->tel_2 = $_tel_2;
	$llamada->email = $_email;
	$llamada->marca = $_marca;
	$llamada->sucursal = $_sucursal;
	$llamada->id_marca = $_id_marca;
	$llamada->id_categoria = $_id_categoria;
	$llamada->comentarios = $_comentarios;
	$llamada->fecha_visita = $_fecha_visita;
	$llamada->donde_viste = $_donde_viste;
	$llamada->status = $_status;
	$llamada->save();
	/* ENVÍOS DE CORREO, AFILIACIÓN GERENTE DE CALIDAD, QUEJAS, A USUARIO QUE SE QUEJA */
	if($_tipo=='Queja Establecimiento'){
		// PARA USUARIO
		$from = new SendGrid\Email(null, "CRM@desclub.com.mx");
		$subject = "Seguimiento de queja sobre descuento en establecimiento";
		$to = new SendGrid\Email(null, $_email);
		$nombremarca = new Marca();
		$nombremarca = $nombremarca->find($_id_marca);
		$nombremarca = $nombremarca->nombre;
		$content = new SendGrid\Content("text/html", "
			<h1>Hola, hemos recibido tu queja y le daremos seguimiento</h1>
			<p>La marca es: $nombremarca </p>
			<p>La sucursal es: $_sucursal</p>
			<p>El folio de tu queja es el: $llamada->id</p>
			<p>Nombre: $_nombre $_paterno $materno</p>
			<p>Tipo de tarjeta / Seguro: $_tipo_tarjeta_seguro</p>
			<p>Queja: $_comentarios</p>
		");
		$mail = new SendGrid\Mail($from, $subject, $to, $content);
		$apiKey = ('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');
		$sg = new \SendGrid($apiKey);
		$sg->client->mail()->send()->post($mail);	
	}

	if($_tipo=='Afiliar establecimiento'){
		//para Gerente de calidad
		// PARA USUARIO
		$from = new SendGrid\Email(null, "CRM@desclub.com.mx");
		$subject = "Seguimiento de llamada para afiliar establecimiento";
		$to = new SendGrid\Email(null, "antonio.becerra@grupomedios.com");
		$content = new SendGrid\Content("text/html", "
			<h1>Hola, hubo un contacto para afiliarse a desclub</h1>
			<p>El folio de la llamada es el: $llamada->id</p>
			<p>Nombre: $_nombre $_paterno $materno</p>
			<p>Marca: $_marca</p>
			<p>Sucursal: $_sucursal</p>
		");
		$mail = new SendGrid\Mail($from, $subject, $to, $content);
		$apiKey = ('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');
		$sg = new \SendGrid($apiKey);
		$sg->client->mail()->send()->post($mail);	
	}



	return $response->withStatus(302)->withHeader('Location', '../../call-center.php');
})->add(new EstablecimientosAuth());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// SEGUIMIENTO LLAMADAS ///////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$app->post('/insert/seguimiento', function($request, $response, $args){

	$_id_llamada = $request->getParsedBodyParam('a_id_llamada', '');
	$_id_usuario = $request->getParsedBodyParam('a_id_usuario', '');
	$_comentarios = $request->getParsedBodyParam('a_comentarios', '');
	$_status = $request->getParsedBodyParam('a_status', '');
	$_acuerdo = $request->getParsedBodyParam('a_acuerdo', '');
	$seguimiento = new Seguimiento();
	$seguimiento->id_llamada = $_id_llamada;
	$seguimiento->id_usuario = $_id_usuario;
	$seguimiento->comentarios = $_comentarios;
	$seguimiento->status = $_status;
	$seguimiento->acuerdo = $_acuerdo;
	$seguimiento->save();

	$llamada = new Llamada();
	$llamada = $llamada->find($_id_llamada);
	$llamada->status = $_status;
	$llamada->acuerdo = $_acuerdo;
	$llamada->save();

	return $response->withStatus(302)->withHeader('Location', '../../call-center.php');
})->add(new EstablecimientosAuth());


$app->get('/seguimientos/{id_llamada}', function($request, $response, $args){
	$_id = $args['id_llamada'];
	$seguimiento = new Seguimiento();
	$seguimiento = $seguimiento::where('id_llamada', $_id)->get();
	$payload = [];
	foreach($seguimiento as $m){
		$usuario = new Usuario();
		$usuario = $usuario->where('id',$m->id_usuario)->get(array('id','email'));
		$arreglo = array(
			'created_at' => $m->created_at,
			'usuario' => $usuario,
			'status' => traducirStatusLlamada($m->status),
			'acuerdo' => traducirAcuerdo($m->acuerdo),
			'comentarios' => ($m->comentarios)
		);
		array_push($payload, $arreglo);
	}
	return $response->withStatus(200)->withJson($payload);
});


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// CALIDAD ////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/usuarios_calidad', function($request, $response, $args){
	$usuario = new Usuario();
	$usuario = $usuario::where('rol', '6')->orderBy('email', 'ASC')->get();
	$payload = [];
	foreach ($usuario as $u) {
		$objeto = array(
			'id' =>  $u->id,
			'email' =>  $u->email
		);
		array_push($payload, $objeto);
	}
	return $response->withStatus(200)->withJson($payload);
});


$app->get('/rutas_calidad/{id_usuario}', function($request, $response, $args){
	$_id_usuario = $args['id_usuario'];
	$_rutas = new Ruta();
	$rutas = $_rutas::where('actividad', 'calidad')->where('status', false)->where('id_usuario', $_id_usuario)->get();
	$payload = [];
	foreach ($rutas as $r) {
		$sucursal = new Sucursal();
		$sucursal = $sucursal->find($r->id_sucursal);
		$marca = new Marca();
		$marca = $marca->find($sucursal->id_marca);
		$objeto = array(
			'id' => $r->id,
			'id_usuario' => $r->id_usuario,
			'id_proyecto' => $r->id_proyecto,
			'marca' =>$marca,
			'sucursal' => $sucursal,
			'tipo_ruta' => $r->tipo_ruta,
			'actividad' => $r->actividad,
			'fecha_inicio' => $r->fecha_inicio,
			'fecha_fin' => $r->fecha_fin,
			'mistery' => $r->mistery,
			'etapa1' => $r->etapa1,
			'etapa2' => $r->etapa2,
			'etapa3' => $r->etapa3,
			'status' => $r->status,
			'created_at' => $r->created_at,
			'updated_at' => $r->updated_at
		);
		array_push($payload, $objeto);
	}
	return $response->withStatus(200)->withJson($payload);
});


$app->get('/rutas_mistery/{id_usuario}', function($request, $response, $args){
	$_id_usuario = $args['id_usuario'];
	$_rutas = new Ruta();
	$rutas = $_rutas::where('actividad', 'mistery')->where('status', false)->where('id_usuario', $_id_usuario)->get();
	$payload = [];
	foreach ($rutas as $r) {
		$sucursal = new Sucursal();
		$sucursal = $sucursal->find($r->id_sucursal);
		$marca = new Marca();
		$marca = $marca->find($sucursal->id_marca);
		$objeto = array(
			'id' => $r->id,
			'id_usuario' => $r->id_usuario,
			'id_proyecto' => $r->id_proyecto,
			'marca' =>$marca,
			'sucursal' => $sucursal,
			'tipo_ruta' => $r->tipo_ruta,
			'actividad' => $r->actividad,
			'fecha_inicio' => $r->fecha_inicio,
			'fecha_fin' => $r->fecha_fin,
			'mistery' => $r->mistery,
			'etapa1' => $r->etapa1,
			'etapa2' => $r->etapa2,
			'etapa3' => $r->etapa3,
			'status' => $r->status,
			'created_at' => $r->created_at,
			'updated_at' => $r->updated_at
		);
		array_push($payload, $objeto);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->post('/insert/ruta', function($request, $response, $args){
	$_id_usuario = $request->getParsedBodyParam('id_usuario', '');
	$_id_proyecto = $request->getParsedBodyParam('id_proyecto', '');
	$_tipo_ruta = $request->getParsedBodyParam('tipo_ruta', '');
	$_actividad = $request->getParsedBodyParam('actividad', '');
	$_fecha_inicio = $request->getParsedBodyParam('fecha_inicio', '');
	$_fecha_fin = $request->getParsedBodyParam('fecha_fin', '');
	$sucursales = $request->getParsedBodyParam('sucursales', '');
	foreach($sucursales as $s){
		$ruta = new Ruta();
		$ruta->id_usuario = $_id_usuario;
		$ruta->id_proyecto = $_id_proyecto;
		$ruta->id_sucursal = $s;
		$ruta->tipo_ruta = $_tipo_ruta;
		$ruta->actividad = $_actividad;
		$ruta->fecha_inicio = $_fecha_inicio;
		$ruta->fecha_fin = $_fecha_fin;
		$ruta->save();
	}
	return $response->withStatus(302)->withHeader('Location', '../../asignacion-de-rutas.php');
})->add(new EstablecimientosAuth());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ETAPA 1 ////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$app->post('/insert/etapa1', function($request, $response, $args){
	$_id_ruta = $request->getParsedBodyParam('id_ruta', '');
	$_pasaje = $request->getParsedBodyParam('pasaje', '');
	$_transportes = serialize($request->getParsedBodyParam('transportes', ''));
	$_status_establecimiento = $request->getParsedBodyParam('status_establecimiento', '');
	$_calc_desclub = $request->getParsedBodyParam('calc_desclub', '');
	if($_calc_desclub=="Sí"){
		$_calc_desclub = true;
	}else{
		$_calc_desclub = false;
	}
	$_cual_calc_desc = $request->getParsedBodyParam('cual_calc_desc', '');
	$_calc_otras = $request->getParsedBodyParam('calc_otras', '');
	if($_calc_otras=="Sí"){
		$_calc_otras = true;
	}else{
		$_calc_otras = false;
	}
	$_cual_calc_otras = $request->getParsedBodyParam('cual_calc_otras', '');
	$_conoce_programa = $request->getParsedBodyParam('conoce_programa', '');
	if($_conoce_programa=="Sí"){
		$_conoce_programa = true;
	}else{
		$_conoce_programa = false;
	}
	$_cual_programa = $request->getParsedBodyParam('cual_programa', '');
	$_latitud= $request->getParsedBodyParam('latitud', '');
	$_longitud= $request->getParsedBodyParam('longitud', '');
	$etapa1 = new Etapauno();
	$etapa1->id_ruta = $_id_ruta;
	$etapa1->pasaje = $_pasaje;
	$etapa1->transportes = serialize($_transportes);
	$etapa1->status_establecimiento = $_status_establecimiento;
	$etapa1->calc_desclub = $_calc_desclub;
	$etapa1->cual_calc_desc = serialize($_cual_calc_desc);
	$etapa1->calc_otras = $_calc_otras;
	$etapa1->cual_calc_otras = $_cual_calc_otras;
	$etapa1->conoce_programa = $_conoce_programa;
	$etapa1->cual_programa = serialize($_cual_programa);
	$etapa1->latitud = $_latitud;
	$etapa1->longitud = $_longitud;
	$etapa1->save();

	$ruta = new Ruta();
	$ruta = $ruta->find($_id_ruta);
	$ruta->etapa1 = true;
	$ruta->save();

	return $response->withStatus(302)->withHeader('Location', '../../rutas-de-calidad.php');
})->add(new EstablecimientosAuth());



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ETAPA 2 ////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$app->post('/insert/etapa2', function($request, $response, $args){
	$_id_ruta = $request->getParsedBodyParam('id_ruta', '');
	$_encargado_conoce = $request->getParsedBodyParam('encargado_conoce','');
	if($_encargado_conoce=="Sí"){
		$_encargado_conoce = true;
	}else{
		$_encargado_conoce = false;
	}
	$_porque_no_conoce = $request->getParsedBodyParam('porque_no_conoce','');
	$_cual_conoce = serialize($request->getParsedBodyParam('cual_conoce',''));
	$_da_a_conocer = $request->getParsedBodyParam('da_a_conocer','');
	if($_da_a_conocer=="Sí"){
		$_da_a_conocer = true;
	}else{
		$_da_a_conocer = false;
	}
	$_porque_no_da_a_conocer = $request->getParsedBodyParam('porque_no_da_a_conocer','');
	$_cuantas_tarjetas = $request->getParsedBodyParam('cuantas_tarjetas','');
	$_proporciona_pop = $request->getParsedBodyParam('proporciona_pop','');
	if($_proporciona_pop=="Sí"){
		$_proporciona_pop = true;
	}else{
		$_proporciona_pop = false;
	}
	$_porque_no_proporciona_pop = $request->getParsedBodyParam('porque_no_proporciona_pop','');
	$_no_acrilicos = $request->getParsedBodyParam('no_acrilicos','');
	$_coloco_acrilicos = $request->getParsedBodyParam('coloco_acrilicos','');
	$_no_calcomanias = $request->getParsedBodyParam('no_calcomanias','');
	$_coloco_calcomanias = $request->getParsedBodyParam('coloco_calcomanias','');
	$_no_com_desclub = $request->getParsedBodyParam('no_com_desclub','');
	$_coloco_com_desclub = $request->getParsedBodyParam('coloco_com_desclub','');
	$_no_com_bbva = $request->getParsedBodyParam('no_com_bbva','');
	$_coloco_com_bbva = $request->getParsedBodyParam('coloco_com_bbva','');
	$_no_reloj = $request->getParsedBodyParam('no_reloj','');
	$_coloco_reloj = $request->getParsedBodyParam('coloco_reloj','');
	$_capacitaste = $request->getParsedBodyParam('capacitaste','');
	if($_capacitaste=="Sí"){
		$_capacitaste = true;
	}else{
		$_capacitaste = false;
	}
	$_porque_no_capacitaste = $request->getParsedBodyParam('porque_no_capacitaste','');
	$_proyectos_capacitaste = serialize($request->getParsedBodyParam('proyectos_capacitaste',''));
	$_banco_adquiriente = $request->getParsedBodyParam('banco_adquiriente','');
	$_proporciona_afiliacion = $request->getParsedBodyParam('proporciona_afiliacion','');
	if($_proporciona_afiliacion=="Sí"){
		$_proporciona_afiliacion = true;
	}else{
		$_proporciona_afiliacion = false;
	}
	$_no_afiliacion = $request->getParsedBodyParam('no_afiliacion','');
	$_c1_nombre = $request->getParsedBodyParam('c1_nombre','');
	$_c1_puesto = $request->getParsedBodyParam('c1_puesto','');
	$_c1_tel = $request->getParsedBodyParam('c1_tel','');
	$_c1_correo = $request->getParsedBodyParam('c1_correo','');
	$_c1_forma_contacto = $request->getParsedBodyParam('c1_forma_contacto','');
	$_c2_nombre = $request->getParsedBodyParam('c2_nombre','');
	$_c2_puesto = $request->getParsedBodyParam('c2_puesto','');
	$_c2_tel = $request->getParsedBodyParam('c2_tel','');
	$_c2_correo = $request->getParsedBodyParam('c2_correo','');
	$_c2_forma_contacto = $request->getParsedBodyParam('c2_forma_contacto','');
	$_c3_nombre = $request->getParsedBodyParam('c3_nombre','');
	$_c3_puesto = $request->getParsedBodyParam('c3_puesto','');
	$_c3_tel = $request->getParsedBodyParam('c3_tel','');
	$_c3_correo = $request->getParsedBodyParam('c3_correo','');
	$_c3_forma_contacto = $request->getParsedBodyParam('c3_forma_contacto','');
	$_latitud= $request->getParsedBodyParam('latitud', '');
	$_longitud= $request->getParsedBodyParam('longitud', '');

	$etapa2 = new Etapados();
	$etapa2->id_ruta = $_id_ruta;
	$etapa2->encargado_conoce = $_encargado_conoce;
	$etapa2->porque_no_conoce = $_porque_no_conoce;
	$etapa2->cual_conoce = $_cual_conoce;
	$etapa2->da_a_conocer = $_da_a_conocer;
	$etapa2->porque_no_da_a_conocer = $_porque_no_da_a_conocer;
	$etapa2->cuantas_tarjetas = $_cuantas_tarjetas;
	$etapa2->proporciona_pop = $_proporciona_pop;
	$etapa2->porque_no_proporciona_pop = $_porque_no_proporciona_pop;
	$etapa2->no_acrilicos = $_no_acrilicos;
	$etapa2->coloco_acrilicos = $_coloco_acrilicos;
	$etapa2->no_calcomanias = $_no_calcomanias;
	$etapa2->coloco_calcomanias = $_coloco_calcomanias;
	$etapa2->no_com_desclub = $_no_com_desclub;
	$etapa2->coloco_com_desclub = $_coloco_com_desclub;
	$etapa2->no_com_bbva = $_no_com_bbva;
	$etapa2->coloco_com_bbva = $_coloco_com_bbva;
	$etapa2->no_reloj = $_no_reloj;
	$etapa2->coloco_reloj = $_coloco_reloj;
	$etapa2->capacitaste = $_capacitaste;
	$etapa2->porque_no_capacitaste = $_porque_no_capacitaste;
	$etapa2->proyectos_capacitaste = $_proyectos_capacitaste;
	$etapa2->banco_adquiriente = $_banco_adquiriente;
	$etapa2->proporciona_afiliacion = $_proporciona_afiliacion;
	$etapa2->no_afiliacion = $_no_afiliacion;
	$etapa2->c1_nombre = $_c1_nombre;
	$etapa2->c1_puesto = $_c1_puesto;
	$etapa2->c1_tel = $_c1_tel;
	$etapa2->c1_correo = $_c1_correo;
	$etapa2->c1_forma_contacto = $_c1_forma_contacto;

	$etapa2->c2_nombre = $_c2_nombre;
	$etapa2->c2_puesto = $_c2_puesto;
	$etapa2->c2_tel = $_c2_tel;
	$etapa2->c2_correo = $_c2_correo;
	$etapa2->c2_forma_contacto = $_c2_forma_contacto;

	$etapa2->c3_nombre = $_c3_nombre;
	$etapa2->c3_puesto = $_c3_puesto;
	$etapa2->c3_tel = $_c3_tel;
	$etapa2->c3_correo = $_c3_correo;
	$etapa2->c3_forma_contacto = $_c3_forma_contacto;

	$etapa2->latitud = $_latitud;
	$etapa2->longitud = $_longitud;
	
	$etapa2->save();

	$ruta = new Ruta();
	$ruta = $ruta->find($_id_ruta);
	$ruta->etapa2 = true;
	$ruta->save();

	return $response->withStatus(302)->withHeader('Location', '../../rutas-de-calidad.php');
})->add(new EstablecimientosAuth());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// ETAPA 3 ////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$app->post('/insert/etapa3', function($request, $response, $args){
	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['imagen'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/testigos/".date('Ymdhis').$uploadFilename);
		$imagepath = "assets/images/testigos/".date('Ymdhis').$uploadFilename;
	}
	$_id_ruta = $request->getParsedBodyParam('id_ruta','');
	$_tipo_foto = $request->getParsedBodyParam('tipo_foto','');
	$_descripcion = $request->getParsedBodyParam('descripcion','');
	$_latitud= $request->getParsedBodyParam('latitud', '');
	$_longitud= $request->getParsedBodyParam('longitud', '');
	$_foto = $imagepath;

	$etapa3 = new Etapatres();
	$etapa3->id_ruta = $_id_ruta;
	$etapa3->tipo_foto = $_tipo_foto;
	$etapa3->descripcion = $_descripcion;
	$etapa3->foto = $_foto;
	$etapa3->latitud = $_latitud;
	$etapa3->longitud = $_longitud;
	
	$etapa3->save();

	$ruta = new Ruta();
	$ruta = $ruta->find($_id_ruta);
	$ruta->etapa3 = true;
	$ruta->save();

	return $response->withStatus(302)->withHeader('Location', '../../rutas-de-calidad.php');
})->add(new EstablecimientosAuth());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// Check //////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$app->get('/check_ruta/{id_ruta}', function($request, $response, $args){
	$_id_ruta = $args['id_ruta'];
	$ruta = new Ruta();
	$ruta = $ruta->find($_id_ruta);
	$ruta->status = true;
	$ruta->save();
	return $response->withStatus(302)->withHeader('Location', '../../rutas-de-calidad.php');
	
})->add(new EstablecimientosAuth());

$app->get('/check_ruta_mistery/{id_ruta}', function($request, $response, $args){
	$_id_ruta = $args['id_ruta'];
	$ruta = new Ruta();
	$ruta = $ruta->find($_id_ruta);
	$ruta->status = true;
	$ruta->save();
	return $response->withStatus(302)->withHeader('Location', '../../rutas-de-mistery.php');
	
})->add(new EstablecimientosAuth());


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// MISTERY  ///////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$app->post('/insert/mistery1', function($request, $response, $args){
	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['foto1'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/testigos/".date('Ymdhis').$uploadFilename);
		$imagepath = "assets/images/testigos/".date('Ymdhis').$uploadFilename;
	}
	$_foto1 = $imagepath;
	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['foto2'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/testigos/".date('Ymdhis').$uploadFilename);
		$imagepath = "assets/images/testigos/".date('Ymdhis').$uploadFilename;
	}
	$_foto2 = $imagepath;
	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['foto3'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/testigos/".date('Ymdhis').$uploadFilename);
		$imagepath = "assets/images/testigos/".date('Ymdhis').$uploadFilename;
	}
	$_foto3 = $imagepath;
	$imagepath = '';
	$files = $request->getUploadedFiles();
	$newfile = $files['foto4'];
	if($newfile->getError() === UPLOAD_ERR_OK){
		$uploadFilename = $newfile->getClientFilename();
		$newfile->moveTo("assets/images/testigos/".date('Ymdhis').$uploadFilename);
		$imagepath = "assets/images/testigos/".date('Ymdhis').$uploadFilename;
	}
	$_foto4 = $imagepath;

	$_id_ruta = $request->getParsedBodyParam('id_ruta','');
	$_pasaje = $request->getParsedBodyParam('pasaje', '');
	$_transportes = serialize($request->getParsedBodyParam('transportes', ''));
	$_tarjetas_presentadas = serialize($request->getParsedBodyParam('tarjetas_presentadas', ''));
	$_calc_desclub = $request->getParsedBodyParam('calc_desclub', '');
	$_cual_calc_desclub = serialize($request->getParsedBodyParam('cual_calc_desclub', ''));
	$_material_pop = $request->getParsedBodyParam('material_pop', '');
	$_cual_material_pop = serialize($request->getParsedBodyParam('cual_material_pop', ''));
	$_calc_otras = $request->getParsedBodyParam('calc_otras', '');
	$_cual_calc_otras = serialize($request->getParsedBodyParam('cual_calc_otras', ''));
	$_calificacion = $request->getParsedBodyParam('calificacion', '');
	$_conoce_programa = $request->getParsedBodyParam('conoce_programa', '');
	$_razon_negado = $request->getParsedBodyParam('razon_negado', '');
	$_pregunta_gerente = $request->getParsedBodyParam('pregunta_gerente', '');
	$_otorgaron_descuento = $request->getParsedBodyParam('otorgaron_descuento', '');
	$_efectivo = $request->getParsedBodyParam('efectivo', '');
	$_tarjeta = $request->getParsedBodyParam('tarjeta', '');
	$_tipo_foto = $request->getParsedBodyParam('tipo_foto', '');
	$_descripcion = $request->getParsedBodyParam('descripcion', '');

	$mistery = new Mistery();

	$mistery->id_ruta = $_id_ruta;
	$mistery->pasaje = $_pasaje;
	$mistery->transportes = $_transportes;
	$mistery->tarjetas_presentadas = $_tarjetas_presentadas;
	$mistery->calc_desclub = $_calc_desclub;
	$mistery->cual_calc_desclub = $_cual_calc_desclub;
	$mistery->material_pop = $_material_pop;
	$mistery->cual_material_pop = $_cual_material_pop;
	$mistery->calc_otras = $_calc_otras;
	$mistery->cual_calc_otras = $_cual_calc_otras;
	$mistery->calificacion = $_calificacion;
	$mistery->conoce_programa = $_conoce_programa;
	$mistery->razon_negado = $_razon_negado;
	$mistery->pregunta_gerente = $_pregunta_gerente;
	$mistery->otorgaron_descuento = $_otorgaron_descuento;
	$mistery->efectivo = $_efectivo;
	$mistery->tarjeta = $_tarjeta;
	$mistery->tipo_foto = $_tipo_foto;
	$mistery->descripcion = $_descripcion;
	$mistery->foto1 = $_foto1;
	$mistery->foto2 = $_foto2;
	$mistery->foto3 = $_foto3;
	$mistery->foto4 = $_foto4;

	$mistery->save();

	$ruta = new Ruta();
	$ruta = $ruta->find($_id_ruta);
	$ruta->mistery = true;
	$ruta->save();

	return $response->withStatus(302)->withHeader('Location', '../../rutas-de-mistery.php');
})->add(new EstablecimientosAuth());

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// RESERVACIONES  /////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$app->get('/reservaciones', function($request, $response, $args){
	$_reservacion = new Reservacion();
	$reservaciones = $_reservacion->all();

	$payload = [];
	foreach($reservaciones as $cat){
		array_push($payload, $cat);
	}
	return $response->withStatus(200)->withJson($payload);
});

$app->post('/insert/reservaciones', function($request, $response, $args){
	$_restaurante = $request->getParsedBodyParam('restaurante','');
	$_mesa_a_nombre_de = $request->getParsedBodyParam('mesa_a_nombre_de','');
	$_fecha = $request->getParsedBodyParam('fecha','');
	$_hora = $request->getParsedBodyParam('hora','');
	$_personas = $request->getParsedBodyParam('personas','');
	$_area = $request->getParsedBodyParam('area','');
	$_clave = $request->getParsedBodyParam('clave','');
	$_tolerancia = $request->getParsedBodyParam('tolerancia','');
	$_se_logro_reservacion = $request->getParsedBodyParam('se_logro_reservacion','');

	$reservacion = new Reservacion();
	$reservacion->restaurante = $_restaurante;
	$reservacion->mesa_a_nombre_de = $_mesa_a_nombre_de;
	$reservacion->fecha = $_fecha;
	$reservacion->hora = $_hora;
	$reservacion->personas = $_personas;
	$reservacion->area = $_area;
	$reservacion->clave = $_clave;
	$reservacion->tolerancia = $_tolerancia;
	$reservacion->se_logro_reservacion = $_se_logro_reservacion;

	$reservacion->save();
	
	return $response->withStatus(302)->withHeader('Location', '../../reservaciones.php');
})->add(new EstablecimientosAuth());


$app->run();

?>