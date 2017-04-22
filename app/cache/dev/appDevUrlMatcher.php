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

        if (0 === strpos($pathinfo, '/mi')) {
            // modulomonitores_monitores_misSesionesMonitores
            if ($pathinfo === '/misSesionesMonitores') {
                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::misSesionesMonitoresAction',  '_route' => 'modulomonitores_monitores_misSesionesMonitores',);
            }

            // modulomonitores_monitores_miSesionMonitores
            if (0 === strpos($pathinfo, '/miSesionMonitores') && preg_match('#^/miSesionMonitores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_miSesionMonitores')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::miSesionMonitoresAction',));
            }

            // modulomonitores_monitores_misSesionesDedicadas
            if ($pathinfo === '/misSesionesDedicadas') {
                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::misSesionesDedicadasAction',  '_route' => 'modulomonitores_monitores_misSesionesDedicadas',);
            }

            // modulomonitores_monitores_miSesionDedicada
            if (0 === strpos($pathinfo, '/miSesionDedicada') && preg_match('#^/miSesionDedicada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_miSesionDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::miSesionDedicadaAction',));
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

        if (0 === strpos($pathinfo, '/solElim')) {
            // modulomonitores_monitores_solEliminarSesion
            if (0 === strpos($pathinfo, '/solEliminarSesion') && preg_match('#^/solEliminarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_solEliminarSesion')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::solEliminarSesionAction',));
            }

            // modulomonitores_monitores_solElimSe
            if (0 === strpos($pathinfo, '/solElimSe') && preg_match('#^/solElimSe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_modulomonitores_monitores_solElimSe;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_solElimSe')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::solElimSeAction',));
            }
            not_modulomonitores_monitores_solElimSe:

            // modulomonitores_monitores_solEliminarSesionDedicada
            if (0 === strpos($pathinfo, '/solEliminarSesionDedicada') && preg_match('#^/solEliminarSesionDedicada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_solEliminarSesionDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::solEliminarSesionDedicadaAction',));
            }

            // modulomonitores_monitores_solElimSeDe
            if (0 === strpos($pathinfo, '/solElimSeDe') && preg_match('#^/solElimSeDe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_modulomonitores_monitores_solElimSeDe;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_solElimSeDe')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::solElimSeDeAction',));
            }
            not_modulomonitores_monitores_solElimSeDe:

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

        if (0 === strpos($pathinfo, '/eliminarSesion')) {
            // modulomonitores_monitores_eliminarSesion
            if (preg_match('#^/eliminarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_modulomonitores_monitores_eliminarSesion;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_eliminarSesion')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::eliminarSesionAction',));
            }
            not_modulomonitores_monitores_eliminarSesion:

            // modulomonitores_monitores_eliminarSesionDedicada
            if (0 === strpos($pathinfo, '/eliminarSesionDedicada') && preg_match('#^/eliminarSesionDedicada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_modulomonitores_monitores_eliminarSesionDedicada;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_eliminarSesionDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::eliminarSesionDedicadaAction',));
            }
            not_modulomonitores_monitores_eliminarSesionDedicada:

        }

        // modulomonitores_monitores_miperfilm
        if ($pathinfo === '/monitor/perfil') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::miperfilmAction',  '_route' => 'modulomonitores_monitores_miperfilm',);
        }

        // modulomonitores_monitores_editarmiperfilm
        if ($pathinfo === '/editarmiperfilm') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarmiperfilmAction',  '_route' => 'modulomonitores_monitores_editarmiperfilm',);
        }

        // modulomonitores_monitores_actualizarmiperfilm
        if ($pathinfo === '/actualizarmiperfilm') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::actualizarmiperfilmAction',  '_route' => 'modulomonitores_monitores_actualizarmiperfilm',);
        }

        // modulomonitores_monitores_verParticipantes
        if (0 === strpos($pathinfo, '/verParticipantes') && preg_match('#^/verParticipantes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_verParticipantes')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::verParticipantesAction',));
        }

        // modulomonitores_monitores_participante
        if (0 === strpos($pathinfo, '/participante') && preg_match('#^/participante/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_participante')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::participanteAction',));
        }

        // modulomonitores_monitores_abandonarSesion
        if (0 === strpos($pathinfo, '/abandonarSesion') && preg_match('#^/abandonarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_abandonarSesion')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::abandonarSesionAction',));
        }

        // modulomonitores_monitores_verHorario
        if (0 === strpos($pathinfo, '/verHorario') && preg_match('#^/verHorario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_verHorario')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::verHorarioAction',));
        }

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

        if (0 === strpos($pathinfo, '/partido')) {
            // moduloclientes_cliente_partidosClientes
            if (0 === strpos($pathinfo, '/partidosClientes') && preg_match('#^/partidosClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_partidosClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\PartidoController::partidosClientesAction',));
            }

            // moduloclientes_cliente_partidoClientes
            if (0 === strpos($pathinfo, '/partidoClientes') && preg_match('#^/partidoClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_partidoClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\PartidoController::partidoClienteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/competicion')) {
            // moduloclientes_cliente_competicionesClientes
            if ($pathinfo === '/competicionesClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CompeticionController::competicionesClientesAction',  '_route' => 'moduloclientes_cliente_competicionesClientes',);
            }

            // moduloclientes_cliente_competicionClientes
            if (0 === strpos($pathinfo, '/competicionClientes') && preg_match('#^/competicionClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_competicionClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CompeticionController::competicionClientesAction',));
            }

        }

        // moduloclientes_cliente_competicion_nueva
        if ($pathinfo === '/nuevaCompeticionClientes') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CompeticionController::nuevaAction',  '_route' => 'moduloclientes_cliente_competicion_nueva',);
        }

        // moduloclientes_cliente_competicion_crear
        if ($pathinfo === '/crearCompeticionClientes') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_competicion_crear;
            }

            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CompeticionController::crearAction',  '_route' => 'moduloclientes_cliente_competicion_crear',);
        }
        not_moduloclientes_cliente_competicion_crear:

        if (0 === strpos($pathinfo, '/equipo')) {
            // moduloclientes_cliente_equiposClientes
            if ($pathinfo === '/equiposClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::equiposClientesAction',  '_route' => 'moduloclientes_cliente_equiposClientes',);
            }

            // moduloclientes_cliente_equipoClientes
            if (0 === strpos($pathinfo, '/equipoClientes') && preg_match('#^/equipoClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_equipoClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::equipoClientesAction',));
            }

        }

        // moduloclientes_cliente_equipo_nuevo
        if (0 === strpos($pathinfo, '/nuevoEquipoCliente') && preg_match('#^/nuevoEquipoCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_equipo_nuevo')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::nuevoAction',));
        }

        // moduloclientes_cliente_equipo_crear
        if ($pathinfo === '/crearEquipo') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_equipo_crear;
            }

            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::crearAction',  '_route' => 'moduloclientes_cliente_equipo_crear',);
        }
        not_moduloclientes_cliente_equipo_crear:

        // moduloclientes_cliente_jugador_nuevo
        if (0 === strpos($pathinfo, '/nuevoJugadorCliente') && preg_match('#^/nuevoJugadorCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_jugador_nuevo')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\JugadorController::nuevoAction',));
        }

        // moduloclientes_cliente_jugador_crear
        if ($pathinfo === '/crearJugador') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_jugador_crear;
            }

            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\JugadorController::crearAction',  '_route' => 'moduloclientes_cliente_jugador_crear',);
        }
        not_moduloclientes_cliente_jugador_crear:

        // moduloclientes_cliente_sesionesClientes
        if ($pathinfo === '/sesionesClientes') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::sesionesClientesAction',  '_route' => 'moduloclientes_cliente_sesionesClientes',);
        }

        if (0 === strpos($pathinfo, '/pag')) {
            // moduloclientes_cliente_pagoSesion
            if ($pathinfo === '/pagoSesion') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::pagoSesionAction',  '_route' => 'moduloclientes_cliente_pagoSesion',);
            }

            // moduloclientes_cliente_pagar
            if ($pathinfo === '/pagar') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_moduloclientes_cliente_pagar;
                }

                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::pagarAction',  '_route' => 'moduloclientes_cliente_pagar',);
            }
            not_moduloclientes_cliente_pagar:

        }

        // moduloclientes_cliente_sesionClientes
        if (0 === strpos($pathinfo, '/sesionClientes') && preg_match('#^/sesionClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_sesionClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::sesionClientesAction',));
        }

        // moduloclientes_cliente_miSesionClientes
        if (0 === strpos($pathinfo, '/miSesionClientes') && preg_match('#^/miSesionClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_miSesionClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::miSesionClientesAction',));
        }

        // moduloclientes_cliente_nuevaReserva
        if (0 === strpos($pathinfo, '/nuevaReserva') && preg_match('#^/nuevaReserva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_nuevaReserva')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::nuevaReservaAction',));
        }

        // moduloclientes_cliente_elegirHora
        if (0 === strpos($pathinfo, '/elegirHora') && preg_match('#^/elegirHora/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_elegirHora')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::elegirHoraAction',));
        }

        // moduloclientes_cliente_mostrarHoras
        if (0 === strpos($pathinfo, '/mostrarHoras') && preg_match('#^/mostrarHoras/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_mostrarHoras;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_mostrarHoras')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::mostrarHorasAction',));
        }
        not_moduloclientes_cliente_mostrarHoras:

        // moduloclientes_cliente_crearReserva
        if (0 === strpos($pathinfo, '/crearReserva') && preg_match('#^/crearReserva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_crearReserva;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_crearReserva')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::crearReservaAction',));
        }
        not_moduloclientes_cliente_crearReserva:

        if (0 === strpos($pathinfo, '/a')) {
            // moduloclientes_cliente_sesionesClientes_apuntarse
            if (0 === strpos($pathinfo, '/apuntarse') && preg_match('#^/apuntarse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_sesionesClientes_apuntarse')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::apuntarseAction',));
            }

            // moduloclientes_cliente_sesionesClientes_abandonar
            if (0 === strpos($pathinfo, '/abandonar') && preg_match('#^/abandonar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_sesionesClientes_abandonar')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::abandonarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/mi')) {
            // moduloclientes_cliente_misSesionesClientes
            if ($pathinfo === '/misSesiones') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::misSesionesAction',  '_route' => 'moduloclientes_cliente_misSesionesClientes',);
            }

            // moduloclientes_cliente_miPerfil
            if (0 === strpos($pathinfo, '/miPerfil') && preg_match('#^/miPerfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_miPerfil')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\UsuarioController::miPerfilAction',));
            }

        }

        // moduloclientes_cliente_escribirSugerencia
        if ($pathinfo === '/escribirSugerencia') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CanchaController::escribirSugerenciaAction',  '_route' => 'moduloclientes_cliente_escribirSugerencia',);
        }

        // moduloclientes_cliente_añadirSugerencia
        if ($pathinfo === '/añadirSugerencia') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_aadirSugerencia;
            }

            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CanchaController::añadirSugerenciaAction',  '_route' => 'moduloclientes_cliente_añadirSugerencia',);
        }
        not_moduloclientes_cliente_aadirSugerencia:

        // moduloclientes_cliente_cancelarReserva
        if (0 === strpos($pathinfo, '/cancelarReserva') && preg_match('#^/cancelarReserva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_moduloclientes_cliente_cancelarReserva;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_cancelarReserva')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::cancelarReservaAction',));
        }
        not_moduloclientes_cliente_cancelarReserva:

        // moduloclientes_cliente_valorar
        if (0 === strpos($pathinfo, '/valorar') && preg_match('#^/valorar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_valorar')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CanchaController::valorarAction',));
        }

        // moduloclientes_cliente_añadirValoracion
        if ($pathinfo === '/añadirValoracion') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_aadirValoracion;
            }

            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\CanchaController::añadirValoracionAction',  '_route' => 'moduloclientes_cliente_añadirValoracion',);
        }
        not_moduloclientes_cliente_aadirValoracion:

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

        // crivero_prueba_cancha_nueva
        if ($pathinfo === '/nuevaCancha') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::nuevaCanchaAction',  '_route' => 'crivero_prueba_cancha_nueva',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // crivero_prueba_cancha_crear
            if ($pathinfo === '/crearCancha') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_crivero_prueba_cancha_crear;
                }

                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::crearCanchaAction',  '_route' => 'crivero_prueba_cancha_crear',);
            }
            not_crivero_prueba_cancha_crear:

            if (0 === strpos($pathinfo, '/cancha')) {
                // crivero_prueba_cancha_editar
                if (0 === strpos($pathinfo, '/cancha/editar') && preg_match('#^/cancha/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancha_editar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::editarAction',));
                }

                // crivero_prueba_cancha_actualizar
                if (0 === strpos($pathinfo, '/cancha/actualizar') && preg_match('#^/cancha/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancha_actualizar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::actualizarAction',));
                }

                // crivero_prueba_cancha_eliminar
                if (0 === strpos($pathinfo, '/cancha/eliminar') && preg_match('#^/cancha/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_crivero_prueba_cancha_eliminar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancha_eliminar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::eliminarCanchaAction',));
                }
                not_crivero_prueba_cancha_eliminar:

            }

        }

        if (0 === strpos($pathinfo, '/aula')) {
            // crivero_prueba_aulas
            if ($pathinfo === '/aulas') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::aulasAction',  '_route' => 'crivero_prueba_aulas',);
            }

            // crivero_prueba_aula
            if (preg_match('#^/aula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_aula')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::aulaAction',));
            }

        }

        // crivero_prueba_aula_nueva
        if ($pathinfo === '/nuevaAula') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::nuevaAulaAction',  '_route' => 'crivero_prueba_aula_nueva',);
        }

        // crivero_prueba_aula_crear
        if ($pathinfo === '/crearAula') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_crivero_prueba_aula_crear;
            }

            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::crearAulaAction',  '_route' => 'crivero_prueba_aula_crear',);
        }
        not_crivero_prueba_aula_crear:

        if (0 === strpos($pathinfo, '/aula')) {
            // crivero_prueba_aula_editar
            if (0 === strpos($pathinfo, '/aula/editar') && preg_match('#^/aula/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_aula_editar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::editarAction',));
            }

            // crivero_prueba_aula_actualizar
            if (0 === strpos($pathinfo, '/aula/actualizar') && preg_match('#^/aula/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_aula_actualizar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::actualizarAction',));
            }

            // crivero_prueba_aula_eliminar
            if (0 === strpos($pathinfo, '/aula/eliminar') && preg_match('#^/aula/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_crivero_prueba_aula_eliminar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_aula_eliminar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::eliminarAulaAction',));
            }
            not_crivero_prueba_aula_eliminar:

        }

        // crivero_prueba_reservas
        if ($pathinfo === '/reservas') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\ReservaController::reservasAction',  '_route' => 'crivero_prueba_reservas',);
        }

        // crivero_prueba_reservas_cliente
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?P<id>[^/]++)/reservas$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_reservas_cliente')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\ReservaController::reservasClienteAction',));
        }

        if (0 === strpos($pathinfo, '/reserva/cancela')) {
            // crivero_prueba_reserva_cancelar
            if (0 === strpos($pathinfo, '/reserva/cancelar') && preg_match('#^/reserva/cancelar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_reserva_cancelar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\ReservaController::cancelarAction',));
            }

            // crivero_prueba_reserva_cancelando
            if (0 === strpos($pathinfo, '/reserva/cancelando') && preg_match('#^/reserva/cancelando/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_crivero_prueba_reserva_cancelando;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_reserva_cancelando')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\ReservaController::cancelandoAction',));
            }
            not_crivero_prueba_reserva_cancelando:

        }

        if (0 === strpos($pathinfo, '/pa')) {
            // crivero_prueba_pagos_usuario
            if (0 === strpos($pathinfo, '/pagos/usuario') && preg_match('#^/pagos/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_pagos_usuario')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::pagosAction',));
            }

            if (0 === strpos($pathinfo, '/partido')) {
                // crivero_prueba_partidos
                if ($pathinfo === '/partidos') {
                    return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PartidoController::partidosAction',  '_route' => 'crivero_prueba_partidos',);
                }

                // crivero_prueba_partido
                if (preg_match('#^/partido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_partido')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PartidoController::partidoAction',));
                }

            }

        }

        // crivero_prueba_partido_nuevo
        if ($pathinfo === '/nuevoPartido') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PartidoController::nuevoAction',  '_route' => 'crivero_prueba_partido_nuevo',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // crivero_prueba_partido_crear
            if ($pathinfo === '/crearPartido') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_crivero_prueba_partido_crear;
                }

                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PartidoController::crearAction',  '_route' => 'crivero_prueba_partido_crear',);
            }
            not_crivero_prueba_partido_crear:

            if (0 === strpos($pathinfo, '/competicion')) {
                // crivero_prueba_competiciones
                if ($pathinfo === '/competiciones') {
                    return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::competicionesAction',  '_route' => 'crivero_prueba_competiciones',);
                }

                // crivero_prueba_competicion
                if (preg_match('#^/competicion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_competicion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::competicionAction',));
                }

                // crivero_prueba_competicion_validar
                if (0 === strpos($pathinfo, '/competicion/validar') && preg_match('#^/competicion/validar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                        goto not_crivero_prueba_competicion_validar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_competicion_validar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::validarAction',));
                }
                not_crivero_prueba_competicion_validar:

                // crivero_prueba_competicion_rechazar
                if (0 === strpos($pathinfo, '/competicion/rechazar') && preg_match('#^/competicion/rechazar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                        goto not_crivero_prueba_competicion_rechazar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_competicion_rechazar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::rechazarAction',));
                }
                not_crivero_prueba_competicion_rechazar:

                // crivero_prueba_competicion_cancelar
                if (0 === strpos($pathinfo, '/competicion/cancelar') && preg_match('#^/competicion/cancelar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                        goto not_crivero_prueba_competicion_cancelar;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_competicion_cancelar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::cancelarAction',));
                }
                not_crivero_prueba_competicion_cancelar:

            }

        }

        // crivero_prueba_competicion_nueva
        if ($pathinfo === '/nuevaCompeticion') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::nuevaAction',  '_route' => 'crivero_prueba_competicion_nueva',);
        }

        // crivero_prueba_competicion_crear
        if ($pathinfo === '/crearCompeticion') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_crivero_prueba_competicion_crear;
            }

            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::crearAction',  '_route' => 'crivero_prueba_competicion_crear',);
        }
        not_crivero_prueba_competicion_crear:

        // crivero_prueba_editarCompeticion
        if (0 === strpos($pathinfo, '/editarCompeticion') && preg_match('#^/editarCompeticion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_editarCompeticion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::editarCompeticionAction',));
        }

        // crivero_prueba_competicion_editar
        if (0 === strpos($pathinfo, '/competicion/editar') && preg_match('#^/competicion/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                goto not_crivero_prueba_competicion_editar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_competicion_editar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CompeticionController::editarAction',));
        }
        not_crivero_prueba_competicion_editar:

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

        if (0 === strpos($pathinfo, '/jugador')) {
            // crivero_prueba_jugadores
            if ($pathinfo === '/jugadores') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\JugadorController::jugadoresAction',  '_route' => 'crivero_prueba_jugadores',);
            }

            // crivero_prueba_jugador
            if (preg_match('#^/jugador/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_jugador')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\JugadorController::jugadorAction',));
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

        // crivero_prueba_sesiones_cliente
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?P<id>[^/]++)/sesiones$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_sesiones_cliente')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::sesionesClienteAction',));
        }

        // crivero_prueba_sesiones_monitor
        if (0 === strpos($pathinfo, '/monitor') && preg_match('#^/monitor/(?P<id>[^/]++)/sesiones$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_sesiones_monitor')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::sesionesMonitorAction',));
        }

        if (0 === strpos($pathinfo, '/sesion')) {
            // crivero_prueba_sesion
            if (preg_match('#^/sesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_sesion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::sesionAction',));
            }

            // crivero_prueba_horarios_sesion
            if (preg_match('#^/sesion/(?P<id>[^/]++)/horarios$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_horarios_sesion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::horariosSesionAction',));
            }

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

        if (0 === strpos($pathinfo, '/envia')) {
            // crivero_prueba_enviarMensaje
            if ($pathinfo === '/enviarMensaje') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::enviarMensajeAction',  '_route' => 'crivero_prueba_enviarMensaje',);
            }

            // crivero_prueba_enviando
            if ($pathinfo === '/enviando') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_crivero_prueba_enviando;
                }

                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::enviandoAction',  '_route' => 'crivero_prueba_enviando',);
            }
            not_crivero_prueba_enviando:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
