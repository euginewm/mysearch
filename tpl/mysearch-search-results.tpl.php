<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_mysearch_search_results().
 *
 * Available variables:
 * - $search_results: All results of mysearch module
 * - $keys: The string with all search keys
 *
 *
 * @see mysearch_preprocess_mysearch_search_results()
 */

?>
<ul>
  <?php foreach ($search_results as $record): ?>
    <li>
      <?php print $record->node_link; ?>
    </li>
  <?php endforeach; ?>
</ul>
