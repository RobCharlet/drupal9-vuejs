<?php


namespace Drupal\drupalup_route_alter;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events and enables to alter them
 */
class DrupalupRouteSubscriber extends RouteSubscriberBase
{
  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection)
  {
    $user_login_route = $collection->get('user.login');
    $user_login_route->setPath('/hell/login');

    $user_route = $collection->get('user.page');
    $user_route->setPath('/hell');
  }
}
