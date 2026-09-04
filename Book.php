<?php

class Book {
    private string $title;
    private string $author;
    private int $year;
    protected bool $isAvailable = true;


    public function __construct(string $title, string $author, int $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYear() {
        return $this->year;
    }

    public function pinjambuku(): bool {
        if (!$this->isAvailable) {
            return false;
        }
        $this->isAvailable = false;
        return true;
    }

    public function getinfobuku(): string {
        $status = $this->isAvailable ? 'Tersedia' : 'Tidak Tersedia';
        return "Title: {$this->title}, Author: {$this->author}, Year: {$this->year}, Status: {$status}";

    }
}