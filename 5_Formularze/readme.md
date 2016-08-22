# PHP &ndash; Symfony
## Formularze

## Jak rozwiązywać zadania?

## Zrób następujące kroki:

1. Stwórz [**fork**][forking] repozytorium z zadaniami.
2. [**Sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany do swojego repozytorium na GitHubie.
5. Stwórz [**pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz wszystkie zadania.

W katalogu stwórz nowy projekt Symfony i wgraj do niego wcześniej przygotowany plik **.gitignore**.

## Część A &ndash; podstawowe formularze

### Zadanie A1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie `projekt_form` (jeżeli dostaniesz błąd „Could not delete /tmp/…” nie przejmuj się – Symfony będzie poprawnie działać).
Następnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab).
  2. Usuń AppBundle (wykonaj takie same kroki jak w zadaniu 2. z ćwiczeń dotyczących podstaw Symfony).

### Zadanie A2 &ndash; Tweet
Wygeneruj model `Tweet`, który ma zawierać:
  * id,
  * nazwę,
  * tekst.

Wygeneruj dla niego Kontroler z następującymi akcjami:
  * `create`,
  * `new`,
  * `showAll`.

Póki co napisz akcję `showAll`, która wyświetli tytuły wszystkich Tweetów w bazie danych.

### Zadanie A3 &ndash; tworzenie Tweeta
Napisz dla Tweeta następujące akcje:
* `new`, która ma wyświetlać formularz,
* `create`, która ma na podstawie formularza tworzyć nową encję i zapisywać do bazy danych.

### Zadanie A4 &ndash; modyfikacja Tweeta
Dopisz akcję `/update/{id}`.

Jeżeli wejdziemy na nią metodą GET, to ma wczytać Tweet o podanym **id** i następnie wyświetlić do niego formularz do edycji.
Jeżeli wejdziemy na nią metodą POST, to powinna zapamiętać wysłane informacje do bazy danych.

## Część B &ndash; Zaawansowane formularze

### Zadanie B1 &ndash; dodatkowe
Popraw rozwiązania do zajęć z Doctrine i modeli, aby korzystać z formularzy wbudowanych w Symfony.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
