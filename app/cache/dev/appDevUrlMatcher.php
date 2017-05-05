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

        if (0 === strpos($pathinfo, '/nuevaSesion')) {
            // modulomonitores_monitores_nuevaSesion
            if ($pathinfo === '/nuevaSesion') {
                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::nuevaSesionAction',  '_route' => 'modulomonitores_monitores_nuevaSesion',);
            }

            // modulomonitores_monitores_nuevaSesionDeportiva
            if ($pathinfo === '/nuevaSesionDeportiva') {
                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::nuevaSesionDeportivaAction',  '_route' => 'modulomonitores_monitores_nuevaSesionDeportiva',);
            }

        }

        if (0 === strpos($pathinfo, '/editarSesion')) {
            // modulomonitores_monitores_editarSesion
            if (preg_match('#^/editarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_editarSesion')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::editarSesionAction',));
            }

            // modulomonitores_monitores_editarSesionDedicada
            if (0 === strpos($pathinfo, '/editarSesionDedicada') && preg_match('#^/editarSesionDedicada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_editarSesionDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::editarSesionDedicadaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/suspender')) {
            // modulomonitores_monitores_suspender
            if (preg_match('#^/suspender/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_suspender')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::suspenderAction',));
            }

            if (0 === strpos($pathinfo, '/suspenderSe')) {
                // modulomonitores_monitores_suspenderSe
                if (preg_match('#^/suspenderSe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                        goto not_modulomonitores_monitores_suspenderSe;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_suspenderSe')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::suspenderSeAction',));
                }
                not_modulomonitores_monitores_suspenderSe:

                // modulomonitores_monitores_suspenderSesionDedicada
                if (0 === strpos($pathinfo, '/suspenderSesionDedicada') && preg_match('#^/suspenderSesionDedicada/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_suspenderSesionDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::suspenderSesionDedicadaAction',));
                }

                // modulomonitores_monitores_suspenderSeDe
                if (0 === strpos($pathinfo, '/suspenderSeDe') && preg_match('#^/suspenderSeDe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                        goto not_modulomonitores_monitores_suspenderSeDe;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_suspenderSeDe')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::suspenderSeDeAction',));
                }
                not_modulomonitores_monitores_suspenderSeDe:

            }

        }

        // modulomonitores_monitores_nuevaSesionDedicada
        if ($pathinfo === '/nuevaSesionDedicada') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::nuevaSesionDedicadaAction',  '_route' => 'modulomonitores_monitores_nuevaSesionDedicada',);
        }

        if (0 === strpos($pathinfo, '/crearSesion')) {
            // modulomonitores_monitores_crearSesion
            if ($pathinfo === '/crearSesion') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_modulomonitores_monitores_crearSesion;
                }

                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::crearSesionAction',  '_route' => 'modulomonitores_monitores_crearSesion',);
            }
            not_modulomonitores_monitores_crearSesion:

            // modulomonitores_monitores_crearSesionDeportiva
            if ($pathinfo === '/crearSesionDeportiva') {
                if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                    goto not_modulomonitores_monitores_crearSesionDeportiva;
                }

                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::crearSesionDeportivaAction',  '_route' => 'modulomonitores_monitores_crearSesionDeportiva',);
            }
            not_modulomonitores_monitores_crearSesionDeportiva:

        }

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

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_editarDedicada')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::editarDedicadaAction',));
            }
            not_modulomonitores_monitores_editarDedicada:

        }

        // modulomonitores_monitores_crearSesionDedicada
        if ($pathinfo === '/crearSesionDedicada') {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_modulomonitores_monitores_crearSesionDedicada;
            }

            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::crearSesionDedicadaAction',  '_route' => 'modulomonitores_monitores_crearSesionDedicada',);
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
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\PerfilController::miperfilmAction',  '_route' => 'modulomonitores_monitores_miperfilm',);
        }

        // modulomonitores_monitores_editarmiperfilm
        if ($pathinfo === '/editarmiperfilm') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\PerfilController::editarmiperfilmAction',  '_route' => 'modulomonitores_monitores_editarmiperfilm',);
        }

        // modulomonitores_monitores_actualizarmiperfilm
        if ($pathinfo === '/actualizarmiperfilm') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\PerfilController::actualizarmiperfilmAction',  '_route' => 'modulomonitores_monitores_actualizarmiperfilm',);
        }

        if (0 === strpos($pathinfo, '/miSesion')) {
            if (0 === strpos($pathinfo, '/miSesionMonitores')) {
                // modulomonitores_monitores_verParticipantes
                if (preg_match('#^/miSesionMonitores/(?P<id>[^/]++)/verParticipantes$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_verParticipantes')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\ParticipantesController::verParticipantesAction',));
                }

                // modulomonitores_monitores_participante
                if (preg_match('#^/miSesionMonitores/(?P<id>[^/]++)/verParticipantes/(?P<idUsuario>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_participante')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\ParticipantesController::participanteAction',));
                }

            }

            // modulomonitores_monitores_participantePrivado
            if (0 === strpos($pathinfo, '/miSesionDedicada') && preg_match('#^/miSesionDedicada/(?P<id>[^/]++)/participantePrivado$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_participantePrivado')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\ParticipantesController::participantePrivadoAction',));
            }

        }

        // modulomonitores_monitores_abandonarSesion
        if (0 === strpos($pathinfo, '/abandonarSesion') && preg_match('#^/abandonarSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_abandonarSesion')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::abandonarSesionAction',));
        }

        // modulomonitores_monitores_expulsar
        if (0 === strpos($pathinfo, '/expulsar') && preg_match('#^/expulsar/(?P<id>[^/]++)/(?P<idUsuario>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_expulsar')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::expulsarAction',));
        }

        if (0 === strpos($pathinfo, '/terminar')) {
            // modulomonitores_monitores_terminar
            if (preg_match('#^/terminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_modulomonitores_monitores_terminar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_terminar')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::terminarAction',));
            }
            not_modulomonitores_monitores_terminar:

            // modulomonitores_monitores_terminarDe
            if (0 === strpos($pathinfo, '/terminarDe') && preg_match('#^/terminarDe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_modulomonitores_monitores_terminarDe;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_terminarDe')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DedicadaController::terminarDeAction',));
            }
            not_modulomonitores_monitores_terminarDe:

        }

        // modulomonitores_monitores_notificacionesMonitor
        if ($pathinfo === '/notificacionesMonitor') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\NotificacionesController::notificacionesMonitorAction',  '_route' => 'modulomonitores_monitores_notificacionesMonitor',);
        }

        // modulomonitores_monitores_verHorario
        if (0 === strpos($pathinfo, '/verHorario') && preg_match('#^/verHorario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_verHorario')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\HorarioController::verHorarioAction',));
        }

        // modulomonitores_monitores_enviarMensajeCliente
        if (0 === strpos($pathinfo, '/enviarMensajeCliente') && preg_match('#^/enviarMensajeCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_enviarMensajeCliente')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\MensajeriaController::enviarMensajeClienteAction',));
        }

        // modulomonitores_monitores_mensajearAdministradorMonitor
        if ($pathinfo === '/mensajearAdministradorMonitor') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\MensajeriaController::mensajearAdministradorMonitorAction',  '_route' => 'modulomonitores_monitores_mensajearAdministradorMonitor',);
        }

        // modulomonitores_monitores_enviandoMonitor
        if (0 === strpos($pathinfo, '/enviandoMonitor') && preg_match('#^/enviandoMonitor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_modulomonitores_monitores_enviandoMonitor;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_enviandoMonitor')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\MensajeriaController::enviandoMonitorAction',));
        }
        not_modulomonitores_monitores_enviandoMonitor:

        if (0 === strpos($pathinfo, '/mensaje')) {
            // modulomonitores_monitores_responderMensajeMonitor
            if (0 === strpos($pathinfo, '/mensaje/responderMonitor') && preg_match('#^/mensaje/responderMonitor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_responderMensajeMonitor')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\MensajeriaController::responderMensajeMonitorAction',));
            }

            if (0 === strpos($pathinfo, '/mensajes')) {
                // modulomonitores_monitores_mensajes_recibidosMonitor
                if ($pathinfo === '/mensajes/recibidosMonitor') {
                    return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\MensajeriaController::mensajesRecibidosMonitorAction',  '_route' => 'modulomonitores_monitores_mensajes_recibidosMonitor',);
                }

                // modulomonitores_monitores_mensajes_enviadosMonitor
                if ($pathinfo === '/mensajes/enviadosMonitor') {
                    return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\MensajeriaController::mensajesEnviadosMonitorAction',  '_route' => 'modulomonitores_monitores_mensajes_enviadosMonitor',);
                }

            }

            // modulomonitores_monitores_mensajeMonitor
            if (0 === strpos($pathinfo, '/mensajeMonitor') && preg_match('#^/mensajeMonitor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_mensajeMonitor')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\MensajeriaController::mensajeMonitorAction',));
            }

        }

        // modulomonitores_monitores_listadoAulas
        if (rtrim($pathinfo, '/') === '/listadoAulas') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'modulomonitores_monitores_listadoAulas');
            }

            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\AulasController::listadoAulasAction',  '_route' => 'modulomonitores_monitores_listadoAulas',);
        }

        // modulomonitores_monitores_verAula
        if (0 === strpos($pathinfo, '/verAula') && preg_match('#^/verAula/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_verAula')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\AulasController::verAulaAction',));
        }

        // modulomonitores_monitores_disponibilidadM
        if (0 === strpos($pathinfo, '/aula') && preg_match('#^/aula/(?P<id>[^/]++)/disponibilidadM$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_disponibilidadM')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\AulasController::disponibilidadMAction',));
        }

        // modulomonitores_monitores_listadoParticipantes
        if ($pathinfo === '/listadoParticipantes') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\ParticipantesController::listadoParticipantesAction',  '_route' => 'modulomonitores_monitores_listadoParticipantes',);
        }

        // modulomonitores_monitores_participanteListado
        if (0 === strpos($pathinfo, '/participanteListado') && preg_match('#^/participanteListado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_participanteListado')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\ParticipantesController::participanteListadoAction',));
        }

        // modulomonitores_monitores_recintoPublico
        if ($pathinfo === '/recintoPublico') {
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\SesionController::recintoPublicoAction',  '_route' => 'modulomonitores_monitores_recintoPublico',);
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
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_partidoClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\PartidoController::partidoClientesAction',));
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
        if (0 === strpos($pathinfo, '/crearEquipo') && preg_match('#^/crearEquipo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_equipo_crear;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_equipo_crear')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::crearAction',));
        }
        not_moduloclientes_cliente_equipo_crear:

        // moduloclientes_cliente_notificacion_nueva
        if (0 === strpos($pathinfo, '/nuevaNotificacionCliente') && preg_match('#^/nuevaNotificacionCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_notificacion_nueva')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\PartidoController::nuevaNotificacionAction',));
        }

        // moduloclientes_cliente_notificacion_crear
        if (0 === strpos($pathinfo, '/crearNotificacion') && preg_match('#^/crearNotificacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_notificacion_crear;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_notificacion_crear')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\PartidoController::crearNotificacionAction',));
        }
        not_moduloclientes_cliente_notificacion_crear:

        if (0 === strpos($pathinfo, '/e')) {
            // moduloclientes_cliente_editarEquipo
            if (0 === strpos($pathinfo, '/editarEquipo') && preg_match('#^/editarEquipo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_editarEquipo')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::editarEquipoAction',));
            }

            // moduloclientes_cliente_equipo_editar
            if (0 === strpos($pathinfo, '/equipo/editar') && preg_match('#^/equipo/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_moduloclientes_cliente_equipo_editar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_equipo_editar')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::editarAction',));
            }
            not_moduloclientes_cliente_equipo_editar:

            // moduloclientes_cliente_equipo_eliminar
            if (0 === strpos($pathinfo, '/eliminarEquipoCliente') && preg_match('#^/eliminarEquipoCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_moduloclientes_cliente_equipo_eliminar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_equipo_eliminar')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::eliminarEquipoAction',));
            }
            not_moduloclientes_cliente_equipo_eliminar:

        }

        if (0 === strpos($pathinfo, '/jugador')) {
            // moduloclientes_cliente_jugador_validar
            if (0 === strpos($pathinfo, '/jugador/validar') && preg_match('#^/jugador/validar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                    goto not_moduloclientes_cliente_jugador_validar;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_jugador_validar')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\JugadorController::validarAction',));
            }
            not_moduloclientes_cliente_jugador_validar:

            // moduloclientes_cliente_jugadoresClientes
            if (0 === strpos($pathinfo, '/jugadoresClientes') && preg_match('#^/jugadoresClientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_jugadoresClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\JugadorController::jugadoresClientesAction',));
            }

        }

        // moduloclientes_cliente_jugador_nuevo
        if (0 === strpos($pathinfo, '/nuevoJugadorCliente') && preg_match('#^/nuevoJugadorCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_jugador_nuevo')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\JugadorController::nuevoAction',));
        }

        // moduloclientes_cliente_jugador_crear
        if (0 === strpos($pathinfo, '/crearJugador') && preg_match('#^/crearJugador/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_jugador_crear;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_jugador_crear')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\JugadorController::crearAction',));
        }
        not_moduloclientes_cliente_jugador_crear:

        // moduloclientes_cliente_jugador_eliminar
        if (0 === strpos($pathinfo, '/eliminarJugadorCliente') && preg_match('#^/eliminarJugadorCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_moduloclientes_cliente_jugador_eliminar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_jugador_eliminar')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\EquipoController::eliminarJugadorAction',));
        }
        not_moduloclientes_cliente_jugador_eliminar:

        if (0 === strpos($pathinfo, '/sesiones')) {
            // moduloclientes_cliente_sesionesClientes
            if ($pathinfo === '/sesionesClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::sesionesClientesAction',  '_route' => 'moduloclientes_cliente_sesionesClientes',);
            }

            // moduloclientes_cliente_sesionesPrivadasClientes
            if ($pathinfo === '/sesionesPrivadasClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::sesionesPrivadasClientesAction',  '_route' => 'moduloclientes_cliente_sesionesPrivadasClientes',);
            }

        }

        if (0 === strpos($pathinfo, '/pago')) {
            // moduloclientes_cliente_pagoSesion
            if (0 === strpos($pathinfo, '/pagoSesion') && preg_match('#^/pagoSesion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_pagoSesion')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::pagoSesionAction',));
            }

            // moduloclientes_cliente_pagoReserva
            if (0 === strpos($pathinfo, '/pagoReserva') && preg_match('#^/pagoReserva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_pagoReserva')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::pagoReservaAction',));
            }

        }

        // moduloclientes_cliente_comprobarReserva
        if (0 === strpos($pathinfo, '/comprobarReserva') && preg_match('#^/comprobarReserva/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_comprobarReserva;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_comprobarReserva')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\ReservaController::comprobarReservaAction',));
        }
        not_moduloclientes_cliente_comprobarReserva:

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

        // moduloclientes_cliente_misSesionesClientes
        if ($pathinfo === '/misSesiones') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::misSesionesAction',  '_route' => 'moduloclientes_cliente_misSesionesClientes',);
        }

        // moduloclientes_cliente_verMonitor
        if (0 === strpos($pathinfo, '/verMonitor') && preg_match('#^/verMonitor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_verMonitor')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\SesionController::verMonitorAction',));
        }

        // moduloclientes_cliente_miPerfil
        if ($pathinfo === '/miPerfil') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\UsuarioController::miPerfilAction',  '_route' => 'moduloclientes_cliente_miPerfil',);
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

        // moduloclientes_cliente_editarPerfil
        if ($pathinfo === '/editarPerfil') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\UsuarioController::editarPerfilAction',  '_route' => 'moduloclientes_cliente_editarPerfil',);
        }

        // moduloclientes_cliente_actualizarPerfil
        if ($pathinfo === '/actualizarPerfil') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\UsuarioController::actualizarPerfilAction',  '_route' => 'moduloclientes_cliente_actualizarPerfil',);
        }

        // moduloclientes_cliente_notificacionesCliente
        if ($pathinfo === '/notificacionesCliente') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\MensajeriaController::notificacionesClienteAction',  '_route' => 'moduloclientes_cliente_notificacionesCliente',);
        }

        // moduloclientes_cliente_enviarMensajeMonitor
        if (0 === strpos($pathinfo, '/enviarMensajeMonitor') && preg_match('#^/enviarMensajeMonitor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_enviarMensajeMonitor')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\MensajeriaController::enviarMensajeMonitorAction',));
        }

        // moduloclientes_cliente_mensajearAdministradorCliente
        if ($pathinfo === '/mensajearAdministradorCliente') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\MensajeriaController::mensajearAdministradorClienteAction',  '_route' => 'moduloclientes_cliente_mensajearAdministradorCliente',);
        }

        // moduloclientes_cliente_enviandoCliente
        if (0 === strpos($pathinfo, '/enviandoCliente') && preg_match('#^/enviandoCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_moduloclientes_cliente_enviandoCliente;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_enviandoCliente')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\MensajeriaController::enviandoClienteAction',));
        }
        not_moduloclientes_cliente_enviandoCliente:

        if (0 === strpos($pathinfo, '/mensaje')) {
            // moduloclientes_cliente_responderMensajeCliente
            if (0 === strpos($pathinfo, '/mensaje/responderCliente') && preg_match('#^/mensaje/responderCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_responderMensajeCliente')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\MensajeriaController::responderMensajeClienteAction',));
            }

            if (0 === strpos($pathinfo, '/mensajes')) {
                // moduloclientes_cliente_mensajes_recibidosCliente
                if ($pathinfo === '/mensajes/recibidosCliente') {
                    return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\MensajeriaController::mensajesRecibidosClienteAction',  '_route' => 'moduloclientes_cliente_mensajes_recibidosCliente',);
                }

                // moduloclientes_cliente_mensajes_enviadosCliente
                if ($pathinfo === '/mensajes/enviadosCliente') {
                    return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\MensajeriaController::mensajesEnviadosClienteAction',  '_route' => 'moduloclientes_cliente_mensajes_enviadosCliente',);
                }

            }

            // moduloclientes_cliente_mensajeCliente
            if (0 === strpos($pathinfo, '/mensajeCliente') && preg_match('#^/mensajeCliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_mensajeCliente')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\MensajeriaController::mensajeClienteAction',));
            }

        }

        // moduloclientes_cliente_pagosCliente
        if ($pathinfo === '/pagosCliente') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\UsuarioController::pagosClienteAction',  '_route' => 'moduloclientes_cliente_pagosCliente',);
        }

        if (0 === strpos($pathinfo, '/home')) {
            // moduloclientes_cliente_homeCliente
            if ($pathinfo === '/homeCliente') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\UsuarioController::homeClienteAction',  '_route' => 'moduloclientes_cliente_homeCliente',);
            }

            // crivero_prueba_home
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::homeAction',  '_route' => 'crivero_prueba_home',);
            }

        }

        // crivero_prueba_perfil
        if ($pathinfo === '/perfil') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\UsuarioController::perfilAction',  '_route' => 'crivero_prueba_perfil',);
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

                // crivero_prueba_cancha_reservas
                if (preg_match('#^/cancha/(?P<id>[^/]++)/reservas$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancha_reservas')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::canchaReservasAction',));
                }

                // crivero_prueba_cancha_sesiones
                if (preg_match('#^/cancha/(?P<id>[^/]++)/sesiones$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancha_sesiones')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::canchaSesionesAction',));
                }

                // crivero_prueba_cancha_disponibilidad
                if (preg_match('#^/cancha/(?P<id>[^/]++)/disponibilidad$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancha_disponibilidad')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\CanchaController::disponibilidadCanchaAction',));
                }

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

            // crivero_prueba_aula_disponibilidad
            if (preg_match('#^/aula/(?P<id>[^/]++)/disponibilidad$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_aula_disponibilidad')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::disponibilidadAulaAction',));
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

        // crivero_prueba_pagos_usuario
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?P<id>[^/]++)/pagos$#s', $pathinfo, $matches)) {
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

        // crivero_prueba_partido_nuevo
        if (0 === strpos($pathinfo, '/nuevoPartido') && preg_match('#^/nuevoPartido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_partido_nuevo')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PartidoController::nuevoAction',));
        }

        // crivero_prueba_partido_crear
        if (0 === strpos($pathinfo, '/crearPartido') && preg_match('#^/crearPartido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_crivero_prueba_partido_crear;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_partido_crear')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PartidoController::crearAction',));
        }
        not_crivero_prueba_partido_crear:

        // crivero_prueba_editarPartido
        if (0 === strpos($pathinfo, '/editarPartido') && preg_match('#^/editarPartido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_editarPartido')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PartidoController::editarPartidoAction',));
        }

        // crivero_prueba_partido_editar
        if (0 === strpos($pathinfo, '/partido/editar') && preg_match('#^/partido/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'PUT', 'GET', 'HEAD'));
                goto not_crivero_prueba_partido_editar;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_partido_editar')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PartidoController::editarAction',));
        }
        not_crivero_prueba_partido_editar:

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

        // crivero_prueba_sesiones_aula
        if (0 === strpos($pathinfo, '/aula') && preg_match('#^/aula/(?P<id>[^/]++)/sesiones$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_sesiones_aula')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\AulaController::sesionesAulaAction',));
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

        // crivero_prueba_tarifas
        if ($pathinfo === '/tarifas') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::tarifasAction',  '_route' => 'crivero_prueba_tarifas',);
        }

        // crivero_prueba_actualizarTarifas
        if ($pathinfo === '/actualizarTarifas') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\SesionController::actualizarTarifasAction',  '_route' => 'crivero_prueba_actualizarTarifas',);
        }

        // crivero_prueba_enviarMensaje
        if (0 === strpos($pathinfo, '/enviarMensaje') && preg_match('#^/enviarMensaje/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_enviarMensaje')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\MensajeriaController::enviarMensajeAction',));
        }

        // crivero_prueba_mensajearDirector
        if ($pathinfo === '/mensajearDirector') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\MensajeriaController::mensajearDirectorAction',  '_route' => 'crivero_prueba_mensajearDirector',);
        }

        // crivero_prueba_enviando
        if (0 === strpos($pathinfo, '/enviando') && preg_match('#^/enviando/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                goto not_crivero_prueba_enviando;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_enviando')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\MensajeriaController::enviandoAction',));
        }
        not_crivero_prueba_enviando:

        if (0 === strpos($pathinfo, '/mensaje')) {
            // crivero_prueba_responderMensaje
            if (0 === strpos($pathinfo, '/mensaje/responder') && preg_match('#^/mensaje/responder/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_responderMensaje')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\MensajeriaController::responderMensajeAction',));
            }

            if (0 === strpos($pathinfo, '/mensajes')) {
                // crivero_prueba_mensajes_recibidos
                if ($pathinfo === '/mensajes/recibidos') {
                    return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\MensajeriaController::mensajesRecibidosAction',  '_route' => 'crivero_prueba_mensajes_recibidos',);
                }

                // crivero_prueba_mensajes_enviados
                if ($pathinfo === '/mensajes/enviados') {
                    return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\MensajeriaController::mensajesEnviadosAction',  '_route' => 'crivero_prueba_mensajes_enviados',);
                }

            }

            // crivero_prueba_mensaje
            if (preg_match('#^/mensaje/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_mensaje')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\MensajeriaController::mensajeAction',));
            }

        }

        // crivero_prueba_notificacionesAdmin
        if ($pathinfo === '/notificacionesAdmin') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\MensajeriaController::notificacionesAdminAction',  '_route' => 'crivero_prueba_notificacionesAdmin',);
        }

        // crivero_prueba_publicaciones
        if ($pathinfo === '/publicaciones') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\PublicacionesController::publicacionesAction',  '_route' => 'crivero_prueba_publicaciones',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
