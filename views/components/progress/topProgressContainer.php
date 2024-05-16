
<?php 
    $pertentage2 = 52;
?>

<div class="top-progress-container">
    <div class="top-inner-container">
        <h1>Total Progress</h1>
        <ul class="progress-container">
            <li class="progress-data">
                <div class="title">
                    <h2>Study</h2>
                </div>
                <div class="percentage-container">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $totalProgress ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress-text">
                        <?php echo $totalStudyProgress ?>%
                    </div>
                </div>
                <div class="text">
                    How much you have progress in study.
                </div>
            </li>
            <li class="progress-data">
                <div class="title">
                    <h2>Examples</h2>
                </div>
                <div class="percentage-container">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $pertentage2 ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress-text">
                        <?php echo $pertentage2 ?>%
                    </div>
                </div>
                <div class="text">
                    The ratio of your true/false.
                </div>
            </li>
            <li class="progress-data">
                <div class="title">
                    <h2>Total Achievements</h2>
                </div>
                <div class="percentage-container">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $totalAchivementProgress ?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress-text">
                        <?php echo $totalAchivementProgress ?>%
                    </div>
                </div>
                <div class="text">
                    How much you have achievement in total.
                </div>
            </li>
        </ul>
    </div>
</div>