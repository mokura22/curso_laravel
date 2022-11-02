<?php


namespace Tests\Feature;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_get_all_books(){
        $book = Book::factory()->create();
    dd($book);
    }
    
    

}
