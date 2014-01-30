<?php
/**
 * Utilities
 *
 * This file contains a set of helper functions.
 *
 */

/**
 * Prints out an array or object with print_r and pre-tags concatenated.
 *
 * @param array
 */
function dump($array) {
  echo '<pre>' . htmlentities(print_r($array, true)) . '</pre>';
}