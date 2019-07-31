<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
     
            <!-- <link rel="stylesheet prefetch" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> -->
        <style>
            ul {
            list-style-type: none;
            }

            li {
            display: inline-block;
            }

            input[type="checkbox"][id^="cb"] {
            display: none;
            }

            #labelId {
            border: 1px solid #fff;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
            }

            #labelId:before {
            background-color: white;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid grey;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
            }

            #labelId img {
            height: 100px;
            width: 100px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
            }

            :checked + #labelId {
            border-color: #ddd;
            }

            :checked + #labelId:before {
            content: "✓";
            background-color: grey;
            transform: scale(1);
            }

            :checked + #labelId img {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            z-index: -1;
            }
        </style>

    </head>

    <body>
        <ul>
            <li><input type="checkbox" id="cb1" />
                <label id="labelId" for="cb1"><img src="http://lorempixel.com/100/100" /></label>
            </li>
            <li><input type="checkbox" id="cb2" />
                <label id="labelId" for="cb2"><img src="http://lorempixel.com/101/101" /></label>
            </li>
            <li><input type="checkbox" id="cb3" />
                <label id="labelId" for="cb3"><img src="http://lorempixel.com/102/102" /></label>
            </li>
            <li><input type="checkbox" id="cb4" />
                <label id="labelId" for="cb4"><img src="http://lorempixel.com/103/103" /></label>
            </li>
        </ul>  
           
    </body>
</html>