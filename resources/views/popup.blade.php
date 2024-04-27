<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Alert</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />


    <style>
        .popup-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: none;
        }

        /* .popup-container .close-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        } */
    </style>
</head>

<body>
    {{-- <img
    src="{{'asset/img/icons8-check.gif'}}"
    class="img-fluid rounded-top"
    alt="123333333333333333"
/>
    <img
        src="https://icons8.com/icon/bE5mRAhk65Br/verified-account"
        class="img-fluid rounded-top"
        alt=""
    /> --}}
    <button id="popup-trigger" class="btn btn-primary">Show Popup</button>

    {{-- <div class="popup-container" id="popup"> --}}
        {{-- <span class="close-btn" onclick="closePopup()">&times;</span> --}}
        {{-- <h2>Are you Sure!</h2>
        <p>You want to update User Status!</p>
        <button
            type="button"
            class="close-btn btn btn-outline-primary" onclick="()"
        >
            Update
        </button>

        <button
        type="button"
        class="close-btn btn btn-outline-primary" onclick="closePopup()"
            >
        Close
    </button>
        
    </div> --}}

    
    <div class="popup-container" id="popup">
        <h2>Are you Sure!</h2>
        <p>You want to update User Status!</p>
        <div class="col-md-6" onclick="closePopup()">
            <span class="" id="update-btn">
                
            </span>
        </div>
        <button id="update-btn" type="button" class="btn btn-outline-primary" onclick="closePopup(true)">
            Update
        </button>
        <button type="button" class="btn btn-outline-primary" onclick="closePopup(false)">
            Close
        </button>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('#popup-trigger').click(function() {
                $('#popup').fadeIn();
            });
        });

        function closePopup() {
            $('#popup').fadeOut();
        }
    </script> --}}

    <script>
        $(document).ready(function() {
            $('#popup-trigger').click(function() {
                $('#popup').fadeIn();
            });
        });
    
        function closePopup(update) {
            if (update) {
                $('#update-btn').html('<img src="{{'asset/img/icons8-check.gif'}}" class="img-fluid rounded-top" alt="123333333333333333"/>');
            } else {
                $('#update-btn').html('Close');
            }
            $('#popup').fadeOut(1000);
        }
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
