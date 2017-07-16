<?php

namespace Tests\Feature;

use App\Permission;
use App\Story;
use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ManagesStoriesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test * */
    function unauthorized_users_cannot_create_articles()
    {
        $story = make('App\Story');
        $this->withExceptionHandling();
        $this->post('/admin/core/stories/create', $story->toArray())
            ->assertRedirect('/login');

        $this->signIn()
            ->post('/admin/core/stories/create', $story->toArray());

        $this->assertDatabaseMissing('stories', [
            'title' => $story->title
        ]);
        $this->assertEquals(0, Story::count());
    }

    /** @test * */
    function authorized_users_can_create_articles()
    {
        $story = make('App\Story');
        $story->byline = [create('App\Staffer')->id];
        $this->signIn($this->getUserWithPermission())
            ->post('/admin/core/stories/create', $this->getStoryArray($story));

        $this->assertDatabaseHas('stories', [
            'title' => $story->title
        ]);
    }

    /** @test * */
    function unauthorized_users_cannot_update_articles()
    {
        $story = create('App\Story');
        $story->title = "Hello world";
        $story->byline = [create('App\Staffer')->id];
        $storyArray = $this->getStoryArray($story);
        $this->withExceptionHandling();

        $this->patch(route('update-story', [$story->section->slug, $story->slug]), $storyArray)
            ->assertRedirect('/login');

        $this->signIn()
            ->patch(route('update-story', [$story->section->slug, $story->slug]), $storyArray)
            ->assertStatus(403);
    }

    /** @test * */
    function authorized_users_can_update_articles()
    {
        $story = create('App\Story');
        $story->title = "Hello World";
        $story->byline = [create('App\Staffer')->id];
        $this->signIn($this->getUserWithPermission())
            ->patch(route('update-story', [$story->section->slug, $story->slug]), $this->getStoryArray($story))
            ->assertRedirect('/admin/core/stories');

        $this->assertDatabaseHas('stories', [
            'title' => 'Hello World'
        ]);
    }

    /** @test * */
    function unauthorized_users_cannot_see_the_admin_listing_of_stories()
    {
        $this->withExceptionHandling();
        $this->get('/admin/core/stories')
            ->assertRedirect('/login');

        $this->signIn()
            ->get('/admin/core/stories')
            ->assertStatus(403);
    }

    /** @test * */
    function authorized_users_can_see_the_admin_listing_of_stories()
    {
        $this->signIn($this->getUserWithPermission())
            ->get('/admin/core/stories')
            ->assertStatus(200);
    }

    /** @test **/
    function unauthorized_users_may_not_delete_stories(){
        $story = create('App\Story');
        $this->withExceptionHandling();
        $this->delete("/admin/core/stories/{$story->section->slug}/{$story->slug}")
            ->assertRedirect('/login');

        $this->signIn()
            ->delete("/admin/core/stories/{$story->section->slug}/{$story->slug}")
            ->assertStatus(403);
    }

    /** @test **/
    function authorized_users_may_delete_stories(){
        $story = create('App\Story');
        $this->signIn($this->getUserWithPermission())
            ->delete("/admin/core/stories/{$story->section->slug}/{$story->slug}")
            ->assertRedirect('/admin/core/stories');
    }

    /** @test **/
    function stories_can_have_header_photos(){
        Storage::fake('media');

        $story = make('App\Story');
        $photo = create('App\Photo');
        Storage::disk('media')->assertExists('images/'.$photo->title . '.jpg');
        $story->topPhotos = [$photo->id];
        $story->byline = [create('App\Staffer')->id];

        $this->signIn($this->getUserWithPermission())
            ->post('/admin/core/stories/create', $this->getStoryArray($story));

        $postedStory = Story::first();
        $this->assertEquals(1, $postedStory->headerPhotos->count());
    }

    /** @test **/
    function stories_can_have_inline_photos(){
        Storage::fake('media');

        $story = make('App\Story');
        $photo = create('App\Photo');
        Storage::disk('media')->assertExists('images/'.$photo->title . '.jpg');
        $story->inlinePhotos = [['photo' => $photo->id, 'reference'=>'test']];
        $story->byline = [create('App\Staffer')->id];
        $this->signIn($this->getUserWithPermission())
            ->post('/admin/core/stories/create', $this->getStoryArray($story));

        $postedStory = Story::first();
        $this->assertEquals(1, $postedStory->inlinePhotos->count());
    }

    /**
     * Gets the story in array form for submitting in a request.
     * Adds two additional properties so the data will pass validation
     * @param $story \App\Story
     * @return mixed
     */
    private function getStoryArray($story)
    {
        $storyArray = $story->toArray();
        $storyArray["section"] = $story->section_id;
        $storyArray["issue"] = $story->issue_id;
        return $storyArray;
    }
}
