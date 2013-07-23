#Podcast Information System \*

\* **Podcast Information System** (PIS) ist nur ein Codename und wird sich noch ändern

##Konzept

Das PIS ist ein System und Format zum Austausch von Metadaten. Anfangs ist PIS für Multimedia Inhalte (wie Podcasts) gedacht, eine Erweiterung auf Blogs und andere Textinhalte soll nicht ausgeschlossen sein.

##Dateiformat

Das Dateiformat muss möglichst von vielen Programmiersprachen verwendet werden können, deshalb habe ich mich dort für JSON entschieden. Ausserdem müssen folgende Eigenschaften vom Dateiformat ermöglicht werden:

* verlinken/weiterleiten auf andere Orte (bei verwendung von 3rd Party Diensten)
* cryptografische public key signierung (+ evtl. verschlüsselung)
* dezentrale + redundante Speicherung der Daten (Verifizierung durch Signatur)
* Haltbarkeitsangabe (ttl)
* erweiterbarkeit auf andere Entitäten
* anreicherbarkeit mit Zusatzinformationen
* auch in XML darstellbar
* trotz moderner Formate kompatibel zu RDF, VCF, GND, FoaF, ... bleiben (also durch Converter)
* ...

##Entitätentypen

Da über die PIS Dateien verschiedenste Daten übertragen werden können/sollten ist eine Kategorisierung in Entitäten sinnvoll. Ähnlich wie in anderen Datensammlungen werden folgende Entitäten vorgeschlagen, diese Liste sollte jedoch erweiterbar sein, falls notwendig:

* [**redirect**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/redirect.md) Weiterleitung (Weiterleitung auf andere PIS Dateien (zu verwenden auf Systemen die keine Weiterleitung (HTTP 301/2) unterstützen))
* [**overview**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/overview.md) Übersicht (um alle unter dieser Domain verfügbaren PIS Dateien aufzulisten)
* Namen (als Übersicht ähnlich der Wikipedia Begriffsklärungsseiten (Diese Seite ist eine Begriffsklärung zur Unterscheidung mehrerer mit demselben Wort bezeichneter Begriffe.))
* [**person**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/person.md) Personen (ausschlieslich natürliche Personen und keine juristische Personen)
* Körperschaften, Firmen, Vereinigungen, Communitys
* Events (im Podcast Bezug hauptsächlich Hörertreffen und Workshops)
* [**produce**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/produce.md) Werke (Veröffentlichungen jeglicher Art, sowohl live als auch Aufzeichnungen)
* [**geo**](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/geo.md) Geografika (Um Ortsdaten bei Dauerhaften Ereignissen zu übermitteln, bei zeitlich begrenzten Ereignissen bitte Events verwenden)
* **recepie** um Arbeitsabläufe zu beschreiben
* ...

Die [Beispieldateien](https://github.com/SimonWaldherr/PIS-draft/blob/master/beispieldateien/) sind nur ein vorläufiger Entwurf. Die Dateien wurden als JSON gespeichert, enthalten jedoch mit // gekennzeichnete Kommentare, diese sind für gewöhnlich nicht in JSON erlaubt und dienen nur der Dokumentation.

##Verbreitung

Um die Daten an andere Systeme zu übergeben ist ein Pushdienst geplant, jeder Hoster von PIS-Daten kann selbst Pushen oder aber auch einen Pushdienst verwenden.
Beim Push von PIS-Daten wird nur die URL des Objekts übergeben, das nutzende System muss die Daten dann selbst abrufen. Durch diese Art des Push wird es vereinfacht, die ursprüngliche Herrkunft der Daten zu verifizieren.
Zusätzlich zum Push ist auch eine Eintragung in Feeds, als DNS Eintrag und mittels einer PIS Datei im Root Verzeichnis der Webseite (wie auch bei robots.txt, humans.txt, sitemap.xml, favicon.ico, apple-touch-icon-precomposed.png, ...) möglich.
Neben der Verbreitung als JSON Datei ist auch ein Transfer der Daten im PIS-Backbone geplant, welche aber noch von [Dr4k3](https://github.com/Drake81) niedergeschrieben werden muss.

##API

Der Zugriff auf die Daten auf Frontend Ebene erfolgt ausschlieslich über HTTP GET requests. Um neue Daten ans Backend zu schicken wird ein HTTP POST verwendet. Im Backbone wird XMPP zur Übertragung von Daten verwendet.

##PIS-Network

An einem Synchronisierungs und Backbone Infrastruktur Konzept arbeitet [Dr4k3](https://github.com/Drake81) und wird das nachtragen.
