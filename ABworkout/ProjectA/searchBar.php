<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- CKA-16/02/19-dd/mm/yy-Added Search bar -->
        <style>
                     
          * {
            box-sizing: border-box;
          }

          #searchBarTopnav a.active {
            background-color: #2196F3;
            color: white;
          }

          #searchBarTopnav {
            overflow: hidden;
             background-color: rgb(53, 52, 52);
           }

          #searchBarTopnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            /* padding: 14px 16px; */
            text-decoration: none;
            font-size: 17px;
          }
          
          form.searchbarForm input[type=text] {
            padding: 6px;
            font-size: 17px;
            border: none;
            float: left;
            width: 90%;
            background: #f1f1f1; 
            margin-top: 6px;
            border-radius:20px;
          }
          
          form.searchbarForm button {
            float: left;
            width: 10%;
            padding: 6px;
            /* background: #ddd; */
            color: white;
            font-size: 17px;
            border: none;
            border-left: none;
            cursor: pointer;
            border-radius:2px;
            margin-top: 8px;
            /* border: 1px solid #ccc;  */
          }
          
          form.searchbarForm button:hover {
            background: rgb(53, 52, 52);
          }
         
          form.searchbarForm::after {
            content: "";
            clear: both;
            display: table;
          }

          #searchBarTopnav input[type=text] {
            border: 1px solid #ccc;  
          }
          #searchBarTopnav .btn{
            border-radius:0%;  
          }
          #searchBarTopnav .btn {
            
          font-size: 17px;
          font-family: futura-pt,sans-serif;
          letter-spacing: .4px;
          height: 49px;
          width: 100%;
          display: block;
          text-align: center;
          text-decoration: none;
          color: white;
          letter-spacing: 2px;
          font-weight: 600;
          /* background-color: #fff; */
          border-style:solid;
          border-width: thin;
          border-color: rgb(100, 99, 99);
          border-top: 0px;
          border-bottom: 0px;
          cursor: pointer;
          padding:0px 30px 30px 30px;
          line-height: 50px;
          box-sizing: border-box;
          }
          </style>

<div id="searchBarTopnav" class="topnav">
    <a ><button class="btn active" id="MENN" onclick="openHeader(event, 'MEN')">MEN</button></a>
    <a><button class="btn" id="WOMENN" onclick="openHeader(event, 'WOMEN')" >WOMEN</button></a>
    <div class="search-container">
      <form class="searchbarForm" action="#" style="margin:auto;max-width:700px;border-radius:6px;">
        <input  type="text" placeholder="Search.." name="search">
        <!-- <i class="fa fa-search"></i> -->
        <button text="Search"  type="submit">
          <span  class="glyphicon">&#xe003;</span>
        </button>
      </form>
      
    </div>
</div>
  