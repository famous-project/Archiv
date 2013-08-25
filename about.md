#$PIS

Das PIS ist ein System und Format zum Austausch von Metadaten. Anfangs ist PIS für Multimedia Inhalte (wie Podcasts) gedacht, eine Erweiterung auf Blogs und andere Textinhalte ist nicht ausgeschlossen.

##Am Anfang war das Wort

und schon sind wir beim Problem, die menschliche Sprache ist in vielerlei Hinsicht uneindeutig und in nicht schriftlicher Form sogar noch schwieriger durch Computer zu verarbeiten.
Bereits in den 90ern wurde Versucht, dem Web mehr Semantik bei zu bringen. "Resource Description Framework" und "Semantic Web" sind da die Stichworte. Viele waren sehr überzeugt davon, aber anscheinend war die Zeit noch nicht reif.
Seit einiger Zeit wächst die Idee der Semantik auch wieder im Bereich der Blogs und Podcasts, jedoch stammen die Möglichkeiten/Technologien, diese Semantik anzubieten immernoch aus den 90ern.
Deshalb haben wir (Personen aus den verschiedensten Projekten und Gruppen, allerdings alle mit Bezug auf Podcasts) uns dazu entschlossen, dieses nun schon so lange ungelöstes Problem erneut in den Fokus zu rücken und sowohl mit Vorschlägen und Standards, als auch mit richtigen Code der diese Ideen dann auch umsetzt, dem Problem Herr zu werden.

##Because we can?

Einige werden sich nun fragen, "wieso das ganze?". Ist das Metadatenproblem nicht nur ein Akademisches, welches gar keine wirklichen Auswirkungen auf unseren Alltag hat? Nein! Mehr Semantik und Metadaten machen vieles einfacher und bedeuten (wenn es vernünftige Software dafür gibt) nur einen geringen bis gar keinen Mehraufwand.
Unser Ziel ist es jedoch, durch möglichst vielseitige Automatisierung den Aufwand beim Erstellen von Multimediainhalten sogar noch zu senken.
So, es wurde jetzt erklärt, dass diese Metadaten nicht viel Aufwand bedeuten, aber was nützt es uns

##Cui bono?

###Podcastern

Wie bereits erwähnt ist es unser Ziel, die "Arbeit" von Podcastern zu vereinfachen. Durch die Abbildung von Semantik und Metadaten im Podcastingsystem können viele Dinge automatisierter ablaufen, sei es der Workflow von der Aufnahme, über die Vershownotung, bis hin zur Veröffentlichung oder auch die Erkennung, zusammenhängender Informationen.
...

###Hörern

Je mehr eine Podcastsoftware über den Inhalt eines Podcasts weiß, desto mehr kann es auch dem/der HörerIn helfen, Dinge zu hören, die ihm/ihr gefallen. Mit mehr Semantik lassen sich auch Abfragen über Podcasts, in welchen das selbe Thema, Produkt oder Event besprochen wurde, machen. 
Die Durchsuchbarkeit sowohl der Podcasts selbst, aber auch von zusätzlichen Inhalten, wie z.B. Chatlogs oder zugehörige Nachrichten in "sozialen" Netzwerken wird dadurch nicht nur ermöglicht, sondern auch zum Kinderspiel

###Drittdiensten

Da die meisten der Beteiligten bei irgendwelchen Podcast bezogenen Drittdiensten mithelfen, bietet das Projekt in erster Linie auch den Drittdiensten die meisten Vorteile. Es muss jedoch erwähnt werden, dass sowhol Podcaster, als auch Hörer von besser funktionierenden Drittdiensten profitieren. Egal ob Podcatcher (Instacast) oder Streamingdienste (Xenim), ob Audiobearbeitung (Auphonic) oder Crowdsourced Sendungsnotizen (Shownot.es), alle profitieren sie von mehr Semantik. Je mehr ein System von den Inhalten versteht, desto mehr kann es Arbeiten automatisieren und Aufgaben erleichtern.

##Unser Plan

Dem KISS Prinzip (Keep it simple, stupid) entsprechend, möchten wir das ganze zum einen soweit wie möglich auf bereits bestehender Technologie basieren lassen und zum anderen keine unnötigen Features (Featuritis) einbauen. 
Es gibt einen schönen Spruch, der basagt, dass Perfektion nicht ist, wenn man nichts mehr hinzufügen kann, sondern wenn man nichts mehr weglassen kann. Aus diesem Grund suchen wir nach dem kleinsten gemeinsamen Nenner all unserer Probleme, die wir bei der Automatisierung haben.
Da unser Ansatz ein aktueller und moderner Ansatz ist, wollen wir im Vergleich zu den Versuchen aus den 90ern kein XML sondern JSON zum Datenaustausch verwenden.
Ein uns ebenfalls wichtiger Punkt ist die möglichst breite Unterstützung von Technologien, die wir durch unseren Fokus auf Webtechnologien erreichen. Man kann in so ziemlich jeder wichtigen Sprache HTTP Requests senden und JSON verarbeiten.
Weitere Details zu unserem Vorhaben und wie wir gedenken, es umzusetzen folgen in Kürze.

##Jeder packt mit an

Da es kein einfaches Unterfangen ist und wir möglichst bald erste in Software gegossene Problemlösungen veröffentlichen wollen sind wir über jegliche Hilfe dankbar.
Jeder der unser Vorhaben unterstützen und Teil des Projekts werden will ist herzlich dazu eingeladen. Jegliche Hilfe ist jederzeit willkommen, egal ob Programmierer oder Admins, ob Designer oder Podcaster die über uns berichten und unsere Software testen wollen.


// beim schreiben dieses Textes ist mir aufgefallen, dass wir uns über die Ansprache der Leute gedanken machen sollten, bzw. dass ich ungern entscheiden würde, ob wir mit du, Sie oder ihr die Leute ansprechen oder ob wir das generische Femininum oder Maskulinum verwenden sollten.

