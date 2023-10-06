<?php

session_start();
if(!isset($_SESSION['user'])){
header('location:login.html');
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <link rel="text/javascript" href="SCRIPT.JS">
    <link rel="shortcut icon" href="icon.ico">
    <title>Leagues</title>



</head>
      <style>
table {
    border-collapse: collapse;
    width: 100%;
    border-radius: 10px;
    
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2; color: black;}
tr
        {
            background-color: black;
            color: white;
        }

th {
    background-color: #FF0000;
    color: white;
}
        table tr:last-child td:first-child {
    border-bottom-left-radius: 10px;
}

table tr:last-child td:last-child {
    border-bottom-right-radius: 10px;
}
        
</style>

<body>
 <div class="header">
        <p align="center"><img src="banner.gif"></p>
  
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="aboutuslog.php">About Us</a>
    <a href="feedbacklogged.php">Feedback</a>
    
 <div style="float: right">
        <a href="http://192.168.43.5/phpmyadmin/db_structure.php?

server=1&db=esports" target="_blank">Logged in as - <?php echo 

$_SESSION['user']; ?> </a>
            <a href="logout.php">Logout</a>
    </div>
    </div>
    <div class="row">
    <div class="leftcolumn">
    <div class="card">
        <h1>Professional Leagues</h1>


In most esports, organized play is centered around the use of promotion and relegation to move sponsored teams between leagues within the competition's organization based on how the team fared in matches; this follows patterns of professional sports in European and Asian countries. However, with rising interest in viewership of esports, some companies sought to create leagues that followed the approach used in North American professional sports, in which all teams participate in a regular season of matches to vie for top standing as to participate in the post-season games. This approach is more attractive for larger investors, who would be more willing to back a team that remains playing in the eSport's premiere league and not threatened to be relegated to a lower standing.[59]

Blizzard Entertainment announced the Overwatch League, based on its Overwatch game, in 2016, with its inaugural regular season featuring twelve teams starting in January 2018. Players that get contracts to play on teams are guaranteed an annual salary and benefits, as well as sharing of the team's revenue and prize winnings; the first season had a total prize pool of US$3.5 million available, with US$1 million to the team winning in post-season.[60]

        Take-Two Interactive partnered with the National Basketball Association (NBA) to create the NBA 2K League, using the NBA 2K game series. It is the first esports league to be operated by a professional sports league, and the NBA sought to have a League team partially sponsored by each of the 30 professional NBA teams. Its inaugural season is set to start May 2018 with 17 teams.[61] Similarly, EA Sports and Major League Soccer (MLS) established the eMLS, an eSport league using EA's FIFA 18; in its inaugural season, 19 of the 23 MLS teams will manage teams for the eMLS.[62]</div><br>
        <table>
            <tr><td><b>NAME</b></td><td><b>DESCRIPTION</b></td><td><b>LOCATION</b></td><td><b>YEAR</b></td></tr>
            <tr><td>Apex</td><td>Super Smash Bros. tournament with side events for Pokemon, fighting games, etc</td><td> United States</td><td>2009-present</td></tr>
            <tr><td>Battle.net World Championship Series (BlizzCon)</td><td>StarCraft II (SC2), World of Warcraft (WoW), Overwatch and Hearthstone: Heroes of Warcraft world championship series run by Blizzard Entertainment</td><td>Worldwide</td><td>2012-present</td></tr>
            <tr><td>Call of Duty World League</td><td>A Call of Duty esports league that began in January 2016.[1] It is played on Call of Duty: Black Ops III for PlayStation 4 and acts as a qualifier for the pre-existing, annual Call of Duty Championship. There are two divisions of play, a Professional division and an Amateur division.</td><td>Australia,   Canada,  Europe,  Mexico,  New Zealand,  United States and other North American countries</td><td>2016-present</td></tr>
            <tr><td>Call of Duty World League</td><td>A Call of Duty esports league that began in January 2016.[1] It is played on Call of Duty: Black Ops III for PlayStation 4 and acts as a qualifier for the pre-existing, annual Call of Duty Championship. There are two divisions of play, a Professional division and an Amateur division.</td><td> Australia,   Canada,  Europe,  Mexico,  New Zealand,  United States and other North American countries</td><td>2016-present</td></tr>
            <tr><td>Capcom Cup</td><td>Street Fighter tournament sponsored by Capcom</td><td> United States</td><td>2013-present</td></tr>
            <tr><td>2013-present</td><td>Dota 2 and CS:GO competition across several cities in India. The prize pool for the 2018 edition is ₹1,00,00,000</td><td> India</td><td>2018-present</td></tr>
            <tr><td>Code Wars</td><td>Inter-school technology event organized by Code Warriors, includes gaming event which features many games including FIFA.</td><td> India</td><td>1997-present</td></tr>
            <tr><td>CompeteLeague</td><td>An amateur esports leagues circuit and broadcast provider since January 2016. Currently operates the largest amateur League of Legends circuit on European and North American servers</td><td> Canada,  Europe,  Mexico,  United States and other North American countries</td><td>2016-present</td></tr>
            <tr><td>Cybergamer</td><td>The premier esports leagues for the Oceania region.</td><td> Australia,   New Zealand and other Oceanic countries</td><td>2007-present</td></tr>
            <tr><td>Dew Arena</td><td>The world's largest computer festival, the event includes major esports competitions.</td><td> Sweden</td><td>1994-present</td></tr>
            <tr><td>Dragon Ball FighterZ World Tour</td><td>The Dragon Ball FighterZ World Tour is a global tournament series for the smash-hit fighting game by Bandai Namco Entertainment, Inc</td><td>Worldwide</td><td>2018-present</td></tr>
            <tr><td>eGames</td><td>Tournament between countries.</td><td>Worldwide</td><td>2016-present</td></tr>
            <tr><td>Electronic Sports League</td><td></td><td>Worldwide</td><td>2000-present</td></tr>
            <tr><td>Electronic Sports World Cup</td><td></td><td>Worldwide</td><td>2003-present</td></tr>
            <tr><td>European Gaming League</td><td>A competition that focuses on the United Kingdom and Europe</td><td> United Kingdom</td><td>2007-present</td></tr>
            <tr><td>Evolution Championship Series</td><td>The largest fighting games competition in the United States, the tournament is very important for competition in the genre.</td><td> United States</td><td>1996-present</td></tr>
            <tr><td>Exun</td><td>Inter-school technology event organized by Exun Clan; considered most prestigious Indian school tournament after Code Wars. Gaming event includes FIFA.</td><td> India</td><td>1992-present</td></tr>
            <tr><td>FIFA Interactive World Cup</td><td>The FIFA Interactive World Cup (FIWC) is an annual video gaming competition officially organized by FIFA and its presenting partner EA Sports.</td><td>Worldwide</td><td>2004-present</td></tr>
            <tr><td>GameBattles UK</td><td>GameBattles UK is a British esports League with daily competitions for major console games played in the UK is famous for its high value cash tournaments</td><td> Great Britain</td><td>2017-Present</td></tr>
            <tr><td>Global Starcraft II League</td><td>Originally holding exclusive rights to broadcast Starcraft II in South Korea, the tournament has remained central to the Starcraft II competitions</td><td> South Korea</td><td>2010-present</td></tr>
            <tr><td>Halo Championship Series</td><td>343 industries own esports league for the Halo series. The prize pool for the 2016 series is currently 2 million</td><td>Worldwide</td><td>2014-present</td></tr>
            <tr><td>Hero Pro League</td><td>Organised by Hero Entertainment and a flagship tournament for Crisis Action and King of Warship. Played mostly in China and South-East Asia.</td><td>Worldwide</td><td></td></tr>
            <tr><td>IMBA esports</td><td>IMBA esports is an upcoming Australian esports League, designed to foster talest and grow the esports community in Australia. Currently, the site contains a survey to gather responses so that the site can be best designed for the demands of the community</td><td> Australia</td><td>2017-present</td></tr>
            <tr><td>The International</td><td>The premier Dota 2 tournament, held annually. Due to the popular crowdfunding system set up for it, it has broken records for the largest esports prize pool every year of its existence</td><td>Worldwide</td><td>2011-present</td></tr>
            <tr><td>International e-Sports Federation</td><td>IeSF runs the only World Championships for official national teams.[2]</td><td>Worldwide</td><td>2009-present</td></tr>
            <tr><td>KO Fight Nights</td><td>This is an esports competition for the game title Streetfighter V with the finals held in New Delhi.[1]</td><td> India</td><td>2018-present</td></tr>
            <tr><td>League of Legends Champions Korea</td><td>The primary League of Legends competition in South Korea.</td><td> South Korea</td><td></td></tr>
            <tr><td>League of Legends India Champions Cup</td><td>An invitational tournament organized for the South Asian region.[3]</td><td>Bangladesh,  India,  Pakistan and  Sri Lanka</td><td>2018 - present</td></tr>
            <tr><td>League of Legends Master Series</td><td>These league was separated from the Garena Premier League.</td><td> Hong Kong,  Macau and  Taiwan</td><td>2015 - present</td></tr>
            <tr><td>League of Legends Pro League</td><td>The top level League of Legends competition in China.</td><td> China</td><td>2013 - present</td></tr>
            <tr><td>LeagueGaming.com NHL</td><td>EA Sports NHL 18 EASHL Competitive Free and Money League. For Xbox and Playstation</td><td> Canada,  Mexico, United States and other North American countries</td><td>2003-Present</td></tr>
            <tr><td>Major League Gaming</td><td>Among the largest competitions in the United States, the MLG has held competitions across the country featuring a variety of games.</td><td> United States</td><td>2002-present</td></tr>
            <tr><td>Military Gaming League</td><td>The only US military and veteran exclusive esport league. Competitions are held online, and across bases.</td><td> United States</td><td>2018-present</td></tr>
            <tr><td>Neo Geo World Tour</td><td>The Neo Geo World Tour is an official global tournament series supported by SNK, for popular fighting games including The King of Fighters XIV and The King of Fighters '98. There are also side tournaments and "Score Attack" challenges for classic Neo Geo titles like Metal Slug, Blazing Star, Fatal Fury Special, etc.</td><td>Worldwide</td><td>2018-present</td></tr>
            <tr><td>NGL Summer Tournament</td><td>This is a Bangladeshi esports tournament organized by the National Gaming League for the game League of Legends.</td><td> Bangladesh</td><td>2018-present</td></tr>
            <tr><td>NGS Championship (previously Indian esports Championship)</td><td>One of the most prestigious gaming events in India, the NSG Championship features CS:GO, Dota 2, Paladins, Rocket League and FIFA. The prize pool for the 2018 edition is ₹50,00,000</td><td> India</td><td>2016-present></td></tr>
            <tr><td>North East Championship</td><td>This is a month long-tournament with game titles including Clash Royale, Dota 2 and FIFA. The aim of the tournament is to promote esports in the Northeastern region of India which has been underrepresented in the Indian esports space.[1]</td><td>India</td><td>2018-present</td></tr>
            <tr><td>Overwatch League</td><td>Premier professional esports league for Overwatch. Competition and team structure mimics North American sports league with city-based teams and regular season play</td><td> United States</td><td>2017-present</td></tr>
            <tr><td>SEA Tour (previously Garena Premier League)</td><td>A League of Legends competition held in Southeast Asia.</td><td> Indonesia,  Malaysia,   Philippines,  Singapore and  Thailand</td><td>2015-present</td></tr>
            <tr><td>SMITE World Championship</td><td>The flagship tournament for SMITE, a third-person MOBA developed by Hi-Rez Studios. The tournament (currently) involves 14 teams from 6 regions and US $1 million in prize money.</td><td> United States</td><td>2014-present</td></tr>
            <tr><td>Taiwan Excellence Gaming Cup</td><td>The Taiwan Excellence Cup has been one of the most consistent esports tournaments in India and features the games Dota 2 and CS:GO.[1]</td><td> India</td><td>2013-present</td></tr>
            <tr><td>U Cypher</td><td>Indian esports competition for Dota 2, CS:GO, Tekken and Real Cricket. The prize pool in the first edition was ₹51,00,000</td><td>India	</td><td>2017-present</td></tr>
            <tr><td>2017-present</td><td>UMG Gaming has been holding gaming events mainly for the Call of Duty franchise since 2012, it has become a staple event for teams and events are considered major events where all professional teams compete.</td><td> United States</td><td>2012-present</td></tr>
            <tr><td>Wargaming.net League</td><td>Tournament flagships from World of Tanks.</td><td>Worldwide</td><td>2013-present</td></tr>
            <tr><td>Esl India premiership</td><td>First Indian esports event with pool of 7000$ took place in Mumbai, India </td><td> India</td><td>2015-present</td></tr>
            
        </table></div>

             <div class="rightcolumn">
   
    <div class="card">
      <h3>Sub-Directories</h3>
    
<div class="link"><a href="aboutlog.php">About eSports</a></div><br>
        <div class="link"><a href="hislog.php">History</a></div><br>
        <div class="link"><a href="nameslog.php">Popular Names</a></div><br>
        <div class="link"><a href="leagueslog.php">Professional Leagues</a></div><br>
        <div class="link"><a href="genlog.php">Next Generation</a></div><br>
    </div>
    </div>
    </div>
    <div class="footer">
This website was made as a project to test the skills of the developer.
        </div>
</body>
    
</html>