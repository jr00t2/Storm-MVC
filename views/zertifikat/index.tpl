<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
    </head>
    <body>
     
        <?php include HOME . DS . 'includes' . DS . 'menu.inc.php'; ?>
         <div class="container-fluid">
        <h1>Participants</h1>
		<form method="post" action="filtered">
			<label for="date">Filter</label>
			<input type="date" name="date" />
			<input type="submit" name="filtern" value="filter anwenden" />
		</form>
        <?php 
            if ($teilnehmer):
            foreach ($teilnehmer as $t): ?>
 
            <article>
                <header>
                    <h1><a href="/news/details/<?php echo $t['id']; ?>"><?php echo $t['first_name']. ' ' .$t['second_name']; ?></a></h1>
                    <p><?php echo $t['class_name']; ?></p>
                    <p>Teilnahme am<time pubdate="pubdate"><?php echo $t['date']; ?></time></p>
                </header>
                <p><?php echo $t['beschreibung']; ?></p>
                <p><a href="/news/details/<?php echo $t['id']; ?>">Continue reading</a></p>
                <hr/>
            </article>
        <?php 
            endforeach;
            else: ?>
 
        <h1>Welcome!</h1>
        <p>We currently do not have any articles.</p>
 
        <?php endif; ?>
         </div>
    </body>
</html>