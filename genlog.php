<?php

session_start();
if(!isset($_SESSION['user'])){
header('location:login.html');
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <link rel="text/javascript" href="SCRIPT.JS">
    <link rel="shortcut icon" href="icon.ico">
    <title>Next Geneation</title>



</head>

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
        <h1>eSports and the next Generation</h1>
At the college level eSports are set to explode as more school-supported programs sprout up every day. But officially sanctioned high school esports are essentially nonexistent. Many teachers (and parents) still see video games as a waste of time. Teens looking for competitive team play could previously only find it in the unsung volunteer efforts of online leagues. They've been making do on their own for years, but they can't offer meeting spaces to practice and connect, or validation from adults and authority figures.

Yet in the last several months, a trio of local leagues have debuted that are fully affiliated with high schools and supported by education districts. Whether or not they're models other school districts can copy, they're certainly the most robust high school eSports associations in the US - if not the world.

Schools looking to build local leagues for minimal cost could emulate the Wisconsin High School eSports Conference (WHSEC), which quietly debuted back in October. It began as a passion project: Instructor Mike Dahle started an afterschool gaming club for his students at Arrowhead High School located west of Milwaukee. When they wanted to establish an eSports team, he made it happen and became their coach. They joined an online league, but its lack of structure (sometimes other teams simply wouldn't show up to matches) frustrated him and his students. So after speaking with like-minded teachers at other Wisconsin schools, he decided to create his own league. The WHSEC had its first season last fall with seven teams from all over the state and quickly grew to 15 teams in its second season.

"Once a state gets 80 schools participating, the [Wisconsin Interscholastic Athletics Association] will recognize it as a sport. That's my goal right now," Dahle told Engadget.

The WHSEC doesn't have national ambitions -- Dahle, who has since moved on from Arrowhead High School, remains its sole organizer. It's an extremely lean effort with no registration fee or membership dues, relying on teachers to volunteer as managers and coaches.

In fact, the minimal cost was a big draw for the local teams, especially since most aren't financially supported by their school. WHSEC is a great model for cash-strapped districts looking to start a league. So long as a school has five or six decent computers and volunteer coaches, they can compete on the cheap. Even the aging machines in most computer labs can run the free-to-play League of Legends. In fact, the game has such low system requirements that fans commonly joke it can run on a toaster. But even if schools have to buy whole new machines, which might cost between $600 and $800 each, it's still far cheaper than running a traditional sports program, which requires equipment, paid staff and venue rentals.

ESports teams don't even need to travel to compete. Which is a godsend for remote teams in northern Wisconsin that might not be able to afford the four-hour trips to visit other campuses

Like traditional athletics, competitive gaming requires teamwork, communication, performance and sportsmanship. Players develop critical thinking and discipline without the danger of serious injuries that can befall players in high-contact sports like football.


On the last day of January, five-person squads of high school students in Orange County, California sat in their school computer labs and loaded up League of Legends. They were ringing in the first games of the Orange County High School eSports League (OCHSEL). Win or lose, they'd be back in their chairs a week later for the next match in their two-month season.



The OCHSEL in Southern California is a dynamic effort. It was dreamed up by the well-resourced Samueli Foundation in summer 2017, but its organizers needed help. To create a holistic league, they brought on UC Irvine's eSports team and the university's computer science professors to consult, engaged the support of local school districts and created an advisory board of nearby university chancellors, deans and corporate CEOs. Its first season started January 31st, with 38 teams.

After the OCHSEL's first week of matches, principal Anthony Saba of the Samueli Academy charter high school discovered the league was attracting students who typically kept to themselves. They even started performing better to meet the league-wide 2.0 grade point average minimum.

"I'll tell you what it's done for our school is it's allowed us, and it's allowed me, to reach a subset of kids that until this were not engaged. They don't play sports. They don't go to a club. This is their outlet," Saba told Engadget. "We have kids now who've picked up their grades just because they want to be part of this thing."

It didn't take much to convince Saba that his school should join the OCHSEL when it was in development last fall. He admitted to being "a bit of a gamer" and regularly playing some eSports titles with his son.

Tiffany Bui, a life sciences teacher at Mission Viejo High School, was one of several faculty who volunteered to manage the school's team; she was chosen, she believes, because a female coach would draw in more women in a sport dominated by men. It worked, as Mission Viejo's team includes one of the only young women in the entire league. But her recruiting has run up against other obstacles. Players have said they'd love to join, but they had to focus on school. Others said their parents would never allow them to spend so much time playing video games.


But at the administrative level, the OCHSEL has wooed schools and educators for two reasons. One, it's developed infrastructure to help schools with zero eSports experience get a team competing in a couple of months. And two, it's deeply invested in bringing eSports into the classroom as a teaching tool. The educators partnered with the OCHSEL have created a curriculum built around eSports. Once approved by the state board, high schools in California can adopt it as year-long courses that fulfill English credits.

Instead of Catcher in the Rye, students will read Ready Player One, Orange County Department of Education's Tom Turner told Engadget. Replacing classics with video game-related literature is mostly for the ninth-grade course; the curriculum has different focuses for 10th, 11th and 12th grades. But all use eSports as a lens to teach other disciplines, like entrepreneurship, marketing and "hospitality tourism" -- aka, organizing tournaments. The curriculum culminates in a senior project: helping run the OC High School eSports League itself.

"I honestly think that eSports interest will ebb and flow, and what you have remaining are specific ideas that kids can get into," UCI Informatics professor and overseer of the OCHSEL curriculum Constance Steinkuehler said to Engadget. Maybe some kids will go into esports -- and that's great, she said -- but the league is an opportunity to teach them a lot more. As Steinkuehler sees it, her job is to figure out how to teach them how to understand data, comprehend complex systems and organize a community for league-level competition.

Schools running OCHSEL teams won't be required to implement it. But if you have a team on campus, Turner noted, it makes sense to go all in. Five to six schools participating in the OC league have already committed to using the curriculum once it's cleared. Even if they don't pick it up, student e-athletes will still have access to the league's other educational bonuses, like expert-led workshops on effective team playing, PC-building and healthy gaming.

Schools outside California that choose to adopt the curriculum will surely have to adapt it to meet their state's particular requirements. But once finished, it'll be the only scholastic material of its kind. The only other eSports-focused coursework Turner could find was for a sports health and nutrition class in Finland.

The curriculum will probably be the only way schools outside California can interact with the OCHSEL. The league isn't looking to sign up schools from other states just yet, though they may be looking to integrate others within the Golden State for its next season.



The EGF: From local beginnings to nationwide ambitions
On the East Coast, the Electronic Gaming Federation (EGF) is overseeing the debut of an eSports league in Connecticut that will serve as a testbed for a multistate endeavor. The organization had been running collegiate leagues for years and has experimented with a number of high school tournaments and programs. While the EGF starts pursuing its national ambitions for a US-spanning league, which will start with several mini-league pilot programs in other states this spring, the Connecticut eSports League (CTE) is establishing its own local competitive scene.

Soon after Clint Kennedy became an instructor at New London Science and Magnet High School, he started a gaming club for students, which quickly swelled to more than 90 teens. Soon they wanted more than relaxed game nights -- they wanted to compete. Kennedy helped them form a pair of teams for the online High School Starleague. Like Dahle's team, Kennedy's squads struggled with the lack of structure, and opponents regularly just wouldn't show up for a match. So he started working with other schools in eastern Connecticut that were interested in setting up their own eSports league.


While the OCHSEL is focusing on its formal curriculum for schools to adopt wholesale, the EGF plans to help teachers tailor eSports content to individual courses. This approach is more flexible and surgical than requiring a school to create and staff an entirely new class.

"[The programs] can range from using eSports in a traditional classroom setting, to using it as an example for stats and analytics or something like that, up to experiential learning," EGF founder Tyler Schrodt told Engadget.

And eventually, teens in EGF leagues could earn course credit for helping run them, which the organization had previously implemented in its collegiate league. But there's more to preparing students than coursework and interning. The EGF (and the OCHSEL, for that matter) make a point to teach students about jobs in eSports. Not every position in professional gaming means playing competitively. There are countless support jobs in front of (live match commentary) and behind the camera (running tournaments or leagues), plus related fields like game development and journalism.

Assuming all goes to plan, the EGF will start integrating schools outside Connecticut into its league next fall. Schools that wish to join will get evaluated by an EGF staff member, who determines if they're a good contender for the league. Primarily, the employee checks whether there are enough interested students to build a team and if the campus' computer and networking setup are up to snuff.

All this comes at a cost. The EGF is a for-profit business, and schools will be required to pay dues. Schrodt wouldn't give a firm price and said it will vary from school to school based on financial circumstances. "We're very careful to make sure that whatever we do in terms of the direct cost to a school is not prohibitive in terms of their ability to participate," Schrodt said.

Online leagues: Still a viable option
While some local programs have cropped up here and there over the years, it's hard to name one that survived. Even six months ago, the new local leagues outlined in this story were barely holding on. But as they're shoring up their programs and services, it might be some time before they reach other parts of the country. In the meantime, online leagues can still offer competition.

The biggest online league is arguably the High School eSports League, which started hosting tournaments in 2013 and partnered with the National Association of Collegiate eSports. It boasts 490 partner schools with 6,200 players. Unlike other leagues, the HSEL requires a faculty adviser and blessing from the school, along with a $5-per student, per month fee. For that expense, members get assistance setting up, managing and growing their on-campus club, along with access to the HSEL's five 6-8 week seasons per year. Those funds also help fund a prize pool that reached $70,000 in scholarships this year.

Other online associations vary in size and mission. Rhe High School Starleague serves between 3,000 to 4,000 students per season for teams that don't want to spend as much or don't want to involve their school. It requires only a $3 team registration fee to essentially cover server costs and relies on an all-volunteer staff. The Youth ESports of America (YEA) is a relative newcomer, with 50 chapters in schools nationwide that launched in May 2017. Most of its 15-person staff is made up of high schoolers, including its founder Justin Jia.


Even at its young stage, high school eSports is already facing existential questions, and the OCHSEL has a community board of advisers to debate them. One is whether the OCHSEL should provide a pot of reward money at the end of the season. Currently, it doesn't -- students participate for the thrill of competition, like other school sports -- but many eSports tournaments and pro leagues award top players and teams with money or gear. Skilled players may be torn between playing for their school and getting paid in professional competition.

"High school football, high school basketball, high school soccer -- you don't see prize pools for these. The championship and the recognition, that's it. [The OCHSEL] wants eSports to fit in this model," Jia, who sits on the OCHSEL's board, said. "If a team of teenage players is talented enough, they may skip their school's league and join an online one with hundreds of thousands of dollars at stake."

There are other issues high school eSports will have to address. One of the bigger ones is creating an inclusive environment for students of all genders, sexualities, religions and creeds -- something professional gaming continues to struggle with. Overwatch's pro league recently hired its first female player, and these amateur associations aren't doing a much better job at attracting women. The OCHSEL has just a handful; Kennedy's squad at New London High School has the only two female players in the CTE, though one of them is the team captain.

Everyone competing in the teen eSports scene will have to face these issues as more organizations join. Just last month, startup PlayVS announced it partnered with the NFHS (the high school equivalent of the NCAA) to found a nationwide league that launches this October. But the local associations are trying to change competitive gaming at a much simpler scale. Establishing eSports at the high school level could normalize video games for both teens and adults. Just like in traditional Little Leagues, introducing young gamers to structured competition teaches them ethical play and teamwork while parents connect and build a community -- one that sticks around to introduce the next generation to its favorite digital pastime.
        </div></div>
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