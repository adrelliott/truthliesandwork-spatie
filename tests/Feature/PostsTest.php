<?php

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
    $this->assertNotNull($post->published_at);
});

test('posts can be unpublished', function() {
    $post = Post::factory()->create();
    $post->publish();
    $post->unpublish();
    $this->assertNull($post->published_at);
});

test('posts can be published on a specfic date', function() {
    $post = Post::factory()->create();
    $post->publish(Carbon\Carbon::parse('2021-01-01'));
    $this->assertEquals('2021-01-01', $post->published_at->format('Y-m-d'));
});

test('posts can have related posts', function() {
    $post = Post::factory()->create();
    $relatedPost = Post::factory()->create();
    $post->relatedPosts()->attach($relatedPost);
    $this->assertCount(1, $post->relatedPosts);
});

test('will retrun only published posts when using publishedPosts scope', function() {
    $publishedPost = Post::factory()->create();
    $unpublishedPost = Post::factory()->create();
    $publishedPost->publish();
    $this->assertCount(1, Post::published()->get());
});