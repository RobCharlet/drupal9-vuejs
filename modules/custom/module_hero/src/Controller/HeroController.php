<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

class HeroController extends ControllerBase
{
  public function heroList() {
    $heroes = [
      ['name'=>'Superman'],
      ['name'=>'Wonder Woman'],
      ['name'=>'Spider-Man'],
      ['name'=>'Batman'],
      ['name'=>'Black Panther'],
      ['name'=>'Captain America'],
      ['name'=>'Storm'],
      ['name'=>'Goku'],
    ];

    return [
      '#theme' => 'hero_list',
      '#items' => $heroes,
      '#title' => $this->t('Our wonderful heroes list')
    ];
  }
}
