<?php

namespace Drupal\module_hero\Controller;

class HeroController
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
    }

    return [
      '#type' => 'markup',
      '#markup' => '<ol>' .$heroesItem.'</ol>',
    ];
  }
}
