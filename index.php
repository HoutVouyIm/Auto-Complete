<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Complete</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/571a0c1ad3.js" crossorigin="anonymous"></script>
    <style>
        .my-button{
            background: transparent !important;
            border: 0 !important;
            outline: 0 !important;
        }
        .my-button .fa-solid{
            width: 25px;
            color: #555;
            font-size: 22px;
            cursor: pointer;
        }
        ::placeholder {
            color: #555; 
        }
        .result-box ul {
            border-top: 1px solid #999;
            padding: 15px 10px;
        }
        .result-box ul li {
            list-style: none;
            border-radius: 3px;
            padding: 15px 10px;
            cursor: pointer;
        }
        .result-box ul li:hover{
            background: #e9f3ff;

        }
        .result-box {
            max-height: 300px;
            overflow-y : scroll;
        }
    </style>
</head>
<body>
    <div class="search-box">
        <div class="row">
            <input type="text" name="" id="input-box" placeholder="Search anything"
            autocomplete="off">
            <button class="my-button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

        <div class="result-box"></div>
    </div>
<script src="autocomplete.js"></script>
</body>
</html>