<?php
#NAME: ADRIANE LOUIS S. CADAWAN
#SECTION: CYB201
$Name = "Adriane Louis S. Cadawan";
$Title = "Levitating";
$Artist = "Dua Lipa";
$Mood = "Lively";
$ChorusCount = 4;
$Verse1Count = 1;
$Verse2Count = "2";
$NumOfVerses = $Verse1Count + $Verse2Count;
$Total = $ChorusCount + $NumOfVerses;


$Verbs = [
    "written" => "written",
    "wanted" => "wanted",
    "run" => "run",
    "take" => "take",
    "fell" => "fell",
    "stop" => "stop",
    "shine" => "shine",
    "like" => "like",
    "need" => "need",
    "met" => "met",
    "want" => "want",
    "believe" => "believe",
    "feel" => "feel",
    "see" => "see",
    "go" => "go",
    "do" => "do",
    "get" => "get",
    "fly" => "fly",
    "let" => "let",
    "watch" => "watch",
    "blast" => "blast",
    "dance" => "dance",
    "shining" => "shining",
    "levitating" => "levitating",
    "feeling" => "feeling",
    "renegading" => "renegading",
    "lost" => "lost"
    

];

$Nouns = [
    "night" => "night",
    "blast" => "blast",
    "galaxy" => "galaxy",   #0
    "ride" => "ride",     #1
    "premonition" => "premonition",  #2
    "rhythm" => "rhythm",   #3
    "music" => "music",    #4
    "life" => "life", #5
    "glitter" => "glitter",  #6
    "sky" => "sky",  #7
    "eyes" => "eyes",  #8
    "company" => "company",  #9
    "time" => "time",  #10
    "sugarboo" => "sugarboo",  #11
    "Milky Way" => "Milky Way",  #12
    "moonlight" => "moonlight",  #13
    "starlight" => "starlight",  #14
    "energy" => "energy",  #15
    "stars" => "stars",  #16
    "rocket" => "rocket",  #17
    "arse" => "arse"
];
#ARRAY FOR ADJECTIVES
$Adjectives = [
    
    "perfect" => "perfect",
    "all" => "all",
    "in" => "in",
    "far" => "far",
    "nothing" => "nothing",
    "forever" => "forever",
    "together" => "together",
    "away" => "away",
    "electric" => "electric"
];
#ARRAY FOR VERSE1
$Verse1 = [
    "If you wanna ".$Verbs["run"] ."away with me, I know a ". $Nouns["galaxy"] ." And I can take you for a ".$Nouns["ride"] .
    ". <br>I had a ".$Nouns["premonition"] ." that we ".$Verbs["fell"] ." into a ".$Nouns["rhythm"]. " Where the ".$Nouns["music"].
    " don't " .$Verbs["stop"]. " for ". $Nouns["life"]. "." . $Nouns["glitter"]. " in the sky, <br>" . $Nouns["glitter"]. " in my ".
    $Nouns["eyes"]. $Verbs["shining"]. " just the way I like. If you're " .$Verbs["feeling"]. " like you need a little bit of ".
    $Nouns["company"]. " you ". $Verbs["met"]. " me at the ". $Adjectives["perfect"]." ".$Nouns["time"]  
];

#ARRAY FOR PRECHORUS
$PreChorus = [
    "You ".$Verbs["want"]." me, I ".$Verbs["want"]." you, baby",
    "My ".$Nouns["sugarboo"].", I'm ".$Verbs["levitating"],
    "The ".$Nouns["Milky Way"].", we're " .$Verbs["renegading"]
];

