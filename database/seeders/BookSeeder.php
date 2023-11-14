<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title'=>"Juanitopro", 'author'=> "autorpro" ],
            ['title'=>"Libro2", 'author'=> "autor2" ],
            ['title'=>"Libro3", 'author'=> "autor334" ],
        ];

        foreach($books as $bookdata){
            $book = new Book();

            $book -> title = $bookdata["title"];
            $book -> author = $bookdata["author"];

            $book->save();
        }

       
    }
}
