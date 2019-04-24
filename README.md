# server-for-minecraft-web-GUI
Der zugehörige Windows Minecraft Server für das Repository minecraft-web-GUI

## Prerequisites

* PHP 5 (und mehr)
* Apache 24
* Offene Ports (80, (ggf. 433), 25575, 25565) (TCP)
* System: Windows 7, Windows 10, Windows Server
* Empfohlen: Git

Empfohlen: Zweiten Server mit Linux System auf dem das Repositorys ["minecraft-web-GUI"](https://github.com/12tom12/minecraft-web-GUI) installiert ist.

## Getting Started

Installiere Apache24 und PHP7 auf deinem Windows Computer und verknüpfe die beiden miteinander und installiere Apache als Hintergrunddienst. Wie das geht, findet man in unzähligen Tutorials im Internet.

Öffne die Ports 80, (ggf. 433), 25575, 25565 als TCP in deiner Firewall und deinem Router.

Hole dir entweder eine Statische IP und wenn du kein Geld ausgeben möchtest, eine Dynamische IP und richte diese bei deinem Router ein. Empfohlen ist hier ["DDNSS"](https://ddnss.de/).
Richte das ganze so ein, dass du das Stammverzeichnis über z. B. http://example.ddnss.de aufrufen kannst.

Erstelle dann im Verzeichnis, das man über die Domain direkt aufrufen kann den Ordner "minecraft"

Installiere zuerst auf deinem Linux-Server das Repository ["minecraft-web-GUI"](https://github.com/12tom12/minecraft-web-GUI) und folge  dort zuerst der Installationsanleitung.

Empfohlen: bei Server mit GIT: Baue eine dauerhafte Pull Verbindung zwischen dem Repository und deinem Server auf.
Anders: bei Server ohne GIT: Lade dir das Repository als Zip Datei herunter.
Speichere das Repository so ab, dass die Datei index.php über z. B. http://localhost/minecraft/start.php aufrufbar ist.

Lade dir entweder von ["MCVersions.net"](https://mcversions.net/) oder von ["Spigot"](https://getbukkit.org/download/spigot) einen Minecraft Server herunter und speichere ihn als ''' server.jar ''' im /minecraft/ Ordner ab.

Starte nun den Server und Stoppe ihn direkt danach wieder, wenn er nicht von alleine gestoppt wird.

Im Stammverzeichnis des Repositorys findest du die Datei "eula.txt". Diese Datei öffnest du jetzt und änderst "eula=false" zu "eula=true".

Starte nun den Server und Stoppe ihn direkt danach wieder, wenn er nicht von alleine gestoppt wird.

Im Stammverzeichnis des Repositorys findest du die Datei "server.properties". Diese Datei öffnest du jetzt.
Trage in ihr "enable-rcon=true" und "rcon.password=DEINPASSWORT" ein. Das Passwort ist das gleiche, was du beim ["minecraft-web-GUI"](https://github.com/12tom12/minecraft-web-GUI) in der config.inc.php bei "$password = '';" eingibst.

Starte nun den Server und stoppe ihn wieder.

## Running the Server

Rufe die Internetseite ganz normal auf.
Melde dich an und warte ein paar Sekunden.
Gebe ein mit wie viel Ram der Server gestartet werden soll. Schaue dazu im Taskmanager wie viel Arbeitsspeicher noch frei ist und ziehe davon noch ca. 1 GB ab. Rechne das ganze nun in MB um. Achte dabei darauf, dass 1 GB 1024 MB sind.
Klicke nun auf Server starten.
Es dauert einen Moment und der Server sollte gestartet sein.

### Errormessages
Noch keine vorhanden

------------

## Built With

* [PHP](https://www.php.net/) - Programmiersprache für Webanwendungen
* [Minecraft](https://www.minecraft.net/) - Spiel über Blöcke und Abenteuer
* [Java](https://www.java.com/) - Minecraft und der Minecraft-Server sind Java Basierend
* [Rcon](https://github.com/thedudeguy/PHP-Minecraft-Rcon/) - Rcon Protokoll System von Chris Churchwell

## Authors

* **Tom** - *Hauptarbeit* - [12tom12](https://github.com/12tom12/)

Hier ist noch eine Auflistung von allen [contributors](https://github.com/12tom12/server-for-minecraft-web-GUI/graphs/contributors), die an diesem Projekt mitgewirkt haben.

## License

Das System ist Lizensiert under einer [Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)](https://creativecommons.org/licenses/by-nc-sa/4.0/) Lizez.

### Sie dürfen:
Teilen — das Material in jedwedem Format oder Medium vervielfältigen und weiterverbreiten
Bearbeiten — das Material remixen, verändern und darauf aufbauen
Der Lizenzgeber kann diese Freiheiten nicht widerrufen solange Sie sich an die Lizenzbedingungen halten.

### Unter folgenden Bedingungen:
* Namensnennung — Sie müssen angemessene Urheber- und Rechteangaben machen, einen Link zur Lizenz beifügen und angeben, ob Änderungen vorgenommen wurden. Diese Angaben dürfen in jeder angemessenen Art und Weise gemacht werden, allerdings nicht so, dass der Eindruck entsteht, der Lizenzgeber unterstütze gerade Sie oder Ihre Nutzung besonders.
* Nicht kommerziell — Sie dürfen das Material nicht für kommerzielle Zwecke nutzen.
* Weitergabe unter gleichen Bedingungen — Wenn Sie das Material remixen, verändern oder anderweitig direkt darauf aufbauen, dürfen Sie Ihre Beiträge nur unter derselben Lizenz wie das Original verbreiten.
* Keine weiteren Einschränkungen — Sie dürfen keine zusätzlichen Klauseln oder technische Verfahren einsetzen, die anderen rechtlich irgendetwas untersagen, was die Lizenz erlaubt.

## Required knowledge

* Grundkenntnisse in PHP
* Grundkenntnisse in Apache und generell Webentwicklung
* Grundkenntnisse in Minecraft
* Grundkenntnisse in BATCH
* Besitz von mindestens einem Windows Computer (Empfohlen noch zusätzlich ein Linux Server mit MySQL) mit Apache24 und PHP 7
* Grundkenntnisse: programmieren
* Geduld und logisches Denkvermögen
