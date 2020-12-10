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

    $heroesItem = '';
    foreach ($heroes as $hero) {
      $heroesItem.= '<li>'.$hero['name'].'</li>';
      $this->
    }

    return [
      '#type' => 'markup',
      '#markup' => '<h4>'.$this->t('Our heroes list').'</h4><ol>' .$heroesItem.'</ol>',
    ];
  }
}
