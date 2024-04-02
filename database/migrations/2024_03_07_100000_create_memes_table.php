<?php

use App\Models\MemeType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemesTable extends Migration
{
    public function up()
    {
        Schema::create('memes', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->index();
            $table->string('title')->unique();
            $table->text('content')->nullable(); // Will be written in Markdown.

            $table->foreignIdFor(app('webpage'))->nullable(); // Used to track seo rankings
            $table->unsignedInteger('pageviews')->index(); // Total current pageviews for post. Will be synced from Google Analytics API.

            $table->string('description')->nullable(); // Primary description used for SEO.
            $table->string('ogdescription')->nullable(); // Open Graph Description used for social shares. Will default to description if NULL.
            $table->foreignIdFor(app(MemeType::class), 'meme_type_id')->index();
            $table->foreignIdFor(app('image'))->nullable(); // Meme image
            $table->foreignIdFor(app('image'), 'ogimage_id')->nullable(); // External open graph image id. Featured image for social sharing. Will default to image_id unless this is used. Allows override for play button or words on image.

            $table->foreignIdFor(app('user'), 'author_id'); // Author of the post.
            $table->foreignIdFor(app('user'), 'creator_id');
            $table->foreignIdFor(app('user'), 'updater_id');

            $table->dateTime('published_at'); // Allows blog posts to be published at a later date.
            $table->softDeletes();
            $table->timestamps();
        });
    }
}
