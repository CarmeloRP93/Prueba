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
            return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DefaultController::homeMonitoresAction',  '_route' => 'modulomonitores_monitores_homeMonitores',);
        }

        if (0 === strpos($pathinfo, '/sesion')) {
            // modulomonitores_monitores_sesionesMonitores
            if ($pathinfo === '/sesionesMonitores') {
                return array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DefaultController::sesionesMonitoresAction',  '_route' => 'modulomonitores_monitores_sesionesMonitores',);
            }

            // modulomonitores_monitores_sesionMonitores
            if (0 === strpos($pathinfo, '/sesionMonitores') && preg_match('#^/sesionMonitores/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulomonitores_monitores_sesionMonitores')), array (  '_controller' => 'modulomonitores\\monitoresBundle\\Controller\\DefaultController::sesionMonitoresAction',));
            }

        }

        // moduloclientes_cliente_homeClientes
        if ($pathinfo === '/homeClientes') {
            return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::homeClientesAction',  '_route' => 'moduloclientes_cliente_homeClientes',);
        }

        if (0 === strpos($pathinfo, '/cancha')) {
            // moduloclientes_cliente_canchasClientes
            if ($pathinfo === '/canchasClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::canchasClientesAction',  '_route' => 'moduloclientes_cliente_canchasClientes',);
            }

            // moduloclientes_cliente_canchaClientes
            if (0 === strpos($pathinfo, '/canchaClientes') && preg_match('#^/canchaClientes/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_canchaClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::canchaClientesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/reserva')) {
            // moduloclientes_cliente_reservasClientes
            if ($pathinfo === '/reservasClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::reservasClientesAction',  '_route' => 'moduloclientes_cliente_reservasClientes',);
            }

            // moduloclientes_cliente_reservaClientes
            if (0 === strpos($pathinfo, '/reservaClientes') && preg_match('#^/reservaClientes/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_reservaClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::reservaClientesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/torneo')) {
            // moduloclientes_cliente_torneosClientes
            if ($pathinfo === '/torneosClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::torneosClientesAction',  '_route' => 'moduloclientes_cliente_torneosClientes',);
            }

            // moduloclientes_cliente_torneoClientes
            if (0 === strpos($pathinfo, '/torneoClientes') && preg_match('#^/torneoClientes/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_torneoClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::torneoClientesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sesion')) {
            // moduloclientes_cliente_sesionesClientes
            if ($pathinfo === '/sesionesClientes') {
                return array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::sesionesClientesAction',  '_route' => 'moduloclientes_cliente_sesionesClientes',);
            }

            // moduloclientes_cliente_sesionClientes
            if (0 === strpos($pathinfo, '/sesionClientes') && preg_match('#^/sesionClientes/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'moduloclientes_cliente_sesionClientes')), array (  '_controller' => 'moduloclientes\\clienteBundle\\Controller\\DefaultController::sesionClientesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/h')) {
            // crivero_prueba_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_homepage')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::indexAction',  'name' => 'Pablo',));
            }

            // crivero_prueba_home
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::homeAction',  '_route' => 'crivero_prueba_home',);
            }

        }

        // crivero_prueba_clientes
        if ($pathinfo === '/clientes') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::clientesAction',  '_route' => 'crivero_prueba_clientes',);
        }

        // crivero_prueba_monitores
        if ($pathinfo === '/monitores') {
            return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::monitoresAction',  '_route' => 'crivero_prueba_monitores',);
        }

        // crivero_prueba_cliente
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cliente')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::clienteAction',));
        }

        // crivero_prueba_monitor
        if (0 === strpos($pathinfo, '/monitor') && preg_match('#^/monitor/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_monitor')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::monitorAction',));
        }

        if (0 === strpos($pathinfo, '/cancha')) {
            // crivero_prueba_canchas
            if ($pathinfo === '/canchas') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::canchasAction',  '_route' => 'crivero_prueba_canchas',);
            }

            // crivero_prueba_cancha
            if (preg_match('#^/cancha/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_cancha')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::canchaAction',));
            }

        }

        if (0 === strpos($pathinfo, '/torneo')) {
            // crivero_prueba_torneos
            if ($pathinfo === '/torneos') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::torneosAction',  '_route' => 'crivero_prueba_torneos',);
            }

            // crivero_prueba_torneo
            if (preg_match('#^/torneo/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_torneo')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::torneoAction',));
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/sesion')) {
                // crivero_prueba_sesiones
                if ($pathinfo === '/sesiones') {
                    return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::sesionesAction',  '_route' => 'crivero_prueba_sesiones',);
                }

                // crivero_prueba_sesion
                if (preg_match('#^/sesion/(?P<matricula>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'crivero_prueba_sesion')), array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::sesionAction',));
                }

            }

            // crivero_prueba_soccer
            if ($pathinfo === '/soccer') {
                return array (  '_controller' => 'Crivero\\PruebaBundle\\Controller\\DefaultController::soccerAction',  '_route' => 'crivero_prueba_soccer',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
