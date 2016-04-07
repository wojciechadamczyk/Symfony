# PHP - Symfony 2 - Security

## Jak rozwi�zywa� zadania?

�eby rozwi�za� zadania musisz wykona� nast�puj�ce kroki:

1. �eby zacz��, stw�rz tak zwany [**fork**][forking] repozytorium z zadaniami.
1. Nast�pnie [**sklonuj**][ref-clone] repozytorium na sw�j komputer.
1. Rozwi�� zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
1. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
1. [Stw�rz **pull request**][pull-request] do oryginalnego repozytorium kiedy sko�czysz wszystkie �wiczenia.


Pami�taj �eby w katalogu stworzy� nowy projekt Symfony i wgra� do niego wcze�niej przygotowany plik .gitignore.

## Statyczny user

### �wiczenie 1 - Tworzenie projektu.
Stw�rz nowy projekt o nazwie projekt_static_user (je�eli dostaniesz b��d �Could not delete /tmp/�� nie przejmuj si� � Symfony b�dzie poprawnie dzia�a�).
Nast�pnie:
  1. Stw�rz w nim nowy bundle (o nazwie CodersLab) .
  2. Usu� AppBundle (wykonaj takie same kroki jak w zadaniu 2 z �wicze� Podstaw Symfony).

### �wiczenie 2 - Nowy kontroler. 
W projekcie stw�rz kontroler z dwoma akcjami:
  * /all
  * /restricted
  
Nast�pnie skonfiguruj Symfony w taki spos�b �eby akcja restricted by�a dost�pna tylko i wy��cznie po zalogowaniu.
Masz to zrobi� u�ywaj�c komponentu Security i statycznych u�ytkownik�w (wpisanych na sta�e do plik�w konfiguracyjnych).


## FosUserBundle

### �wiczenie 3 - Tworzenie projektu.
Stw�rz nowy projekt o nazwie projekt_fos_user (je�eli dostaniesz b��d �Could not delete /tmp/�� nie przejmuj si� � Symfony b�dzie poprawnie dzia�a�).
Nast�pnie:
  1. Stw�rz w nim nowy bundle (o nazwie CodersLab) .
  2. Usu� AppBundle (wykonaj takie same kroki jak w zadaniu 2 z �wicze� Podstaw Symfony).

### �wiczenie 4 - FosUserBundle.
W nowym projekcie uruchom FosUserBundle. Projekt na razie ma dawa� mo�liwo�� logowania, rejestracji, wylogowywania i edycji swojego konta.
Poza podstawowymi informacjami kt�re trzyma FosUserBundle, nasz u�ytkownik powinien jeszcze trzyma� sw�j opis.
Spr�buj podmieni� widoki na swoje w�asne (�eby nie u�ywa� widok�w przegotowanych przez FOS).

### �wiczenie 5.
Do ostatnich warsztat�w doimplementuj funkcjonalno�c u�ytkownik�w. Ka�dy u�ytkownik powinien mie� swoj� w�asn� ksi��k� adresow�.
Stw�rz potrzebn� Ci encj� i po��cz j� z kontaktami (relacja wiele do jednego - jednokierunkowa).

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[pull-request]: https://help.github.com/articles/creating-a-pull-request