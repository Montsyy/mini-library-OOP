<?php

class Member {
    private string $name;
    private int $idmember;
    private array $borrowedBooks = [];

    public function __construct(string $name, int $idmember) {
        $this->name = $name;
        $this->idmember = $idmember;
    }

    public function getName() {
        return $this->name;
    }

    public function getIdMember() {
        return $this->idmember;
    }

    public function pinjambuku(Book $book): bool {
        if ($book->pinjambuku()) {
            $this->borrowedBooks[] = $book;
            return true;
        }
        return false;
    }

    public function getBorrowedBooks(): array {
        return $this->borrowedBooks;
    }
    
    public function getInfoMember(): string {
        $borrowedBooksInfo = array_map(function($book) {
            return "Title: {$book->getTitle()}";
        }, $this->borrowedBooks);

        $borrowedBooksList = implode("\n", $borrowedBooksInfo);
        return "Name: {$this->name}\nID Member: {$this->idmember}\nBorrowed Books:\n{$borrowedBooksList}";
    }

}