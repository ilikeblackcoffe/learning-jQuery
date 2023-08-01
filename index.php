
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="js/filter.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>portfolio project</title>
</head>
<body>

    <style>
        body {
    margin: 0;padding: 0;
}

#header{
    width: 100%;
    height: 56px;
    background-color: rgb(39, 39, 39);

}

#menu {
    color: rgb(255, 255, 255);
    width: 1024px;
    margin: 0 auto;
 
}

#menu>input {
   float: right;
   padding: 5px;
   margin-top: -2px;
}


h2{
    margin: 0;
}

#wrapper {
    width: 1024px;
    min-height: 500px;
    margin: 0 auto;
}

#portfolio{
    list-style: none;
}

#portfolio li{
    display: inline-block;
    margin: 15px 10px;
}

#portfolio li img:hover {
    cursor: pointer;
}

#overlay :hover {
    cursor: pointer;
}

#frame :hover {
    cursor: pointer;
}

#portfolio li img {
    width: 300px;
    height: 200px;
}

#frame{
    position: fixed;
    display: none;
    left: 50%;
    background-color: white;
    width: 700px;
    height: 500px;
    margin-left: -350px;
    top: 100px;
    padding-top: 20px;
    padding-bottom: 10px;
    margin-top: 15px;
}

#main{
    width: 660px;
    margin-left: 20px;
    height: 488px;
}

#overlay {
    width: 100%;
    height: 100%;
    position: fixed;
    background-color: black;
    opacity: 0.7;
    display: none;
}

#right img , #left img{
    width: 80px;
}

#frame-table {
    position: absolute;
    width: 660px;
    margin-left: 20px;
}

#right {
    float: right;
}

#right, #left {
    position: relative;
    top: 150px;
    opacity: .6;
}

#right:hover, #left:hover {
    opacity: .8;
}

#description {
    background-color: #fff;
    margin-top: -10px;
    padding-bottom: 10px;
}

#description p{
    margin-left: 20px;
    font-size: 18pt;
} 

#filter {
    list-style: none;
  
}

#filter li {
    display: inline;
    cursor: pointer;
    padding: 5px;
    margin-left: 6px;
}

#filter li:hover {
    text-decoration: underline;
}


    </style>

    <div id="header">
        <div id="menu">
            <h2>jQuery Portfolio</h2>
            <input id="search" type="text" placeholder="search..."/>
        </div>
    </div>
    <div id="overlay"></div>
    <div id="frame">
        <table id="frame-table">
            <tr>
                <td id="left">
                    <img src="images/images 2w.png" />
                </td>
                <td id="right">
                    <img src="images/2wewe.png" />
                </td>
            </tr>
        </table>
        <img src="" id="main"/>
        <div id="description">
            <p></p>
        </div>
    </div>
        <div id="wrapper">
            <ul id="filter">
                <li class="category">show all</li>
                <li class="category">city</li>
                <li class="category">ocean</li>
                <li class="category">bridge</li>
            </ul>
            <ul id="portfolio">
                <?php include_once("list.html") ?>
            </ul>
        </div>
    
</body>
</html>