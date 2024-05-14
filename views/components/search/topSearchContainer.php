<div class="top-search-container">
    <div class="inner-top-search-container">
        <div class="top-inner-container">
            <div class="title-and-text">
                <h1 class="search-title" >Search</h1>
                <p class="search-text">You can use the filters on below for your search</p>
            </div>
            <div class="warning-text-container <?php if($searchData === "warning") {
            echo "warning";
            $searchData = "";
        } ?> ">
                <span>Warning : Please enter only characters or numbers</span>
            </div>
        </div>
        <div class="bottom-inner-container ">
            <form class="form-container" action="/search">
                <input value="<?php echo $searchData ?>" name="searchData" placeholder="Type here..." type="text">
                <button type="submit">Search<div class="dot"></div> </button>
            </form>
        </div>
    </div>
</div>