<?php
/**
 * Should create a new book and add it to the database. (form from index.html)
 */

use Services\BookService;

include "Services\BookService.php";

$bookService = new BookService;
$isCreated = $bookService->create($_POST); 


