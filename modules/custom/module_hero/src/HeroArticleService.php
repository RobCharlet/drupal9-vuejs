<?php

namespace Drupal\module_hero;

use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Hero article service class
 */
class HeroArticleService
{
  private EntityTypeManagerInterface $entityTypeManager;

  public function __construct(EntityTypeManagerInterface $entityTypeManager)
  {
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * Method for getting articles regarding heroes.
   */
  public function getHeroArticles() {
    $articles = $this->entityTypeManager
      ->getListBuilder('node')
      ->getStorage()
      ->loadByProperties(['type'=>'article']);
    return $articles;
  }
}
