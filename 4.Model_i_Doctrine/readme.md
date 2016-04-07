# PHP - Symfony 2 - Doctrine i modele

## Jak rozwi�zywa� zadania?

�eby rozwi�za� zadania musisz wykona� nast�puj�ce kroki:

1. �eby zacz��, stw�rz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nast�pnie [**sklonuj**][ref-clone] repozytorium na sw�j komputer.
1. Rozwi�� zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stw�rz **pull request**][pull-request] do oryginalnego repozytorium kiedy sko�czysz wszystkie �wiczenia.


Pami�taj �eby w katalogu stworzy� nowy projekt Symfony i wgra� do niego wcze�niej przygotowany plik .gitignore.

### �wiczenie 1 - Tworzenie projektu.
Stw�rz nowy projekt o nazwie projekt_model (je�eli dostaniesz b��d �Could not delete /tmp/�� nie przejmuj si� � Symfony b�dzie poprawnie dzia�a�).
Nast�pnie:
  1. Stw�rz w nim nowy bundle (o nazwie CodersLab) .
  2. Usu� AppBundle (wykonaj takie same kroki jak w zadaniu 2 z �wicze� Podstaw Symfony).

### �wiczenie 2 - Nowy kontroler. 
Wygeneruj nowy kontroler o nazwie �Book� za pomoc� odpowiedniej komendy konsolowej. Na razie nie generuj do niego �adnej akcji. 
  
### �wiczenie 3 - Po��czenie z baz� danych.
Po��cz Doctrine z swoj� baz� danych a nast�pnie stw�rz now� baz� o nazwie �book_exercises�.

### �wiczenie 4 - Model ksi��ki.
Wygeneruj model Book. Model powinna mie� nast�puj�ce dane:
  * Id,
  * Title,
  * description,
  * raiting (float),
Wygeneruj odpowiedn� tabelk� w bazie danych u�ywaj�c komend konsolowych. Przeanalizuj wygenerowany kod.

### �wiczenie 5 - Tworzenie ksi��ki.
Stw�rz akcj� `/newBook`. Akcja ta ma wy�wietla� formularz do tworzenia nowej ksi��ki. Formularz na razie napisz w normalnym HTML. Formularz ma kierowa� do akcji `/createBook`.

### �wiczenie 6 - Tworzenie ksi��ki 2.
Stw�rz akcj� `/createBook`. Akcja ta ma pobiera� informacje z POST-a i na jej podstawie tworzy� i zapami�tywa� do bazy danych now� ksi��k�. Na razie powinna wy�wietla� statyczn� informacj� o tym �e uda�o si� stworzy� ksi��k� (to czy si� uda�o czy nie zweryfikuj za pomoc� PHPMyAdmin).

### �wiczenie 7 - Wy�wietlanie ksi��ki.
Stw�rz akcj� `/showBook/{id}`. Akcja ta ma pobiera� wczytywa� ksi��k� o podanym id z bazy danych i wy�wietla� jej informacj� na stronie.
Zmodyfikuj akcj� `/createBook` w taki spos�b �eby po stworzeniu nowej ksi��ki przekierowywa�a do akcji `/showBook` dla nowo dodanej ksi��ki.

### �wiczenie 8 - Lista ksi��ek.
Stw�rz akcj� podpi�t� do adresu `/showAllBooks`. Powinna ona wczyta� wszystkie ksi��ki i wy�wietli� ich tytu�y. Przy ka�dej ksi��ce powinien by� link do wy�wietlenia pe�nej informacji o niej.

### �wiczenie 9 - Usuwanie ksi��ek.
Stw�rz akcj� podpi�t� do adresu `/deleteBook/{id}`. Powinna ona usuwa� ksi��k� o podanym id i pokazywa� o tym informacje.

### �wiczenie 11 - DQL.
Stw�rz akcj� kt�re (do pobrania informacji u�yj slug�w):
  1. Poka�� wszystkie ksi��ki o id wi�kszym ni� podane przez u�ytkownika,
  2. Poka�� wszystkie ksi��ki o raitingu wi�kszym ni� podany przez u�ytkownika,
  3. Poka�� wszystkie ksi��ki kt�re zaczynaj� si� od napisu podanego przez u�ytkownika.
U�yj do tego DQL i swojego w�asnego repozytorium.

### �wiczenie 12 - Autor.
Stw�rz model i kontroler dla Autora. Model powinien mie� nast�puj�ce informacj�:
  * Id,
  * Imi� i nazwisko,
  * Opis.
Kontroler powinien dawa� mo�liwo�� tworzenia nowego autora w systemie, wy�wietlenia autora, wy�wietlenia wszystkich autor�w.

### �wiczenie 13 - Relacja pomi�dzy Autorem a ksi��k�.
Po��cz autora i ksi��k� relacj� jeden do wielu (dwukierunkowa). Pami�taj o ponownym wygenerowaniu bazy danych i seter�w i getr�w do obu klas za pomoc� odpowiednich komend konsolowych.

### �wiczenie 14 - Dodawanie autora do ksi��ki.
Zmodyfikuj tworzenie ksi��ki tak �eby u�ytkownik m�g� wybra� jej autora. W tym celu w kontrolerze wczytaj wszystkich autor�w i podaj ich do widoku. W widoku w p�tli dodaj ich wszystkich do selecta.

### �wiczenie 15 - MOdyfikacja widok�w.
Zmodyfikuj wy�wietlania zar�wno ksi��ki i autora.

Ksi��ka powinna pokazywa� dane swojego autora (imi� i nazwisko) i podawa� link do jego strony.

Autor powinien wypisywa� ile ma ksi��ek, i nast�pnie w li�cie pokazywa� ich nazwy + linki do ich stron.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request