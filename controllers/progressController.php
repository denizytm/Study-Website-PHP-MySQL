<?php 
 
$userLanugageData = getStudyProgress($currentUser['userID']);

$total = 0;

foreach($userLanugageData as $data) $total+= strlen($data);

$totalStudyProgress = intval($total/86*100);

$isStarted = false;

foreach($userLanugageData as $data) if($data) $isStarted = true;

$htmlProgress = 0;
$cssProgress = 0;
$javascriptProgress = 0;
$cProgress = 0;
$cppProgress = 0;
$pythonProgress = 0;

$studies = [
    $htmlProgress,
    $cssProgress,
    $javascriptProgress,
    $cProgress,
    $cppProgress,
    $pythonProgress
];

$studiesProgress = getStudyProgress($currentUser['userID']);

$index = 0;

$finishCount = 0;

foreach($studiesProgress as $studyProgress) {
    if($studyProgress){
        $userProgress = count(explode("-",$studyProgress));
        $studies[$index] = intval($userProgress / 7 *100);
    }else $studies[$index] = 0;
    $index++;
}

foreach($studies as $study) {
    if($study >= 100) $finishCount ++;
}

$totalAchivement = 0;

$studiesData = [
        [   
            "image" => publicImage("study.png"),
            "title" => "Let's get started!",
            "text" => "Start your journey with any language",
            "isDone" => $isStarted
        ],
        [
            "image" => publicImage("study.png"),
            "title" => "Making some marks",
            "text" => "Finish 3 languages.",
            "isDone" => $finishCount >= 3
        ],
        [
            "image" => publicImage("study.png"),
            "title" => "My job here is done",
            "text" => "Finish all available languages.",
            "isDone" => $finishCount === 6
        ]
];
$questionsData = [
        [
            "image" => publicImage("solve.png"),
            "title" => "Just a hobby.",
            "text" => "Answer 5 people's questions.",
            "isDone" => $currentUser['totalAnswers'] >= 5
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "Part time job, maybe ?",
            "text" => "Answer 15 people's questions.",
            "isDone" => $currentUser['totalAnswers'] >= 15
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "A savior.",
            "text" => "Answer 30 people's questions.",
            "isDone" => $currentUser['totalAnswers'] >= 30
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "Curious..",
            "text" => "Post 5 questions.",
            "isDone" => $currentUser['totalPost'] >= 5
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "Okay, I want to learn everything.",
            "text" => "Post 15 questions.",
            "isDone" => $currentUser['totalPost'] >= 15
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "Okay, we are getting better...",
            "text" => "Solve 20 examples.",
            "isDone" => $currentUser['trueExample'] + $currentUser['falseExample'] >= 20
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "More practice...",
            "text" => "Solve 40 examples.",
            "isDone" => $currentUser['trueExample'] + $currentUser['falseExample'] >= 40
        ],
        [
            "image" => publicImage("solve.png"),
            "title" => "More !!",
            "text" => "Solve 100 examples.",
            "isDone" => $currentUser['trueExample'] + $currentUser['falseExample'] >= 100
        ],
];
$generalDatas = [
        [
            "image" => publicImage("library.png"),
            "title" => "Warming up...",
            "text" => "Get level 5.",
            "isDone" => $currentUser['level'] >= 5
        ],
        [
            "image" => publicImage("library.png"),
            "title" => "Getting serious...",
            "text" => "Get level 20.",
            "isDone" => $currentUser['level'] >= 20
        ],
        [
            "image" => publicImage("library.png"),
            "title" => "Ready for a job...",
            "text" => "Get level 50.",
            "isDone" => $currentUser['level'] >= 50
        ],
        [
            "image" => publicImage("library.png"),
            "title" => "Getting lighter..",
            "text" => "Get 50 views.",
            "isDone" => $currentUser['profileViews'] >= 50
        ],
        [
            "image" => publicImage("library.png"),
            "title" => "Heyy I'm here !",
            "text" => "Get 100 views.",
            "isDone" => $currentUser['profileViews'] >= 100
        ],
        [
            "image" => publicImage("library.png"),
            "title" => "Popular guy...",
            "text" => "Get 150 views.",
            "isDone" => $currentUser['profileViews'] >= 150
        ],
];

$allData = [$studiesData,$questionsData,$generalDatas];

$done = 0;

$count = 0;

foreach($allData as $arrayData){
    foreach($arrayData as $innerData){
        if($innerData['isDone']) 
            $done++;
        $count++;
    }
}

$totalAchivementProgress = intval($done / $count * 100);

require pages("progress.view.php");
