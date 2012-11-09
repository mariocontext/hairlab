<?php


// The excerpt based on character
function my_string_limit_char($excerpt, $substr=0)
{

	$string = strip_tags(str_replace('...', '...', $excerpt));
	if ($substr>0) {
		$string = substr($string, 0, $substr);
	}
	return $string;
		}

// The excerpt based on words
function my_string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words).'... ';
}

add_action( 'after_setup_theme', 'my_setup' );

?>