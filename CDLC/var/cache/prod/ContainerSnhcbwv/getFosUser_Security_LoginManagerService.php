<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.security.login_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\FOSUserBundle\\Security\\LoginManagerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\FOSUserBundle\\Security\\LoginManager.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserChecker.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy.php';

return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : ($this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy.main']) ? $this->services['security.authentication.session_strategy.main'] : ($this->services['security.authentication.session_strategy.main'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, NULL);
