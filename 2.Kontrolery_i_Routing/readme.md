# PHP - Symfony 2 - Kontrolery i Routing 

## Jak rozwi�zywa� zadania?

�eby rozwi�za� zadania musisz wykona� nast�puj�ce kroki:

1. �eby zacz��, stw�rz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nast�pnie [**sklonuj**][ref-clone] repozytorium na sw�j komputer.
1. Rozwi�� zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stw�rz **pull request**][pull-request] do oryginalnego repozytorium kiedy sko�czysz wszystkie �wiczenia.


Pami�taj �eby w katalogu stworzy� nowy projekt Symfony i wgra� do niego wcze�niej przygotowany plik .gitignore.

### �wiczenie 1 - Tworzenie projektu.
Stw�rz nowy projekt o nazwie projekt_controler (je�eli dostaniesz b��d �Could not delete /tmp/�� nie przejmuj si� � Symfony b�dzie poprawnie dzia�a�).
Nast�pnie:
  1. Stw�rz w nim nowy bundle (o nazwie CodersLab) .
  2. Usu� AppBundle (wykonaj takie same kroki jak w zadaniu 2 z �wicze� Podstaw Symfony).

### �wiczenie 2 - Nowy kontroler. 
Wygeneruj nowy kontroler o nazwie `first` za pomoc� odpowiedniej komendy konsolowej. Podczas generacji nie dodawaj mu �adnych akcji.

Nast�pnie stw�rz akcje kt�ra b�dzie przypisana do adresu `/helloWorld`. Akcja ta ma wypisywa� na stronie przywitanie. Pami�taj o:
  1. Stworzeniu odpowiedniej adnotacji do routingu,
  2. Zwr�ceniu obiektu typu `Response` z akcji (nie zapomnij o do��czeniu zalinkowaniu klasy Response poprzez use � patrz slajd 12),
  3. Odpowiednim nazwaniu metody (musi si� ko�czy� na s�owo Action).
  
  
### �wiczenie 3 - Slug.
Stw�rz now� akcj� przypisan� do adresu `/goodbye/{username}` gdzie `{username}` jest slugiem. Akcja ma wy�wietla� napis: �Goodbye � + nazwa przekazana przez slug.

### �wiczenie 4 - Slug 2.
Stw�rz now� akcj� przypisan� do adresu `/welcome/{name}/{surname}` gdzie `{name}` i `{surname}` s� slugami. Akcja ma wy�wietla� napis: �Welcome � + dane przekazane przez slugi.

Nadaj slugom warto�ci domy�lne (np. twoje imi� i nazwisko).

### �wiczenie 5 - Slug 3.
Stw�rz now� akcj� przypisan� do adresu `/showPost/{id}` gdzie `{id}` jest slugiem. Akcja ma wy�wietla� napis: �Showing post � + id. Dodaj odpowiednie adnotacje �eby wymusi� �eby id by�o liczb�.

### �wiczenie 6 - Metody.
Stw�rz 2 akcje:
  1. Jedna akcja ma by� przypisana do adresu `/form` i metody `GET`. Ma ona wy�wietla� formularz z polem do wpisania tekstu. Formularz ma wskazywa� na ten sam adres.
  2. Druga akcja ma by� przypisana do adresu `/form` i metody `POST`. Akcja na razie ma tylko wy�wietla� napis �Formularz przyj�ty�. Na razie nie przejmuj si� przes�anymi danymi.
  
### �wiczenie 7 - Przedrostek.
Dodaj do ca�ego kontrolera przedrostek `/first`. Zobacz jak zmieni�y si� adresy wszystkich stron kt�re do tej pory stworzy�e�.

### �wiczenie 8 - Obs�uga formularza.
Do drugiej akcji z zadania 6 dopisz kod kt�ry poprawnie b�dzie poprawnie b�dzie odczytywa� dane z formularza i wy�wietli� je na stronie.

### �wiczenie 9 - Sesja.
Stw�rz 2 akcje:
  1. Pierwsza ma by� przypisana do adresu /setSession/{value}. Ma zapisywa� do sesji przekazan� warto�� (pod kluczem �usertext�),
  2. Druga ma by� przypisana do adresu /getSession i wczytywa� zawarto�� sesji b�d�c� pod kluczem �usertext� i wy�wietla� j� na stronie (je�eli w sesji nie ma �adnej warto�ci to powinna si� wy�wietla� odpowiednia informacja).

### �wiczenie 10 - Ciasteczko.
Stw�rz 3 akcje:
  1. Pierwsza ma by� przypisana do adresu /setCookie/{value}. Ma zapisywa� do ciasteczka przekazan� warto�� (pod kluczem �myCookie�),
  2. Druga ma by� przypisana do adresu /getCookie i wczytywa� zawarto�� ciasteczka �myCookie� i wy�wietla� j� na stronie (je�eli nie ma nic w tym ciasteczku to powinna si� wy�wietli� odpowiednia informacja),
  3. Trzecia ma by� przypisana do adresu /deleteCookie i powinna kasowa� ciasteczko o nazwie �myCookie�.

### �wiczenie 11 - Przekierowanie.
Napisz akcje przypisan� do adresu /redirectMe i powinna przekierowywa� do akcji z punktu 3. Pami�taj o podaniu danych do sluga.

### �wiczenie 12 - Generowanie link�w.
Napisz akcje przypisan� do adresu /showAllLinks. Akcja powinna wy�wietla� linki do wszystkich akcji kt�re dzi� zrobili�my.
Wygeneruj linki na dwa sposoby: raz u�ywaj�c �cie�ek wzgl�dnych, drugi raz u�ywaj�c ca�kowitych.
Pami�taj o przekazywaniu slug�w je�eli jest taka potrzeba.

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request