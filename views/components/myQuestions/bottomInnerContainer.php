<div class="bottom-inner-container">
    <div id="question" class="submit-answer-container">
        <div class="title">
            <h3>Post a Question</h3>
        </div>
        <form class="form" action="/myQuestions" method="POST" enctype="multipart/form-data" >
            <div class="title-container">
                <div class="title-inner-container">
                    <label class="image-label" for="title">Title</label>
                    <input placeholder="What's your question about ? " type="text" name="title" style="height: 40px;" >
                </div>
                <?php if(array_key_exists("title",$errors)) echo "<p class='error' >$errors[title]</p>" ?>
            </div>
            <div class="textarea-container">
                <textarea placeholder="Ask your question : " class="text" name="content" id=""></textarea>
                <?php if(array_key_exists("content",$errors)) echo "<p class='error' >$errors[content]</p>" ?>
            </div>
            <div class="tags-container">
                <div class="inner-tags-container">
                    <label class="tags-label" for="tags">Tags</label>
                    <input class="tags-input" placeholder="Add your tags : (5 max) " type="text" name="tags" style="height: 40px;" >
                </div>
                <?php if(array_key_exists("tags",$errors)) echo "<p class='error' >$errors[tags]</p>" ?>
            </div>
            <div class="image-container">
                <p>You can also upload image for your qustion : </p>
                <label class="image-label btn button" for="image">Pick a image</label>
                <input class="image-input" id="image" name="image" type="file"  >
                <?php if(array_key_exists("image",$errors)) echo "<p class='error' >$errors[image]</p>" ?>
                <img class="image" src="<?php echo publicImage("image.png") ?>" alt="">
            </div>
            <div class="button-container">
                <button class="button" type="submit" >Submit</button>
            </div>
        </form>
    </div>
</div>