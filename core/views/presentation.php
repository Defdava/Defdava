<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Information</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container" style="margin-top:150px">
        <div class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="left-image">
                            <h1 id="presentation-title"><?php echo $presentationTitle; ?></h1>
                            <img src="assets/images/about-left-image.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-content">
                            <h4 id="explanation-title"><?php echo $explanationTitle; ?></h4>
                            <span id="explanation-text"><?php echo $explanationText; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setPresentationTitle(title) {
            document.getElementById('presentation-title').innerText = title;
        }

        function getPresentationTitle() {
            return document.getElementById('presentation-title').innerText;
        }

        function setExplanationTitle(title) {
            document.getElementById('explanation-title').innerText = title;
        }

        function getExplanationTitle() {
            return document.getElementById('explanation-title').innerText;
        }

        function setExplanationText(text) {
            document.getElementById('explanation-text').innerText = text;
        }

        function getExplanationText() {
            return document.getElementById('explanation-text').innerText;
        }

        // Example usage
        setPresentationTitle("New Presentation Video");
        setExplanationTitle("New Explanation & Presentation");
        setExplanationText("This is a new explanation text for the business presentation.");

        console.log(getPresentationTitle());
        console.log(getExplanationTitle());
        console.log(getExplanationText());
    </script>
</body>
</html>
