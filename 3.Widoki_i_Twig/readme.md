# PHP - Symfony 2 - Widoki i Twig

## Jak rozwi�zywa� zadania?

�eby rozwi�za� zadania musisz wykona� nast�puj�ce kroki:

1. �eby zacz��, stw�rz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nast�pnie [**sklonuj**][ref-clone] repozytorium na sw�j komputer.
1. Rozwi�� zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stw�rz **pull request**][pull-request] do oryginalnego repozytorium kiedy sko�czysz wszystkie �wiczenia.


Pami�taj �eby w katalogu stworzy� nowy projekt Symfony i wgra� do niego wcze�niej przygotowany plik .gitignore.

### �wiczenie 1 - Tworzenie projektu.
Stw�rz nowy projekt o nazwie projekt_view (je�eli dostaniesz b��d �Could not delete /tmp/�� nie przejmuj si� � Symfony b�dzie poprawnie dzia�a�).
Nast�pnie:
  1. Stw�rz w nim nowy bundle (o nazwie CodersLab) .
  2. Usu� AppBundle (wykonaj takie same kroki jak w zadaniu 2 z �wicze� Podstaw Symfony).

### �wiczenie 2 - Nowy kontroler. 
Wygeneruj nowy kontroler o nazwie �wiews� za pomoc� odpowiedniej komendy konsolowej. Na razie nie generuj do niego �adnej akcji.  
  
### �wiczenie 3 - Ko�ystanie z szablonu.
Stw�rz now� akcj� przypisan� do adresu `/render`. Podepnij do niej widok `wiew_ex_3.html.twig` (kt�ry mo�esz znale�� w katalogu z �wiczeniami). Widok ten nie przyjmuje �adnych danych.
W�� ten szablon w dwa miejsca: w katalogu Bundla i w katalogu `app/resources/�` . Zobacz kt�ry si� wy�wietla jako pierwszy. Usu� go i zobacz co si� stanie.

### �wiczenie 4 - Przekazywanie danych do szablonu.
Stw�rz now� akcj� przypisan� do adresu `/render/{username}`. Podepnij do niej widok `wiew_ex_4.html.twig` (kt�ry mo�esz znale�� w katalogu z �wiczeniami). Widok ten przyjmuje jedn� zmienn� o nazwie `username`. Przeka� j�.

### �wiczenie 5 - Adnotacje.
Przer�b zadanie 4 i 5 w taki spos�b �eby skorzysta� z adnotacji @Template. Pami�taj o tym �eby nie usuwa� starego rozwi�zania tylko je zakomentowa�.

### �wiczenie 6 - Pierwszy szablon.
Stw�rz akcj� podpi�t� do adresu `/repeatSentence/{n}`.
Do akcji dopisz widok kt�ry powt�rzy zdanie �Symfony jest fajne� n razy. P�tle wykonaj w szablonie, przekazuj�c do niego ilo�� powt�rze�.

Zmodyfikuj swoje rozwi�zanie w taki spos�b �eby zdanie kt�re wy�wietlasz by�o przekazane z kontrolera. Dopiero w chwili w kt�rej zdanie nie jest przekazane ma si� wy�wietli� napis �Symofny jest fajne�.

### �wiczenie 7 - Zaawansowany szablon.
Stw�rz akcj� podpi�t� do adresu `/createRandoms/{start}/{end}/{n}`.
Akcja ma generowa� tablic� z `n` losowymi liczbami z zakresu `start` do `end` kt�r� prze�lesz do swojego widoku. Nastepnie w Twigu u�yj p�tli `for` �eby wy�wietli� wszystkie przes�ane liczby.
Je�eli tablica jest pusta (czyli podane `n` jest mniejsze lub r�wne 0) powiniene� wy�wietli� odpowiedni� informacje.

### �wiczenie 8 - Artyku�.
Stw�rz szablon kt�ry powinien wy�wietli� artyku�. Klas� artyku�u mo�esz znale�� w katalogu z �wiczeniami.
Umie�� go w folderze: `/yourBundle/Entity` (je�eli go nie ma to go stw�rz).

Pami�taj o zmianie namespace na poprawny + do��czenia klasy Article do twojego kontrolera: 
```
use <your_bundle>\Entity\Article;
```
Nast�pnie dopisz akcj� `/showArticle/{n}` kt�ra wczyta artyku� o podanym ID i go wy�wietli.

### �wiczenie 9 - Wszystkie artyku�y.
Stw�rz akcj� `/showAllArticles` kt�ra wy�wietli wszystkie artyku�y. Do wy�wietlenia artyku�u u�yj szablonu z zadania 9 (nie pisz wy�wietlania od nowa tylko w p�tli u�yj zrobionego ju� szablonu).

### �wiczenie 11 - Szablon g��wny.
Stw�rz bazowy szablon dla ca�ej twojej aplikacji. Powinien dawa� mo�liwo�� nadpisania:
  1. Tytu�u strony,
  2. Nazwy kontrolera (jako g��wnego tytu�y opakowanego w `<h1>` ponad tre�ci� strony),
  3. G��wnej cz�ci strony (opakowan� w `<div>`).
Powinien zawiera� menu (na razie zostaw puste). Menu powinno by� widoczne zawsze. Popraw wszystkie szablony z poprzednich zada� �eby dziedziczy�y po szablonie g��wnym, i wype�nia�y odpowiednie bloki (czyli nadawa�y sw�j tytu�, nazw� swojego kontrolera i g��wn� cz�� strony).

### �wiczenie 12 - Menu.
Zmie� g��wny szablon w taki spos�b �eby w menu wy�wietla�y si� linki do wszystkich akcji z poprzednich zada� (pami�taj o przekazaniu poprawnych stub�w). Napisz menu 2 razy raz u�ywaj�c `path()` a raz `url()`. 

Zobacz czym si� r�ni� wygenerowanie linki.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request