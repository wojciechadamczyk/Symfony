# PHP &ndash; Symfony
## Walidacja

## Jak rozwiązywać zadania?

Zrób następujące kroki:

1. Stwórz [**fork**][forking] repozytorium z zadaniami.
2. [**Sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany do swojego repozytorium na GitHubie.
5. Stwórz [**pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz wszystkie zadania.

W katalogu stwórz nowy projekt Symfony i wgraj do niego wcześniej przygotowany plik **.gitignore**.

## Część A &ndash; walidacja

### Zadanie A1	&ndash; tworzenie projektu
Stwórz nowy projekt o nazwie `project_validation` (jeżeli dostaniesz błąd „Could not delete /tmp/…” nie przejmuj się  &ndash; Symfony będzie poprawnie działać).
Następnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab).
  2. Usuń AppBundle (wykonaj takie same kroki jak w zadaniu 2. z ćwiczeń dotyczących podstaw Symfony).

### Zadanie A2 &ndash; encja Książka
W projekcie stwórz nową encję `Książka`, która ma mieć następujące pola i walidacje:
  1. id,
  2. title &ndash; napis, co najmniej pięć znaków,
  3. rating &ndash; float w przedziale od 0.00 do 10.00,
  4. description &ndash; tekst, maksymalnie 600 znaków,
  5. pages &ndash; int, większy od 0.

### Zadanie A3 &ndash; encja Autor
W projekcie stwórz nową encję `Autor`, która ma mieć następujące pola i walidacje:
  1. id,
  2. name &ndash; napis, co najmniej 5 znaków,
  3. description &ndash; tekst, maksymalnie 600 znaków,
  4. age &ndash; int, co najmniej 18,

### Zadanie A4 &ndash; relacje
Połącz stworzone encje relacją wiele do jednego (dwukierunkową). Pamiętaj o wygenerowaniu odpowiednich setterów i getterów dla relacji (użyj do tego konsoli).
Pamiętaj o walidacji &ndash; w przypadku `Książki` &ndash; `Autor` musi być nastawiony (nie może być `null`)!

## Część B &ndash; CRUD (Create, Read, Update, Delete)

### Zadanie 5 &ndash; CRUD
Stwórz kontrolery dla książki i autora. Stwórz w nich wszystkie akcje potrzebne do implementacji CRUD.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
