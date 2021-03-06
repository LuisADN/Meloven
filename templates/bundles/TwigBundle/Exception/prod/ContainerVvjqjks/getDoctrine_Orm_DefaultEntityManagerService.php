<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/DoctrineProvider.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerAwareEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

$a = ${($_ = isset($this->services['doctrine.system_cache_pool']) ? $this->services['doctrine.system_cache_pool'] : $this->load(__DIR__.'/getDoctrine_SystemCachePoolService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

$c = new \Symfony\Component\Cache\DoctrineProvider($a);

$d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($b, array(0 => ($this->targetDirs[3].'/src/Entity'), 1 => ($this->targetDirs[3].'/vendor/vich/uploader-bundle/Entity')));

$e = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$e->addDriver($d, 'App\\Entity');
$e->addDriver($d, 'Vich\\UploaderBundle\\Entity');

$f = new \Doctrine\ORM\Configuration();
$f->setEntityNamespaces(array('App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity'));
$f->setMetadataCacheImpl($c);
$f->setQueryCacheImpl($c);
$f->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['doctrine.result_cache_pool']) ? $this->services['doctrine.result_cache_pool'] : $this->load(__DIR__.'/getDoctrine_ResultCachePoolService.php')) && false ?: '_'}));
$f->setMetadataDriverImpl($e);
$f->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$f->setProxyNamespace('Proxies');
$f->setAutoGenerateProxyClasses(false);
$f->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$f->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$f->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$f->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$f->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this)) && false ?: '_'});
$f->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Repository\\BlogPostRepository' => function () {
    return ${($_ = isset($this->services['App\Repository\BlogPostRepository']) ? $this->services['App\Repository\BlogPostRepository'] : $this->load(__DIR__.'/getBlogPostRepositoryService.php')) && false ?: '_'};
}, 'App\\Repository\\EventRepository' => function () {
    return ${($_ = isset($this->services['App\Repository\EventRepository']) ? $this->services['App\Repository\EventRepository'] : $this->load(__DIR__.'/getEventRepositoryService.php')) && false ?: '_'};
}, 'App\\Repository\\PhotoRepository' => function () {
    return ${($_ = isset($this->services['App\Repository\PhotoRepository']) ? $this->services['App\Repository\PhotoRepository'] : $this->load(__DIR__.'/getPhotoRepositoryService.php')) && false ?: '_'};
}, 'App\\Repository\\UserRepository' => function () {
    return ${($_ = isset($this->services['App\Repository\UserRepository']) ? $this->services['App\Repository\UserRepository'] : $this->load(__DIR__.'/getUserRepositoryService.php')) && false ?: '_'};
}))));

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->load(__DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php')) && false ?: '_'}, $f);

${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array())) && false ?: '_'}->configure($instance);

return $instance;
