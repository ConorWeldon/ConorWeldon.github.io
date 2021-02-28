alert("JavaScript file connected");
window.addEventListener("load", function () {
    console.log("load entered");
    var submitBtn = document.getElementById("submit"); 
    submitBtn.addEventListener("click", submitForm);
    Boolean(doSubmit = true);

    function submitForm(event) {
        console.log("submit form enetered");

        var titleData = document.getElementById("title").value;
        console.log(titleData);
        var subtitleData = document.getElementById("subtitle").value;
        console.log(subtitleData);
        var dateData = document.getElementById("date").value;
        console.log(dateData);
        var contentData = document.getElementById("content").value;
        console.log(contentData);
        var howlongreadData = document.getElementById("howlongread").value;
        console.log(howlongreadData);
        var featuredData = document.getElementById("featured").value;
        console.log(featuredData);
        var categoryData = document.getElementById("category").value;
        console.log(categoryData);
        var authorData = document.getElementById("author").value;
        console.log(authorData);




        if (titleData === '') {
            console.log("titleData Empty");
            titleError.innerHTML = "Please enter a title";

            document.getElementById("title").style.borderColor = "#f44242";

            document.getElementById("titleError").style.borderColor = "#f44242";

            doSubmit = false;
        } else {
            //name.style.borderColor = "#62f441";
            titleError.innerHTML = "&#10003";
            titleError.style.borderColor = "#62f441";
        }

        /*Secondary Headline*/
        if (subtitleData === '') {
            console.log("subtitleData Empty");
            subtitleError.innerHTML = "Please enter a subtitle"

            document.getElementById("subtitle").style.borderColor = "#f44242";

            document.getElementById("subtitleError").style.borderColor = "#f44242";

            doSubmit = false;

        } else {
            subtitle.style.borderColor = "#62f441";
            subtitleError.innerHTML = "&#10003";
            subtitleError.style.borderColor = "#62f441";
        }

        if (dateData === "") {

            dateError.innerHTML = "Please enter a date"

            document.getElementById("date").style.borderColor = "#f44242";

            document.getElementById("dateError").style.borderColor = "#f44242";

            doSubmit = false;
        } else {
            date.style.borderColor = "#62f441";
            dateError.innerHTML = "&#10003";
            dateError.style.borderColor = "#62f441";
        }


        if (contentData === "") {
            contentError.innerHTML = "Please enter a content for your Article"
            document.getElementById("content").style.borderColor = "#f44242";

            document.getElementById("contentError").style.borderColor = "#f44242";

            doSubmit = false;
        } else {
            content.style.borderColor = "#62f441";
            contentError.innerHTML = "&#10003";
            contentError.style.borderColor = "#62f441";
        }


        if (howlongreadData === "") {
            console.log("empty");
            howlongreadError.innerHTML = "Please enter the Article howlongread"
            document.getElementById("howlongread").style.borderColor = "#f44242";

            document.getElementById("howlongreadError").style.borderColor = "#f44242";

            doSubmit = false;
        } else {
            console.log("not empty");
            howlongread.style.borderColor = "#62f441";
            howlongreadError.innerHTML = "&#10003";
            howlongreadError.style.borderColor = "#62f441";
        }


        if (featuredData === "") {
            featuredError.innerHTML = "Please enter the featured"
            document.getElementById("featured").style.borderColor = "#f44242";

            document.getElementById("featuredError").style.borderColor = "#f44242";

            doSubmit = false;
        } else {
            featured.style.borderColor = "#62f441";
            featuredError.innerHTML = "&#10003";
            featuredError.style.borderColor = "#62f441";
        }


        if (categoryData === "") {
            categoryError.innerHTML = "Please enter a category for your Article"
            document.getElementById("category").style.borderColor = "#f44242";
            document.getElementById("categoryError").style.borderColor = "#f44242";

            doSubmit = false;
        } else {
            category.style.borderColor = "#62f441";
            categoryError.innerHTML = "&#10003";
            categoryError.style.borderColor = "#62f441";
        }
        
        if (authorData === "") {
            categoryError.innerHTML = "Please enter a author for your Article"
            document.getElementById("author").style.borderColor = "#f44242";
            document.getElementById("authorError").style.borderColor = "#f44242";

            doSubmit = false;
        } else {
            author.style.borderColor = "#62f441";
            authorError.innerHTML = "&#10003";
            authorError.style.borderColor = "#62f441";
        }
        console.log("test");
        console.log(event);

        if (doSubmit == false) {
            event.preventDefault();
        } else(doSubmit == true);
    }
});
