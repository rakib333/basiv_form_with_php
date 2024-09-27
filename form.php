<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-5">
        <form action="form_submit.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your name">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="my-2">
                <h4>Where did you like to go?</h4>
                <select class="form-select" aria-label="Default select example" name="region">
                    <option selected>-- Select any one --</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Afganistan">Afganistan</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                </select>
            </div>

            <div>
                <h4 class="mb-3">Prefered Season</h4>
                <div class="d-flex">

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="season" id="flexRadioDefault1" value="summer">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Summer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="season" id="flexRadioDefault2" value="winter">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Winter
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="season" id="flexRadioDefault3" value="spring">
                        <label class="form-check-label" for="flexRadioDefault3">
                            Spring
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="season" id="flexRadioDefault4" value="monson">
                        <label class="form-check-label" for="flexRadioDefault4">
                            Monson
                        </label>
                    </div>
                </div>
            </div>


            <div>
                <h4>Your Interests</h4>
                <div class="d-flex">

                    <div class="form-check pr-4">
                        <input class="form-check-input" name="interests[]" type="checkbox" value="Photography" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Photography
                        </label>
                    </div>
                    <div class="form-check pr-4">
                        <input class="form-check-input" name="interests[]" type="checkbox" value="Tracking" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Tracking
                        </label>
                    </div>
                    <div class="form-check pr-4">
                        <input class="form-check-input" name="interests[]" type="checkbox" value="Star Gazing" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Star Gazing
                        </label>
                    </div>
                    <div class="form-check pr-4">
                        <input class="form-check-input" name="interests[]" type="checkbox" value="Camping" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Camping
                        </label>
                    </div>
                </div>
            </div>


            <div class="my-2">
                <label for="exampleFormControlInput1" class="form-label">Number of participents</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="participents">
            </div>

            <div class="my-2">
                <label for="exampleFormControlTextarea1" class="form-label">Tell about your requirments</label>
                <textarea class="form-control" name="textarea" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input class="px-5 my-3 text-center bg-primary" type="submit" name="send" value="Send">
        </form>

    </div>
















    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>