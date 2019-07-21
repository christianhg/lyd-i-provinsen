<?php
	try 
	{  
		$dbh = new PDO('mysql:host=localhost;dbname=lydiprovinsen', 'root', 'root');  
		$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

		$sth = $dbh->query('SELECT * FROM broadcasts');
		$sth->setFetchMode(PDO::FETCH_OBJ); 

		while($row = $sth->fetch()) {  
		    echo $row->title . "\n";  
		    echo $row->date . "\n";  
		    echo $row->content . "\n";  
		} 

		$dhb = null;
	}  
	catch(PDOException $e) 
	{  
    	echo $e->getMessage();  
	}
?>
<article class="broadcast">
	<header>
		<h1>Anbefalinger for uge 4-5</h1>
		<a class="btn" href="http://studenterradio.dk/node/288" target="_blank">Lyt til programmet<span class="outgoing-link"></span></a>
	</header>

	<aside>
		<figure>
			<div class="img-container">
				<img src="media/images/yung.jpg" alt="yung">
			</div>
			<figcaption>Yung @ Sway</figcaption>
		</figure>
	</aside>

	<ol class="recommendations">
		<li class="recommendation">
			<span class="title"><a href="https://www.facebook.com/events/1410954302455648">D. 24 - Fredag: 4 Guys From The Future @ Radar<span class="outgoing-link"></span></a></span>
			<span class="description">Københavnerne, som udgav ét af årets bedste danske albums for 2013, spiller en smuk symbiose af eksperimenterende pop og støj.</span>
		</li>
		<li>
			<span class="title"><a href="https://www.facebook.com/events/411677172292017">D. 25 - Lørdag: Happy Hookers For Jesus, Bed Bugs og Yung @ Radar<span class="outgoing-link"></span></a></span>
			<span>De allerstærkste navne fra Århus’ undergrund. HHFJ og Bed Bugs har vi set et utal af gange. Og vi anbefaler dem meget gerne igen. Yung spår vi et stort 2014. Vidunder-drengen Mikkel Holm står bag og bør opleves live.</span>
		</li>
		<li>
			<span class="title"><a href="https://www.facebook.com/events/560776780675004">D.25 - Lørdag: SOL @ Backstage<span class="outgoing-link"></span></a></span>
			<span>De spillede til årets Doom Under Sonnesgade, hvor vi, her på redaktionen, gik derfra med en følelse af mismod samtidig med, at vi godt var klar over, at vi lige havde været vidne til den bedste koncert i 2013. Et must-see.</span>
		</li>
		<li>
			<span class="title"><a href="https://www.facebook.com/events/408187725975976">D. 28 - Tirsdag: TRAAMS @ Radar<span class="outgoing-link"></span></a></span>
			<span>Dét her bliver et rock-show. På den der Pavement-møder-Televesion-som-hænger-ud-med-Parquet Courts-agtige-måde.</span>
		</li>
	</ol>
</article>