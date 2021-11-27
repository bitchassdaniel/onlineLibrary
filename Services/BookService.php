<?php

namespace Services;

use Entities\Book;

include "Entities\Book.php";
class BookService
{
    public function create(array $data)
    {
        $conn = new DatabaseService();
        $connection = $conn->connect();

        $book = new Book($data['author'], $data['title']);
        $book->setDescription($_POST['description']);
        $book->setPages($_POST['pages']);
        $book->setDate($_POST['date']);
        $book->setAuthor($_POST['author']);
        $book->setTitle($_POST['title']);

        $stmt = $conn->prepare("INSERT INTO books (author, title, description, pages, date) VALUES (:author, :title, :description, :pages, :date)");

        $stmt->bindParam(':author', $book->getAuthor());
        $stmt->bindParam(':title', $book->getTitle());
        $stmt->bindParam(':description', $book->getDescription());
        $stmt->bindParam(':pages', $book->getPages());
        $stmt->bindParam(':date', $book->getPages());
        $stmt->execute();

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