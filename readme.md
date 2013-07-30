#Podcast Information System \*

\* **Podcast Information System** (PIS) ist nur ein Codename und wird sich noch ändern

**think big**
**and different**

##Konzept

Das PIS ist ein System und Format zum Austausch von Metadaten. Anfangs ist PIS für Multimedia Inhalte (wie Podcasts) gedacht, eine Erweiterung auf Blogs und andere Textinhalte ist nicht ausgeschlossen.

###Dateiformat

Das Dateiformat muss möglichst von vielen Programmiersprachen verwendet werden können, deshalb habe ich mich dort für JSON entschieden. Ausserdem müssen folgende Eigenschaften vom Dateiformat ermöglicht werden:

* verlinken/weiterleiten auf andere Orte (bei verwendung von 3rd Party Diensten)
* cryptografische public key signierung (+ evtl. verschlüsselung)
* dezentrale + redundante Speicherung der Daten (Verifizierung durch Signatur)
* Haltbarkeitsangabe (ttl)
* erweiterbarkeit auf andere Entitäten
* anreicherbarkeit mit Zusatzinformationen
* auch in XML darstellbar
* trotz moderner Formate kompatibel zu [RDF](http://de.wikipedia.org/wiki/RDF-Schema), [VCF](http://de.wikipedia.org/wiki/VCard), [GND](http://de.wikipedia.org/wiki/Gemeinsame_Normdatei), [FoaF](http://de.wikipedia.org/wiki/FOAF), ... bleiben (also durch Converter)
* ...

###Entitätentypen

Da über die PIS Dateien verschiedenste Daten übertragen werden können/sollten ist eine Kategorisierung in Entitäten sinnvoll. Ähnlich wie in anderen Datensammlungen werden folgende Entitäten vorgeschlagen, diese Liste sollte jedoch erweiterbar sein, falls notwendig:

* [**redirect**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/redirect.json) Weiterleitung (Weiterleitung auf andere PIS Dateien (zu verwenden auf Systemen die keine Weiterleitung (HTTP 301/2) unterstützen))
* [**overview**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/overview.json) Übersicht (um alle unter dieser Domain verfügbaren PIS Dateien aufzulisten)
* Namen (als Übersicht ähnlich der Wikipedia Begriffsklärungsseiten (Diese Seite ist eine Begriffsklärung zur Unterscheidung mehrerer mit demselben Wort bezeichneter Begriffe.))
* [**person**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/person.json) Personen (ausschlieslich natürliche Personen und keine juristische Personen)
* Körperschaften, Firmen, Vereinigungen, Communitys
* Events (im Podcast Bezug hauptsächlich Hörertreffen und Workshops)
* [**produce**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/produce.json) Werke (Veröffentlichungen jeglicher Art, sowohl live als auch Aufzeichnungen)
* [**geo**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/geo.json) Geografika (Um Ortsdaten bei Dauerhaften Ereignissen zu übermitteln, bei zeitlich begrenzten Ereignissen bitte Events verwenden)
* **recepie** um Arbeitsabläufe zu beschreiben
* [**base**](https://github.com/McCouman/PIS-draft/blob/master/beispieldateien/base.json) Idee für die Standarddaten des Podcasts (Grundeinstellung)
* ...

Die [Beispieldateien](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/) sind nur ein vorläufiger Entwurf. Die Dateien wurden als JSON gespeichert, enthalten jedoch mit // gekennzeichnete Kommentare, diese sind für gewöhnlich nicht in JSON erlaubt und dienen nur der Dokumentation.

###Verbreitung

Um die Daten an andere Systeme zu übergeben ist ein Pushdienst geplant, jeder Hoster von PIS-Daten kann selbst Pushen oder aber auch einen Pushdienst verwenden.
Beim Push von PIS-Daten wird nur die URL des Objekts übergeben, das nutzende System muss die Daten dann selbst abrufen. Durch diese Art des Push wird es vereinfacht, die ursprüngliche Herrkunft der Daten zu verifizieren.
Zusätzlich zum Push ist auch eine Eintragung in Feeds, als DNS Eintrag und mittels einer PIS Datei im Root Verzeichnis der Webseite (wie auch bei robots.txt, humans.txt, sitemap.xml, favicon.ico, apple-touch-icon-precomposed.png, ...) möglich.
Neben der Verbreitung als JSON Datei ist auch ein Transfer der Daten im PIS-Backbone geplant, welche aber noch von [Dr4k3](https://github.com/Drake81) niedergeschrieben werden muss.

###API

Der Zugriff auf die Daten auf Frontend Ebene erfolgt ausschlieslich über HTTP GET requests. Um neue Daten ans Backend zu schicken wird ein HTTP POST verwendet. Im Backbone wird XMPP zur Übertragung von Daten verwendet.

##Nutzer/Participanten

Das PIS liefert Daten bzw. bietet Daten an, mögliche Nutzer und Anbieter dieser Daten wären:

* Podlove Publisher (Anbieter)
* Firtz (Anbieter)
* hoersuppe.de (Nutzer + Anbieter)
* Shownot.es (Nutzer + Anbieter)
* Xenim Streaming (Nutzer + Anbieter)
* Event-Datenbank/Suchmaschine X (Nutzer)
* Podunion (Nutzer)
* Podbe (Nutzer + Anbieter)

##PIS-Backbone-Network

An einem Synchronisierungs und Backbone Infrastruktur Konzept arbeitet [Dr4k3](https://github.com/Drake81) und wird das nachtragen.

* Dezentraler Informationsverteiler Dienst als Eigener Application Server
  * Erweitert Mischprinzip und macht es flexibler
  * Aggregiert Informationen über andere Server - Peering Netzwerk
    * Verbindung der Systeme bspw. über XMPP/Jabber - Subscription/Push möglich
    * Aufbau von eigenen Messagetypen möglich - Dadurch flexibel
  * Datenformat der JSON als Grundlage
  * Vorteile:
    * Getrennte mehrfach vorhandene Systeme möglich - Podcaster können ihrn bevorzugten Service nutzen
      * Dennoch Datenaustausch zwischen verschiedenen Services möglich, wenn diese am Peering-Netz teilnehmen
    * Daten müssen nicht über Crawler gesucht werden, sondern könnten über das PeerNetzwerk jedem angeboten werden
    * Crawler dennoch möglich. Als eigene Systeme die wieder Daten in das Peernetzwerk weitergeben
    * Vollständig eigene Schicht und somit unabhängig von den anderen PIS-Layern (Kein wesentlicher Umbau der alten Strukturen)
      * Nur weitere Schnittstelle
  * Nachteile:
    * Aufwendige Implementation des Peer-Netzwerkes
    * Vertrauens Frage bei Peer-Teilnehmern (sowohl als Informationsanbieter als auch Nutzer)

