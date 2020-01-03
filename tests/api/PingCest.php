<?php namespace App\Tests;

use App\Tests\ApiTester;
use Codeception\Util\HttpCode;

class PingCest
{
    // tests
    public function ping(ApiTester $I)
    {
        $I->wantTo('test the ping route');

        $I->sendGET('/ping');
        $I->seeResponseCodeIs(HttpCode::OK);
        $I->seeHttpHeaderOnce('Content-Type', 'text/plain');
        $I->seeResponseContains('pong');
    }
}
