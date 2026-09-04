<?php

require_once 'Book.php';
require_once 'Member.php';
require_once 'DigitalBook.php';

echo "=== Mini Library OOP ===\n\n";

$book1 = new Book("Fasilkom", "anak fasilkom", 2023);
$book2 = new Book("Pemrograman Web", "Abdi", 2022);
$digitalBook1 = new DigitalBook("Digital Buku Masak", "Siapapun", 2026, "EPUB");
$digitalBook2 = new DigitalBook("Digital Jurnal", "Chef", 2025, "PDF");

$member1 = new Member("Ray", 001);
$member2 = new Member("Yabes", 002);
$member3 = new Member("Tmm", 003);
$member4 = new Member("Faiz", 004);

echo "=== Informasi Buku ===\n";
echo $book1->getinfobuku() . "\n\n";
echo $book2->getinfobuku() . "\n\n";
echo $digitalBook1->getinfobuku() . "\n\n";
echo $digitalBook2->getinfobuku() . "\n\n";

echo "=== Informasi Member ===\n";
echo $member1->getInfoMember() . "\n";
echo $member2->getInfoMember() . "\n";
echo $member3->getInfoMember() . "\n";
echo $member4->getInfoMember() . "\n";

$member1->pinjambuku($book1);
$member2->pinjambuku($book2);
$member1->pinjambuku($digitalBook1);

echo "\n=== Informasi Member Setelah Meminjam Buku ===\n";
echo $member1->getInfoMember() . "\n\n";
echo $member2->getInfoMember() . "\n\n";
echo $member3->getInfoMember() . "\n\n";
echo $member4->getInfoMember() . "\n\n";

echo "=== Informasi Buku Setelah Dipinjam ===\n";
echo $book1->getinfobuku() . "\n\n";
echo $book2->getinfobuku() . "\n\n";
echo $digitalBook1->getinfobuku() . "\n\n";
echo $digitalBook2->getinfobuku() . "\n\n";