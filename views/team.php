<div class="container-fluid">
<div class="row mb-3">        
            <?php echo TextBlock::GenerateTextBlock("Mechismu | Racing","A team of dedicated under graduate engineers who put in all their efforts and passion to achieve their one and only goal to make a performance car.","#","Are You Excited!","https://images.unsplash.com/photo-1499198116522-4a6235013d63");?>
    </div>
    <div class="row">
    </div>
    <div class="row mt-2">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class='col-md-10 col-lg-8'>
                    <?php require_once("./functions/SVG.php");?>
                    <?php echo Paragraph::GenerateParagraph("A team of dedicated under graduate engineers who put in all their efforts and passion to achieve their one and only goal to make a performance car.","Meet the Team");?>
                </div>
            </div>
            <?php echo Team::GenerateTeam($teams); ?>
        </div>       
    </div>
</div>
</div>