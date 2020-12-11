<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called "Example hero block".
 *
 * @Block(
 *   id="module_hero_hero",
 *   admin_label = @Translation("Example hero block")
 * )
 */
class HeroBlock extends BlockBase {

  /**
   * {@inheritDoc}
   */
  public function build()
  {
    $heroes = [
      ['hero_name'=>'Superman', 'real_name'=>'David Banner'],
      ['hero_name'=>'Wonder Woman', 'real_name'=>'Natalia Coquinova'],
      ['hero_name'=>'Spider-Man', 'real_name'=>'Jean-Claude Duce'],
      ['hero_name'=>'Batman', 'real_name'=>'Gordon Freeman'],
      ['hero_name'=>'Black Panther', 'real_name'=>'Mike Tyson'],
      ['hero_name'=>'Captain America', 'real_name'=>'Renaud'],
      ['hero_name'=>'Storm', 'real_name'=>'Daniel Balavoine'],
      ['hero_name'=>'Goku', 'real_name'=>'Son Gonquou'],
    ];

    $table = [
      '#type'=>'table',
      '#header'=>[
        $this->t('Hero name'),
        $this->t('Real name')
      ]
    ];

    foreach ($heroes as $hero) {
      $table[] = [
        'hero_name' => [
          '#type' => 'markup',
          '#markup' => $hero['hero_name']
        ],
        'real_name' => [
          '#type' => 'markup',
          '#markup' => $hero['real_name']
        ]
      ];
    }

    $heroService=Drupal::service('module_hero.hero_articles');
    kint($heroService->getHeroArticles());

    return $table;
  }
}
