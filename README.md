# Porter 2 Stemmer for PHP

[![Circle CI](https://circleci.com/gh/markfullmer/porter2.svg?style=shield)](https://circleci.com/gh/markfullmer/porter2)

A PHP library for stemming words using the English Porter 2 algorithm.

![Screenshot of Conversion](https://raw.githubusercontent.com/markfullmer/porter2/master/demo/stemmer-demo.png)

## Background
A stemmer takes a given word and follows a set of rules to reduce this word
to search-index-usable stem (as opposed to the actual word root). For example,
*aggravate*, *aggravated*, and *aggravates* all reduce to "aggrav," thus
creating a commonality between those words.

Martin Porter's English (Porter 2) Algorithm improves on the original Porter
stemmer as described [here](http://snowball.tartarus.org/algorithms/english/stemmer.html).

## Usage
To be added.
```

## Stemmer Resources
* [Step definition for the Porter 2 stemmer](http://snowball.tartarus.org/algorithms/english/stemmer.html)

## Tests
A verification list of 29,000 words and their expected stems can be run (after
```composer install``` via ```phpunit```).
