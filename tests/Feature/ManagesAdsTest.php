<?php

namespace Tests\Feature;

use App\Ad;
use App\Permission;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ManagesAdsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    function unauthorized_users_cannot_create_ads(){
        $ad = make('App\Ad', [], null, 'withoutExistingPhoto');
        $this->withExceptionHandling();
        $this->post('/admin/advertising/ads/create', $ad->toArray())
            ->assertRedirect('/login');

        $this->signIn()
            ->post('/admin/advertising/ads/create', $ad->toArray())
            ->assertStatus(403);

        $this->assertDatabaseMissing('ads', [
            'purchaser' => $ad->purchaser
        ]);
        $this->assertEquals(0, Ad::count());
    }

    /** @test **/
    function authorized_users_can_create_ads(){
        $ad = make('App\Ad', [], null, 'withoutExistingPhoto');
        $this->signIn($this->getUserWithPermission())
            ->post('/admin/advertising/ads/create', $ad->toArray())
            ->assertRedirect('/admin/advertising/ads');

        $this->assertDatabaseHas('ads', [
           'purchaser' => $ad->purchaser
        ]);
    }

    /** @test **/
    function unauthorized_users_cannot_edit_ads(){
        $ad = create('App\Ad', [], null, 'withExistingPhoto');
        $ad->purchaser = "Hello world";
        $this->withExceptionHandling();
        $this->patch(route('update-ad', [$ad->id]), $ad->toArray())
            ->assertRedirect('/login');

        $this->signIn()
            ->patch(route('update-ad', [$ad->id]), $ad->toArray())
            ->assertStatus(403);

        $this->assertDatabaseMissing('ads', [
            'purchaser' => $ad->purchaser
        ]);
    }

    /** @test **/
    function authorized_users_can_edit_ads(){
        $ad = create('App\Ad', [], null, 'withExistingPhoto');
        $ad->purcahser = "Hello World";
        $this->signIn($this->getUserWithPermission())
            ->patch(route('update-ad', [$ad->id]), $ad->toArray())
            ->assertRedirect('/admin/advertising/ads');

        $this->assertDatabaseHas('ads', [
            'purchaser' => $ad->purchaser
        ]);
    }

    /** @test **/
    function unauthorized_users_cannot_delete_ads(){
        $ad = create('App\Ad', [], null, 'withExistingPhoto');
        $this->withExceptionHandling();
        $this->delete(route('ad.delete', [$ad->id]))
            ->assertRedirect('/login');

        $this->signIn()
            ->delete(route('ad.delete', [$ad->id]))
            ->assertStatus(403);

        $this->assertDatabaseHas('ads', [
            'purchaser' => $ad->purchaser
        ]);
    }

    /** @test **/
    function authorized_users_can_delete_ads(){
        $ad = create('App\Ad', [], null, 'withExistingPhoto');
        $this->signIn($this->getUserWithPermission())
            ->delete(route('ad.delete', [$ad->id]))
            ->assertRedirect('/admin/advertising/ads');

        $this->assertDatabaseMissing('ads', [
           'id' => $ad->id
        ]);
    }

    /** @test **/
    function unauthorized_users_cannot_view_the_index_of_ads(){
        $this->withExceptionHandling();
        $this->get('/admin/advertising/ads')
            ->assertRedirect('/login');

        $this->signIn()
            ->get('/admin/advertising/ads')
            ->assertStatus(403);
    }

    /** @test **/
    function authorized_users_can_view_the_index_of_ads(){
        $this->signIn($this->getUserWithPermission())
            ->get('/admin/advertising/ads')
            ->assertStatus(200);
    }
}
