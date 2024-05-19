<div class="studies-container">
    <div class="row-container">
        <div class="row gap-5 d-flex justify-content-center">
            <?php foreach ($studiesData as $studyData) : ?>
                <div class="col-sm-10 col-md-6 col-lg-2">
                    <div class="card <?php if($studyData['comingSoon']) echo "coming-soon" ?>">
                        <?php if($studyData['comingSoon']) : ?>
                            <div class='coming-soon-text'>Coming Soon...</div>
                        <?php endif ?>
                        <img class="card-img-top" src="<?php echo $studyData["image"]; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $studyData["title"]; ?></h5>
                            <p class="card-text"><?php echo $studyData["text"]; ?></p>
                        </div>
                        <div class="button-container <?php if($studyData['comingSoon']) echo "opacity-0"; ?>">
                            <?php if($studyData['comingSoon']) : ?>
                                <button class='btn'>Study<div class='circle'></div></button>
                            <?php else : $searchQuery = strtolower($studyData['title']); ?>
                                <a href='/study?title=<?php echo $searchQuery ?>&page=1' class='btn'>Study<div class='circle'></div></a>
                            <?php endif ?>
                        </div>
                    </div> 
                </div> 
            <?php endforeach ?>
        </div>
    </div>
</div>
