<?php
/**
 * @file
 * Contains \Drupal\demo\Controller\FaneballController.
 */

namespace Drupal\demo\Controller;

/**
 * DemoController.
 */
class FaneballController {
  /**
   * Generates an example page.
   */
  public function faneball() {
    return array(
      '#markup' => t('Enter Numbers Here'),
    );
  }      
}