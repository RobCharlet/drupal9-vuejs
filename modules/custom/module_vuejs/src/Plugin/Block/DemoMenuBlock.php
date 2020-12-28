<?php

namespace Drupal\module_vuejs\Plugin\Block;

use Drupal\Core\Block\Annotation\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called "Example hero block".
 *
 * @Block(
 *   id="vuejs_demo_menu",
 *   admin_label = @Translation("Example VueJS Menu")
 * )
 */
class DemoMenuBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $build = [];
    $build['#theme'] = 'demo_menu';
    $build['demo_menu']['#markup'] = 'Implement DemoMenu';

    return $build;
  }
}
