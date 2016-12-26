<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // modulomonitores_monitores_homeMonitores
        if ($pathinfo === '/homeMonitores') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\HomeController::homeMonitoresAction',  '_route' => 'modulomonitores_monitores_homeMonitores',);
        }

        if (0 === strpos($pathinfo, '/sesion')) {
            // modulomonitores_monitores_sesionesMonitores
            if ($pathinfo === '/sesionesMonitores') {
                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::sesionesMonitoresAction',  '_route' => 'modulomonitores_monitores_sesionesMonitores',);
            }

            // modulomonitores_monitores_sesionMonitores
            if (0 === strpos($pathinfo, '/sesionMonitores') && preg_match('#^/sesionMonitores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_sesionMonitores')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::sesionMonitoresAction',));
            }

            // modulomonitores_monitores_sesionesDedicadas
            if ($pathinfo === '/sesionesDedicadas') {
                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::sesionesDedicadasAction',  '_route' => 'modulomonitores_monitores_sesionesDedicadas',);
            }

            // modulomonitores_monitores_sesionDedicada
            if (0 === strpos($pathinfo, '/sesionDedicada') && preg_match('#^/sesionDedicada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_sesionDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::sesionDedicadaAction',));
            }

        }

        // modulomonitores_monitores_nuevaSesion
        if ($pathinfo === '/nuevaSesion') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::nuevaSesionAction',  '_route' => 'modulomonitores_monitores_nuevaSesion',);
        }

        if (0 === strpos($pathinfo, '/editarSesion')) {
            // modulomonitores_monitores_editarSesion
            if (preg_match('#^/editarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_editarSesion')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarSesionAction',));
            }

            // modulomonitores_monitores_editarSesionDedicada
            if (0 === strpos($pathinfo, '/editarSesionDedicada') && preg_match('#^/editarSesionDedicada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_editarSesionDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarSesionDedicadaAction',));
            }

        }

        // modulomonitores_monitores_nuevaSesionDedicada
        if ($pathinfo === '/nuevaSesionDedicada') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::nuevaSesionDedicadaAction',  '_route' => 'modulomonitores_monitores_nuevaSesionDedicada',);
        }

        // modulomonitores_monitores_crearSesion
        if ($pathinfo === '/crearSesion') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_modulomonitores_monitores_crearSesion;
            }

            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::crearSesionAction',  '_route' => 'modulomonitores_monitores_crearSesion',);
        }
        not_modulomonitores_monitores_crearSesion:

        if (0 === strpos($pathinfo, '/editar')) {
            // modulomonitores_monitores_editar
            if (preg_match('#^/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_modulomonitores_monitores_editar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_editar')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarAction',));
            }
            not_modulomonitores_monitores_editar:

            // modulomonitores_monitores_editarDedicada
            if (0 === strpos($pathinfo, '/editarDedicada') && preg_match('#^/editarDedicada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_modulomonitores_monitores_editarDedicada;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_editarDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarDedicadaAction',));
            }
            not_modulomonitores_monitores_editarDedicada:

        }

        // modulomonitores_monitores_crearSesionDedicada
        if ($pathinfo === '/crearSesionDedicada') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_modulomonitores_monitores_crearSesionDedicada;
            }

            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::crearSesionDedicadaAction',  '_route' => 'modulomonitores_monitores_crearSesionDedicada',);
        }
        not_modulomonitores_monitores_crearSesionDedicada:

        // modulomonitores_monitores_eliminarSesion
        if (0 === strpos($pathinfo, '/eliminarSesion') && preg_match('#^/eliminarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_modulomonitores_monitores_eliminarSesion;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_eliminarSesion')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::eliminarSesionAction',));
        }
        not_modulomonitores_monitores_eliminarSesion:

        if (0 === strpos($pathinfo, '/cancha')) {
            // moduloclientes_cliente_canchasClientes
            if ($pathinfo === '/canchasClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CanchaController::canchasClientesAction',  '_route' => 'moduloclientes_cliente_canchasClientes',);
            }

            // moduloclientes_cliente_canchaClientes
            if (0 === strpos($pathinfo, '/canchaClientes') && preg_match('#^/canchaClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_canchaClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CanchaController::canchaClientesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/reserva')) {
            // moduloclientes_cliente_reservasClientes
            if ($pathinfo === '/reservasClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::reservasClientesAction',  '_route' => 'moduloclientes_cliente_reservasClientes',);
            }

            // moduloclientes_cliente_reservaClientes
            if (0 === strpos($pathinfo, '/reservaClientes') && preg_match('#^/reservaClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_reservaClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::reservaClientesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/torneo')) {
            // moduloclientes_cliente_torneosClientes
            if ($pathinfo === '/torneosClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\TorneoController::torneosClientesAction',  '_route' => 'moduloclientes_cliente_torneosClientes',);
            }

            // moduloclientes_cliente_torneoClientes
            if (0 === strpos($pathinfo, '/torneoClientes') && preg_match('#^/torneoClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_torneoClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\TorneoController::torneoClientesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sesion')) {
            // moduloclientes_cliente_sesionesClientes
            if ($pathinfo === '/sesionesClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::sesionesClientesAction',  '_route' => 'moduloclientes_cliente_sesionesClientes',);
            }

            // moduloclientes_cliente_sesionClientes
            if (0 === strpos($pathinfo, '/sesionClientes') && preg_match('#^/sesionClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_sesionClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::sesionClientesAction',));
            }

        }

        // crivero_prueba_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::homeAction',  '_route' => 'crivero_prueba_home',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // crivero_prueba_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SecurityController::loginAction',  '_route' => 'crivero_prueba_login',);
                }

                // crivero_prueba_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'crivero_prueba_login_check',);
                }

            }

            // crivero_prueba_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'crivero_prueba_logout');
            }

        }

        // crivero_prueba_clientes
        if ($pathinfo === '/clientes') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::clientesAction',  '_route' => 'crivero_prueba_clientes',);
        }

        // crivero_prueba_monitores
        if ($pathinfo === '/monitores') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::monitoresAction',  '_route' => 'crivero_prueba_monitores',);
        }

        // crivero_prueba_cliente
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cliente')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::clienteAction',));
        }

        // crivero_prueba_nuevo
        if ($pathinfo === '/nuevo') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::nuevoAction',  '_route' => 'crivero_prueba_nuevo',);
        }

        // crivero_prueba_crear
        if ($pathinfo === '/crear') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_crivero_prueba_crear;
            }

            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::crearAction',  '_route' => 'crivero_prueba_crear',);
        }
        not_crivero_prueba_crear:

        // crivero_prueba_editarUsuario
        if (0 === strpos($pathinfo, '/editarUsuario') && preg_match('#^/editarUsuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_editarUsuario')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::editarUsuarioAction',));
        }

        // crivero_prueba_actualizar
        if (0 === strpos($pathinfo, '/actualizar') && preg_match('#^/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_actualizar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::actualizarAction',));
        }

        // crivero_prueba_eliminar
        if (0 === strpos($pathinfo, '/eliminar') && preg_match('#^/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_crivero_prueba_eliminar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_eliminar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::eliminarAction',));
        }
        not_crivero_prueba_eliminar:

        // crivero_prueba_monitor
        if (0 === strpos($pathinfo, '/monitor') && preg_match('#^/monitor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_monitor')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::monitorAction',));
        }

        if (0 === strpos($pathinfo, '/cancha')) {
            // crivero_prueba_canchas
            if ($pathinfo === '/canchas') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::canchasAction',  '_route' => 'crivero_prueba_canchas',);
            }

            // crivero_prueba_cancha
            if (preg_match('#^/cancha/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancha')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::canchaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/torneo')) {
            // crivero_prueba_torneos
            if ($pathinfo === '/torneos') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\TorneoController::torneosAction',  '_route' => 'crivero_prueba_torneos',);
            }

            // crivero_prueba_torneo
            if (preg_match('#^/torneo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_torneo')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\TorneoController::torneoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/equipo')) {
            // crivero_prueba_equipos
            if ($pathinfo === '/equipos') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\EquipoController::equiposAction',  '_route' => 'crivero_prueba_equipos',);
            }

            // crivero_prueba_equipo
            if (preg_match('#^/equipo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_equipo')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\EquipoController::equipoAction',));
            }

        }

        // crivero_prueba_sesiones
        if ($pathinfo === '/sesiones') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::sesionesAction',  '_route' => 'crivero_prueba_sesiones',);
        }

        // crivero_prueba_dedicadas
        if ($pathinfo === '/dedicadas') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::dedicadasAction',  '_route' => 'crivero_prueba_dedicadas',);
        }

        // crivero_prueba_sesion
        if (0 === strpos($pathinfo, '/sesion') && preg_match('#^/sesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_sesion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::sesionAction',));
        }

        // crivero_prueba_aceptarSesion
        if (0 === strpos($pathinfo, '/aceptarSesion') && preg_match('#^/aceptarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                goto not_crivero_prueba_aceptarSesion;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_aceptarSesion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::aceptarSesionAction',));
        }
        not_crivero_prueba_aceptarSesion:

        if (0 === strpos($pathinfo, '/cancelar')) {
            // crivero_prueba_cancelar
            if (preg_match('#^/cancelar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_crivero_prueba_cancelar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancelar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::cancelarAction',));
            }
            not_crivero_prueba_cancelar:

            // crivero_prueba_cancelarSesion
            if (0 === strpos($pathinfo, '/cancelarSesion') && preg_match('#^/cancelarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancelarSesion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::cancelarSesionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/rechazar')) {
            // crivero_prueba_rechazar
            if (preg_match('#^/rechazar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_crivero_prueba_rechazar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_rechazar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::rechazarAction',));
            }
            not_crivero_prueba_rechazar:

            // crivero_prueba_rechazarSesion
            if (0 === strpos($pathinfo, '/rechazarSesion') && preg_match('#^/rechazarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_rechazarSesion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::rechazarSesionAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
