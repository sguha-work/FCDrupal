<?php
/**
 * @file
 * Contains \Drupal\article\Plugin\Block\XaiBlock.
 */

namespace Drupal\article\Plugin\Block;

use Drupal\Core\Block\BlockBase;


/**
 * Provides a block with gui to embed FusionCharts.
 *
 * @Block(
 *   id = "article_block",
 *   admin_label = @Translation("FC Drupal"),
 *   category = @Translation("Custom article block example")
 * )
 */
class FCDrupalBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' => 'markup',
      '#markup' => 'This block list the article.',
    );
  }
}
