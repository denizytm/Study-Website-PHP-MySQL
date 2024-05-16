<form class="filter-container" <?php echo "action=''/search?searchData=". $searchData ."&page=". $pageData ."'" ?> method="POST">
    <div class="date-container">
        <div class="title-container">
            <h4>By Date</h4>
        </div>
        <div class="inner-form">
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="day"/>
                <label for="checkbox1">Today</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="week"/>
                <label for="checkbox2">This Week</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="MONTH"/>
                <label for="checkbox3">This Month</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="YEAR">
                <label for="checkbox4">This Year</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="radioDate" value="anytime" checked>
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
                <input type="radio" name="checkboxType" value="Lesson"/>
                <label for="checkbox1">Study</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxType" value="example"/>
                <label for="checkbox2">Example</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxType" value="Question">
                <label for="checkbox3">Questions</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxType" value="anyone" checked>
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
                <input type="radio" name="checkboxLanguage" value="html">
                <label for="checkbox">HTML</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="css">
                <label for="checkbox">CSS</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="javascript">
                <label for="checkbox">JavaScript</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="c">
                <label for="checkbox">C</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="cpp">
                <label for="checkbox">CPP</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="python">
                <label for="checkbox">Python</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="anyone" checked>
                <label for="checkbox">Anyone</label>
            </div>
        </div>
    </div>
    <input class="submit" type="submit" value="Filter">
</form>