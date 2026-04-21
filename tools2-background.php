
<?php 
  $page_title = "The Surgical Tray | The Stove Doc"; 
  include 'header.php'; 
?>

<section class="topheader-vid" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('handtoolsbits-lg.webp'); background-size: cover; background-position: center;">
    <div class="header-content">
        <img src="newstovedoc_logo.png" alt="The Stove Doc" class="hero-logo">
        <div class="tray-header-box">
            <h1>The Surgical Tray</h1>
            <div class="pill-text-unit">A quick successful procedure starts <span class="mobile-break"></span> with the right instruments.</div>
        </div>
    </div>
</section>

<div class="section-wrapper" style="margin-top: 0; padding-top: 5px;">
    
    <h2 style="margin-top: 0; margin-bottom: 5px;">The Surgical Setup</h2>

    <div style="display: flex; justify-content: center; margin-top: 0;">
        <img src="tooltray-button.webp" alt="The Stove Doc Master Surgical Tray" 
             style="width: 100%; max-width: 600px; height: auto; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.8);">
    </div>

    <div class="intro-block" style="margin-top: 15px;">
    <p style="font-style: italic; color: var(--ash); font-size: clamp(0.95rem, 4vw, 1.15rem); line-height: 1.3;">
        "Preparation is the difference between a <span class="mobile-break"></span>20-minutefix and a 2-hour headache."
    </p>
</div>
</div>
</div>
  <section class="section-wrapper">
    <div class="bg-tool-card" onclick="document.getElementById('zoom-extraction').showModal()">
        
        <img src="handtoolsbits-lg.webp" class="card-bg-image" alt="Background Tools">

        <div class="bg-tool-content">
            <h3 style="color: var(--flame); border-bottom: 1px solid #444; padding-bottom: 10px;">1. Hardware Extraction</h3>
            <ul style="list-style: none; padding: 0; margin-top: 15px; line-height: 1.8;">
                <li>✔️ <strong>Torx T20:</strong> The "Master Key" for Enviro and specialized panels.</li>
                <li>✔️ <strong>Allen (Hex) Set:</strong> Standard & Metric. Critical for auger motor set-screws.</li>
                <li>✔️ <strong>#2 Robertson:</strong> Square drive for Canadian and vintage hardware.</li>
                <li>✔️ <strong>Nut Drivers:</strong> 1/4", 5/16", 11/32", 3/8", 7/16", 1/2" + Metric.</li>
            </ul>
        </div>

        <dialog id="zoom-extraction" class="zoom-modal" onclick="event.stopPropagation(); this.close()">
            <img src="handtoolsbits-lg.webp" alt="Zoomed Hardware">
        </dialog>
    </div>
</section>
    <div style="text-align:center; margin: 60px 0;">
        <a href="telehearth_booking.php" class="cta-btn" style="font-size: 1.3rem; padding: 15px 40px; text-decoration: none; background: var(--flame); color: #fff; border-radius: 5px; font-weight: bold; text-transform: uppercase;">
            Book the Doctor Now
        </a>
    </div>

</div>

	
<?php include 'footer.php'; ?>
    


</body>
</html>