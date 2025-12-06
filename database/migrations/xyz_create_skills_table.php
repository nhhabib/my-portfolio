public function up()
{
    Schema::create('skills', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('category')->nullable(); // Backend, Frontend, Tools...
        $table->tinyInteger('level')->default(0); // 0-100 (optional)
        $table->timestamps();
    });
}
