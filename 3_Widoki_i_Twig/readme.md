# PHP &ndash; Symfony
## Widoki i Twig


## Jak rozwiązywać zadania?

Zrób następujące kroki:

1. Stwórz [**fork**][forking] repozytorium z zadaniami.
2. [**Sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany do swojego repozytorium na GitHubie.
5. Stwórz [**pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz wszystkie zadania.

W katalogu stwórz nowy projekt Symfony i wgraj do niego wcześniej przygotowany plik **.gitignore**.

### Zadanie 1 &ndash; tworzenie projektu
Stwórz nowy projekt o nazwie **projekt_view** (jeżeli dostaniesz błąd „Could not delete /tmp/…” nie przejmuj się – Symfony będzie poprawnie działać).
Następnie:
1. Stwórz w nim nowy bundle (o nazwie CodersLab).
2. Usuń AppBundle (wykonaj takie same kroki jak w zadaniu 2. z zadań z Podstaw Symfony).

### Zadanie 2 &ndash; nowy kontroler
Wygeneruj nowy kontroler o nazwie **views** za pomocą odpowiedniej komendy konsolowej. Na razie nie generuj do niego żadnej akcji.  

### Zadanie 3 &ndash; Korzystanie z szablonu
Stwórz nową akcję przypisaną do adresu `/render`. Podepnij do niej widok `view_ex_3.html.twig` (który możesz znaleźć w katalogu z zadaniami). Widok ten nie przyjmuje żadnych danych.
Włóż ten szablon w dwa miejsca:
* w katalog Bundla,
* w katalog `app/resources/…`.
Zobacz, który się wyświetla jako pierwszy. Usuń go i zobacz, co się stanie.

### Zadanie 4 &ndash; przekazywanie danych do szablonu
Stwórz nową akcję przypisaną do adresu `/render/{username}`. Podepnij do niej widok `view_ex_4.html.twig` (który możesz znaleźć w katalogu z zadaniami). Widok ten przyjmuje jedną zmienną o nazwie `username`. Przekaż ją.

### Zadanie 5 &ndash; adnotacje
Przerób zadania 3. i 4. w taki sposób, żeby skorzystać z adnotacji @Template. Nie usuwaj starego rozwiązania, tylko je zakomentuj.

### Zadanie 6 &ndash; pierwszy szablon
Stwórz akcję podpiętą do adresu `/repeatSentence/{n}`.
Do akcji dopisz widok, który powtórzy **n** razy zdanie „Symfony jest fajne” . Pętle wykonaj w szablonie, przekaż do niego liczbę powtórzeń.

Zmodyfikuj swoje rozwiązanie w taki sposób, żeby zdanie, które wyświetlasz, było przekazane z kontrolera. Dopiero w chwili, w której zdanie nie jest przekazane, ma się wyświetlić napis „Symfony jest fajne”.

### Zadanie 7 &ndash; zaawansowany szablon
Stwórz akcję podpiętą do adresu `/createRandoms/{start}/{end}/{n}`.
Akcja ma generować tablicę z `n` losowymi liczbami z zakresu `start` do `end` którą prześlesz do swojego widoku. Nastepnie w Twigu użyj pętli `for` żeby wyświetlić wszystkie przesłane liczby.
Jeżeli tablica jest pusta (czyli podane `n` jest mniejsze lub równe 0) powinieneś wyświetlić odpowiednią informacje.

### Zadanie 8 &ndash; artykuł
Stwórz szablon, który powinien wyświetlić artykuł. Klasę artykułu możesz znaleźć w katalogu z ćwiczeniami.
Umieść go w folderze: `/yourBundle/Entity` (jeżeli go nie ma, to go stwórz).

Pamiętaj o zmianie namespace na poprawny + dołączenia klasy `Article` do Twojego kontrolera:
```
use <your_bundle>\Entity\Article;
```
Następnie dopisz akcję `/showArticle/{n}`, która wczyta artykuł o podanym **ID** i go wyświetli.

### Zadanie 9 &ndash; wszystkie artykuły
Stwórz akcję `/showAllArticles`, która wyświetli wszystkie artykuły. Do wyświetlenia artykułu użyj szablonu z zadania 8. Nie pisz wyświetlania od nowa, w pętli użyj zrobionego już szablonu.

### Zadanie 10 &ndash; szablon główny
Stwórz szablon bazowy dla całej Twojej aplikacji. Powinien on dawać możliwość nadpisania:
  1. Tytułu strony.
  2. Nazwy kontrolera (jako głównego tytuły opakowanego w **h1** ponad treścią strony).
  3. Głównej części strony (opakowaną w **div**).
Powinien zawierać menu (na razie zostaw puste). Menu powinno być widoczne zawsze. Popraw wszystkie szablony z poprzednich zadań, aby dziedziczyły po szablonie głównym i wypełniały odpowiednie bloki (czyli nadawały swój tytuł, nazwę swojego kontrolera i główną część strony).

### Zadanie 11 &ndash; menu
Zmień główny szablon w taki sposób, żeby w menu wyświetlały się linki do wszystkich akcji z poprzednich zadań (pamiętaj o przekazaniu poprawnych stubów). Napisz menu dwa razy:
1. używając `path()`,
2. używając `url()`.

Zobacz, czym się różnią wygenerowanie linki.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request
