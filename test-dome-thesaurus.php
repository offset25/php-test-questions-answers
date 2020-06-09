<?php

/*

https://www.testdome.com/cert/1fa0dafb7fb1459ea443483500129d8a?c=true

Test Dome Question Thesaurus Hard
A thesaurus contains words and synonyms for each word. Below is an example of a data structure that defines a thesaurus:

array("buy" => array("purchase"), "big" => array("great", "large"))
Implement the function getSynonyms, which accepts a word as a string and returns all synonyms for that word in JSON format, as in the example below.

For example, the call $thesaurus->getSynonyms("big") should return:

'{"word":"big","synonyms":["great", "large"]}'
while a call with a word that doesn't have synonyms, like $thesaurus->getSynonyms("agelast") should return:

'{"word":"agelast","synonyms":[]}'
*/

/* Answer */
class Thesaurus
{
    private $thesaurus;

    function Thesaurus(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word) : string {
        $arr_result = [];
        $arr_result['word'] = $word;
        $arr_result['synonyms'] = [];
        if (isset($this->thesaurus[$word]) && count($this->thesaurus[$word]) >0) {
            $arr_result['synonyms'] = $this->thesaurus[$word];
        }
        return json_encode($arr_result);
    }
}

$thesaurus = new Thesaurus(
    [
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ]
);

echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");

?>
