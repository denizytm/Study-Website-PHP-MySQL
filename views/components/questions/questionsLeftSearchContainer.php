
<form class="filter-container" <?php echo "action=''/questions?searchData=&page=". $pageData ."'" ?> method="POST">
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
    <div class="language-container">
        <div class="title-container">
            <h4>By Language</h4>
        </div>
        <div class="inner-form">
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="html">
                <label for="checkboxLanguage">HTML</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="css">
                <label for="checkboxLanguage">CSS</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="javascript">
                <label for="checkboxLanguage">JavaScript</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="c">
                <label for="checkboxLanguage">C</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="cpp">
                <label for="checkboxLanguage">CPP</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="python">
                <label for="checkboxLanguage">Python</label>
            </div>
            <div class="checkbox-container">
                <input type="radio" name="checkboxLanguage" value="anyone" checked>
                <label for="checkboxLanguage">Anyone</label>
            </div>
        </div>
    </div>
    <input class="submit" type="submit" value="Filter">
</form>
