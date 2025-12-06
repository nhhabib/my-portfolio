public function up()
{
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        $table->string('live_link')->nullable();
        $table->string('github_link')->nullable();
        $table->timestamps();
    });
}
