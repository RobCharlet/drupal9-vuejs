<?php

namespace Drupal\module_vuejs\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for module_vuejs routes.
 */
class ModuleVuejsController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
