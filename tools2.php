
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

        <div style="height: 100%; width: 100%; position: relative;">
            <img src="handtoolsbits-lg.webp" alt="Tool Chest Thumbnail" 
                 class="thumb-fit zoom-clickable"
                 onclick="this.nextElementSibling.showModal()"
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
            
            <dialog onclick="this.close()" style="background: rgba(0,0,0,0.9); border: none; width: 100%; height: 100%; max-width: 100vw; max-height: 100vh; padding: 0;">
                <img src="handtoolsbits-lg.webp" style="max-width: 90vw; max-height: 90vh; border: 2px solid var(--flame); border-radius: 8px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); box-shadow: 0 0 50px rgba(255,102,0,0.4);">
                <p style="position: fixed; bottom: 20px; width: 100%; text-align: center; color: #fff; font-size: 0.9rem; opacity: 0.7;">Click anywhere to close</p>
            </dialog>
        </div>

    </div>
</section>
    <div style="text-align:center; margin: 60px 0;">
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
<section class="section-wrapper">
    <div class="grid-2">
        <div style="height: 100%; width: 100%; position: relative;">
            <img src="pilot.jpeg" alt="Electrical Tray Thumbnail" 
                 class="thumb-fit zoom-clickable"
                 onclick="this.nextElementSibling.showModal()"
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
            
            <dialog class="zoom-modal" onclick="this.close()">
                <img src="pilot.jpeg" alt="Electrical Zoom">
            </dialog>
        </div>

        <div class="info-card">
            <h3 style="text-align: left; border-bottom: 1px solid var(--flame); padding-bottom: 10px;">The Electrical Tray</h3>
            <ul style="list-style: none; padding: 0; margin-top: 15px;">
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Multimeter (with continuity)</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Wire strippers / crimpers</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Assorted spade & ring terminals</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Electrical tape</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Jumper wires (alligator clips)</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Contact cleaner</li>
            </ul>
        </div>
    </div>
</section>

<section class="section-wrapper">
    <div class="grid-2">
        <div class="info-card">
            <h3 style="text-align: left; border-bottom: 1px solid var(--flame); padding-bottom: 10px;">The Specialized Kit</h3>
            <ul style="list-style: none; padding: 0; margin-top: 15px;">
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Manometer (Gas Pressure)</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Digital thermometer</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Full set hex keys (Standard & Metric)</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Small socket set (1/4" drive)</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Gas leak detector solution</li>
            </ul>
        </div>

        <div style="height: 100%; width: 100%; position: relative;">
            <img src="handtoolsbits-lg.webp" alt="Specialized Kit Thumbnail" 
                 class="thumb-fit zoom-clickable"
                 onclick="this.nextElementSibling.showModal()"
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
            
            <dialog class="zoom-modal" onclick="this.close()">
                <img src="handtoolsbits-lg.webp" alt="Specialized Zoom">
            </dialog>
        </div>
    </div>
</section>

<section class="section-wrapper">
    <div class="grid-2">
        <div style="height: 100%; width: 100%; position: relative;">
            <img src="ul.jpg" alt="Deep Clean Thumbnail" 
                 class="thumb-fit zoom-clickable"
                 onclick="this.nextElementSibling.showModal()"
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
            
            <dialog class="zoom-modal" onclick="this.close()">
                <img src="ul.jpg" alt="Deep Clean Zoom">
            </dialog>
        </div>

        <div class="info-card">
            <h3 style="text-align: left; border-bottom: 1px solid var(--flame); padding-bottom: 10px;">The Deep Clean Bag</h3>
            <ul style="list-style: none; padding: 0; margin-top: 15px;">
                <li style="margin-bottom: 12px; color: var(--white);">✔️ HEPA Ash Vacuum</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Nylon & Brass wire brushes</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Stove glass cleaner</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Paint scraper / putty knife</li>
                <li style="margin-bottom: 12px; color: var(--white);">✔️ Shop rags or paper towels</li>
            </ul>
        </div>
    </div>
</section>

</body>S
</html>