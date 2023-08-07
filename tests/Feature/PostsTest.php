<?php

use App\Models\Interview;
use App\Models\Post;

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('posts can be created', function() {
    $posts = Post::factory()->count(3)->create();
    $this->assertCount($posts->count(), Post::all());
});

test('posts can be updated', function() {
    $post = Post::factory()->create();
    $post->update(['title' => 'New Title']);
    $this->assertEquals('New Title', Post::first()->title);
});

test('posts can be deleted', function() {
    $post = Post::factory()->create();
    $post->delete();
    $this->assertCount(0, Post::all());
});

test('posts can be restored', function() {
    $post = Post::factory()->create();
    $post->delete();
    $post->restore();
    $this->assertCount(1, Post::all());
});

test('posts can be force deleted', function() {
    $post = Post::factory()->create();
    $post->forceDelete();
    $this->assertCount(0, Post::all());
});

test('posts can be published', function() {
    $post = Post::factory()->create();
    $post->publish();
    $post->save();
    $this->assertNotNull(Post::first()->published_at);
});

test('posts can be unpublished', function() {
    $post = Post::factory()->create();
    $post->publish();
    $post->unpublish();
    $post->save();
    $postFromDB = Post::first();
    $this->assertNull($postFromDB->published_at);
});

test('posts can be published on a specfic date', function() {
    $post = Post::factory()->create();
    $post->publish(Carbon\Carbon::parse('2021-01-01'));
    $post->save();
    $postFromDB = Post::first();
    $this->assertEquals('2021-01-01', $postFromDB->published_at->format('Y-m-d'));
});

test('posts can have related posts', function() {
    $post = Post::factory()->create();
    $relatedPosts = Post::factory(2)->create();
    $post->relatedPosts()->attach($relatedPosts->pluck('id'));
    $this->assertCount(2, $post->relatedPosts);
});

test('will return only published posts when using publishedPosts scope', function() {
    $publishedPosts = Post::factory(2)->create();
    $unpublishedPost = Post::factory()->create();
    $futurePublishedPost = Post::factory(3)->create([
        'published_at' => now()->addDay(),
    ]);
    $publishedPosts->each(function ($post) {
        $post->publish();
    });
    $this->assertCount(2, Post::published()->get());
});

test('will only return unpublished posts when using unpublishedPosts scope', function() {
    $publishedPost = Post::factory()->create();
    $unpublishedPosts = Post::factory(2)->create();
    $publishedPost->publish();
    $this->assertCount(2, Post::unpublished()->get());
});

test('can assign a post type using an enum', function() {
    Post::factory()->create([
        'post_type' => App\Enums\PostType::Article,
    ]);
    $post = Post::first();
    $this->assertEquals(App\Enums\PostType::Article, $post->post_type);
    $this->assertNotEquals(App\Enums\PostType::Episode, $post->post_type);
});

test('can retrieve posts of certain types using the enum PostType', function() {
    Post::factory(3)->create([
        'post_type' => App\Enums\PostType::Article,
    ]);
    Post::factory(4)->create([
        'post_type' => App\Enums\PostType::Episode,
    ]);
    Post::factory(5)->create([
        'post_type' => App\Enums\PostType::Interview,
    ]);
    $this->assertCount(3, Post::where('post_type', App\Enums\PostType::Article)->get());
    $this->assertCount(4, Post::where('post_type', App\Enums\PostType::Episode)->get());
    $this->assertCount(5, Post::where('post_type', App\Enums\PostType::Interview)->get());
});

test('a post can have many interviews', function() {
    $post = Post::factory()->create();
    $interviews = Interview::factory(3)->create();
    $post->interviews()->attach($interviews->pluck('id'));

    $postWithInterviews = Post::with('interviews')->first();
    $this->assertCount(3, $postWithInterviews->interviews);
});

// -------------------------

test('will show an unpublished post only if a secret key is passed', function() {
    $publishedPosts = Post::factory()->create(2);
    $unpublishedPost = Post::factory()->create();
    $publishedPosts->each(function($post) {
        $post->publish();
    });
    $this->get($unpublishedPost->path())->assertSee($unpublishedPost->title);
    $this->get($unpublishedPost->path())->assertDontSee($unpublishedPost->title);
    $this->get($unpublishedPost->path() . '?secret=' . $unpublishedPost->secret)->assertSee($unpublishedPost->title);
})->skip();