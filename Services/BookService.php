<?php

namespace Services;

include "Entities\Book.php";
class BookService
{
    public function create(array $data)
    {
        $conn = new DatabaseService();
        $connection = $conn->connect();



        return true; // Finish sequence to add book to database.
    }

    public function delete()
    {

    }

    public function edit()
    {

    }

    public function validate(array $data)
    {

    }

}