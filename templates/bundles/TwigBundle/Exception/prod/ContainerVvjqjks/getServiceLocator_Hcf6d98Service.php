<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.hcf6d98' shared service.

return $this->services['service_locator.hcf6d98'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('blogPostRepository' => function () {
    $f = function (\App\Repository\BlogPostRepository $v = null) { return $v; }; return $f(${($_ = isset($this->services['App\Repository\BlogPostRepository']) ? $this->services['App\Repository\BlogPostRepository'] : $this->load(__DIR__.'/getBlogPostRepositoryService.php')) && false ?: '_'});
}, 'userRepository' => function () {
    $f = function (\App\Repository\UserRepository $v = null) { return $v; }; return $f(${($_ = isset($this->services['App\Repository\UserRepository']) ? $this->services['App\Repository\UserRepository'] : $this->load(__DIR__.'/getUserRepositoryService.php')) && false ?: '_'});
}));
