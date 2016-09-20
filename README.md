# Porter 2 Stemmer for PHP
A stemmer takes a given word and follows a set of rules to reduce this word
to search-index-usable stem (as opposed to the actual word root). For example,
*aggravate*, *aggravated*, and *aggravates* all reduce to "aggrav," thus
creating a commonality between those words.

Martin Porter's English (Porter 2) Algorithm improves on the original Porter
stemmer as described [here](http://snowball.tartarus.org/algorithms/english/stemmer.html).

## Usage
After including the *porter2* class in your code execution (e.g., autoloading,
require_once, or a framework-specific call like Drupal's module_load_include()),
stem a word (string) as follows:
```php
$word = 'aggravated';
$porter2 = new porter2($word);
echo $porter2->stem(); // will print 'aggrav'
```

## Custom exclusions
The default algorithm may not stem certain words to your liking. For example,
*texas* reduces to *texa*, but *texan* does not. By passing a custom array of
exclusions into the function, you can override the algorithm as needed:
```php
$word = 'texan';
$porter2 = new porter2($word);
$stem->custom_exclusions = array('texan' => 'texa');
echo $porter2->stem(); // will print 'texa'
```

## Stemmer Resources
* [Step definition for the Porter 2 stemmer](http://snowball.tartarus.org/algorithms/english/stemmer.html)

## Tests
A verification list of 29,000 words and their expected stems can be run at the
index.php file included. For targeting individual words, use tests.php.
