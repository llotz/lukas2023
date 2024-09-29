<!DOCTYPE html>
<html lang="de">

<head>
	<title>Lukas Lotz</title>
	<? include_once("resource/meta.php"); ?>
	<style>
		<?php echo file_get_contents("global.css"); ?>
	</style>
</head>

<body>
	<? include("resource/menu.php"); ?>
	<div class="badges">
		<a href="https://www.xing.com/profile/Lukas_Lotz/cv/">
			<img alt="xing badge" src="img/xing.png" class="badge" />
		</a>
		<a href="https://github.com/llotz/">
			<img alt="github badge" src="img/github.png" class="badge" />
		</a>
		<a href="https://www.codewars.com/users/llotz">
			<img alt="codewars badge" src="img/codewars.png" class="badge" />
		</a>
	</div>
	<div class="tags">
		Full Stack Softwareentwickler | Schwarztrinker | Realist | 🤘
	</div>
	<img alt="my face" src="img/me2.jpg" class="shitface" />
	<div class="tagline">
		Grüß dich! Ich bin Lukas und das ist meine Webseite.
	</div>
	<div class="content">
		<p>
			Ich bin Softwareentwickler mit Leidenschaft. Ich entwickle Systeme, 
			arbeite mich in Bestandslösungen ein und erweitere sie, verbringe 
			gerne die ein oder andere Stunde meines Lebens damit, Probleme 
			technisch zu lösen und habe Spaß dabei.
		</p>
		
		<p>
			Beruflich bin ich hauptsächlich im .NET Umfeld mit C# zugange. Privat
			probiere ich auch gerne mal irgendwas von den zahllosen neuen Sachen,
			die jeden Tag rauskommen. Von Zeit zu Zeit mache ich mir aber auch gerne
			die Hände an einer neuen Programmiersprache dreckig.
		</p>

		<p>
			Schau dir mein Githubprofil an, dort findest du ein paar der Projekte,
			die ich in meiner Freitzeit so zusammenklimpere.
		</p>
		<div class="content-header">Einblick in meinen Beruf</div>
		<p>
			Der Job als Softwareentwickler lässt sich schwer pauschalisieren, da bei
			mir das momentane Interesse eine sehr große Rolle spielt. Zweifelsohne
			geht man aber ohne Lernbereitschaft unter oder bleibt auf der Stelle
			stehen und verliert immer schneller den Anschluss an die Branche. Man
			muss sich stetig neues Wissen aneignen, um die Fähigkeit zu lernen nicht
			zu verlernen.
		</p>

		<p>
			Beruflich versuche ich tendenziell Dinge, wie neue Fähigkeiten
			umzusetzen (Clean Code, Entwurfsmuster etc.), weil die Umgebung meistens
			eine Technologie vorgibt. Im Privaten teste ich gerne mal ein neues
			Framework oder eine mir unbekannte Technologie oder Sprache. Mir macht
			mein Handwerk spaß.
		</p>

		<p>
			Ja, Programmieren ist meiner bescheidenen Meinung nach ein Handwerk. Man
			erkennt schnell, ob der Code von einem lustlosen Anfänger gerade so zum
			laufen gebracht wurde oder ob er liebevoll und durchdacht, strukturiert
			und wohlüberlegt entwickelt wurde. Genau dort liegt mein Interesse und
			meine Profession. Ich feile daran, meine Fähigkeiten stets weiter
			auszubauen.
		</p>
		<div class="content-header">Dir reichts noch nicht?</div>
		<p>
			Schau in meinem Blog vorbei, dort gibts auch Sachen für Leute, die keine
			Ahnung von Softwareentwicklung haben. Technisches Verständnis, eine
			Präferenz für verschachtelte Sätze und schwarzen Humor könnten Besuchern
			an der ein oder anderen Stelle helfen, die Seite nicht direkt zu
			schließen.
		</p>
		<div class="content-header" id="technisch">Technisches</div>
		<p>
			Bevor ich es vergesse: Diese Seite und mein Blog sind Experimente. Kernfrage:
			Mit wie wenig einigermaßen standardisierter Software kann ich eine Seite, 
			deren Inhalt einigermaßen aktuell aussieht, ausliefern?
		</p>
		<p>
			Ich habe also mittels php eine "Engine" gebaut, die mir die Quelldateien 
			zusammensucht und ausliefert. In einer einzigen Datei. Mit Favicon, mit CSS
			und natürlich dem entsprechenden Inhalt. Bei meinem Blog muss ich mich zur
			Erstellung des Inhaltes natürlich an einer Datenbank bedienen. Dort habe
			ich die Zeit, die der Webserver benötigt, um die Seite komplett zu rendern, 
			zusammen mit der Seitengröße in der Fußzeile jeder Seite angezeigt. 
		</p>
		<p>
			Ich bin mit dem Ergebnis zufrieden. Kein Nachladen von Bildern über Javascript.
			Keine Schriftarten, die ich den Besucher meiner Webseite von Google nachladen lasse.
			Optimierte oder gar keine Bilder. 
		</p>
		<p>
			Lust zu dem Experiment habe ich bekommen, weil ich immer öfter über Seiten stolpere, 
			deren einzige Aufgabe es ist, den Besuchern das Leben schwer zu machen. Werbung, die 
			nachlädt, Cookiebanner, Hunderte Scripts von anderen Servern, die Tracking ermöglichen, 
			Inhalte erst richtig darstellen oder gar für den Betrieb der Seite relevant sind.
			Nein danke. Mir gefällt das Internet besser ohne all das. Und es ist mit der 
			richtigen Motivation umsetzbar.
		</p>
		<div class="content-header">Kontakt</div>
		<p>Gerne über Xing oder Github.</p>
	</div>
	<footer>
		<a href="/impressum">Impressum & Datenschutz</a>
	</footer>
</body>

</html>
