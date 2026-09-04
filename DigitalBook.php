<?php

class digitalBook extends Book {
    private string $format;

    public function __construct(string $title, string $author, int $year, string $format) {
        parent::__construct($title, $author, $year);
        $this->format = $format;
    }
    public function getFormat() {
        return $this->format;
    }

    public function getinfobuku(): string {
        $status = $this->isAvailable ? 'Tersedia' : 'Tidak Tersedia';
        return "Title: {$this->getTitle()}, Author: {$this->getAuthor()},
         Year: {$this->getYear()}, Format: {$this->format}, Status: {$status}";
    }
}