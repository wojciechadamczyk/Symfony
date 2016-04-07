# PHP - Symfony 2 - Doctrine i modele

## Jak rozwi¹zywaæ zadania?

¯eby rozwi¹zaæ zadania musisz wykonaæ nastêpuj¹ce kroki:

1. ¯eby zacz¹æ, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nastêpnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwi¹¿ zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skoñczysz wszystkie æwiczenia.


Pamiêtaj ¿eby w katalogu stworzyæ nowy projekt Symfony i wgraæ do niego wczeœniej przygotowany plik .gitignore.

### Æwiczenie 1 - Tworzenie projektu.
Stwórz nowy projekt o nazwie projekt_model (je¿eli dostaniesz b³¹d „Could not delete /tmp/…” nie przejmuj siê – Symfony bêdzie poprawnie dzia³aæ).
Nastêpnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab) .
  2. Usuñ AppBundle (wykonaj takie same kroki jak w zadaniu 2 z æwiczeñ Podstaw Symfony).

### Æwiczenie 2 - Nowy kontroler. 
Wygeneruj nowy kontroler o nazwie „Book” za pomoc¹ odpowiedniej komendy konsolowej. Na razie nie generuj do niego ¿adnej akcji. 
  
### Æwiczenie 3 - Po³¹czenie z baz¹ danych.
Po³¹cz Doctrine z swoj¹ baz¹ danych a nastêpnie stwórz now¹ bazê o nazwie ”book_exercises”.

### Æwiczenie 4 - Model ksi¹¿ki.
Wygeneruj model Book. Model powinna mieæ nastêpuj¹ce dane:
  * Id,
  * Title,
  * description,
  * raiting (float),
Wygeneruj odpowiedn¹ tabelkê w bazie danych u¿ywaj¹c komend konsolowych. Przeanalizuj wygenerowany kod.

### Æwiczenie 5 - Tworzenie ksi¹¿ki.
Stwórz akcjê `/newBook`. Akcja ta ma wyœwietlaæ formularz do tworzenia nowej ksi¹¿ki. Formularz na razie napisz w normalnym HTML. Formularz ma kierowaæ do akcji `/createBook`.

### Æwiczenie 6 - Tworzenie ksi¹¿ki 2.
Stwórz akcjê `/createBook`. Akcja ta ma pobieraæ informacje z POST-a i na jej podstawie tworzyæ i zapamiêtywaæ do bazy danych now¹ ksi¹¿kê. Na razie powinna wyœwietlaæ statyczn¹ informacjê o tym ¿e uda³o siê stworzyæ ksi¹¿kê (to czy siê uda³o czy nie zweryfikuj za pomoc¹ PHPMyAdmin).

### Æwiczenie 7 - Wyœwietlanie ksi¹¿ki.
Stwórz akcjê `/showBook/{id}`. Akcja ta ma pobieraæ wczytywaæ ksi¹¿kê o podanym id z bazy danych i wyœwietlaæ jej informacjê na stronie.
Zmodyfikuj akcjê `/createBook` w taki sposób ¿eby po stworzeniu nowej ksi¹¿ki przekierowywa³a do akcji `/showBook` dla nowo dodanej ksi¹¿ki.

### Æwiczenie 8 - Lista ksi¹¿ek.
Stwórz akcjê podpiêt¹ do adresu `/showAllBooks`. Powinna ona wczytaæ wszystkie ksi¹¿ki i wyœwietliæ ich tytu³y. Przy ka¿dej ksi¹¿ce powinien byæ link do wyœwietlenia pe³nej informacji o niej.

### Æwiczenie 9 - Usuwanie ksi¹¿ek.
Stwórz akcjê podpiêt¹ do adresu `/deleteBook/{id}`. Powinna ona usuwaæ ksi¹¿kê o podanym id i pokazywaæ o tym informacje.

### Æwiczenie 11 - DQL.
Stwórz akcjê które (do pobrania informacji u¿yj slugów):
  1. Poka¿¹ wszystkie ksi¹¿ki o id wiêkszym ni¿ podane przez u¿ytkownika,
  2. Poka¿¹ wszystkie ksi¹¿ki o raitingu wiêkszym ni¿ podany przez u¿ytkownika,
  3. Poka¿¹ wszystkie ksi¹¿ki które zaczynaj¹ siê od napisu podanego przez u¿ytkownika.
U¿yj do tego DQL i swojego w³asnego repozytorium.

### Æwiczenie 12 - Autor.
Stwórz model i kontroler dla Autora. Model powinien mieæ nastêpuj¹ce informacjê:
  * Id,
  * Imiê i nazwisko,
  * Opis.
Kontroler powinien dawaæ mo¿liwoœæ tworzenia nowego autora w systemie, wyœwietlenia autora, wyœwietlenia wszystkich autorów.

### Æwiczenie 13 - Relacja pomiêdzy Autorem a ksi¹¿k¹.
Po³¹cz autora i ksi¹¿kê relacj¹ jeden do wielu (dwukierunkowa). Pamiêtaj o ponownym wygenerowaniu bazy danych i seterów i getrów do obu klas za pomoc¹ odpowiednich komend konsolowych.

### Æwiczenie 14 - Dodawanie autora do ksi¹¿ki.
Zmodyfikuj tworzenie ksi¹¿ki tak ¿eby u¿ytkownik móg³ wybraæ jej autora. W tym celu w kontrolerze wczytaj wszystkich autorów i podaj ich do widoku. W widoku w pêtli dodaj ich wszystkich do selecta.

### Æwiczenie 15 - MOdyfikacja widoków.
Zmodyfikuj wyœwietlania zarówno ksi¹¿ki i autora.

Ksi¹¿ka powinna pokazywaæ dane swojego autora (imiê i nazwisko) i podawaæ link do jego strony.

Autor powinien wypisywaæ ile ma ksi¹¿ek, i nastêpnie w liœcie pokazywaæ ich nazwy + linki do ich stron.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request