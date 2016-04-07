# PHP - Symfony 2 - Widoki i Twig

## Jak rozwi¹zywaæ zadania?

¯eby rozwi¹zaæ zadania musisz wykonaæ nastêpuj¹ce kroki:

1. ¯eby zacz¹æ, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nastêpnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
1. Rozwi¹¿ zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skoñczysz wszystkie æwiczenia.


Pamiêtaj ¿eby w katalogu stworzyæ nowy projekt Symfony i wgraæ do niego wczeœniej przygotowany plik .gitignore.

### Æwiczenie 1 - Tworzenie projektu.
Stwórz nowy projekt o nazwie projekt_view (je¿eli dostaniesz b³¹d „Could not delete /tmp/…” nie przejmuj siê – Symfony bêdzie poprawnie dzia³aæ).
Nastêpnie:
  1. Stwórz w nim nowy bundle (o nazwie CodersLab) .
  2. Usuñ AppBundle (wykonaj takie same kroki jak w zadaniu 2 z æwiczeñ Podstaw Symfony).

### Æwiczenie 2 - Nowy kontroler. 
Wygeneruj nowy kontroler o nazwie „wiews” za pomoc¹ odpowiedniej komendy konsolowej. Na razie nie generuj do niego ¿adnej akcji.  
  
### Æwiczenie 3 - Ko¿ystanie z szablonu.
Stwórz now¹ akcjê przypisan¹ do adresu `/render`. Podepnij do niej widok `wiew_ex_3.html.twig` (który mo¿esz znaleŸæ w katalogu z æwiczeniami). Widok ten nie przyjmuje ¿adnych danych.
W³ó¿ ten szablon w dwa miejsca: w katalogu Bundla i w katalogu `app/resources/…` . Zobacz który siê wyœwietla jako pierwszy. Usuñ go i zobacz co siê stanie.

### Æwiczenie 4 - Przekazywanie danych do szablonu.
Stwórz now¹ akcjê przypisan¹ do adresu `/render/{username}`. Podepnij do niej widok `wiew_ex_4.html.twig` (który mo¿esz znaleŸæ w katalogu z æwiczeniami). Widok ten przyjmuje jedn¹ zmienn¹ o nazwie `username`. Przeka¿ j¹.

### Æwiczenie 5 - Adnotacje.
Przerób zadanie 4 i 5 w taki sposób ¿eby skorzystaæ z adnotacji @Template. Pamiêtaj o tym ¿eby nie usuwaæ starego rozwi¹zania tylko je zakomentowaæ.

### Æwiczenie 6 - Pierwszy szablon.
Stwórz akcjê podpiêt¹ do adresu `/repeatSentence/{n}`.
Do akcji dopisz widok który powtórzy zdanie „Symfony jest fajne” n razy. Pêtle wykonaj w szablonie, przekazuj¹c do niego iloœæ powtórzeñ.

Zmodyfikuj swoje rozwi¹zanie w taki sposób ¿eby zdanie które wyœwietlasz by³o przekazane z kontrolera. Dopiero w chwili w której zdanie nie jest przekazane ma siê wyœwietliæ napis „Symofny jest fajne”.

### Æwiczenie 7 - Zaawansowany szablon.
Stwórz akcjê podpiêt¹ do adresu `/createRandoms/{start}/{end}/{n}`.
Akcja ma generowaæ tablicê z `n` losowymi liczbami z zakresu `start` do `end` któr¹ przeœlesz do swojego widoku. Nastepnie w Twigu u¿yj pêtli `for` ¿eby wyœwietliæ wszystkie przes³ane liczby.
Je¿eli tablica jest pusta (czyli podane `n` jest mniejsze lub równe 0) powinieneœ wyœwietliæ odpowiedni¹ informacje.

### Æwiczenie 8 - Artyku³.
Stwórz szablon który powinien wyœwietliæ artyku³. Klasê artyku³u mo¿esz znaleŸæ w katalogu z æwiczeniami.
Umieœæ go w folderze: `/yourBundle/Entity` (je¿eli go nie ma to go stwórz).

Pamiêtaj o zmianie namespace na poprawny + do³¹czenia klasy Article do twojego kontrolera: 
```
use <your_bundle>\Entity\Article;
```
Nastêpnie dopisz akcjê `/showArticle/{n}` która wczyta artyku³ o podanym ID i go wyœwietli.

### Æwiczenie 9 - Wszystkie artyku³y.
Stwórz akcjê `/showAllArticles` która wyœwietli wszystkie artyku³y. Do wyœwietlenia artyku³u u¿yj szablonu z zadania 9 (nie pisz wyœwietlania od nowa tylko w pêtli u¿yj zrobionego ju¿ szablonu).

### Æwiczenie 11 - Szablon g³ówny.
Stwórz bazowy szablon dla ca³ej twojej aplikacji. Powinien dawaæ mo¿liwoœæ nadpisania:
  1. Tytu³u strony,
  2. Nazwy kontrolera (jako g³ównego tytu³y opakowanego w `<h1>` ponad treœci¹ strony),
  3. G³ównej czêœci strony (opakowan¹ w `<div>`).
Powinien zawieraæ menu (na razie zostaw puste). Menu powinno byæ widoczne zawsze. Popraw wszystkie szablony z poprzednich zadañ ¿eby dziedziczy³y po szablonie g³ównym, i wype³nia³y odpowiednie bloki (czyli nadawa³y swój tytu³, nazwê swojego kontrolera i g³ówn¹ czêœæ strony).

### Æwiczenie 12 - Menu.
Zmieñ g³ówny szablon w taki sposób ¿eby w menu wyœwietla³y siê linki do wszystkich akcji z poprzednich zadañ (pamiêtaj o przekazaniu poprawnych stubów). Napisz menu 2 razy raz u¿ywaj¹c `path()` a raz `url()`. 

Zobacz czym siê ró¿ni¹ wygenerowanie linki.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request