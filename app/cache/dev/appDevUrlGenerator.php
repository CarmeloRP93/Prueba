<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_homeMonitores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\HomeController::homeMonitoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/homeMonitores',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_sesionesMonitores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::sesionesMonitoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sesionesMonitores',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_sesionMonitores' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::sesionMonitoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sesionMonitores',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_sesionesDedicadas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::sesionesDedicadasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sesionesDedicadas',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_sesionDedicada' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::sesionDedicadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sesionDedicada',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_misSesionesMonitores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::misSesionesMonitoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/misSesionesMonitores',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_miSesionMonitores' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::miSesionMonitoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/miSesionMonitores',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_misSesionesDedicadas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::misSesionesDedicadasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/misSesionesDedicadas',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_miSesionDedicada' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::miSesionDedicadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/miSesionDedicada',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_nuevaSesion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::nuevaSesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevaSesion',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_editarSesion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarSesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editarSesion',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_editarSesionDedicada' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarSesionDedicadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editarSesionDedicada',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_solEliminarSesion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::solEliminarSesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/solEliminarSesion',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_solElimSe' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::solElimSeAction',  ),  2 =>   array (    '_method' => 'POST|PUT|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/solElimSe',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_solEliminarSesionDedicada' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::solEliminarSesionDedicadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/solEliminarSesionDedicada',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_solElimSeDe' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::solElimSeDeAction',  ),  2 =>   array (    '_method' => 'POST|PUT|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/solElimSeDe',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_nuevaSesionDedicada' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::nuevaSesionDedicadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevaSesionDedicada',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_crearSesion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::crearSesionAction',  ),  2 =>   array (    '_method' => 'POST|GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crearSesion',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarAction',  ),  2 =>   array (    '_method' => 'POST|PUT|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editar',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_editarDedicada' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarDedicadaAction',  ),  2 =>   array (    '_method' => 'POST|PUT|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editarDedicada',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_crearSesionDedicada' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::crearSesionDedicadaAction',  ),  2 =>   array (    '_method' => 'POST|GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crearSesionDedicada',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_eliminarSesion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::eliminarSesionAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/eliminarSesion',    ),  ),  4 =>   array (  ),),
        'modulomonitores_monitores_eliminarSesionDedicada' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::eliminarSesionDedicadaAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/eliminarSesionDedicada',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_canchasClientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CanchaController::canchasClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/canchasClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_canchaClientes' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CanchaController::canchaClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/canchaClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_reservasClientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::reservasClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservasClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_reservaClientes' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::reservaClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reservaClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_competicionesClientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CompeticionController::competicionesClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competicionesClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_competicionClientes' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CompeticionController::competicionClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/competicionClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_equiposClientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::equiposClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equiposClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_equipoClientes' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::equipoClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipoClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_sesionesClientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::sesionesClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sesionesClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_sesionClientes' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::sesionClientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sesionClientes',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_nuevaReserva' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::nuevaReservaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/nuevaReserva',    ),  ),  4 =>   array (  ),),
        'moduloclientes_cliente_crearReserva' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::crearReservaAction',  ),  2 =>   array (    '_method' => 'POST|GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crearReserva',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_clientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::clientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_monitores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::monitoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/monitores',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_cliente' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::clienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_nuevo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::nuevoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuevo',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_crear' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::crearAction',  ),  2 =>   array (    '_method' => 'POST|GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crear',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_editarUsuario' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::editarUsuarioAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/editarUsuario',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_actualizar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::actualizarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/actualizar',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_eliminar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::eliminarAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/eliminar',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_monitor' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::monitorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/monitor',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_canchas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::canchasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/canchas',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_cancha' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::canchaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cancha',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_cancha_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cancha/editar',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_cancha_actualizar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::actualizarAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cancha/actualizar',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_cancha_redirect_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::editarAction',    'path' => '/cancha/editar/{id}',    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cancha/actualizar',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_reservas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\ReservaController::reservasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reservas',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_reserva_cancelar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\ReservaController::cancelarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reserva/cancelar',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_reserva_cancelando' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\ReservaController::cancelandoAction',  ),  2 =>   array (    '_method' => 'POST|PUT|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reserva/cancelando',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_competiciones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::competicionesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competiciones',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_competicion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::competicionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/competicion',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_equipos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\EquipoController::equiposAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipos',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_equipo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\EquipoController::equipoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipo',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_jugadores' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\JugadorController::jugadoresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jugadores',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_jugador' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\JugadorController::jugadorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/jugador',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_sesiones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::sesionesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sesiones',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_dedicadas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::dedicadasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dedicadas',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_sesion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::sesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/sesion',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_aceptarSesion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::aceptarSesionAction',  ),  2 =>   array (    '_method' => 'POST|PUT|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/aceptarSesion',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_cancelar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::cancelarAction',  ),  2 =>   array (    '_method' => 'POST|PUT|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cancelar',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_cancelarSesion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::cancelarSesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cancelarSesion',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_rechazar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::rechazarAction',  ),  2 =>   array (    '_method' => 'POST|PUT|GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/rechazar',    ),  ),  4 =>   array (  ),),
        'crivero_prueba_rechazarSesion' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::rechazarSesionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/rechazarSesion',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
