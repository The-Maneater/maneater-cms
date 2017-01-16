<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Ad;

class AdTest extends TestCase
{
    use DatabaseTransactions;

    public function testAnAdCanBeServed()
    {
        $ad = factory(Ad::class)->create();
        $ad->serve();
        $ad->serve();
        $ad->serve();

        $this->assertEquals(3, $ad->times_served);
    }

    public function testCampaignsThatHaveNotStartedAreExcluded()
    {
        factory(Ad::class)->create(['campaign_start' => \Carbon\Carbon::yesterday(),
            'campaign_end' => \Carbon\Carbon::tomorrow()]);
        factory(Ad::class)->create(['campaign_start' => \Carbon\Carbon::tomorrow(),
            'campaign_end' => \Carbon\Carbon::tomorrow()]);

        $ads = Ad::active()->get();

        $this->assertEquals(1, $ads->count());
    }

    public function testExpiredCampaignsAreExcluded()
    {
        factory(Ad::class)->create(['campaign_start' => \Carbon\Carbon::yesterday(),
            'campaign_end' => \Carbon\Carbon::tomorrow()]);
        factory(Ad::class)->create(['campaign_start' => \Carbon\Carbon::yesterday(),
            'campaign_end' => \Carbon\Carbon::yesterday()]);

        $ads = Ad::active()->get();

        $this->assertEquals(1, $ads->count());
    }

    public function testAllActiveAdsAreIncluded()
    {
        factory(Ad::class)->create(['campaign_start' => \Carbon\Carbon::yesterday(),
            'campaign_end' => \Carbon\Carbon::tomorrow()]);
        factory(Ad::class)->create(['campaign_start' => \Carbon\Carbon::yesterday(),
            'campaign_end' => \Carbon\Carbon::tomorrow()]);

        $ads = Ad::active()->get();

        $this->assertEquals(2, $ads->count());
    }
}
