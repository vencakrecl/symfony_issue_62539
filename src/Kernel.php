<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function __construct(string $environment, bool $debug, private readonly string $app)
    {
        parent::__construct($environment, $debug);
    }

    protected function configureContainer(ContainerConfigurator $container): void
    {
        $container->import('../config/packages/*.yaml');
        $container->import('../config/services.yaml');
        $container->import('../config/connectors/*.yaml');

        $container->import(sprintf('../apps/%s/config/services.yaml', $this->app));
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->import(sprintf('../apps/%s/config/routes/routes.yaml', $this->app));
    }

    public function getCacheDir(): string
    {
        return sprintf('%s/var/cache/%s/%s', $this->getProjectDir(), $this->app, $this->environment);
    }

    public function getLogDir(): string
    {
        return sprintf('%s/var/log/%s', $this->getProjectDir(), $this->app);
    }
}
