<?php

class CountNumberOfProductsCest
{
    public function checkTheNumberOfTheProducts(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('div[class="product-container"]', 5);
    }
}