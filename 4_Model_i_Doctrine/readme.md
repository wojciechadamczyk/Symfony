# PHP &ndash; Symfony
## Doctrine i modele

## Jak rozwiązywać zadania?

## Zrób następujące kroki:

1. Stwórz [**fork**][forking] repozytorium z zadaniami.
2. [**Sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany do swojego repozytorium na GitHubie.
5. Stwórz [**pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz wszystkie zadania.

W katalogu stwórz nowy projekt Symfony i wgraj do niego wcześniej przygotowany plik **.gitignore**.

## Część A &ndash; podstawy korzystania z Doctrine

### Zadanie A1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie `project_model` (jeżeli dostaniesz błąd „Could not delete /tmp/…” nie przejmuj się &ndash; Symfony będzie poprawnie działać).
Następnie:
1. Stwórz w nim nowy bundle (o nazwie CodersLab).
2. Usuń AppBundle (wykonaj takie same kroki jak w zadaniu 2. z ćwiczeń dotyczących podstaw Symfony).

### Zadanie A2 &ndash; Nowy kontroler
Wygeneruj nowy kontroler o nazwie `Book` za pomocą odpowiedniej komendy konsolowej. Na razie nie generuj do niego żadnej akcji.

### Zadanie A3 &ndash; połączenie z bazą danych
Połącz Doctrine ze swoją bazą danych, a następnie stwórz nową bazę o nazwie `book_exercises`.

## Część B &ndash; Model

### Zadanie B1 &ndash; model książki
Wygeneruj model `Book`, który powinien mieć następujące dane:
  * id,
  * title,
  * description,
  * rating (float),

Wygeneruj odpowiedną tabelę w bazie danych, użyj komend konsolowych. Przeanalizuj wygenerowany kod.

## Część C &ndash; Praca na modelu

### Zadanie C1 &ndash; tworzenie książki
Stwórz akcję `/newBook`, która ma wyświetlać formularz do tworzenia nowej książki. Formularz &ndash; póki co &ndash; napisz w normalnym HTML. Formularz ma kierować do akcji `/createBook`.

### Zadanie C2 &ndash; tworzenie książki
Stwórz akcję `/createBook`. Akcja ta ma pobierać informacje z POST-a i na jej podstawie tworzyć i zapamiętywać do bazy danych nową książkę. Na razie powinna wyświetlać statyczną informację o tym, że udało się stworzyć książkę (co zweryfikuj za pomocą PHPMyAdmin).

### Zadanie C3 &ndash; wyświetlanie książki
Stwórz akcję `/showBook/{id}`, która ma pobierać książkę o podanym **id** z bazy danych i wyświetlać jej informację na stronie. Zmodyfikuj akcję `/createBook` tak żeby po stworzeniu nowej książki przekierowywała do akcji `/showBook` dla nowo dodanej książki.

### Zadanie C4 &ndash; lista książek
Stwórz akcję podpiętą do adresu `/showAllBooks`. Powinna ona wczytać wszystkie książki i wyświetlić ich tytuły. Przy każdej książce powinien być link do wyświetlenia pełnej informacji o niej.

### Zadanie C5 &ndash; usuwanie książek
Stwórz akcję podpiętą do adresu `/deleteBook/{id}`. Powinna ona usuwać książkę o podanym **id** i pokazywać o tym informacje.

## Część D &ndash; Relacje

### Zadanie D1 &ndash; autor
Stwórz model i kontroler dla **autora**. Model powinien mieć następujące informację:
  * Id,
  * Imię i nazwisko,
  * Opis.

Kontroler powinien umożliwiać:
* tworzenie nowego autora w systemie,
* wyświetlenia autora,
* wyświetlenia wszystkich autorów.

### Zadanie D2 &ndash; relacja między autorem a książką
Połącz autora i książkę relacją jeden do wielu (dwukierunkowa). Pamiętaj o ponownym wygenerowaniu bazy danych, setterów, getterów do obu klas za pomocą odpowiednich komend konsolowych.

### Zadanie D3 &ndash; dodawanie autora do książki.
Zmodyfikuj tworzenie książki, tak żeby użytkownik mógł wybrać jej autora. W tym celu w kontrolerze wczytaj wszystkich autorów i podaj ich do widoku. W widoku w pętli dodaj ich wszystkich do selecta.

### Zadanie D4 &ndash; modyfikacja widoków.
Zmodyfikuj wyświetlania zarówno książki, jak i autora.
Książka powinna pokazywać dane swojego autora (imię i nazwisko) i podawać link do jego strony.
Autor powinien wypisywać, ile ma książek. Następnie w liście pokazywać ich nazwy i linki do stron książek.

## Część E &ndash; DQL i Repozytoria

### Zadanie E1 &ndash; DQL
Stwórz akcje, które pokażą następujące dane:
  1. Wszystkie książki o **id** większym niż podane przez użytkownika.
  2. Wszystkie książki o ratingu większym niż podany przez użytkownika.
  3. Pokażą wszystkie książki, które zaczynają się od napisu podanego przez użytkownika.
Użyj do tego DQL i swojego repozytorium, do pobrania informacji użyj slugów.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
