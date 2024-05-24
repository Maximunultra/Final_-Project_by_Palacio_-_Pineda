<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Page</title>
    <style>
        body {
            background: url("https://img.freepik.com/free-vector/cartoon-illustration-small-dorm-room-dormitory-interior-inside-hostel-bedroom_1441-1836.jpg?size=626&ext=jpg&ga=GA1.1.2082370165.1715644800&semt=ais_user");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            
            border-radius: 28px;
background: #e0e0e0;
box-shadow:  5px 5px 10px #bebebe,
             -5px -5px 10px #ffffff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }
        form div {
            margin-bottom: 15px;
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="datetime-local"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            display: inline-block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: blue;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .edit{
            background-color: black;
            color: white;
        }
        button:hover {
            background-color: #0056b3;
        }
        #viewRecordsButton {
            margin-top: 10px;
            text-decoration: none;
            color: white;
            display: block;
            text-align: center;
        }
        .btn{
            display:flex;
            gap:5px;
        }
        .reset{
            background-color: red;
        }
    </style>
</head>
<body>
    <form id="myForm">
        <h1>Welcome Visitors</h1>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div>
            <label for="contact">Contact</label>
            <input type="text" name="contact" id="contact" placeholder="Contact">
        </div>
        <div>
            <label for="email">Email Address</label>
            <input type="text" name="email" id="email" placeholder="Email Address">
        </div>
        <div>
            <label for="date">Date</label>
            <input type="datetime-local" name="date" id="date" placeholder="Date">
        </div>
        <div>
            <label for="boarders">Boarders Name</label>
            <input type="text" name="boarders" id="boarders" placeholder="Boarders">
        </div>
        <div>
            <label for="room">Room no.</label>
            <input type="text" name="room" id="room" placeholder="Room no.">
        </div>
        <div class="btn">
            <button type="submit">Submit</button>
            <button type="Reset"class="reset">Reset</button>
            
            
        </div>
        <div><button class="edit" type="button" id="viewRecords">Edit</button> </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault();

                const formData = $(this).serialize();

                console.log(formData);

                $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: formData,
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error, xhr, status) {
                        console.log("Error!");
                    }
                });
            });

            // View Records button click handler
            $("#viewRecords").click(function() {
                window.location.href = "modify.php";
            });
        });
    </script>
</body>
</html>
