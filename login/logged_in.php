<?php

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body >

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />





  <div id="particles-js">
  	
		


		<div>

			<h1 style="font-family:monospace; font-size: 50px; color:orange; " >
			<u><i>Here Are the people who tried to contact you</i></u>
		</h1>
		  <table style="font-size: 30px; font-family:cursive;">
		    <tr style="font-size: 40px; color: black;">
		      <th> Name</th>
		      <th>Email-id</th>
		      <th>Subject</th>
		      <th>Message</th>
		    </tr>
		    <?php 

		    	$timezone = date_default_timezone_set("Asia/Kolkata");
				$conn = mysqli_connect("localhost", "root" , "" , "portfolio");
				if(mysqli_connect_errno())
				{
			    	echo "Failed to connect" . mysqli_connect_errno();
				}
		     
		        $sql='SELECT * FROM contact_me';
		        $query=mysqli_query($conn,$sql);
		        while($row=mysqli_fetch_array($query))
		        {
		            echo "<tr>
		                        <td> ".$row['name']."</td>
		                        <td> ".$row['email_id']."</td>
		                        <td> ".$row['subject']."</td>
		                        <td> ".$row['message']."</td>
		                    </tr>";   
		        }
		        
		    ?>
		  </table>
		</div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

  <script type="text/javascript">
  	
  	const particlesJSON = {
    "particles": {
        "number": {
            "value": 40,
            "density": {
                "enable": true,
                "value_area": 500
            }
        },
        "color": {
            "value": "#000000"
        },
        "shape": {
            "type": "polygon",
            "stroke": {
                "width": 2,
                "color": "#ff9800"
            },
            "polygon": {
                "nb_sides": 6
            },
            "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
            }
        },
        "opacity": {
            "value": 0.5,
            "random": true
        },
        "size": {
            "value": 10,
            "random": true
        },
        "line_linked": {
            "enable": false,
            "distance": 200,
            "color": "#ff5722",
            "opacity": 0.3,
            "width": 2
        },
        "move": {
            "enable": true,
            "speed": 5,
            "direction": "bottom",
            "random": true,
            "straight": true,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": [
                    "grab",
                    "bubble"
                ]
            },
            "onclick": {
                "enable": true,
                "mode": "push"
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 0.7
                }
            },
            "bubble": {
                "distance": 600,
                "size": 12,
                "duration": 1,
                "opacity": 0.8,
                "speed": 2
            },
            "repulse": {
                "distance": 400,
                "duration": 0.4
            },
            "push": {
                "particles_nb": 20
            },
            "remove": {
                "particles_nb": 10
            }
        }
    },
    "retina_detect": true
}

particlesJS("particles-js", particlesJSON)
  </script>

</html>
</body>
</html>
