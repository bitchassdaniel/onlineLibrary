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
        if(empty($_POST['author']))
        {
            return false;
        }

        if(empty($_POST['title']))
        {
            return false;
        }

        if(empty($_POST['description']))
        {
            return false;
        }

        if(!empty($_POST['description']))
        {
            if(!is_string($_POST['description']))
            {
                return false;
            }
        }

        if(empty($_POST['pages']))
        {
            return false;
        }

        if(empty($_POST['date']))
        {
            return false;
        }

        return true; # Returns true when $data went through validation.
    }

}