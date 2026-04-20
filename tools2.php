
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
        "Preparation is the difference between a<span class="mobile-break"></span>20-minutefix and a 2-hour headache."
    </p>
</div>
</div>
</div>
    <section class="section-wrapper">
    <div class="grid-2">
        
        <div class="info-card">
            <h3 style="text-align: left; border-bottom: 1px solid var(--flame); padding-bottom: 10px;">The Tool Chest</h3>
            <ul style="list-style: none; padding: 0; margin-top: 15px;">
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Multi-bit screwdriver (long)</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Needle nose pliers</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Drop light or headlamp</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Small inspection mirror</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ 1/4", 5/16", 11/32", 3/8", 7/16" Nut drivers</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Wire brush (stainless or brass)</li>
            </ul>
        </div>

        <div style="text-align: center;">
            <img src="handtoolsbits-lg.webp" alt="Surgical Tools" 
                 style="width: 100%; max-width: 450px; height: auto; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
        </div>

    </div>
</section>
    </div> <div class="tool-row">
        <div class="box-base look-solid">
            <h3 style="color:var(--flame); border-bottom: 2px solid #333; padding-bottom: 10px;">2. Vitals & Diagnostics (EKG)</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 15px;">
                Critical for when a <strong>gas fireplace pilot will not light</strong> or your pellet stove 'logic' stops communicating.
            </p>
            <ul style="list-style: none; padding: 0; line-height: 1.8;">
                <li><strong>Digital Multimeter:</strong> Your stethoscope for <strong>thermopile testing</strong> and millivolt readings. (True RMS preferred).</li>
                <li><strong>The Jumper Kit:</strong> Short wire with male spades on each end. A diagnostic "bypass" to see if a sensor has flatlined.</li>
                <li><strong>Wiring Tools:</strong> Standard cutters, strippers, and crimpers. Just don't butcher the job.</li>
                <li><strong>High-Temp Spares:</strong> A staged tray of butt connectors and Male/Female spade terminals for "transplants."</li>
                <li><strong>Non-Contact Probe:</strong> (Optional) Nice for a quick safety "pulse" check, but not strictly required for the procedure.</li>
            </ul>
        </div>
        <div class="tool-photo">
            <img src="electrical-sm.webp" alt="Stove Doc Tools" onclick="openDiagnostic('electrical-lg.webp')" style="cursor:zoom-in;">
        </div>
    </div> <div class="tool-row">
        <div class="box-base look-solid">
            <h3 style="color:var(--flame); border-bottom: 2px solid #333; padding-bottom: 10px;">3. Surgical Support Gear</h3>
            <p style="font-size: 0.9rem; color: #ccc; margin-bottom: 15px;">Maintaining a sterile field and performing "External Decontamination" on extracted components.</p>
            <ul style="list-style: none; padding: 0; line-height: 1.8;">
                <li><strong>LED Headlamp:</strong> Hands-free illumination is mandatory for deep cavity inspections.</li>
                <li><strong>Ash-Ready Shop Vac:</strong> With a small diameter hose attachment for reaching tight "night spots."</li>
                <li><strong>Surgical Brushes:</strong> A variety of sizes for "scrubbing" components before they go back in.</li>
                <li><strong>External Cleaning:</strong> A small high-volume blower or compressor (used outside) to clear dust bunnies from motors and electronics.</li>
                <li><strong>Surgical Drape:</strong> A heavy-duty drop cloth to protect the home and keep the field clean.</li>
                <li><strong>The Uplink:</strong> Strong 5G or Wi-Fi signal at the hearth so the Doctor has a clear "view" of the procedure.</li>
            </ul>
        </div>
        <div class="tool-photo">
            <img src="brush-sm.webp" alt="Stove Doc Tools" onclick="openDiagnostic('brush-lg.webp')" style="cursor:zoom-in;">
        </div>
    </div> <div style="text-align:center; margin: 60px 0;">
        <a href="telehearth_booking.php" class="cta-btn" style="font-size: 1.3rem; padding: 15px 40px; text-decoration: none; background: var(--flame); color: #fff; border-radius: 5px; font-weight: bold; text-transform: uppercase;">
            Book the Doctor Now
        </a>
    </div>

</div>

	
<?php include 'footer.php'; ?>
    
    <div id="tool-lightbox" style="display:none; position:fixed; z-index:9000; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.95); align-items:center; justify-content:center; cursor:pointer;" onclick="this.style.display='none'">
    <span style="position:absolute; top:20px; right:30px; color:#fff; font-size:50px; font-weight:bold; line-height:1;">&times;</span>
    <img id="lightbox-img" src="" style="max-width:90%; max-height:90%; border:2px solid var(--flame); border-radius:8px; box-shadow: 0 0 40px rgba(0,0,0,1);">
</div>

<script>
function openDiagnostic(imgUrl) {
    document.getElementById('lightbox-img').src = imgUrl;
    document.getElementById('tool-lightbox').style.display = 'flex';
}
</script>

</body>
</html>