#ARRAY FOR CHORUS
$Chorus = [
    "I got you,".$Nouns["moonlight"].", you're my ".$Nouns["starlight"],
    "I need you ".$Adjectives["all"]. $Nouns["night"].", come on, ".$Verbs["dance"]." with me ",
    " I'm ".$Verbs["levitating"],
    "I got you,".$Nouns["moonlight"].", you're my ".$Nouns["starlight"],
    "I need you ".$Adjectives["all"]. $Nouns["night"].", come on, ".$Verbs["dance"]." with me ",
    " I'm ".$Verbs["levitating"]
];
#ARRAY FOR POSTCHORUS
$PostChorus = [
    "You can ".$Verbs["fly"]." away with me tonight",
    "You can ".$Verbs["fly"]." away with me tonight",
    "Baby, let me ".$Verbs["take"]." you for a ".$Nouns["ride"],
    "Yeah, yeah, yeah, yeah, yeah ",
    "I'm " .$Verbs["levitating"],
    "You can ".$Verbs["fly"]." away with me tonight",
    "You can ".$Verbs["fly"]." away with me tonight",
    "Baby, let me take you for a ride",
    "Yeah, yeah, yeah, yeah, yeah "
];
#ARRAY FOR VERSE 2
$Verse2 = [
    "I ".$Verbs["believe"]." that you're for me, I ".$Verbs["feel"]." it ".$Adjectives["in"]." our energy",
    "I see us ".$Verbs["written"]. $Adjectives["in"]. "the ".$Nouns["stars"],
    "We can ".$Verbs["go"]." wherever, so let's ".$Verbs["do"]." it now or never, baby",
    "Nothing's ever, ever too" .$Adjectives["far"],
    "Glitter ".$Adjectives["in"]." the sky, glitter ".$Adjectives["in"]." our eyes",
    "Shining just the way we are",
    "I ".$Verbs["feel"]." like we're ".$Adjectives["forever"].", every time we ".$Verbs["get"]." ".$Adjectives["together"],
    "But whatever, let's ".$Verbs["get"]." ".$Verbs["lost"]." on Mars"
];
#ARRAY FOR BRIDGE
$Bridge = [
    "My love is like a ".$Nouns["rocket"].", ".$Verbs["watch"]." it ".$Nouns["blast"]." off",
    "And I'm ".$Verbs["feeling"]." so ".$Adjectives["electric"].", ".$Verbs["dance"]." my ".$Nouns["arse"]." off",
    "And even if I ".$Verbs["wanted"]." to, I can't ".$Verbs["stop"],
    "My love is like a ".$Nouns["rocket"].", ".$Verbs["watch"]." it ".$Nouns["blast"]." off",
    "And I'm ".$Verbs["feeling"]." so ".$Adjectives["electric"].", ".$Verbs["dance"]." my ".$Nouns["arse"]." off",
    "And even if I ".$Verbs["wanted"]." to, I can't ".$Verbs["stop"],
    "Yeah, yeah, yeah, yeah, yeah"
];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(https://4kwallpapers.com/images/walls/thumbs_3t/5366.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position:center;
            color: white;
        }

        p,h3,h1,h2 {
            text-align: center;
            color: white;
        }
        h3 {
            color: purple;
        }
    </style>
