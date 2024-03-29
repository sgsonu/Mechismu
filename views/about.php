<div class="container-fluid">
<div class="row mb-3">        
            <?php echo TextBlock::GenerateTextBlock("Mechismu | Racing","A team of dedicated under graduate engineers who put in all their efforts and passion to achieve their one and only goal to make a performance car.","#","Are You Excited!","https://images.unsplash.com/photo-1499198116522-4a6235013d63");?>
    </div>
    <div class="row">
        <div class="row justify-content-center text-center">
            <div class='col-md-10 col-lg-8'>
                <?php require_once("./functions/SVG.php");?>
                <?php echo Paragraph::GenerateParagraph("Formula SAE is a student design competition  organized by SAE International (previously known as the Society of Automotive Engineers, SAE). The concept behind Formula SAE is that a fictional manufacturing company has contracted a student design team to develop a small Formula-style race car. The prototype race car is to be evaluated for its potential as a production item. The target marketing group for the race car is the non-professional weekend autocross racer. Each student team designs, builds and tests a prototype based on a series of rules, whose purpose is both ensuring on-track safety (the cars are driven by the students themselves) and promoting problem solving.
The prototype race car is judged in a number of different events. These are mainly categorised into two types- Static and Dynamic. In addition to these events, various sponsors of the competition provide awards for superior design accomplishments. For example, best use of E-85 ethanol fuel, innovative use of electronics, recyclability, crash worthiness, analytical approach to design, and overall dynamic performance are some of the awards available. At the beginning of the competition, the vehicle is checked for rule compliance during the Technical Inspection. Its braking ability, rollover stability and noise levels are checked before the vehicle is allowed to compete in the dynamic events (Skidpad, Autocross, Acceleration, and Endurance).  Formula SAE encompasses all aspects of a business including research, design, manufacturing, testing, developing, marketing, management, and fund raising.","About FSAE");?>
            </div>
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="container">
            <?php echo Events::GenerateEvents($events); ?>
    </div>
</div>
<div class="row">
        <div class="row justify-content-center text-center">
            <div class='col-md-10 col-lg-8'>
                <?php echo Paragraph::GenerateParagraph("Formula Bharat is an engineering design competition in which students from colleges and universities all over the country, compete with a life-size Formula-style vehicle in areas of engineering design, overall cost, marketability and dynamic performance. The series replicates the global student Formula series hosted in around 11 countries per year.
The purpose of this competition is to encourage students to gain hands-on practical experience, while applying engineering theories studied in the classroom. In addition, students learn the art of management and teamwork, which are essential skills required in the ‘real-world’. These student teams are required to build a new vehicle from scratch year-after-year and seek sponsorship and donations by their own means to fund the project.
The Formula Bharat 2020 competition shall be taking place at the Kari Motor Speedway in Coimbatore from January 22 -26, 2020. The competition will focus on the combustion category and will be following an adaptation of the Formula Student 2019 Rules document.","Formula Bharat");?>
            </div>
        </div>
    </div>