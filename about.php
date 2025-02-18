<?php

	//include header file
	include ('include/header.php');
?>
<link rel="stylesheet" href="css/style.css">

<!-- Full-Width About Us Section -->
<div style="margin: 0; padding: 0; background-color: #f4f4f4; width: 100%;">
    <div style="text-align: center; padding: 20px; background-color: #2c3e50; color: #ecf0f1;">
        <h1 style="font-size: 0rem; font-weight: bold; margin: 0;">About Us</h1>
    </div>
    <div style="padding: 80px;">
        <div class="row" style="display: flex; justify-content: space-evenly; text-align: center;">

            <!-- Vision Card -->
            <div style="flex: 1; margin: 20px; padding: 20px; border-radius: 10px; background-color: #ffffff; box-shadow: 0px 4px 10px rgba(0,0,0,0.1);">
                <h3 style="font-size: 1.8rem; color: #e74c3c; margin-bottom: 20px;">Our Vision</h3>
                <img src="img/vision.jpg" alt="Our Vision" style="width: 100%; height: auto; border-radius: 10px; max-width: 400px;">
                <p style="margin-top: 15px; font-size: 1.1rem; color: #2c3e50; line-height: 1.6;">
                    Empowering communities through education and health initiatives. Your support helps secure a brighter future.
                </p>
            </div>

            <!-- Goal Card -->
            <div style="flex: 1; margin: 20px; padding: 20px; border-radius: 10px; background-color: #ffffff; box-shadow: 0px 4px 10px rgba(0,0,0,0.1);">
                <h3 style="font-size: 1.8rem; color: #e74c3c; margin-bottom: 20px;">Our Goal</h3>
                <img src="img/bloodhand.jpg" alt="Our Goal" style="width: 100%; height: auto; border-radius: 10px; max-width: 400px;">
                <p style="margin-top: 15px; font-size: 1.1rem; color: #2c3e50; line-height: 1.6;">
                    To foster a culture of giving and create awareness about the importance of blood donation.
                </p>
            </div>

            <!-- Mission Card -->
            <div style="flex: 1; margin: 20px; padding: 20px; border-radius: 10px; background-color: #ffffff; box-shadow: 0px 4px 10px rgba(0,0,0,0.1);">
                <h3 style="font-size: 1.8rem; color: #e74c3c; margin-bottom: 20px;">Our Mission</h3>
                <img src="img/hand.jpg" alt="Our Mission" style="width: 100%; height: auto; border-radius: 10px; max-width: 400px;">
                <p style="margin-top: 15px; font-size: 1.1rem; color: #2c3e50; line-height: 1.6;">
                    Together! Let’s build a community where every individual has the resources in an emergency.
                </p>
            </div>

        </div>
    </div>
</div>

<?php
    // Include footer file
    include ('include/footer.php');
?>
