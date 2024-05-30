<?php

require "Book.php";

class Reader {
  public function __construct(private ? Book $book)
  {

  }

  public function getBook() : ? Book
  {
    return $this->book;
  }

  public function setBook(Book $book) : void
  {
    $this->book = $book;
  }

  public function giveBook(Reader $reader) : void // ✅
  {
    // le lecteur d'en face a mon livre
    
    
    // si tu fais par étapes : comment s'appelle le lecteur d'en face $reader ✅
    // comment tu modifies son livre $reader->setBook() ✅
    // comment je désigne "mon mien à moi" livre  $this->book ✅
    // du coup si je modifie son livre pour que ça devienne "moi mon mien" livre $reader->setBook($this->book) ✅
    
    $reader->setBook($this->book); // ✅    ⬅️
    $this->book = NULL; // ✅
    
    // je perds mon livre $reader->giveBook($this->book)$reader->setBook() ça modifie le livre d'en face "Moi mon mien" de livre je l'écris : 
    // comment s'apelle "Moi mon mien"
    // comment je modifie mon livre
    
  }

  public function receiveBook(Reader $reader) : void // ✅
  {
    $this->book = $reader->getBook(); // ✅
    
    
    
    
    // si je veux afficher le titre du livre du $reader : mets moi ça en dessous
    
    

    
    
    
      // Comment tu écris "Mon mien à moi" livre ✅
      // Comment tu accèdes au livre du reader d'en face ✅ (s
       // Le livre du reader devient null ❗️ presque setBook il faut lui passer un argument : la nouvelle valeur de book
      $reader->setBook(NULL); // ✅
      
        // comment tu modifies le livre du reader d'en face
    
  }
}

?>