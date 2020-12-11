<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\module_hero\HeroArticleService;
use Symfony\Component\DependencyInjection\ContainerInterface;

class HeroController extends ControllerBase
{
  private HeroArticleService $heroArticleService;

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('module_hero.hero_articles')
    );
  }

  public function __construct(HeroArticleService $heroArticleService)
  {
    $this->heroArticleService = $heroArticleService;
  }

  public function heroList() {

/*    kint($this->heroArticleService); die;*/

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
