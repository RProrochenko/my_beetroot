<?php

class GuestBook{
    public $bookTitle = "new book"; //назва книги
    private $bookID = 5; //ID книги

    function displayEntries(): array {
        //Відображає всі інсуючі записи
    }

    function findEntries(string $key): array {
        //Шукає та відображає існуюці записи з ключом $key
    }

    function findUser(string $name): array {
        //Шукає та відображає існуюці записи з користувача $name
    }

    function leaveСomment(string $comment, int $userID=0, $bookID): bool {
        //Записує коментар $comment та ИД користувача $userID (по дефолту анонім) створившого у БД
        //та привязати його до $bookID
    }

}

class Comment{
    public $bookTitle = "new book";

    function identityUser(int $userID): bool {
        //Ідентифікація юзера за $userID
    }

    function identityBook(int $bookID): bool {
        //Ідентифікація книги в якіз буде зелишений коментар
    }

    function setСomment(string $comment): bool  {
        //Залишає коментар
    }

}