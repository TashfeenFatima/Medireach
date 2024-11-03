<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="stylesheet.css">
        <style>
            .tab1 {
                tab-size:2;
            }
            .text-box {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                max-width: 800px; 
                margin: 0 auto; 
                box-shadow: 15px 15px 15px gray;
            }
        </style>
        <style>
body {
  background-image: url("image/bg2.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    </head>
    <body>
    <ul class="first-ul">
    <li style="float:left;
            border-right: 1px solid #4fd7b7"><B><div class="fnt">MediReach</div></B></a></li>
        <li style="float:right"><a class="active" href="home.php">Home</a></li>
        <li><a href="quickA.php">Urgent-Care</a></li>
        <li><a href="Ailments.php">Ailments</a></li>
        <li><a href="beauty.php">Beauty</a></li>
    </ul>
        <B>
            <h1 style="padding-left:20px;color:#04AA6D;text-shadow: 2px 2px 5px gray;text-align: center;">
            Quick Remedies to Get Rid of a Headache</h1>
            <div class="text-box">
        <div style="font-size: larger;">
        <?php
            echo '</br>';
            echo 'Headaches happen.' ;
            echo '</br>';
            echo 'The good news is there are several simple things you can do to ease the pain without a trip to the doctor.';
            echo '</br>'; 
            echo 'Try these tips and get to feeling better fast.';
        ?>
        <pre class="tab1">
            1. Try a Cold Pack <br>
            2. Use a Heating Pad or Hot Compress<br>
            3. Ease Pressure on Your Scalp or Head<br>
            4. Dim the Lights<br>
            5. Try Not to Chew<br>
            6. Hydrate<br>
            7. Get Some Caffeine<br>
            8. Practice Relaxation<br>
            9. Try Head Massage<br>
            10. Take Some Ginger<br>
            11. Use Meds in Moderation
        </pre>  
        <h2>When to Call Your Doctor?</h2>
        Get medical care right away for:
        <ul>
            <li>A headache that follows a head injury</li>
            <li>A headache along with dizziness, speech problems, confusion, or other neurological symptoms</li>
            <li>A severe headache that comes on suddenly</li>
            <li>A headache that gets worse even after you take pain medications</li>
        </ul>
        </B>
        </div>
    </body>
</html>
