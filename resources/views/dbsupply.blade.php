<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
        .top {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 80px;
                background: white;
        }
        .side {
                position: absolute;
                top: 0;
                left: 0;
                width: 16%;
                height: 100%;
                background: #2D349A;
        }
        .center {
                position: absolute;
                top: 12%;
                left: 16%;
                width: 84%;
                height: 88%;
                background: #4B74BB;
        }
        img {
                position: absolute;
                width: 350px;
                height: 60px;
                left: 40px;
                top: 10px;
        }
        .text{
        position: absolute;
        width: 350px;
        height: 170px;
        left: 30px;
        top: 80px;
        font-family: Arial;
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
        color: white;
    }
    .search-bar {
        position: absolute;
        width: 300px;
        height: 30px;
        left: 19%;
        top: 100px;
        background: #FFFFFF;
        border-radius: 5px;
        border: none;
        outline: none;
        padding-left: 10px;
    }
    .button-container {
        position: absolute;
        top: 103px;
        left: 60%;
        width: 40%;
    }
    .button1 {
        padding: 8px;
        width: 100px;
        border-radius: 5px;
        background: #FFFFFF;
        border: none;
        outline: none;
        margin-right: 20px; /* Add spacing to the right side */
    }
    .button2 {
        padding: 8px;
        border-radius: 5px;
        width: 100px;
        background: #FFFFFF;
        border: none;
        outline: none;
        margin-right: 20px; /* Add spacing to the right side */
    }
    .button3 {
        padding: 8px;
        border-radius: 5px;
        width: 100px;
        background: #FFFFFF;
        border: none;
        outline: none;
        margin-right: 20px;
    }
    .dropdown {
        position: absolute;
        top: 103px;
        left: 87.5%;
        width: 100px;
        height: 32px;
        background: #FFFFFF;
        border-radius: 5px;
        border: none;
        outline: none;
        padding-left: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }
    .dropdown-menu {
        position: absolute;
        top: 137px;
        left: 87.5%;
        width: 90px;
        background: #FFFFFF;
        border-radius: 5px;
        border: none;
        outline: none;
        padding: 10px;
        display: none;
    }
    .dropdown-menu-item {
        padding: 5px;
        cursor: pointer;
    }
    .dd{
        position: absolute;
        top: 160px;
        left: 2%;
        width: 140px;  
        height: 32px;
        border-radius: 5px;
        border: none;
        outline: none;
        padding-left: 10px;
        display: flex;  
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        color: white;
        font-family: Arial;
        font-style: normal;
        font-size: 18px;
        color: white;
    }
    .menu {
        position: absolute;
        top: 180px;
        left: 2.5%;
        width: 120px;
        border-radius: 5px;
        border: none;
        outline: none;
        padding: 10px;
        display: none;
        color: white;
        font-family: Arial;
        font-style: normal;
        font-size: 13px;
        color: white;
    }
    .menu-item {
        padding: 5px; 
        cursor: pointer;
        background-color: #2D349A;
        border: none;
    }
    .menu-item a {
        color: white;
        text-decoration: none;
    }
    body {
            font-family: Arial, sans-serif;
            
        }
        
    .container {
            margin-top: 4%;
            margin-left: 18%;
            margin-right: 2%;
            overflow: auto;
            
        }

        .card {
            width: 100%;
            border: 1px solid #ccc;
        }

        .card-header {
            background-color: #f8f9fa;
            padding: 15px;
            border-bottom: 1px solid #ccc;
            
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            position: relative; 
            z-index: 2; 
            border-radius: 10px;
            overflow: hidden; 
    
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
    
        }


        .dropdown {
                left: -400px; /* Adjust as needed */
                top: -1200px; /* Adjust as needed */
            }
            .dropdown {
                position: relative;
                left: 100px; /* Adjust as needed */
                top: -1000px; /* Adjust as needed */
            }
</style>
<body>

     
        <div class="side"></div>
        <div class="top"></div>
        <div class="center"></div>
        <img src="/images/PLMLogo.png" alt="plmlogo">
        <div class="text">
                <h4>PLM SUPPLIES </h4>
        </div>
        <input type="text" class="search-bar" placeholder="Search here">

        <div class="button-container">
                <button class="button1" >Add</button>
                <button class="button2">Edit</button>
                <button class="button3">Delete</button>
        </div>

    <div class="dropdown" onclick="toggleDropdown()">
        <span>Generate</span>
    </div>

    <div class="dropdown-menu" id="dropdownMenu">
        <div class="dropdown-menu-item">Option 1</div>
        <div class="dropdown-menu-item">Option 2</div>
        <div class="dropdown-menu-item">Option 3</div>
    </div>


     <div class="dd" onclick="Dropdown()">
        <span>Supplies System</span>
    </div>

    <div class="menu" id="downMenu">
        <div> <button class="menu-item"> <a href="/dbsupply"> Supplies Main </a></button></div>
        <div> <button class="menu-item"> <a href="/dbdelivered"> Delivered </a></button></div>
        <div> <button class="menu-item"> <a href="/dbissued"> Issued </a></button></div>
    </div>



    <div class="dropdown" style="position: relative; border:none;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none; ">
                <strong>Supplies System</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="top: 10px; left: 10px; background-color: transparent; border: none;">
                <a class="dropdown-item" href="#" style="color: white;">Main</a>
                <a class="dropdown-item" href="#" style="color: white;">Issued</a>
                <a class="dropdown-item" href="/supplies-delivered" style="color: white;">Delivered</a>
            </div>
        </div>














    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.style.display = dropdownMenu.style.display === "none" ? "block" : "none";
        }
        function Dropdown() {
            var downMenu = document.getElementById("downMenu");
           downMenu.style.display = downMenu.style.display === "none" ? "block" : "none";
        }
    </script>

</body>
</html>