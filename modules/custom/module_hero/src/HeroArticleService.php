<?php

namespace Drupal\module_hero;

/**
 * Hero article service class
 */
class HeroArticleService
{
  /**
   * Method for getting articles regarding heroes.
   */
  public function getHeroArticles() {
    $articles = ['Hulk is green!', 'Flash is red!'];

    return $articles;
  }
}
