<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel links update</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	<center>
<font size="10">Edit links and press Replace</font>
	    <form action="../public/insert" method="post">
	<table border="2">
	<tr>
	<td>
	<table>
		<tr>
		<?php echo e(csrf_field()); ?>

		<td>Title1: </td>
		<td><input type="text" name="title1" value="Jelastic PaaS"></td>
		</tr>
                <tr>    
                <td>Url1: </td>
                <td><input type="text" name="url1" value="https://jelastic.com"></td> 
                </tr>   
                <tr>    
                <td>Description1: </td>
                <td><input type="text" name="description1" value="Jelastic web-site"></td> 
                </tr>   
        </table>
	</td>
	<td>
	<table>
		<tr>
		<td>Title2: </td>
		<td><input type="text" name="title2" value="Jelastic Docs"></td>
		</tr>
                <tr>    
                <td>Url2: </td>
                <td><input type="text" name="url2" value="https://docs.jelastic.com"></td> 
                </tr>   
                <tr>    
                <td>Description2: </td>
                <td><input type="text" name="description2" value="Jelastic Docs"></td> 
                </tr>   
        </table>
        </td>
	<td>
	<table>
		<tr>
		<td>Title3: </td>
		<td><input type="text" name="title3" value="Jelastic Blog"></td>
		</tr>
                <tr>    
                <td>Url3: </td>
                <td><input type="text" name="url3" value="https://jelastic.com/blog"></td> 
                </tr>   
                <tr>    
                <td>Description3: </td>
                <td><input type="text" name="description3" value="Jelastic Blog"></td> 
                </tr>   
        </table>
        </td>
	<td>
	<table>
		<tr>
		<?php echo e(csrf_field()); ?>

		<td>Title4: </td>
		<td><input type="text" name="title4" value="Cloud Scripting"></td>
		</tr>
                <tr>    
                <td>Url4: </td>
                <td><input type="text" name="url4" value="http://docs.cloudscripting.com"></td> 
                </tr>   
                <tr>    
                <td>Description4: </td>
                <td><input type="text" name="description4" value="Cloud Scripting"></td> 
                </tr>   
        </table>
	</td>
	<td>
	<table>
		<tr>
		<td>Title5: </td>
		<td><input type="text" name="title5" value="Jelastic JPS"></td>
		</tr>
                <tr>    
                <td>Url5: </td>
                <td><input type="text" name="url5" value="https://github.com/jelastic-jps"></td> 
                </tr>   
                <tr>    
                <td>Description5: </td>
                <td><input type="text" name="description5" value="Github repository"></td> 
                </tr>   
        </table>
        </td>
        </tr>
	</table>
            <br><tr><input type="submit" name="submit" value="Replace"></tr>
	</form>
	</center>

	
    </body>
</html>

<?php /**PATH /var/www/webroot/ROOT/Qrcodes/resources/views/insertForm.blade.php ENDPATH**/ ?>