</head>
<body>
    <div>
        <h1><?= $Title?></h1>
        <h2>by <?= $Artist?></h2>
        <!-- VERSE 1 LYRICS -->
        <h3>Verse 1</h3>
        <p><?= $Verse1[0] ?></p>
    </div>



    <div>
        <!-- PRE-CHORUS LYRICS -->
        <h3>Pre Chorus</h3>
        <p><?= $PreChorus[0] ?></p>
        <p><?= $PreChorus[1] ?></p>
        <p><?= $PreChorus[2] ?></p>


        <!-- CHORUS LYRICS -->
        <h3>Chorus</h3>
        <p><?= $Chorus[0] ?></p>
        <p><?= $Chorus[1] ?></p>
        <p><?= $Chorus[2] ?></p>
        <p><?= $Chorus[3] ?></p>
        <p><?= $Chorus[4] ?></p>
        <p><?= $Chorus[5] ?></p>

        
        <!-- POST - CHORUS LYRICS -->
        <h3>Verse 2</h3>
        <p><?= $Verse2[0] ?></p>
        <p><?= $Verse2[1] ?></p>
        <p><?= $Verse2[2] ?></p>
        <p><?= $Verse2[3] ?></p>
        <p><?= $Verse2[4] ?></p>
        <p><?= $Verse2[5] ?></p>
        <p><?= $Verse2[6] ?></p>
        <p><?= $Verse2[7] ?></p>
        

        <!-- PRE-CHORUS LYRICS -->
        <h3>Pre Chorus</h3>
        <p><?= $PreChorus[0] ?></p>
        <p><?= $PreChorus[1] ?></p>
        <p><?= $PreChorus[2] ?></p>
            

        <!-- CHORUS LYRICS -->
        <h3>Chorus</h3>
        <p><?= $Chorus[0] ?></p>
        <p><?= $Chorus[1] ?></p>
        <p><?= $Chorus[2] ?></p>
        <p><?= $Chorus[3] ?></p>
        <p><?= $Chorus[4] ?></p>
        <p><?= $Chorus[5] ?></p>


        <!-- POST - CHORUS LYRICS -->
        <h3>Post - Chorus</h3>
        <p><?= $PostChorus[0] ?></p>
        <p><?= $PostChorus[1] ?></p>
        <p><?= $PostChorus[2] ?></p>
        <p><?= $PostChorus[3] ?></p>
        <p><?= $PostChorus[4] ?></p>
        <p><?= $PostChorus[5] ?></p>
        <p><?= $PostChorus[6] ?></p>
        <p><?= $PostChorus[7] ?></p>


        <!-- BRIDGE LYRICS -->
        <h3>BRIDGE</h3>
        <p><?= $Bridge[0] ?></p>
        <p><?= $Bridge[1] ?></p>
        <p><?= $Bridge[2] ?></p>
        <p><?= $Bridge[3] ?></p>
        <p><?= $Bridge[4] ?></p>
        <p><?= $Bridge[5] ?></p>
        <p><?= $Bridge[6] ?></p>
            

        <!-- PRE-CHORUS LYRICS -->
        <h3>Pre Chorus</h3>
        <p><?= $PreChorus[0] ?></p>
        <p><?= $PreChorus[1] ?></p>
        <p><?= $PreChorus[2] ?></p>

                
        <!-- CHORUS LYRICS -->
        <h3>Chorus</h3>
        <p><?= $Chorus[0] ?></p>
        <p><?= $Chorus[1] ?></p>
        <p><?= $Chorus[2] ?></p>
        <p><?= $Chorus[3] ?></p>
        <p><?= $Chorus[4] ?></p>
        <p><?= $Chorus[5] ?></p>


        <!-- POST - CHORUS LYRICS -->
        <h3>Post - Chorus</h3>
        <p><?= $PostChorus[0] ?></p>
        <p><?= $PostChorus[1] ?></p>
        <p><?= $PostChorus[2] ?></p>
        <p><?= $PostChorus[3] ?></p>
        <p><?= $PostChorus[4] ?></p>
        <p><?= $PostChorus[5] ?></p>
        <p><?= $PostChorus[6] ?></p>
        <p><?= $PostChorus[7] ?></p>
        
                
        <!-- CHORUS LYRICS -->
        <h3>Chorus</h3>
        <p><?= $Chorus[0] ?></p>
        <p><?= $Chorus[1] ?></p>
        <p><?= $Chorus[2] ?></p>
        <p><?= $Chorus[3] ?></p>
        <p><?= $Chorus[4] ?></p>
        <p><?= $Chorus[5] ?></p>
    </div>


    <h3>Stats & Ownership</h3>
    <p>Number of Times the Chorus was repeated: <?=$ChorusCount ?></p>
    <p>Number of Verses in the song: <?=$NumOfVerses ?></p>
    <p>Total: <?=$Total ?></p>
    <p>CREATED BY: <?=$Name ?></p>
</body>

</html>