
<form class="filter-container"  action="/search?searchData=<?php echo $searchData ?>&page=1" method="POST" >
    <div class="date-container">
        <div class="title-container">
            <h4>By Date</h4>
        </div>
        <div class="inner-form">
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="day" <?php if(isset($dateFilter) && $dateFilter === "day") echo "checked"; ?> />
                <label for="checkbox1">Today</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="week" <?php if(isset($dateFilter) && $dateFilter === "week") echo "checked"; ?>/>
                <label for="checkbox2">This Week</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="MONTH" <?php if(isset($dateFilter) && $dateFilter === "MONTH") echo "checked"; ?> />
                <label for="checkbox3">This Month</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="YEAR" <?php if(isset($dateFilter) && $dateFilter === "YEAR") echo "checked"; ?> >
                <label for="checkbox4">This Year</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="anytime" <?php if(isset($dateFilter) && $dateFilter === "anytime") echo "checked"; else if(!isset($dateFilter)) echo "checked" ?> >
                <label for="checkbox5">Anytime</label>
            </div>
        </div>
    </div>
    <div class="type-container">
        <div class="title-container">
            <h4>By Type</h4>
        </div>
        <div class="inner-form">
            <div class="checkbox-container">
                <input type="radio" name="checkboxType" value="Lesson" <?php if(isset($typeFilter) && $typeFilter === "Lesson") echo "checked"; ?> />
                <label for="checkbox1">Study</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxType" value="Question" <?php if(isset($typeFilter) && $typeFilter === "Question") echo "checked"; ?>  >
                <label for="checkbox3">Questions</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxType" value="anyone" <?php if(isset($typeFilter) && $typeFilter === "anyone") echo "checked"; else if(!isset($typeFilter)) echo "checked" ?> >
                <label for="checkbox3">Anyone</label>
            </div>
        </div>
    </div>
    <div class="language-container">
        <div class="title-container">
            <h4>By Language</h4>
        </div>
        <div class="inner-form">
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="html" <?php if(isset($languageFilter) && $languageFilter === "html") echo "checked"; ?>  >
                <label for="checkbox">HTML</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="css" <?php if(isset($languageFilter) && $languageFilter === "css") echo "checked"; ?> >
                <label for="checkbox">CSS</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="javascript" <?php if(isset($languageFilter) && $languageFilter === "javascript") echo "checked"; ?> >
                <label for="checkbox">JavaScript</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="c" <?php if(isset($languageFilter) && $languageFilter === "c") echo "checked"; ?> >
                <label for="checkbox">C</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="cpp" <?php if(isset($languageFilter) && $languageFilter === "cpp") echo "checked"; ?> >
                <label for="checkbox">CPP</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="python" <?php if(isset($languageFilter) && $languageFilter === "python") echo "checked"; ?> >
                <label for="checkbox">Python</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="anyone" <?php if(isset($languageFilter) && $languageFilter === "anyone") echo "checked";  else if(!isset($typeFilter)) echo "checked" ?>>
                <label for="checkbox">Anyone</label>
            </div>
        </div>
    </div>
    <input class="submit" type="submit" value="Filter">
</form>